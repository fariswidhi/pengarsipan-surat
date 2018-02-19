@extends('layouts.app')


@section('content')
	<a href="{{ url($page.'/create') }}" class="btn btn-primary">Tambah</a>
	<br>
	<br>

	<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Jenis Surat</th>
		<th>Tanggal Kirim</th>
		<th>Tanggal Terima</th>
		<th>Nomor Surat</th>
		<th>Pengirim</th>
		<th>Perihal</th>
		<th>Aksi</th>
	</thead>

	<tbody>
		@foreach ($data as $d)
		<tr>
			<td>{{$d->no_agenda}}</td>
			<td>{{$d->jenis_surat}}</td>
			<td>{{$d->tanggal_kirim}}</td>
			<td>{{$d->tanggal_terima}}</td>
			<td>{{$d->no_surat}}</td>
			<td>{{$d->pengirim}}</td>
			<td>{{$d->perihal}}</td>
			<td>
			<a href="{{url($page.'/'.$d->no_agenda.'')}}" class="btn btn-primary">Detail</a>
			<a href="{{url($page.'/'.$d->no_agenda.'/edit')}}" class="btn btn-success">Edit</a>

			<form action="{{url($page.'/'.$d->no_agenda)}}" method="post" style="display: inline;">
			{{method_field('DELETE')}}	
			{{csrf_field()}}
			<button type="submit" class="btn btn-danger">Hapus</button>
			</form>

		</tr>
			{{-- expr --}}
		@endforeach
	</tbody>
		
	</table>
@endsection