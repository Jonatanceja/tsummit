<div class="bg-blue-900">
    <div class="container mx-auto px-5 md:px-0 py-8 md:py-16 text-center">
        <div class="w-full md:w-3/4 uppercase text-xl md:text-4xl mx-auto">
            <h1 class="text-white font-bold">{{ $page->title() }}</h1>
        </div>
        <hr class="w-24 mx-auto border-2 border-blue-600 my-2">
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8 md:my-16">
            <?php 
    $items = $page->acerca()->toStructure();
    foreach ($items as $item): ?>
    <div class="px-5 md:px-0  my-4 md:my-8">
        <div class="flex">
    <?php foreach ($item->icono()->toFiles() as $image): ?>
    <img class="w-12" src="<?= $image->url() ?>" class="m-auto">
    <?php endforeach ?>
      <h1 class="text-2xl text-gray-200 tracking-widest ml-4"><?= $item->titulo()->kti() ?></h1>
    </div>
      <p class="text-sm md:text-md text-left text-gray-200 tracking-widest font-light ml-16"><?= $item->texto()->kti() ?></p>
    </div>
    <?php endforeach ?>
          </div>
    
    </div>
    </div>