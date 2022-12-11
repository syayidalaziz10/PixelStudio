<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studio = DB::table('studios')->get();
        return view('admin.studio', ['studio' => $studio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_studio' => 'required',
            'foto' => 'required|image|file',
            'ruangan_studio' => 'required',
            'deskripsi_studio' => 'required',

        ]);
        $data['foto'] = $request->file('foto')->store('fotoStudio');
        Studio::create($data);
        return redirect('/dashboard/studio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        return view('admin.edit', compact('studio'));
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
        $data = $request->validate([
            'nama_studio' => 'required',
            'foto' => 'image|file',
            'ruangan_studio' => 'required',
            'deskripsi_studio' => 'required',

        ]);
        if ($request->foto) {
            Storage::delete($request->fotoLama);
            $data['foto'] = $request->file('foto')->store('fotoStudio');
        }
        $studio = Studio::find($id);
        $studio->update($data);

        return redirect('/dashboard/studio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        Storage::delete($studio->foto);
        Studio::destroy($studio->id);
        return redirect()->route('studio.index')->withPesan('Menu Berhasil Di Hapus');
    }
}
