<div class="">
  <x-hive-display-section component='boxedSection'>
    <div class="grid lg:grid-cols-12 gap-4 mt-6">
      <div class="lg:col-span-6 py-3 lg:py-8">
    <div class="relative text-lg max-w-xl mx-auto">
      <label for="UserEmail" class="sr-only"> {{__('Search')}} </label>
      <div class="absolute inset-y-0 left-5 py-3 flex items-center pointer-events-none">
       www.
      </div>
      <x-hive-form-input
      name="domain_search"
      rounded="full"
      text_size="lg"
      placeholder="example.com"
      class="pr-24 pl-16 py-3 rounded-full focus:border-[#a1a11f]"
      />

      <span class="absolute inset-y-0 end-0 grid px-2 place-content-center">
        <button
          type="button"
          class="rounded-full p-1.5 px-3.5 text-white flex items-center gap-2 bg-[#a1a11fe5] hover:bg-[#a1a11f]"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
            fill="currentColor"
            stroke-width="4"
            class="h-4 w-4"
          >
          <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
        </svg>
        <span class="text-md font-semibold">Search domain</span>
        </button>
      </span>
    </div>
  </div>
</div>

  </x-hive-display-section>
</div>
