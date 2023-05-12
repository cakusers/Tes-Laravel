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
            <a href="recipes">
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
      <div class="flex flex-col gap-8 pt-6 pb-8 px-8 w-full max-h-screen overflow-y-scroll scrollbar-hide">
        <h1 class="text-4xl font-semibold">Ingredient</h1>
        <!-- Header Menu -->
        <div class="flex gap-6">
          <!-- Search -->
          <div class="relative">
            <input
              class="border border-gray-600 h-10 pl-5 pr-16 rounded-lg text-sm focus:outline-none"
              type="search"
              name="search"
              placeholder="Search"
            />
            <button
              type="submit"
              class="absolute right-4 top-2 text-neutral-600"
            >
              <i class="fa-solid fa-magnifying-glass fa-lg"></i>
            </button>
          </div>
          <!-- Add -->
          <button>
            <a href="{{ route('ingredients.create') }}">
              <i
                class="fa-solid fa-square-plus fa-2xl hover:text-neutral-600"
              ></i>
            </a>
          </button>
        </div>
        <!-- Table -->
        <table class="border-collapse border border-slate-500">
            <thead>
                <tr>
                    <th class="border border-slate-600 p-2">No</th>
                    <th class="border border-slate-600 p-2">Ingredient Name</th>
                    <th class="border border-slate-600 p-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredients as $index => $ingredient)
                <tr>
                    <td class="border border-slate-700 p-2 text-center">{{ $index +1 }}</td>
                    <td class="border border-slate-700 p-2">{{ $ingredient->name }}</td>
                    <td class="border border-slate-700 p-2">
                        <div class="flex justify-center items-center gap-3">
                            <a href="{{ route('ingredients.edit', $ingredient->id) }}">
                                <i
                                  class="fa-solid fa-pen-to-square fa-xl text-blue-700 hover:text-blue-500"
                                ></i>
                            </a>
                            <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button>
                                  <i
                                    class="fa-solid fa-trash fa-xl text-red-700 hover:text-red-500"
                                  ></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
    <title>Ingredient list</title>
</head>
<body>
    <h2>Ingredients</h2>
    <a href="/">back</a>
    <a href="{{ route('ingredients.create') }}">tambah</a>
    <ul>
        @foreach ($ingredients as $ingredient)
            <li>{{ $ingredient->name }}</li>
            <ul>
                <li><a href="{{ route('ingredients.edit', $ingredient->id) }}">ubah</a></li>
                <form method="post" action="{{route('ingredients.destroy', $ingredient->id)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">hapus</button>
                </form>
            </ul>
        @endforeach
    </ul>
</body>
</html> --}}