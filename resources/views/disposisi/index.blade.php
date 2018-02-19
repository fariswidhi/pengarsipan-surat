@extends('layouts.app')


@section('content')
	<a href="{{ url('petugas/create') }}" class="btn btn-primary">Tambah</a>
	<br>
	<br>

	<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>No Agenda</th>
		<th>Kepada</th>
		<th>Aksi</th>
	</thead>

	<tbody>
		@foreach ($data as $d)
		<tr>
			<td>{{$d->no_disposisi}}</td>
			<td>{{$d->no_agenda}}</td>
			<td>{{$d->kepada}}</td>
			<td>
			<a href="{{url('disposisi/'.$d->no_agenda)}}" class="btn btn-primary">Detail</a>
			<a href="{{url('disposisi/'.$d->no_agenda.'/edit')}}" class="btn btn-success">Edit</a>

			<form action="{{url('disposisi/'.$d->id)}}" method="post" style="display: inline;">
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