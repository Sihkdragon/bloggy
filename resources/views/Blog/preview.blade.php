<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Preview | Bloggy</title>
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
        <h1 id="title" class="text-4xl font-bold font-mono">{{$blog->title}}</h1>
        <h4 id="author" class=" text-sm mt-4">Oleh : {{$blog->author}}</h4>
        <div id="likes" class="text-xs mt-2">{{$blog->likes}} likes</div>
        {{-- <img src="https://picsum.photos/seed/picsum/700/350" alt="this is blog cover" class="mx-auto mt-4"> --}}
        <img src="https://source.unsplash.com/900x350" alt="this is blog cover" class="w-full mt-4">
        <div id="body" class=" mt-7">
            {{$blog->body}}
        </div>
    </section>
</body>

</html>