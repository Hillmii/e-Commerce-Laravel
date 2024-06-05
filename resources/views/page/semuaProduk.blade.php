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
        
            <li class="relative flex items-center">
                <span
                class="absolute inset-y-0 -start-px h-7 w-4 bg-primary [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180"
                >
                </span>
        
                <a
                class="flex h-7 items-center bg-rdaWhite pe-2 ps-6 text-xs font-medium transition"
                >
                Produk
                </a>
            </li>
            </ol>
        </nav>
    {{-- EndHistory --}}

<div class="w-full flex mt-16 justify-center">

    <div class="hidden md:flex justify-center w-0 md:w-[25%]">
        <div class="inline-block">
        <h1 class="text-xl font-semibold text-rdaWhite mb-10">Latest Produk</h1>

        @foreach ($limit as $produk)
            {{-- Card Latest list --}}
        <div class="flex w-full bg-rdaWhite overflow-hidden my-3 ml-2">

            <div class="w-[40%] relative group">
                <a  onclick="showUp()" title="Produk slug" id="quickView" data-name="{{ $produk->name }}" data-desc="{{ $produk->desc }}" data-price="{{ $produk->price }}" data-category="{{ $produk->categorys->name }}" data-detail="{{ $produk->categorys->detailCategorys[0]->name }}"
                    class="flex text-xs cursor-pointer font-medium text-primary justify-center items-center absolute w-full h-8 bg-Ccolor scale-y-0 z-20 group-hover:scale-y-100 bottom-0 origin-bottom transition duration-300">
                    QUICK VIEW
                </a>
                
                <img src="/img/modPanda.jpeg" alt=""
                class="h-24 w-28 object-cover"/>
            </div>
            
            <div class="p-2 w-[60%]">
                <h1 class="text-primary font-semibold text-xs">{{ $produk->name }}</h1>
                <p class="mt-1.5 text-xs text-primary font-bold">Rp{{ $produk->price }}.000</p>
                <small class="text-xs">{{ $produk->categorys->name }}, {{ $produk->detailCategorys->name }}</small>
            </div>
        </div>
        {{-- End Card Latest list --}}
        @endforeach

        {{-- DropDown --}}
    
    <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="text-primary ml-2 font-medium rounded-lg text-sm text-center inline-flex items-center justify-center w-full py-3 bg-Ccolor" type="button">Dropdown button <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
    </svg>
    </button>
    
    <!-- Dropdown menu -->
    <div id="multi-dropdown" class="z-10 hidden bg-Ccolor divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="multiLevelDropdownButton">
          @foreach ($category as $kategori)
          <li>
            @php
                $slug = strtolower($kategori->name);
            @endphp
            <a href="{{ route('category', $slug) }}" class="block px-4 font-medium py-2 hover:bg-rdaWhite">{{ $kategori->name }}</a>
          </li>
          @endforeach
          <li>
            <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex items-center justify-between w-full px-4 py-2 hover:bg-rdaWhite font-medium">Page<svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
        </svg></button>
              <div id="doubleDropdown" class="z-10 hidden bg-Ccolor divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                  <li>
                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white font-medium">Coming soon</a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white font-medium">Coming soon</a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white font-medium">Coming soon</a>
                  </li>
                  <li>
                    <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white font-medium">Coming soon</a>
                  </li>
                </ul>
            </div>
          </li>

        </ul>
    </div>
    
    {{-- EndDropDown --}}

    </div>

</div>

    
    {{-- Produk list cart --}}
    
    <section id="card" class="flex flex-wrap justify-center gap-4 mb-10 md:w-[75%] ml-2">

    @include('partials.card', ['product' => $product->skip(5)])

    </section>
    </div>
    
    <div class="w-full flex justify-center items-center mb-20">
        {{ $product->links() }}
    </div>
@endsection
