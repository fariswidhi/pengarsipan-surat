@extends('layouts.app')


@section('content')
	<a href="{{ url('petugas/create') }}" class="btn btn-primary">Tambah</a>
	<br>
	<br>

	<table class="table table-hover">
	<thead>
		<th>#</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Aksi</th>
	</thead>

	<tbody>
		@foreach ($data as $d)
		<tr>
			<td>{{$d->id}}</td>
			<td>{{$d->name}}</td>
			<td>{{$d->email}}</td>
			<td>
			<a href="{{url('petugas/'.$d->id.'/edit')}}" class="btn btn-success">Edit</a>

			<form action="{{url('petugas/'.$d->id)}}" method="post" style="display: inline;">
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