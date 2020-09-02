<div class="container mx-auto px-5 md:px-0 py-8 md:py-16 text-center">
    <div class="w-full md:w-3/4 uppercase text-xl md:text-4xl mx-auto">
        <h1 class="text-blue-900  font-bold">{{ $page->titulo() }}</h1>
    </div>
    <hr class="w-24 mx-auto border-2 border-blue-600 my-2">
    <div class="w-full md:w-2/4 mx-auto">
        <p class="text-gray-600 text-sm md:text-base">{{ $page->texto() }}</p>
    </div>
</div>