@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-lg-6">
		<h1>{{$title}}</h1>
		<form action="{{ url('/'.$page) }}" method="post"> 
			{{csrf_field()}}

			<div class="form-group">
			<label>Nomor Agenda</label>
			<input type="text" name="no_agenda" class="form-control">
			</div>
			<div class="form-group">
			<label>Jenis Surat</label>
			<input type="text" name="jenis_surat" class="form-control">
			</div>
			<div class="form-group">
			<label>Tanggal Kirim</label>
			<input type="date" name="tanggal_kirim" class="form-control">
			</div>

			<div class="form-group">
			<label>Tanggal Terima</label>
			<input type="date" name="tanggal_terima" class="form-control">
			</div>

			<div class="form-group">
			<label>Nomor Surat</label>
			<input type="text" name="no_surat" class="form-control">
			</div>			
			<div class="form-group">
			<label>Pengirim</label>
			<input type="text" name="pengirim" class="form-control">
			</div>
			<div class="form-group">
			<label>Perihal</label>
			<input type="text" name="perihal" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>

		</form>
	</div>
</div>
@endsection
