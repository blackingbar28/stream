<?php

namespace App\Helpers;

use Image;

class ImageHelper
{

    /**
     * Config image
     *
     * @var array
     */
    protected $config;

    /**
     * Type config
     *
     * @var string
     */
    protected $type;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        $this->config = config('uploadImage');
    }

    /**
     * Get config file.
     *
     * @param string $option Option
     *
     * @return string|array
     */
    public function getConfig($option = null)
    {
        if ($option === null) {
            return $this->config;
        }

        return array_get($this->config, $option);
    }

    /**
     * Set type.
     *
     * @param string $type Type config
     *
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Upload image.
     *
     * @param \Symfony\Component\HttpFoundation\File\File $file File
     * @param int                                         $id   Id
     * @param string                                      $type Type to get config
     *
     * @return string
     */
    public function upload($file, $id = null, $type = [])
    {
        $this->type = $type;
        $config = $this->getConfig($type);
        $pathUpload = $this->createPath(sprintf('%s%s', $config['path'], $id));
        return $this->processUpload($file, $pathUpload);
    }

    /**
     * Resize Image.
     *
     * @param array  $sizes    Size to resize image
     * @param Object $image    Image
     * @param string $filename File name
     * @param string $path     Path to resize
     *
     * @return bool
     */
    public function resizeImage($sizes, $image, $filename, $path)
    {
        foreach ($sizes as $size) {
            $image->backup();
            $constraint = null;
            if (empty($size['height']) || $size['height'] == 'x') {
                $size['height'] = 'x';
                $constraint = function ($constraint) {
                    $constraint->aspectRatio();
                };
            }
            //resize image to fit given
            $image->resize($size['width'], $size['height'], $constraint);
            $image->save(sprintf('%s/%sx%s_%s', $path, $size['width'], $size['height'], $filename));
            $image->reset();
        }
        return true;
    }

    /**
     * Process upload.
     *
     * @param \Symfony\Component\HttpFoundation\File\File $file File
     * @param string                                      $path Path file
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    public function processUpload($file, $path)
    {
//        try {
            $image = Image::make($file);
            $filename = $this->generateHash($file);
            if ($this->config[$this->type]['resize']) {
                $this->resizeImage($this->getSizes(), $image, $filename, $path);
            }
//        } catch (\Exception $ex) {
//            throw new \RuntimeException(trans('messages.upload.upload_error'));
//        }

        $image->save(sprintf('%s/%s', $path, $filename));
        return $filename;
    }

    /**
     * Return size(width and height) of image type upload.
     *
     * @return array|boolean
     */
    public function getSizes()
    {
        foreach ($this->config[$this->type]['resize'] as $size) {
            $def = explode('x', $size);
            if (count($def) >= 2) {
                $sizes[] = array('width' => $def[0], 'height' => $def[1]);
            }
        }
        return $sizes;
    }

    /**
     * Create path to save document.
     *
     * @param string $paths Path save
     *
     * @return string
     */
    protected function createPath($paths)
    {
        if (!is_array($paths)) {
            if (!\File::exists(sprintf(storage_path($paths)))) {
                \File::makeDirectory(storage_path($paths), $mode = 0777, true, true);
            }
        }

        return storage_path($paths);
    }

    /**
     * Calculate hash of source contents.
     *
     * @param File $file File
     *
     * @return string
     */
    private function generateHash($file)
    {
        $ctx = hash_init('md5');
        // We don't need to read the file contents if the source has a path
        if ($file->path()) {
            hash_update_file($ctx, $file->path());
        } else {
            hash_update($ctx, $file->contents());
        }
        hash_update($ctx, microtime());

        return sprintf('%s.%s', hash_final($ctx), $file->getClientOriginalExtension());
    }

    /**
     * Get image by type.
     *
     * @param string $fileName File name
     * @param int    $id       Id
     * @param string $type     Type
     * @param string $size     Size image
     *
     * @return string
     */
    public function getImage($fileName, $id, $type, $size = '')
    {
        $format = empty($size) ? '%s%s/%s%s' : '%s%s/%s_%s';

        $filePath = sprintf($format, $this->config[$type]['path'], $id, $size, $fileName);
        $rootPath = sprintf('%s%s/%s', $this->config[$type]['path'], $id, $fileName);
        $imgPath = $this->config['no_image'];
        if (!empty($fileName)) {
            if (\File::exists($filePath)) {
                $imgPath = $filePath;
            } elseif (in_array($size, $this->config[$type]['resize'])) {
                list($width, $height) = explode('x', $size);
                Image::make($rootPath)->resize($width, $height)->save($filePath);
                $imgPath = $filePath;
            }
        }

        return asset($imgPath);
    }

    /**
     * Delete images.
     *
     * @param string $fileName File Name
     * @param string $type     Type File
     *
     * @return bool
     * @author
     */
    public function deleteImage($fileName, $type)
    {
        $this->type = $type;
        $sizes = $this->getSizes();
        foreach ($sizes as $size) {
            if (empty($size['height']) || $size['height'] == 'x') {
                $size['height'] = 'x';
            }
            try {
                \File::delete(storage_path(sprintf('%s/%sx%s_%s', $this->getConfig($type)['path'], $size['width'], $size['height'], $fileName)));
            } catch (\Exception $e) {
                throw new \RuntimeException(trans('messages.upload.delete_error'));
            }
        }
        return \File::delete(storage_path(sprintf('%s/%s', $this->getConfig($type)['path'], $fileName)));
    }
}
