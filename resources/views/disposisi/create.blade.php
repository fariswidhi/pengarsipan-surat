@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-lg-6">
		<h1>Disposisi Surat</h1>
		
	<form action="" method="post">
		<div class="form-group">
		<label>Nomor Disposisi</label>
		<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
		<label>Nomor Agenda</label>
		<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
		<label>No Surat</label>
		<input type="text" name="" class="form-control" readonly value="{{$data['no_surat']}}">
		</div>
		<div class="form-group">
		<label>Kepada</label>
		<input type="text" name="" class="form-control">
		</div>
		<div class="form-group">
		<label>Keterangan</label>
	<textarea class="form-control"></textarea>
			
		</div>
		<div class="form-group">
		<label>Status</label>
		<input type="text" name="" class="form-control">
			
		</div>
		<div class="form-group">
		<label>Tanggapan</label>
	<textarea class="form-control"></textarea>
			
		</div>
<button type="submit" class="btn btn-primary">Simpan</button>

	</form>
	</div>
	<div class="col-lg-6">
	<br>
	<br>
	<br>
	<br>
		<table class="table table-bordered">
			<tbody>
				<tr>
					<td>No Agenda</td><td>{{$data['no_agenda']}}</td>
				</tr>
				<tr>
					<td>Tanggal Kirim</td><td>{{$data['tanggal_kirim']}}</td>
				</tr>
				<tr>
					<td>Tanggal Terima</td><td>{{$data['tanggal_terima']}}</td>
				</tr>
				<tr>
					<td>Nomor Surat</td><td>{{$data['no_surat']}}</td>
				</tr>
				<tr>
					<td>Pengirim</td><td>{{$data['pengirim']}}</td>
				</tr>
				<tr>
					<td>Perihal</td><td>{{$data['perihal']}}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection
