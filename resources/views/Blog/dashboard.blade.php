<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <x-head.tinymce-config />
    <title>Bloggy | Dashboard</title>
</head>

<body>
    <nav id="navbar" class="bg-slate-600 h-12 py-2">
        <div id="navcontainer" class="container mx-auto  flex justify-between items-center text-white">
            <div id="title" class="text-lg">Bloggy</div>
            <div id="navbar-link">
                <a href="/" class="mr-5">Home</a>
                <a href="/dashboard" class="mr-5">Dashboard</a>
                <a href="/bloglist">BlogList</a>
            </div>
        </div>
    </nav>
    <section class="container mx-auto mt-10">
        <div class="flex min-h-full" id="form-container">
            <form action="/store" method="post">
                {{-- Title --}}
                @csrf
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
                        type="textarea" name="description" id="description" name="description">
                </div>
                {{-- body --}}
                <div class="body-group  mb-4">
                    <label for="body" class="font-semibold">Blog Body</label>
                    <input class="block  w-full h-full border border-slate-500 rounded-sm focus:outline-none p-2"
                        type="textarea" name="body" id="body" name="body">
                </div>
                <input type="submit" value="Submit"
                    class="px-5 py-1 bg-slate-500 text-white rounded-md cursor-pointer hover:bg-slate-300 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-900 mr-3">
                <input type="reset" value="Reset"
                    class="px-5 py-1 bg-slate-500 text-white rounded-md cursor-pointer hover:bg-slate-300 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-900">
            </form>
        </div>
        <x-forms.tinymce-editor />
    </section>
</body>

</html>