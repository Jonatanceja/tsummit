<div class="container mx-auto py- md:py-16">
    <div class="w-full md:w-3/4 uppercase text-xl md:text-4xl mx-auto text-center">
        <h1 class="text-blue-900  font-bold">{{ $page->title() }}</h1>
    </div>
    <hr class="w-24 mx-auto border-2 border-blue-600 mt-2 mb-16">
    <div class="center">
        <?php 
	  $items = $page->carousel()->toStructure();
	  foreach ($items as $item): ?>
        <?php if($image = $item->imagen()->toFile()): ?>    
            <img src="{{ $image->url() }}" alt="">
            <?php endif ?>
            <?php endforeach ?>
    </div>
</div>
