@extends('layouts.master')
@section('content')
<h1>List cate</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Action</td>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $cate)
			<tr>
				<td>{{$cate->id}}</td>
				<td><a href="{{route('list-product-by-cate', $cate->id)}}"></a>{{$cate->name}}</td>
				<td><a href="{{route('categories.show', $cate->id)}}">Show</a></td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection
