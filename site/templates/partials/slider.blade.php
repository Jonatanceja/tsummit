
<div class="flex w-full text-left z-0">
    <div class="slider w-full">
        @foreach($items as $item)
        <?php if($image = $item->imagen()->toFile()): ?>   
        <div class="" style="background:linear-gradient(0deg, rgba(45, 55, 72, 0.4), rgba(45, 55, 72, 0.4)), url({{ $image->url() }}); background-position: center; background-size: cover;">
        <?php endif ?>
            <div class="container mx-auto p-12 md:p-0">
                <div class="flex items-center" style="height: 50vh">
                    <div>
                    <h1 class="w-full md:w-1/2 uppercase text-2xl lg:text-4xl tracking-widest text-white font-bold"><b>{{ $item->titulo() }}</b></h1>
                    <p class="w-full md:w-1/2 tracking-widest text-white text-sm md:text-base">{{ $item->texto() }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>