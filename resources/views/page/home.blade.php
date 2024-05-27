@extends('layout.main')

@section('content')
    <main class="flex flex-col gap-6 min-[70vh]:">
        <div>
            @include('layout.swiper')
        </div>
        <div>
            @include('layout.bestseller')
        </div>
        <div>
            @include('layout.allgames')
        </div>
    </main>
@endsection
