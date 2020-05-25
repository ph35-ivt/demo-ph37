@extends('layouts.master')
@section('content')
<h1>Create PRoducte</h1>
<form action="{{route('products.store')}}" method="POST">
	@csrf
	<label>Name</label>
	<input type="text" name="name">
	<label>Quantity</label>
	<input type="text" name="qty">
	<select name="category_id">
		@foreach($categories as $cate)
			<option value="{{$cate->id}}">
				{{$cate->name}}
			</option>
		@endforeach
	</select>
	<button type="submit">Add</button>
</form>
@endsection