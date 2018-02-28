@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
<form method="post" action="/posts">
    <input type="text" name="title" placeholder="Enter title">
      {{csrf_field()}}
    <input type="text" name="content" placeholder="Enter content">
    <input type="submit" value="Submit" name="submit">
</form>


@endsection