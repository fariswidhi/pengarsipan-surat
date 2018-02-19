<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User as Obj;

class PetugasController extends Controller
{
    protected $page="petugas";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Obj::all();
        return view($this->page.'/index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Tambah Petugas";
        $page = $this->page;
        return view($this->page.'/create',compact('title','page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $class = new Obj;
        $class->name = $request->nama ;
        $class->email = $request->email;
        $class->password = bcrypt($request->password);
        $class->save();

        return redirect('/petugas');

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
    public function edit($id)
    {
        //
        $data= Obj::find($id);

        $title = "Edit Petugas";
        $page = $this->page;
        return view($this->page.'/edit',compact('data','title','page'));
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
        //
        $class = Obj::find($id);
        $class->name = $request->nama ;
        $class->email = $request->email;
        $class->password = bcrypt($request->password);
        $class->save();

        return redirect('/petugas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Obj::find($id);
        $data->delete();

        return redirect()->back();
    }
}
