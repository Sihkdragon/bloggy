@extends('layouts.app')

@section('content')
<x-navbar/>
    <section class="container mx-auto mt-10">
        <h1 id="title" class="text-4xl font-bold font-mono">{{$blog->title}}</h1>
        <h4 id="author" class=" text-sm mt-4">Oleh : {{$blog->author}}</h4>
        <div id="likes" class="text-xs mt-2">{{$blog->likes}} likes</div>
        <img src="https://source.unsplash.com/900x350" alt="this is blog cover" class="w-full mt-4">
        <div id="body" class=" mt-7">
            {{$blog->body}}
        </div>
    </section>
@endsection