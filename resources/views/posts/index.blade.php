@extends('layouts.app')



@section('content')
<h1>All Posts</h1>
    <table style="width:50%; border:1px solid;">
        <tr>
             <th>Title</th>
             <th>Content</th>
        </tr>
        @foreach($posts as $post)             
        <tr>
             <td><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></td>
             <td>{{$post->content}}</td>
        </tr>                             
        @endforeach
     </table> 

@endsection


<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: left;
}
</style>