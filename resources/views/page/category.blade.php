@extends('partials.main')

@section('content')
    @include('partials.showUp')

{{-- History --}}
<nav id="history" aria-label="Breadcrumb" class="flex fixed left-1/2 -translate-x-1/2 top-[160px] z-30">
    <ol class="flex overflow-hidden rounded-lg shadow-xl text-primary">
    <li class="flex items-center group">
        <a
        href="{{ route('home') }}"
        class="flex h-7 items-center gap-1.5 bg-primary px-2 transition text-rdaWhite group-hover:text-Ccolor"
        >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 group-hover:text-Ccolor"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
            />
        </svg>

        <span class="ms-1.5 text-xs font-medium"> Home </span>
        </a>
    </li>
    <li class="flex items-center group">
        <a
        href="{{ route('produk.all') }}"
        class="flex h-7 items-center gap-1.5 bg-primary px-2 transition text-rdaWhite group-hover:text-Ccolor"
        >

        <span class="ms-1.5 text-xs font-medium"> Produk </span>
        </a>
    </li>

    <li class="relative flex items-center">
        <span
        class="absolute inset-y-0 -start-px h-7 w-4 bg-primary [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180"
        >
        </span>

        <a
        class="flex h-7 items-center bg-rdaWhite pe-2 ps-6 text-xs font-medium transition text-primary"
        >
        Category : {{ $name }}
        </a>
    </li>
    </ol>
</nav>
{{-- EndHistory --}}


@if (isset($categorys))
<div class="flex w-full justify-end mt-16">
    <div class="relative cursor-pointer group" onclick="filterClick()">
        <svg class="w-7 h-7 text-rdaWhite mx-14 group-hover:text-Ccolor" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.8 4H5.2a1 1 0 0 0-.7 1.7l5.3 6 .2.7v4.8c0 .2 0 .4.2.4l3 2.3c.3.2.8 0 .8-.4v-7.1c0-.3 0-.5.2-.7l5.3-6a1 1 0 0 0-.7-1.7Z"/>
        </svg>
        <div id="filter" class="scale-y-0 transition duration-300 z-[20] top-12 absolute right-9 origin-top">
            <span id="segitiga" class="triangle right-5 absolute -top-5 -z-10"></span>
            <div id="profile" class="flex-col bg-Ccolor rounded overflow-hidden shadow-lg">
              <ul class="grid gap-3 min-w-48">
                @foreach ($categorys->detailCategorys as $details)
                <a data-id="{{ $details->id }}" id="detail" class="hover:bg-rdaWhite px-11 py-3 font-semibold">{{ $details->name }}</a>
                @endforeach
              </ul>
            </div>
            </div>
    </div>
</div>


    {{-- Produk list cart --}}
    <section id="card" class="flex flex-wrap justify-center gap-4 mb-20 md:w-full mt-8">
        @include('partials.card', ['product' => $categorys->products])
     </section>
@endif
@endsection