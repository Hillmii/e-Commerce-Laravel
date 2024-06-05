<section
id="sectionShow"
class="hidden w-full opacity-0 top-0 left-0 right-0 bottom-0 h-full bg-primary bg-opacity-50 z-[98]">
</section>
<div id="loading" class="w-20 h-20 hidden border-t-4 z-[99] rounded-full left-[45%] animate-spin top-[45%] fixed"></div>

<div id="quick" class="w-[81%] h-[90%] md:h-[80%] scroll overflow-y-scroll scale-y-0 origin-top duration-200 transition bg-rdaWhite z-[100] fixed left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2">
<div class="block md:flex w-full h-full justify-center">
<img src="/img/modPanda.jpeg" alt=""
class="w-full h-1/2 md:h-full md:w-1/2 object-cover" />

<div class="w-80% h-[80%] md:h-auto md:w-1/2 flex flex-col mx-3 my-3 md:mx-10 md:my-10">
    <h1 id="showName" class="md:text-3xl text-lg font-bold mb-2"></h1>
    <span class="w-1/3 h-0.5 bg-primary mb-2"></span>
    <h2>Rp <span id="showPrice"></span>.000</h2>
    <span class="w-1/2 h-0.5 bg-primary mt-2"></span>
    <h2>Kategori: <span class="font-semibold" id="showCategory"></span></h2>
    <small class="mt-2">Description:</small>
    <p class="font-semibold" id="showDesc"></p>
</div>
</div>

<button onclick="closeShow()" class="fixed top-3 right-3">
  <svg class="w-6 h-6 text-Ccolor md:text-primary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
  </svg>
</button>
</div>