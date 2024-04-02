<div class="bg-white">
 <x-hive-display-section component='boxedSection'>
  <h2 class="text-2xl text-center my-2 font-bold sm:text-3xl">
   Get your business on rails
  </h2>
  <x-hive-display-tabs :tabs='["recommended","website","hosting","sell"]' :titles='["Recommended","Create a website","Security & Hosting","Sell everywhere"]' :icons='[]' component='pillCent' class='mt-4' >
    <x-slot name="tabsContent">
       <div x-cloak x-show="activeTab === 'recommended'">
        <div class="grid md:grid-cols-2 gap-4 mt-6">
          <div class="grid grid-cols-1">
            <x-hive-display-card component="sade">
                 <div class="absolute inset-0">
                  <img class="h-full w-full object-cover object-right-top rounded-lg" src="https://img1.wsimg.com/cdnassets/transform/8416efa0-7ccc-4edb-93e0-328ed3b5cecf/Recommended-Domains-Large-jpg" alt="Domains">
                 </div>
                 <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>

               <div class="flex relative p-4 sm:p-6 mt-4 sm:mt-6 items-end">
                <div class="grid">
                 <p class="text-xl font-bold text-black sm:text-2xl">Domains</p>
                 <p class="mt-4 text-black sm:text-md/relaxed max-w-md">
                   Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                   numquam ea!
                 </p>
                 <x-hive-form-button tag="a" class="mt-3 pl-0 font-semibold text-lg leading-6 text-gray-100 hover:text-white" color="black">
                   Search Domains
                 </x-hive-form-button>
               </div>

              </div>
            </x-hive-display-card >
          </div>
          <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
            <x-hive-display-card component="sade">
                 <div class="absolute inset-0">
                    <img class="h-full w-full object-cover object-right-top rounded-lg" src="https://img1.wsimg.com/cdnassets/transform/113422dc-1da6-44fb-9c93-a36dfa1ac2b2/Recommended-Websites-jpg" alt="Websites">
                   </div>
                   <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>

                 <div class="grid relative p-4 sm:p-6 mt-4 sm:mt-6">

                   <p class="text-xl font-bold text-black sm:text-2xl">Websites</p>
                   <p class="mt-4 text-black sm:text-md/relaxed max-w-md">
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                     numquam ea!
                   </p>
                   <x-hive-form-button tag="a" class="mt-3 pl-0 font-semibold text-lg leading-6 text-gray-100 hover:text-white" color="black">
                     Search Domains
                   </x-hive-form-button>
                </div>
            </x-hive-display-card >
            <x-hive-display-card component="sade">
                 <div class="absolute inset-0">
                    <img class="h-full w-full object-cover object-right-top rounded-lg" src="https://img1.wsimg.com/cdnassets/transform/7d74765c-662b-4095-972d-bbb3e31e5b48/Recommended-Email-jpg" alt="Emails">
                   </div>
                   <div class="absolute inset-0 bg-white/75 sm:bg-transparent sm:from-white/95 sm:to-white/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"></div>

                 <div class="grid relative p-4 sm:p-6 mt-4 sm:mt-6">

                   <p class="text-xl font-bold text-black sm:text-2xl">Websites</p>
                   <p class="mt-4 text-black sm:text-md/relaxed max-w-md">
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
                     numquam ea!
                   </p>
                   <x-hive-form-button tag="a" class="mt-3 pl-0 font-semibold text-lg leading-6 text-gray-100 hover:text-white" color="black">
                     Search Domains
                   </x-hive-form-button>
                </div>
            </x-hive-display-card >
          </div>
         </div>

       </div>
       <div x-cloak x-show="activeTab === 'website'">
         <div class="grid md:grid-cols-2 gap-4 mt-6">
           <div class="grid grid-cols-1">
             <div class="p-4 bg-green-200 rounded-md">
               Websites
             </div>
           </div>
           <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
             <div class="p-4 bg-blue-200 rounded-md">
               SEO
             </div>
             <div class="p-4 bg-red-200 rounded-md">
               Ai Assistance
             </div>
           </div>
          </div>
       </div>
       <div x-cloak x-show="activeTab === 'hosting'">
         <div class="grid md:grid-cols-2 gap-4 mt-6">
           <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
             <div class="p-4 bg-green-200 rounded-md">
               Hosting
             </div>
             <div class="p-4 bg-yellow-200 rounded-md">
               Dedicated Servers
             </div>
           </div>
           <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
             <div class="p-4 bg-blue-200 rounded-md">
               SSL
             </div>
             <div class="p-4 bg-red-200 rounded-md">
                Back Ups and Recovery
             </div>
           </div>
          </div>
       </div>
       <div x-cloak x-show="activeTab === 'sell'">
         <div class="grid md:grid-cols-2 gap-4 mt-6">
           <div class="grid grid-cols-1 gap-4">
            <div class="p-4 bg-green-200 rounded-md">
              Online Store
            </div>

          </div>
          <div class="grid grid-cols-2 md:grid-cols-1 gap-4">
            <div class="p-4 bg-blue-200 rounded-md">
              Marketing
            </div>
            <div class="p-4 bg-red-200 rounded-md">
              Analytics
            </div>
          </div>
         </div>
       </div>

    </x-slot>
  </x-hive-display-tabs>
</x-hive-display-section>
</div>
