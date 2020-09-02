<div class="bg-blue-100">
<div class="container mx-auto py-8 md:py-16 px-5 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <div>
        <h1 class="text-xl md:text-2xl text-blue-900 font-bold mb-2 uppercase">{{ $page->titulo() }}</h1>
        <p class="text-sm md:text-base text-gray-600"><?= $page->texto()->kti() ?></p>
        </div>
        <div>
            <?php if($image = $page->imagen()->toFile()): ?>  
                <img src="{{ $image->url() }}" alt="">
            <?php endif ?>
        </div>
    </div>

</div>
</div>