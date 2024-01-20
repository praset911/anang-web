@extends('layouts.base')

@section('content')
@auth
@foreach ($berita as $item)
<div class="flex d-inline-flex py-2">
    <div class="card" style="width: 18rem; height: 30rem; position: relative;">
        <img class="card-img-top" src="{{ $item['image']['small'] }}" alt="{{ $item['title'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $item['title'] }}</h5>
            <p class="card-text">{{ $item['contentSnippet'] }}</p>
            <a href="{{ $item['link'] }}" target="_blank" class="btn btn-primary"
                style="bottom: 20px; position: absolute">Baca Selengkapnya</a>
        </div>
    </div>
</div>
@endforeach
@endauth

<!-- Product Section End -->
@endsection