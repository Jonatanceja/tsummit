<div class="flex w-full text-left z-0">
    <div class="slider w-full">
        <?php if($image = $page->imagen()->toFile()): ?>  
        <div class="py-16 md:py-40" style="background:linear-gradient(0deg, rgba(45, 55, 72, 0.7), rgba(45, 55, 72, 0.7)), url({{ $image->url() }});">
        <?php endif ?>
            <div class="container mx-auto items-center p-12 md:p-0">
                <h1 class="w-full md:w-1/2 uppercase text-2xl lg:text-4xl tracking-widest text-white font-bold"><b>{{ $page->titulo() }}</b></h1>
                <p class="w-full md:w-1/2 tracking-widest text-white text-sm md:text-base">{{ $page->texto() }}</p>
                <a href="{{ $page->link() }}"><button class="bg-blue-600 uppercase text-white px-4 py-3 rounded-md my-3">{{ $page->boton() }}</button></a>
            </div>
        </div>
    </div>
</div>