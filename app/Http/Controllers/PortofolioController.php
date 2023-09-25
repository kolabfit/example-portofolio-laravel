<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolios = Portofolio::all();

        return view('portofolio.index', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategories = Kategori::all();
        return view('portofolio.create', compact('kategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $portofolio = new Portofolio();
        $portofolio->fill($request->all());
        $portofolio->save();

        return redirect()->route('portofolio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portofolio = Portofolio::find($id);

        return view('portofolio.show', compact('portofolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portofolio = Portofolio::find($id);
        $kategories = Kategori::all();

        return view('portofolio.edit', compact('portofolio', 'kategories'));
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
        $portofolio = Portofolio::find($id);
        $portofolio->fill($request->all());
        $portofolio->save();

        return redirect()->route('portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = Portofolio::find($id);
        $portofolio->delete();

        return redirect()->route('portofolio.index');
    }
}
