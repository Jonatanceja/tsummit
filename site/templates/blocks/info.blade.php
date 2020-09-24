<div class="bg-blue-900">
<div class="container mx-auto px-5 md:px-0 py-8 md:py-16">
    <div class="w-full md:w-3/4 uppercase text-xl md:text-4xl mx-auto text-center">
        <h1 class="text-white font-bold">{{ $page->title() }}</h1>
    </div>
    <hr class="w-24 mx-auto border-2 border-blue-600 my-2">
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-8 md:my-16">
        <?php 
$items = $page->servicio()->toStructure();
foreach ($items as $item): ?>
<div class="px-5 md:px-0  my-2 md:my-2">
    <div class="flex">
<?php foreach ($item->icono()->toFiles() as $image): ?>
<img class="w-12" src="<?= $image->url() ?>" class="m-auto">
<?php endforeach ?>
  <h1 class="text-2xl text-gray-200 tracking-widest ml-4"><?= $item->titulo()->kti() ?></h1>
</div>
  <p class="text-sm md:text-md text-left text-gray-200 tracking-widest font-light ml-16"><?= $item->texto()->kti() ?></p><br>
  <div class="-mt-4">
  <a class="ml-16 text-left text-blue-300" href="{{ $page->link() }}">Ver más</a>
  </div>
</div>
<?php endforeach ?>
      </div>

</div>
</div>