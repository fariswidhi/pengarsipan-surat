@extends('layouts.app')


@section('content')

<div class="row">
	<div class="col-lg-6">
		<h1>{{$title}}</h1>
		<form action="{{ url('/'.$page) }}" method="post"> 
			{{csrf_field()}}

			<div class="form-group">
			<label>Nama</label>
			<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>

		</form>
	</div>
</div>
@endsection
