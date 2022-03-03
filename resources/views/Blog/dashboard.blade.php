@extends('layouts.app')

@section('content')
<x-navbar/>
    <section class="container mx-auto mt-10 min-h-screen border-2 border-black block">
        <form action="/store" method="post">
        <div class="flex flex-row min-h-screen justify-between bg-purple-400" id="form-container">
                {{-- Title --}}
                @csrf
                <div class="left">
                    <div class="title-group mb-4">
                        <label for="title" class="font-semibold">Blog Title</label>
                        <input type="text" name="title" id="title"
                            class="border-solid border-b border-b-slate-500 px-1 block focus:outline-none" name="title">
                    </div>
    
                    {{-- Author --}}
                    <div class="author-group mb-4">
                        <label for="author" class="font-semibold">Author</label>
                        <input class="border-solid border-b border-b-slate-500 px-1 block focus:outline-none" type="text"
                            name="author" id="author" name="author">
                    </div>
                    {{-- Likes --}}
                    <div class="likes-group mb-4">
                        <label for="likes" class="font-semibold">Blog Likes</label>
                        <input class="border-solid border-b border-b-slate-500 px-1 block focus:outline-none" type="number"
                            size="3" min=0 name="likes" id="likes" name="likes">
                    </div>
                    {{-- Cover --}}
                    <div class="cover-group mb-4">
                        <label for="cover" class="font-semibold">Blog Cover</label>
                        <input class="py-2 rounded-md bg-slate-500 px-1 block focus:outline-none text-white" type="text"
                            name="cover" id="cover" name="cover">
                    </div>
                    {{-- Desc --}}
                    <div class="description-group  mb-4">
                        <label for="description" class="font-semibold">Blog Description</label>
                        <input class="block  w-full h-full border border-slate-500 rounded-sm focus:outline-none p-2"
                            type="textarea" name="description" id="description" name="description" size="50">
                    </div>
                    <input type="submit" value="Submit"
                        class="px-5 py-1 bg-slate-500 text-white rounded-md cursor-pointer hover:bg-slate-300 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-900 mr-3">
                    <input type="reset" value="Reset"
                        class="px-5 py-1 bg-slate-500 text-white rounded-md cursor-pointer hover:bg-slate-300 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-900">
                </div>
                {{-- body --}}
                <div class="body-group  mb-4 right float-right min-h-screen bg-green-400">
                    <label for="body" class="font-semibold">Blog Body</label>
                    <x-forms.tinymce-editor />
                </div>
            </form>
        </div>
    </section>
@endsection