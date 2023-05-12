<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script
      src="https://kit.fontawesome.com/0dc907d2a4.js"
      crossorigin="anonymous"
    ></script>
    <title>Admin | Ingredient</title>
  </head>

  <body>
    <header class="border-b-[1px] border-black">
      <div class="container flex items-center justify-between py-8 mx-auto">
        <div class="flex">
          <a href="">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo" class="w-28" />
          </a>
        </div>
        <div>
          <div class="flex items-center gap-8">
            <a href="" class="flex items-center gap-4">
              <p>William Tanardi</p>
              <i class="fa-solid fa-circle-user fa-2xl"></i>
            </a>
          </div>
        </div>
      </div>
    </header>
    <main class="flex mx-auto">
      <!-- Side Bar -->
      <nav class="flex w-1/4 h-screen bg-rose-600 text-rose-300">
          <ul class="flex flex-col p-8 text-xl gap-6">
            <a href="{{ route('ingredients.index') }}">
              <li class="flex items-baseline hover:text-white text-white">
                <i class="fa-solid fa-carrot mr-6"></i>
                <h3>Ingredient</h3>
              </li>
            </a>
            <a href="../recipes">
              <li class="flex items-baseline hover:text-white">
                <i class="fa-solid fa-bowl-food mr-6"></i>
                <h3>Recipe</h3>
              </li>
            </a>
            <a href="">
              <li class="flex items-baseline hover:text-white">
                <i class="fa-solid fa-utensils mr-7"></i>
                <h3>Resto</h3>
              </li>
            </a>
            <a href="">
              <li class="flex items-baseline hover:text-white">
                <i class="fa-solid fa-receipt mr-8"></i>
                <h3>Order</h3>
              </li>
            </a>
          </ul>
      </nav>
      <!-- Main Content -->
      <div class="flex flex-col pt-6 pb-8 px-8 w-full max-h-screen overflow-y-scroll scrollbar-hide">
        <!--  -->
        <div class="flex gap-4 items-center">
          <a href="{{ route('ingredients.index') }}" class="mt-1 w-5 hover:text-neutral-400"><i class="fa-solid fa-angle-left fa-xl"></i></a>
          <h1 class="text-4xl font-semibold lead">Ingredient | Add</h1>
        </div>
        <form action="{{ route('ingredients.store') }}" method="POST" class="grid grid-cols-5 gap-x-4 gap-y-5 mt-8">
        
            @csrf
          <!-- Name -->
          <div class="flex flex-col gap-1.5 col-span-2">
            <label for="name">Ingredient Name</label>
            <input
              type="text"
              name="name"
              class="border border-black px-2 py-1"
              required
            />
            <button class="h-12 mt-4 w-full bg-sky-500 text-white hover:bg-sky-700 font-semibold">
                Submit
            </button>  
          </div>
        </form>
      </div>
    </main>
  </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('ingredients.store') }}" method="POST">
        @csrf
            
        <label for="name">name</label>
        <input type="text" name="name" id="name">
        <button type="submit">Submit</button>
    </form>
</body>
</html> --}}