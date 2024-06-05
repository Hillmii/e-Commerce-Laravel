@extends('partials.main')

@section('content')
<section class="overflow-hidden min-h-screen bg-second-primary sm:grid sm:grid-cols-2 sm:items-center">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
        <h2 class="text-2xl font-bold text-Ccolor md:text-3xl">
            Temukan pengalaman vaping yang tak tertandingi dengan VaperStuff
        </h2>
  
        <p class="hidden text-rdaWhite md:mt-4 md:block">
            "Selamat datang di VaperStuff, tempatnya untuk menemukan kepuasan rokok elektronik terbaik! Nikmati pilihan produk berkualitas tinggi kami, dari perangkat terkini hingga berbagai varian e-liquid premium"
        </p>
  
        <div class="mt-4 md:mt-8">
          <a
            href="{{ route('produk.all') }}"
            class="inline-block rounded bg-primary px-12 py-3 text-base hover:text-primary font-medium text-Ccolor transition duration-200 hover:bg-Ccolor"
          >
            <div class="flex items-center justify-center">
                Explore
                <svg class="w-6 h-6 flex" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 19 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm1-4H5m0 0L3 4m0 0h5.501M3 4l-.792-3H1m11 3h6m-3 3V1"/>
                </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  
    <div class="w-full flex justify-center items-center mx-5">
      <img
      alt="Violin"
      src="/img/TokoVape.jpg"
      class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end rounded-ss-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px]"
    />
    </div>
  </section>
{{-- separator --}}
  <section>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8 mb-20">
      <header class="text-center">
        <h2 class="text-xl font-bold text-Ccolor sm:text-3xl">New Collection</h2>
  
        <p class="mx-auto mt-4 max-w-md text-rdaWhite">
          "Sambut koleksi terbaru dari VaperStuff! Kini hadir dengan perangkat vaping terkini, flavor e-liquid eksklusif, dan aksesori stylish"
        </p>
      </header>
  
      <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
        @php
              $slug = strtolower($produk[0]->categorys->name);
        @endphp
        <li>
          <a href="{{ route('category', $slug) }}" class="group relative block">
            <img
              src="/img/pod.webp"
              alt=""
              class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
            />
  
            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
              <h3 class="text-xl font-medium bg-rdaWhite text-primary px-2 py-1">{{ $produk[0]->categorys->name }}</h3>
  
              <span
                class="mt-1.5 inline-block bg-Ccolor hover:bg-primary hover:text-Ccolor transition duration-200 px-5 py-3 text-xs font-medium uppercase tracking-wide text-primary"
              >
                Shop Now
              </span>
            </div>
          </a>
        </li>
  
        <li>
          @php
              $slug = strtolower($produk[1]->categorys->name);
          @endphp
          <a href="{{ route('category', $slug) }}" class="group relative block">
            <img
              src="/img/aioMaydaynew.jpg"
              alt=""
              class="aspect-square object-cover transition duration-500 group-hover:opacity-90"
            />
  
            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
              <h3 class="text-xl font-medium bg-rdaWhite text-primary px-2 py-1">{{ $produk[1]->categorys->name }}</h3>
  
              <span
                class="mt-1.5 inline-block bg-Ccolor hover:bg-primary hover:text-Ccolor transition duration-200 px-5 py-3 text-xs font-medium uppercase tracking-wide text-primary"
              >
                Shop Now
              </span>
            </div>
          </a>
        </li>
  
        <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
          @php
              $slug = strtolower($produk[2]->categorys->name);
          @endphp
          <a href="{{ route('category', $slug) }}" class="group relative block">
            <img
              src="/img/modPanda.jpeg"
              alt=""
              class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90"
            />
  
            <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
              <h3 class="text-xl font-medium bg-rdaWhite text-primary px-2 py-1">{{ $produk[2]->categorys->name }}</h3>
  
              <span
                class="mt-1.5 inline-block bg-Ccolor hover:bg-primary hover:text-Ccolor transition duration-200 px-5 py-3 text-xs font-medium uppercase tracking-wide text-primary"
              >
                Shop Now
              </span>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </section>
@endsection