<div class="bg-white">
    <div class="container mx-auto px-5 md:px-0 py-8 md:py-16 text-center">
        <div class="w-full md:w-3/4 uppercase text-xl md:text-4xl mx-auto">
            <h1 class="text-blue-900 font-bold">{{ $page->title() }}</h1>
        </div>
        <hr class="w-24 mx-auto border-2 border-blue-600 my-2">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8 md:my-16">
            <?php 
    $items = $page->acerca()->toStructure();
    foreach ($items as $item): ?>
    <div class="px-5 md:px-0  mt-4 md:mt-8">
        <div class="block">
    <?php foreach ($item->icono()->toFiles() as $image): ?>
    <img class="w-16 m-auto py-5" src="<?= $image->url() ?>" class="m-auto">
    <?php endforeach ?>
      <h1 class="text-2xl text-center text-blue-900 tracking-widest"><?= $item->titulo()->kti() ?></h1>
    </div>
      <p class="text-sm text-center md:text-md text-gray-600 tracking-widest font-light"><?= $item->texto()->kti() ?></p>
    </div>
    <?php endforeach ?>
          </div>
    <div class="text-center">
      <a href="{{ $page->link() }}"><button class="bg-blue-600 uppercase text-white px-4 py-3 rounded-md my-3">{{ $page->boton() }}</button></a>
    </div>
    </div>
    </div>