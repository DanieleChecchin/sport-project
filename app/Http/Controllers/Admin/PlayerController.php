<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Team;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $teamName = $request->input('team');
        $teams = Team::all();

        if ($teamName) {
            $players = Player::whereHas('team', function ($query) use ($teamName) {
                $query->where('name', 'LIKE', "%$teamName%");
            })->get();
        } else {
            $players = Player::all();
        }

        return view('admin.players.index', compact('players', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $player = new Player();
        return view("admin.players.create", compact("player"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $player = Player::create($data);
        return redirect()->route("admin.players.index", [$player->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $player = Player::findOrFail($id);

        return view('admin.players.show', compact('player'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $player = Player::findOrFail($id);
        return view("admin.players.edit", compact("player"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $player = Player::findOrFail($id);

        $player->update($data);

        return redirect()->route("admin.players.show", [$player->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}