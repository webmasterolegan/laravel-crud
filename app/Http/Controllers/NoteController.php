<?php

namespace App\Http\Controllers;

use App\Models\Note;
//use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest; 

class NoteController// extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notes.index', [
            'notes' => Note::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\NoteRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request)
    {
        $note = Note::create($request->validated());
        return redirect()->route('notes.index')->with('status', 'Created note: ' . $note->title);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view('notes.show', [
            'note' => $note
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        return view('notes.edit', [
            'note' => $note
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\NoteRequest  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(NoteRequest $request, Note $note)
    {
        $note->update($request->validated());
        return redirect()->route('notes.index')->with('status', 'Updated note: ' . $note->title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes.index')->with('status', 'Note deleted: ' . $note->title);
    }
}
