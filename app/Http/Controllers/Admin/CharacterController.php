<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use Doctrine\DBAL\Schema\View;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $characters = Character::all();
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @
     */
    public function create()
    {
        return view('admin.characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCharacterRequest  $request
     *
     */
    public function store(StoreCharacterRequest $request)
    {
        $data = $request->all();
        $newCharacter = new Character();
        $newCharacter->fill($data);
        $newCharacter->save();
        return redirect()->route('admin.characters.show', $newCharacter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     *
     *
     */
    public function show(Character $character)
    {
        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     *
     */
    public function edit(Character $character)
    {
        return view('admin.characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCharacterRequest  $request
     * @param  \App\Models\Character  $character
     *
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        $data = $request->validated();
        $character->update($data);
        return redirect()->route('admin.characters.show', $character->id)->with('message', "$character->name has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     *
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()->route('admin.characters.index')->with('message', "$character->name was successfully eliminated");
    }
}
