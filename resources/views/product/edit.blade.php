@extends('layouts.master')
@section('content')
<h1>Edit PRoducte</h1>
<form action="{{route('products.update', $product->id)}}" method="POST">
	@csrf
	@method('PUT')
	<label>Name</label>
	<input type="text" name="name" value="{{$product->name}}">
	<label>Quantity</label>
	<input type="text" name="qty" value="{{$product->qty}}">
	<select name="category_id">
		@foreach($categories as $cate)
			<option value="{{$cate->id}}" {{ $product->category_id == $cate->id ? 'selected' : ''}}>
				{{$cate->name}}
			</option>
		@endforeach
	</select>
	<button type="submit">Update</button>
</form>
@endsection