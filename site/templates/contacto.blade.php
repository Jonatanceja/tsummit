@extends('layouts.default')
@section('content')

<div class="container mx-auto px-5 md:px-0">
    <h1 class="text-xl md:text-2xl text-blue-900 font-bold mb-2 uppercase mt-24">{{ $page->titulo() }}</h1>
    <p class="text-sm md:text-base text-gray-600"><?= $page->texto()->kti() ?></p>
    <div class="my-8 md:my-8">
    <?php snippet('formbuilder'); ?>
    </div>  
</div>
<div>
    <div class="mt-5 mb-0">{!! $page->mapa()->value() !!}</div>
</div>
@endsection