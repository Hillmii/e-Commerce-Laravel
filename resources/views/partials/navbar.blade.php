<style>
.triangle {
  width: 0;
  height: 0;
  border-left: 15px solid transparent; /* Adjust size as needed */
  border-right: 15px solid transparent; /* Adjust size as needed */
  border-bottom: 30px solid #A5C9CA; /* Adjust color as needed */
}
</style>
<nav id="nav" class="w-full bg-primary h-28 flex items-center shadow-sm">
    <div class="mx-8 w-full flex justify-center items-center">
      <a href="/" class="hidden md:inline-block text-2xl text-rdaWhite font-bold group">Vaper<span class="italic">Stuff</span></a>

      {{-- Input --}}
    <div class="relative w-full md:flex justify-center">
        <div class="relative flex w-full justify-center items-center">
          <input id="search" placeholder="Cari Produk..." class="py-2.5 rounded min-w-[85%] md:min-w-[60%] min-h-10 bg-rdaWhite active:border-transparent focus:ring-transparent active:ring-transparent">
        <a type="submit" class="absolute right-[6%] md:right-[20%]">
          <svg class="w-6 h-6 text-primary mx-5 my-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </a>

      <div class="absolute flex gap-3 -bottom-11 max-w-[85%] overflow-x-scroll scroll">
        @foreach ($category as $category)
          @php
              $slug = strtolower($category->name)
          @endphp
          <a href="{{ route('category', $slug) }}" class="text-sm text-rdaWhite hover:underline">{{ $category->name }}</a>
        @endforeach
        </div>
    </div>
    </div>

    <div class="flex gap-5 relative">
      {{-- Simpan --}}
      <a href="{{ route('simpan') }}" class="relative flex cursor-pointer">
        <svg class="w-6 h-6 text-rdaWhite" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
          <path d="M13 20a1 1 0 0 1-.64-.231L7 15.3l-5.36 4.469A1 1 0 0 1 0 19V2a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v17a1 1 0 0 1-1 1Z"/>
        </svg>
        <small class="absolute flex justify-center items-center bottom-3.5 left-3 bg-Ccolor rounded-lg px-1.5 font-semibold text-primary">0</small>
      </a>
      {{-- Profile --}}
      <div class="cursor-pointer" onclick="(profile())">
        <svg class="w-6 h-6 text-rdaWhite" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
        </svg>
      </div>
      <div id="container" class="scale-y-0 relative transition duration-300 z-50">
      <span id="segitiga" class="triangle absolute top-6 right-4"></span>
      <div id="profile" class="absolute flex-col top-12 right-1 bg-Ccolor rounded overflow-hidden shadow-lg">
        <ul class="grid gap-3 min-w-48">
          @guest    
          <a href="{{ route('login') }}" class="hover:bg-rdaWhite px-11 py-3 font-semibold">Login</a>
          <a href="{{ route('register') }}" class="hover:bg-rdaWhite px-11 py-3 font-semibold">Registrasi</a>
          @endguest
          @auth
          <a href="" class="hover:bg-rdaWhite px-11 py-3 font-semibold">My Account</a>
          <a href="" class="hover:bg-rdaWhite px-11 py-3 font-semibold">Tracking</a>
          <a onclick="return confirm('Yakin ingin logout?')" href="{{ route('logout') }}" class="hover:bg-rdaWhite px-11 py-3 font-semibold">Logout</a>
          @endauth
        </ul>
      </div>
      </div>
    </div>

    </div>
</nav>