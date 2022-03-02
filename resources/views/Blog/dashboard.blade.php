<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>Bloggy | Dashboard</title>
</head>
<body>
    <nav id="navbar" class="bg-slate-600 h-12 py-2">
        <div id="navcontainer" class="container mx-auto  flex justify-between items-center text-white">
            <div id="title" class="text-lg">Bloggy</div>
            <div id="navbar-link">
                <a href="/" class="mr-5">Home</a>
                <a href="/dashboard" class="mr-5">Dashboard</a>
                <a href="#">BlogList</a>
            </div>
        </div>
    </nav>
    <section class="container mx-auto mt-10">
        <div class="" id="form-container" class="border-solid border-5 border-sky-500">
        <form action="/store" method="post">
                {{-- Title --}}
                <label for="title" class="font-bold">Blog Title</label>
                <input type="text" name="title" id="title" class="border-solid border-2 border-sky-500">
                {{-- Author --}}
                <label for="author" class="font-semibold">Author</label>
                <input type="text" name="author" id="author">
                {{-- Likes --}}
                <label for="likes" class="font-semibold">Blog Likes</label>
                <input type="text" name="likes" id="likes">
                {{-- Cover --}}
                <label for="cover" class="font-semibold">Blog Cover</label>
                <input type="text" name="cover" id="cover">
                {{-- body --}}
                <label for="body" class="font-semibold">Blog Body</label>
                <input type="text" name="body" id="body">
            </form>
        </div>
        <div class="bg-black w-full h-full font-extralight">p</div>
    </section>
</body>
</html>