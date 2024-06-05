<div id="popup" class="fixed z-[60] top-5 mx-2 md:mx-0 md:left-5 md:top-5 scale-0 transition duration-300 rounded-2xl max-w-96 border border-Ccolor bg-Ccolor p-4 shadow-lg sm:p-6 lg:p-8" role="alert">
    <div class="flex items-center gap-4">
      <span class="shrink-0 rounded-full bg-primary p-2 text-white">
        <svg
          class="h-4 w-4"
          fill="currentColor"
          viewbox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            clip-rule="evenodd"
            d="M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z"
            fill-rule="evenodd"
          />
        </svg>
      </span>
  
      <p class="font-medium sm:text-lg text-parimary">New message!</p>
    </div>
  
    <p class="mt-4 text-primary">
      Harap masuk ke akun Anda untuk mengakses fitur eksklusif, Terima kasih atas partisipasinya! 
    </p>
    <div class="mt-6 sm:flex sm:gap-4">
      <a
        class="inline-block w-full cursor-pointer rounded-lg bg-primary px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto"
        href="{{ route('login') }}"
      >
        Login
      </a>
  
      <a
        class="mt-2 inline-block cursor-pointer w-full rounded-lg bg-rdaWhite px-5 py-3 text-center text-sm font-semibold text-gray-500 sm:mt-0 sm:w-auto"
        onclick="closeNotif()"
      >
        Close
      </a>
    </div>
  </div>