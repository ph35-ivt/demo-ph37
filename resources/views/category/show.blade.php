@extends('layouts.master')
@section('content')
<h1>Show cate</h1>
<table>
	<thead>
		<tr>
			<td>ID</td>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>
			<tr>
				<td>{{$category->id}}</td>
				<td>{{$category->name}}</td>
			</tr>
	</tbody>
</table>
@endsection
