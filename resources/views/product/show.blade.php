@extends('layouts.master')
@section('content')
<h1>Show product</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Quantity</td>
			<td>Category</td>

		</tr>
	</thead>
	<tbody>
			<tr>
				<td>{{$product->id}}</td>
				<td>{{$product->name}}</td>
				<td>{{$product->qty}}</td>
				<td>{{$product->category->name}}</td>
			</tr>
	</tbody>
</table>
@endsection
