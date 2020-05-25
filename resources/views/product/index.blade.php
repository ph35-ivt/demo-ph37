@extends('layouts.master')
@section('content')
<h1>List product</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Quantity</td>
			<td>Category</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($products as $product)
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->qty}}</td>
				<td>{{$product->category->name}}</td>
				<td><a href="{{route('products.show', $product->id)}}">Show</a>
					<form action="{{route('products.destroy', $product->id)}}" method="POST">
						@csrf
						@method('DELETE')
						<button type="submit">Delete</button>
						
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection
