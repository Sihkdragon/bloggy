@extends('layouts.app')

@section('content')

    <x-navbar/>
    <section class="container mx-auto mt-10">
        {{-- {{$blogs}} --}}
        <div id="grid-container" class="grid grid-cols-3 gap-4">
            @foreach ($blogs as $blog)
            <div class="border-2 border-slate-500 rounded-md py-3 px-2">
                <img src="https://source.unsplash.com/500x150" alt="" class="object-cover">
                <strong id="title" class="text-lg font-semibold">{{$blog->title}}</strong>
                <div id="author" class="text-md font-light">{{$blog->author}}</div>
                <div class="w-full bg-slate-500 h-[1px]"></div>
                <p id="description">{{$blog->description}}</p>
                <a href="/{{$blog->id}}"
                    class="bg-slate-400 text-white px-3 py-1 rounded-md float-right cursor-pointer hover:bg-slate-200">Details</a>
            </div>
            @endforeach
        </div>
    </section>
    
@endsection