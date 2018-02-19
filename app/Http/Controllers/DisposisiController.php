<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratMasuk as Obj;
use App\Disposisi;

class DisposisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $page = 'disposisi';

    public function disposisi($id){
        $data= Obj::find($id);

        return view($this->page.'/create',compact('data'));
    }

    public function simpanDisposisi(Request $request){
        $disposisi = new Disposisi;
        $disposisi->no_disposisi = $request->no_disposisi;
        $disposisi->no_agenda = $request->no_agenda;
        $disposisi->no_surat = $request->no_surat;
        $disposisi->kepada = $request->kepada;
        $disposisi->keterangan = $request->keterangan;
        $disposisi->status = $request->status;

        $disposisi->tanggapan = $request->tanggapan;
        $disposisi->save();

        return redirect('/disposisi');
    }
    public function index()
    {
        //
        $data = Disposisi::all();

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
    }
}
