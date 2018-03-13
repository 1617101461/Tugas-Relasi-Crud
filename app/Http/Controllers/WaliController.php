<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wali;
use App\Murid;
class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $walis = Wali::with('murid')->get();
        return view('wali.index', compact('walis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $murids = Murid::all();
        return view('wali.create', compact('murids'));
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
            'nama'=>'required|unique:walis|max:255',
            'id_murid'=>'required|max:255'
        ]);

        $walis = new Wali;
        $walis->nama = $request->nama;
        $walis->id_murid = $request->id_murid;
        $walis->save();
        return redirect()->route('wali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $walis = Wali::findOrFail($id);

        return view('wali.show', compact('walis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
          $walis = Wali::findOrFail($id);
          $murids = Murid::all();
          $selected = Wali::findOrFail($id)->id_murid;
        return view('wali.edit', compact('murids', 'walis','selected'));
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
            'id_murid'=>'required|max:255'        
        ]);

        $walis = Wali::findOrFail($id);
        $walis->nama = $request->nama;
        $walis->id_murid = $request->id_murid;
        $walis->save();
        return redirect()->route('wali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $walis = Wali::findOrFail($id);
        $walis->delete();
        return redirect()->route('wali.index');
    }
}
