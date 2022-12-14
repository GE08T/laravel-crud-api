<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notes;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $note = Notes::All();
        return response()->json([
            'data' => [
                'note' => $note
            ],
            'message' => 'Notes'
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'content']);
        $note = Notes::create($data);

        return response()->json([
            'data' => [
                'note' => $note
            ],
            'message' => 'Data Berhasil di Tambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Notes::findOrFail($id);

        return response()->json([
            'data' => [
                'note' => $note
            ],
            'message' => 'Show Notes'
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $note = Notes::findOrFail($id);
        
        $data = $request->only(['title', 'content']);
        $note->update($data);

        return response()->json([
            'data' => [
                'note' => $note
            ],
            'message' => 'Data Berhasil di Update'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Notes::findOrFail($id);
        $note->delete();

        return response()->json([
            'message' => 'Data Berhasil di Hapus'
        ], 200);
    }
}
