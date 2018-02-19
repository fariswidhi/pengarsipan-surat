@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-lg-6">
		<h1>{{$title}}</h1>
		<form action="{{ url('/'.$page.'/'.$data['no_agenda']) }}" method="post"> 
			{{csrf_field()}}
			{{method_field('PUT')}}

		
			<div class="form-group">
			<label>Nomor Agenda</label>
			<input type="text" name="no_agenda" class="form-control" value="{{$data['no_agenda']}}">
			</div>
			<div class="form-group">
			<label>Jenis Surat</label>
			<input type="text" name="jenis_surat" class="form-control" value="{{$data['jenis_surat']}}">
			</div>
			<div class="form-group">
			<label>Tanggal Kirim</label>
			<input type="date" name="tanggal_kirim" class="form-control" value="{{$data['tanggal_kirim']}}">
			</div>

			<div class="form-group">
			<label>Nomor Surat</label>
			<input type="text" name="no_surat" class="form-control" value="{{$data['no_surat']}}">
			</div>			
			<div class="form-group">
			<label>Pengirim</label>
			<input type="text" name="pengirim" class="form-control" value="{{$data['pengirim']}}">
			</div>
			<div class="form-group">
			<label>Perihal</label>
			<input type="text" name="perihal" class="form-control" value="{{$data['perihal']}}">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>

		</form>
	</div>
</div>
@endsection
