@extends('layouts.app')

@section('content')
<x-navbar/>
    <section class="container mx-auto mt-10">
        <h1 id="title" class="text-4xl font-bold font-mono">{{$title}}</h1>
        <h4 id="author" class=" text-sm mt-4">Oleh : {{$author}}</h4>
        <div id="likes" class="text-xs mt-2">{{$likes}} likes</div>
        {{-- <img src="https://picsum.photos/seed/picsum/700/350" alt="this is blog cover" class="mx-auto mt-4"> --}}
        <img src="https://source.unsplash.com/900x350" alt="this is blog cover" class="w-full mt-4">
        <div id="body" class=" mt-7">
            {{$body}}
        </div>
    </section>
@endsection