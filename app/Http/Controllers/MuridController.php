<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Murid;
use App\Guru;
class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $murids = Murid::with('guru')->get();
        return view('murid.index', compact('murids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $gurus = Guru::all();
        return view('murid.create', compact('gurus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'nama'=>'required|max:255',
            'nim'=>'required|unique:murids|max:255',
            'id_guru'=>'required|max:255'
        ]);

        $murids = new Murid;
        $murids->nama = $request->nama;
        $murids->nim = $request->nim;
        $murids->id_guru = $request->id_guru;
        $murids->save();
        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $murids = Murid::findOrFail($id);
        return view('murid.show', compact('murids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $murids = Murid::findOrFail($id);
        $gurus = Guru::all();
        $selected = Murid::findOrFail($id)->id_guru;
        return view('murid.edit', compact('murids', 'gurus', 'selected'));
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
         $this->validate($request, [
            'nama'=>'required|max:255',
            'nim'=>'required|max:255',
            'id_guru'=>'required|max:255'        
        ]);

        $murids = Murid::findOrFail($id);
        $murids->nama = $request->nama;
        $murids->nim = $request->nim;
        $murids->id_guru = $request->id_guru;
        $murids->save();
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $murids = Murid::findOrFail($id);
        $murids->delete();
        return redirect()->route('murid.index');
    }
}
