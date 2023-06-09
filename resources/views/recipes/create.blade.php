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
    <title>Admin | Add Recipe</title>
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
              <p>William Tarnadi</p>
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
              <i class="fa-solid fa-bowl-food mr-6"></i>
              <h3>Recipe</h3>
            </li>
          </a>
          <a href="../recipes">
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
      <div
        class="py-6 px-8 w-full max-h-screen overflow-y-scroll scrollbar-hide"
      >
        <div class="flex gap-4 items-center">
          <a href="../recipes" class="mt-1 w-5 hover:text-neutral-400"><i class="fa-solid fa-angle-left fa-xl"></i></a>
          <h1 class="text-4xl font-semibold lead">Recipe | Add</h1>
        </div>
        <form action="" method="post" class="grid grid-cols-5 gap-x-4 gap-y-5 mt-8">
          <!-- Name -->
          <div class="flex flex-col gap-1.5 col-span-2">
            <label for="fname">Food Name</label>
            <input
              type="text"
              name="fname"
              class="border border-black px-2 py-1"
              required
            />
          </div>
          <!-- Category -->
          <div class="flex flex-col gap-1.5">
            <label for="fcategory">Category</label>
            <select
              id="fcategory"
              class="border border-black h-full"
              required
            >
              <option></option>
              <option value="appetizer">Appetizer</option>
              <option value="mainCourse">Main Course</option>
              <option value="dessert">Dessert</option>
            </select>
          </div>
          <!-- Food Image -->
          <div class="flex flex-col gap-1.5 col-span-2">
            <label for="fimg">Food Image</label>
            <input
            name="fimg"
            class="border border-black h-full cursor-pointer file:text-black file:bg-neutral-300 file:border-none file:h-full hover:file:bg-stone-600 hover:file:text-white file:cursor-pointer"
            type="file"
            >
          </div>
          <!-- Desc -->
          <div class="flex flex-col gap-1.5 col-span-5">
            <label for="fdesc">Description</label>
            <textarea
            name="fdesc"
            class="border border-black px-2 py-1"
            ></textarea>
          </div>
          <!-- Ingridients Input -->
          <div class="grid col-span-full gap-y-4" id="ingredient-wrapper">
            <div class="grid grid-cols-6 gap-4">
              <!-- Labels -->
              <label for="fingredient" class="col-span-3">Ingredient</label>
              <label for="famount">Amount</label>
              <label for="fcategory">Measurement</label>
              
              <!-- Ingredient -->
              <div class="flex flex-col col-span-3">
                <select
                  id="fingredient"
                  class="border border-black h-full"
                  required
                >
                  <option></option>
                  <option value="beef">Beef</option>
                  <option value="chicken">Chicken</option>
                  <option value="flour">Flour</option>
                  <option value="galangal">Galangal</option>
                  <option value="lemon">Lemon</option>
                  <option value="lemongrass">Lemon Grass</option>
                </select>
              </div>
              <!-- Amount -->
              <div class="flex flex-col">
                <input
                  type="number"
                  name="famount"
                  class="border border-black px-2 py-1"
                  required
                />
              </div>
              <!-- Measurement -->
              <div class="flex flex-col">
                <select
                  id="fcategory"
                  class="border border-black h-full"
                  required
                >
                  <option></option>
                  <option value="tsp">tsp</option>
                  <option value="tbsp">tbsp</option>
                  <option value="cup">cup</option>
                  <option value="oz">Oz</option>
                  <option value="pound">Pound</option>
                  <option value="g">gram</option>
                  <option value="mg">miligram</option>
                </select>
              </div>
            </div>
            <div class="grid grid-cols-6 gap-4 col-span-5">
              <!-- Ingridient -->
              <div class="flex flex-col col-span-3">
                
                <select
                  id="fingredient"
                  class="border border-black h-full"
                  required
                >
                  <option></option>
                  <option value="beef">Beef</option>
                  <option value="chicken">Chicken</option>
                  <option value="flour">Flour</option>
                  <option value="galangal">Galangal</option>
                  <option value="lemon">Lemon</option>
                  <option value="lemongrass">Lemon Grass</option>
                </select>
              </div>
              <!-- Amount -->
              <div class="flex flex-col">
                <input
                  type="number"
                  name="famount"
                  class="border border-black px-2 py-1"
                  required
                />
              </div>
              <!-- Measurement -->
              <div class="flex flex-col">
                <select
                  id="fcategory"
                  class="border border-black h-full"
                  required
                >
                  <option></option>
                  <option value="tsp">tsp</option>
                  <option value="tbsp">tbsp</option>
                  <option value="cup">cup</option>
                  <option value="oz">Oz</option>
                  <option value="pound">Pound</option>
                  <option value="g">gram</option>
                  <option value="mg">miligram</option>
                </select>
              </div>
              <!-- Remove Ingredient -->
              <button type="button" class="justify-self-start text-red-700 hover:text-red-500 flex items-center gap-3">
                <i class="fa-solid fa-square-minus fa-2xl "></i>
                Remove
              </button>
            </div>
          </div>
          <!-- Add Ingredient -->
          <button type="button" class="justify-self-start text-indigo-700 hover:text-indigo-500 flex items-center gap-3">
            <i class="fa-solid fa-square-plus fa-2xl "></i>
            Add Ingredient          
          </button>

          <!-- Step -->
          <div class="flex flex-col gap-1.5 col-span-5">
            <label for="fstep">Steps</label>
            <textarea
            name="fstep"
            class="border border-black px-2 py-1"
            ></textarea>
          </div>
          <button class="h-12 mt-4 w-full bg-sky-500 text-white hover:bg-sky-700 font-semibold">
            Submit
          </button>          
        </form>
      </div>
    </main>
  </body>
</html>
