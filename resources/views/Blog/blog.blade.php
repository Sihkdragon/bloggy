<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Bloggy | Home</title>
</head>
<body>
    <nav id="navbar" class="bg-slate-900 h-12 py-2">
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
        {{ asset('css/app.css') }}
        <h1 id="title" class="text-4xl font-bold font-mono">Ini Judul</h1>
        <h4 id="author" class=" text-sm mt-4">Oleh : Ditotisi Rasyid Sumpena</h4>
        <div id="likes" class="text-xs mt-2">72 likes</div>
        <img src="https://picsum.photos/seed/picsum/700/350" alt="this is blog cover" class="mx-auto mt-4">
        <div id="body" class=" mt-7">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat culpa laboriosam facilis quos sed. Quia doloremque quisquam necessitatibus nesciunt eos repellendus. Maxime reiciendis ratione ipsa sint molestiae nemo consectetur tempore velit corporis repudiandae? Quibusdam magni placeat, error dolorem et accusamus dolore ratione dolor ut minus, quos nihil ipsa totam, libero illo maiores sequi quas perferendis veritatis quasi repudiandae? Enim culpa accusamus laborum, quia itaque eligendi doloribus expedita. Sapiente atque accusamus maxime officiis sequi officia eum. Neque, quo itaque. Dolores consequuntur sed cupiditate fugiat odit velit in ullam, veritatis beatae voluptatibus libero dolorem eius esse aliquam cum aspernatur at. Laudantium quod velit aliquid dolorum asperiores ab perferendis quae, delectus odit officia labore facilis distinctio repudiandae deserunt error tenetur quisquam dolor obcaecati aliquam, sed dolores. Autem reiciendis, tempora tempore consectetur earum velit architecto assumenda voluptates? Aperiam illo corrupti vitae animi ea totam deserunt optio temporibus pariatur deleniti eveniet fuga eum distinctio impedit, aliquid quas molestias esse facilis? Laborum praesentium, suscipit unde, molestiae neque et exercitationem aliquam commodi cumque, laboriosam dignissimos molestias quae magni adipisci animi. Aliquid iusto sit veritatis voluptas debitis. Aliquid possimus iure dolorum, cupiditate perspiciatis fuga eveniet sit facere minus nobis est nulla animi earum. Pariatur corporis soluta recusandae? Adipisci.
        </div>
    </section>
</body>
</html>