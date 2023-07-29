<div class="py-20">
  <x-hive-display-section component='boxedSection'>
   <div class="grid grid-cols-1 gap-4 lg:grid-cols-2">
    <div class="">
      <div class="mx-auto max-w-lg text-center lg:mx-0 lg:text-left" >
        <p class="text-sm font-semibold text-blue-800">
          Get Started Today
        </p>
       <h2 class="text-3xl font-bold sm:text-4xl mt-3">Find your career path</h2>
        <p class="mt-4 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut vero
          aliquid sint distinctio iure ipsum cupiditate? Quis, odit assumenda?
          Deleniti quasi inventore, libero reiciendis minima aliquid tempora.
          Obcaecati, autem.
        </p>
  </div>
    </div>
    <div class="">
      <div class="">
        <div x-data="{
        activeAccordion: '',
        setActiveAccordion(id) {
        this.activeAccordion = (this.activeAccordion == id) ? '' : id
        }
      }" class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border-y-2 border-gray-200 divide-y-2 divide-gray-200 max-w-2xl">
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
              <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline font-semibold text-lg">
                  <span>What is Pines?</span>
                  <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </button>
              <div x-show="activeAccordion==id" x-collapse x-cloak>
                  <div class="p-4 pt-0 opacity-70 text-lg">
                  Pines is a UI library built for AlpineJS and TailwindCSS.
                  </div>
              </div>
            </div>
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
              <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline font-semibold text-lg">
                  <span>How do I install Pines?</span>
                  <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </button>
              <div x-show="activeAccordion==id" x-collapse x-cloak>
                  <div class="p-4 pt-0 opacity-70 text-lg">
                  Add AlpineJS and TailwindCSS to your page and then copy and paste any of these elements into your project.
                  </div>
              </div>
            </div>
            <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
              <button @click="setActiveAccordion(id)" class="flex items-center justify-between w-full p-4 text-left select-none group-hover:underline font-semibold text-lg">
                  <span>Can I use Pines with other libraries or frameworks?</span>
                  <svg class="w-4 h-4 duration-200 ease-out" :class="{ 'rotate-180': activeAccordion==id }" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
              </button>
              <div x-show="activeAccordion==id" x-collapse x-cloak>
                  <div class="p-4 pt-0 opacity-70 text-lg">
                  Absolutely! Pines works with any other library or framework. Pines works especially well with the TALL stack.
                  </div>
              </div>
            </div>
        </div>
      </div>
  </div>
 </div>
 </x-hive-display-section>
</div>
