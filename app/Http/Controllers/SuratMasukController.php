<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SuratMasuk as Obj;
use Auth;


class SuratMasukController extends Controller
{

    protected $page = 'surat-masuk';

  public function index()
    {
        //
        $data = Obj::all();
        $page = $this->page;
        return view($this->page.'/index',compact('data','page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Tambah Surat Masuk";
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
        $class->no_agenda = $request->no_agenda ;
        $class->user_id = Auth::id();
        $class->jenis_surat = $request->jenis_surat;
        $class->tanggal_kirim = $request->tanggal_kirim;;
        $class->tanggal_terima = $request->tanggal_terima;
        $class->no_surat = $request->no_surat;
        $class->pengirim = $request->pengirim;
                $class->perihal = $request->perihal;    
        $class->save();

        return redirect('surat-masuk');

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

        $title= 'Edit Surat Keluar';
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
        $class->no_agenda = $request->no_agenda ;
        $class->user_id = Auth::id();
        $class->jenis_surat = $request->jenis_surat;
        $class->tanggal_kirim = $request->tanggal_kirim;
                $class->tanggal_terima = $request->tanggal_terima;
        $class->no_surat = $request->no_surat;
        $class->pengirim = $request->pengirim;
        $class->perihal = $request->perihal;
        $class->save();

        return redirect('/'.$this->page);

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
