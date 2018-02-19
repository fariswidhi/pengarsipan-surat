@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-lg-6">
		<h1>{{$title}}</h1>
		<label>Tanggal Terima/ No Agenda</label>
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

<button class="btn btn-danger">Disposisikan Surat</button>
	</div>
</div>
@endsection
