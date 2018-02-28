@extends('layouts.app')



@section('content')
<h1>A Post</h1>
<table style="width:50%; border:1px solid;">
        <tr>
             <th>Title</th>
             <th>Content</th>
        </tr>               
        <tr>
             <td><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
             <td>{{$post->content}}</td>
        </tr>                             
       
     </table> 

@yield('footer')


<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: left;
}
</style>