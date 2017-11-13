@extends('layouts.master')
@section('title')
<title>livestream bundesliga - fußball bundesliga live stream | Hdfootball.de</title>
<meta name='description' content='alle bundesliga spiele anschauen on Hdfootball.de for free' />
<meta name="keywords" content='fußball bundesliga live, fussball live tv, live tv fussball, fußball live im tv, fußball heute im tv, fussball im tv, bundesliga livestream net, fußball heute, fußball live heute, fußball heute live, fußball bundesliga heute, fußball heute abend, fußball live stream kostenlos heute, fußball heute live stream, champions league live stream kostenlos heute, fußball live gucken,live übertragung fußball heute, live streaming fußball, bundesliga stream ru'/>
@endsection
@section('content')

<div class="site-nav">
    <nav class="navbar is-primary">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">

                <img src="https://bulma.io/images/bulma-logo-white.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navMenuColorprimary-example">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- nav content -->
        <div id="navMenuColorprimary-example" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
                <a class="navbar-item" href="https://bulma.io/">
                    Home
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="bd-tw-button button" data-social-network="Twitter" data-social-action="tweet" data-social-target="http://localhost:4000" target="_blank" href="https://twitter.com/intent/tweet?text=Bulma: a modern CSS framework based on Flexbox&amp;hashtags=bulmaio&amp;url=http://localhost:4000&amp;via=jgthms">
                                <span class="icon">
                                    <i class="fa fa-twitter"></i>
                                </span>
                                <span>
                                    Tweet
                                </span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-primary" href="https://github.com/jgthms/bulma/archive/0.5.1.zip">
                                  <span class="icon">
                                    <i class="fa fa-download"></i>
                                  </span>
                                <span>Download</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end nav content -->
    </nav>
</div>

<div class="container content-wrap">
    <div class="site-hd">
        <nav class="breadcrumb" aria-label="breadcrumbs">
            <ul>
                <li><a href="#"><span class="icon is-small"><i class="fa fa-home"></i></span><span>Bulma</span></a></li>
                <li><a href="#"><span class="icon is-small"><i class="fa fa-book"></i></span><span>Documentation</span></a></li>
                <li><a href="#"><span class="icon is-small"><i class="fa fa-puzzle-piece"></i></span><span>Components</span></a></li>
                <li class="is-active"><a href="#" aria-current="page"><span class="icon is-small"><i class="fa fa-thumbs-up" aria-hidden="true"></i></span><span>Breadcrumb</span></a></li>
            </ul>
        </nav>
    </div>
    <div class="site-content">
        <div class="time">
            <p>07.11.17</p>
        </div>
        <div class="wrap-match">
            <div class="row match-content">
                <div class="col-xs-3 match-time">
                    <p>16:00 - 18:00</p>
                </div>
                <div class="col-xs-7 match-link">
                    <p> CR Belouizdad - Oran </p>
                </div>
                <div class="col-xs-2 match-status">
                    <p>Live</p>
                </div>
            </div>
            <div class="row match-content">
                <div class="col-xs-3 match-time">
                    <p>16:00 - 18:00</p>
                </div>
                <div class="col-xs-7 match-link">
                    <p> CR Belouizdad - Oran </p>
                </div>
                <div class="col-xs-2 match-status">
                    <p>Live</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer"></div>
</div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // Get all "navbar-burger" elements
            var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

            // Check if there are any navbar burgers
            if ($navbarBurgers.length > 0) {

                // Add a click event on each of them
                $navbarBurgers.forEach(function ($el) {
                    $el.addEventListener('click', function () {

                        // Get the target from the "data-target" attribute
                        var target = $el.dataset.target;
                        var $target = document.getElementById(target);

                        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                        $el.classList.toggle('is-active');
                        $target.classList.toggle('is-active');

                    });
                });
            }
        });
    </script>
    </body>

@endsection