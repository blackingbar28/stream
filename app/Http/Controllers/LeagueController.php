<?php

namespace App\Http\Controllers;

use App\Repositories\LeagueRepository;
use Illuminate\Http\Request;
use ImageHelper;

class LeagueController extends Controller
{
    protected $league;

    public function __construct(
        LeagueRepository $leagueRepository
    ) {
        $this->league = $leagueRepository;
    }

    public function index()
    {
        $leagues = $this->league->paginate(10, [
                'leagues.id',
                'leagues.name',
                'leagues.slug',
            ]
        );

        return view('backend.league.index', compact('leagues'));
    }

    public function create()
    {
        return view('backend.league.create');
    }
    public function show($id)
    {
        dd($id);
    }
    public function store(Request $request)
    {
        $data = $request->only('name', 'slug');
        $flag = ImageHelper::upload($request->file('flag'), null, 'flag');
        $data['flag'] = $flag;

        $this->league->create($data);

        return redirect()->route('league.index');
    }

    public function destroy($id)
    {
        $this->league->delete($id);

        return redirect()->route('league.index');
    }
}