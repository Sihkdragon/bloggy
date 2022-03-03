<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog List | Bloggy</title>
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
</body>

</html>