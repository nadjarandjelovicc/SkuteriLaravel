<?php

namespace App\Http\Controllers;
use App\Models\Skuter;

use Illuminate\Http\Request;

class SkuterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $r = Skuter::all();
        return view('skuter.index')->with('r',$r);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skuter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'model'=>'required',
            'boja'=>'required',
            'materijal'=>'required',
            'stanje'=>'required',
            'cena'=>'required',
            'brzina'=>'required',
            'snaga'=>'required',
     ]);
        $r = new Skuter();
        $r->model = $request->input('model');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->cena = $request->input('cena');
        $r->brzina = $request->input('brzina');
        $r->snaga = $request->input('snaga');
        $r->save();
        return redirect('/skuteri')->with('success','Novi skuter je uspesno kreiran!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Skuter::find($id);
        return view('skuter.show')->with('r',$r);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $t = Skuter::find($id);
        return view('skuter.edit')->with('r',$t);
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
        $r = Skuter::find($id);
        $r->model = $request->input('model');
        $r->boja = $request->input('boja');
        $r->materijal = $request->input('materijal');
        $r->stanje = $request->input('stanje');
        $r->cena = $request->input('cena');
        $r->brzina = $request->input('brzina');
        $r->snaga = $request->input('snaga');
        $r->save();
        return redirect('/skuteri')->with('success','Skuter je uspesno azuriran!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $t = Skuter::find($id);
        $t->delete();
        return redirect('/skuteri')->with('success','Skuter je uspesno izbrisan!');
    }
}
