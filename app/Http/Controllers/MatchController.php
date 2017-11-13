<?php

namespace App\Http\Controllers;

use App\Repositories\MatchRepository;
use App\Repositories\LeagueRepository;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    protected $match;

    protected $league;

    public function __construct(
        MatchRepository $matchRepository,
        LeagueRepository $leagueRepository
    ) {
        $this->match = $matchRepository;
        $this->league = $leagueRepository;
    }

    public function index()
    {
        $matchs = $this->match->paginate(10, [
                'matchs.id',
                'matchs.from',
                'matchs.to',
                'matchs.tittle',
                'matchs.slug',
            ]
        );

        return view('backend.match.index', compact('matchs'));
    }

    public function create()
    {
        $leagues = $this->league->all(['id', 'name'])->pluck('name', 'id');

        return view('backend.match.create', compact('leagues'));
    }

    public function store(Request $request)
    {
        $data = $request->only('league_id', 'from', 'to', 'tittle', 'slug');
        $this->match->create($data);

        return redirect()->route('match.index');
    }

    public function edit($id)
    {
        $leagues = $this->league->all(['id', 'name'])->pluck('name', 'id');
        $match = $this->match->find($id, [
            'matchs.id',
            'matchs.league_id',
            'matchs.from',
            'matchs.to',
            'matchs.tittle',
            'matchs.slug',
        ]);

        return view('backend.match.edit', compact('match', 'leagues'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->only('league_id', 'from', 'to', 'tittle', 'slug');
        $this->match->update($data, $id);

        return redirect()->route('match.index');
    }

    public function destroy($id)
    {
        $this->match->delete($id);

        return redirect()->route('match.index');
    }
}