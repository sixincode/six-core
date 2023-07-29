<div class="mx-auto grid max-w-7xl grid-cols-1 gap-6 gap-4 p-4 md:grid-cols-12 md:gap-8 sm:p-8">
  <div class="md:col-span-9 grid grid-cols-2 gap-4 md:gap-8">
    <div class="grid gap-4">
      <div class="flex flex-col gap-4">
     <x-hive-display-link
       title='{{__("Search Domain")}}'
       url='{{route("central.domains.index")}}'
       base='six-core::components'
       component='goList'
       icon='domain_search'
       iconWidth='1.5'/>

       <x-hive-display-link
         title='{{__("Transfer Domain")}}'
         url='{{route("central.domains.transfer")}}'
         base='six-core::components'
         component='goList'
         icon='transfer'
         iconWidth='1.5'/>

         <x-hive-display-link
           title='{{__("Domain Extensions")}} (TLDs)'
           url='{{route("central.domains.extensions")}}'
           base='six-core::components'
           component='goList'
           icon='tld'
           iconWidth='1.5'/>
         </div>
       </div>
   <div class="flex flex-col gap-4">
     <x-hive-display-link
       title='{{__("Domain LookUp")}} (WHOIS)'
       url='{{route("central.domains.whois")}}'
       base='six-core::components'
       component='goList'
       icon='whois'
       iconWidth='1.5'/>

     </div>
   </div>
   <div class="md:col-span-3">
     <div class="bg-gray-200 rounded-xl min-h-40 h-full w-full">

     </div>
   </div>
</div>
