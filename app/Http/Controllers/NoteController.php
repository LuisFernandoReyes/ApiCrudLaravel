<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::all();
        return response()->json($notes, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(NoteRequest $request)
    {
        Note::create($request->all());
        return response()->json([
            'success' => true
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $note = Note::find($id);
        return response()->json($note, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteRequest $request, $id)
    {
        $note= Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success' => true
        ], 200);
        }

    public function destroy(string $id)
    {
        Note::find($id)->delete();
        return response()->json([
            'success' => true
        ], 200);
    }
}
