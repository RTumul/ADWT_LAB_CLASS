@extends('layouts.main')
@section('content')
<table border=1>
  <tr>
    <th>Department</th>
    <th>Name</th>
  </tr>
  @foreach ($dept as $d)
  <tr>
    <td>{{$d -> deptName}}</td>
    <td>{{$d -> student -> name}}</td>
  </tr>
  @endforeach
</table>
@endsection