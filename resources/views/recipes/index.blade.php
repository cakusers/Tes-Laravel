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
    <title>Admin | Recipe</title>
  </head>

  <body>
    <header class="border-b-[1px] border-black">
      <div class="container flex items-center justify-between py-8 mx-auto">
        <div class="flex">
          <a href="">
            <img src="../../../img/logo.svg" alt="Logo" class="w-28" />
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
                <li class="flex items-baseline hover:text-white">
                  <i class="fa-solid fa-carrot mr-6"></i>
                  <h3>Ingredient</h3>
                </li>
            </a>
            <a href="recipes">
              <li class="flex items-baseline hover:text-white text-white">
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
        <h1 class="text-4xl font-semibold">Recipes</h1>
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
            <a href="recipes/create">
              <i
                class="fa-solid fa-square-plus fa-2xl hover:text-neutral-600"
              ></i>
            </a>
          </button>
        </div>
        <!-- Cards -->
        <ul class="grid grid-cols-3 gap-8">
          <a href="">
            <li class="border-2 shadow-md">
              <img src="https://loremflickr.com/320/240/food?random=1" alt="" />
              <div class="m-4">
                <h2 class="text-lg font-medium">Rawon</h2>
                <p>beef, leek, lemongrass, tamarind, lime leaves...</p>
                <div class="flex justify-end gap-3 mt-2">
                  <form action="./recipe-add.html">
                    <button>
                      <i
                        class="fa-solid fa-pen-to-square fa-xl text-blue-700 hover:text-blue-400"
                      ></i>
                    </button>
                  </form>
                  <button>
                    <i
                      class="fa-solid fa-trash fa-xl text-red-700 hover:text-red-400"
                    ></i>
                  </button>
                </div>
              </div>
            </li>
          </a>
          <a href="">
            <li class="border-2 shadow-md">
              <img src="https://loremflickr.com/320/240/food?random=2" alt="" />
              <div class="m-4">
                <h2 class="text-lg font-medium">Rawon</h2>
                <p>beef, leek, lemongrass, tamarind, lime leaves...</p>
                <div class="flex justify-end gap-3 mt-2">
                  <button>
                    <i
                      class="fa-solid fa-pen-to-square fa-xl text-blue-700 hover:text-blue-400"
                    ></i>
                  </button>
                  <button>
                    <i
                      class="fa-solid fa-trash fa-xl text-red-700 hover:text-red-400"
                    ></i>
                  </button>
                </div>
              </div>
            </li>
          </a>
          <a href="">
            <li class="border-2 shadow-md">
              <img src="https://loremflickr.com/320/240/food?random=3" alt="" />
              <div class="m-4">
                <h2 class="text-lg font-medium">Rawon</h2>
                <p>beef, leek, lemongrass, tamarind, lime leaves...</p>
                <div class="flex justify-end gap-3 mt-2">
                  <button>
                    <i
                      class="fa-solid fa-pen-to-square fa-xl text-blue-700 hover:text-blue-400"
                    ></i>
                  </button>
                  <button>
                    <i
                      class="fa-solid fa-trash fa-xl text-red-700 hover:text-red-400"
                    ></i>
                  </button>
                </div>
              </div>
            </li>
          </a>
          <a href="">
            <li class="border-2 shadow-md">
              <img src="https://loremflickr.com/320/240/food?random=4" alt="" />
              <div class="m-4">
                <h2 class="text-lg font-medium">Rawon</h2>
                <p>beef, leek, lemongrass, tamarind, lime leaves...</p>
                <div class="flex justify-end gap-3 mt-2">
                  <button>
                    <i
                      class="fa-solid fa-pen-to-square fa-xl text-blue-700 hover:text-blue-400"
                    ></i>
                  </button>
                  <button>
                    <i
                      class="fa-solid fa-trash fa-xl text-red-700 hover:text-red-400"
                    ></i>
                  </button>
                </div>
              </div>
            </li>
          </a>
          <a href="">
            <li class="border-2 shadow-md">
              <img src="https://loremflickr.com/320/240/food?random=5" alt="" />
              <div class="m-4">
                <h2 class="text-lg font-medium">Rawon</h2>
                <p>beef, leek, lemongrass, tamarind, lime leaves...</p>
                <div class="flex justify-end gap-3 mt-2">
                  <button>
                    <i
                      class="fa-solid fa-pen-to-square fa-xl text-blue-700 hover:text-blue-400"
                    ></i>
                  </button>
                  <button>
                    <i
                      class="fa-solid fa-trash fa-xl text-red-700 hover:text-red-400"
                    ></i>
                  </button>
                </div>
              </div>
            </li>
          </a>
        </ul>
        <!-- Pagination -->
        <nav class="flex justify-center gap-1 text-xs font-medium">
          <ul class="flex gap-2">
            <li><a href=""  class="text-base block h-9 w-9 rounded-full border border-gray-100 text-center leading-8 hover:bg-blue-400 hover:text-white"><</a></li>
            <li><a href=""  class="text-base block h-9 w-9 rounded-full border border-gray-100 text-center leading-8 hover:bg-blue-400 hover:text-white text-white bg-blue-400">1</a></li>
            <li><a href=""  class="text-base block h-9 w-9 rounded-full border border-gray-100 text-center leading-8 hover:bg-blue-400 hover:text-white">2</a></li>
            <li><a href=""  class="text-base block h-9 w-9 rounded-full border border-gray-100 text-center leading-8 hover:bg-blue-400 hover:text-white">3</a></li>
            <li><a href=""  class="text-base block h-9 w-9 rounded-full border border-gray-100 text-center leading-8 hover:bg-blue-400 hover:text-white">></a></li>
          </ul>
        </nav>
      </div>
    </main>
  </body>
</html>
