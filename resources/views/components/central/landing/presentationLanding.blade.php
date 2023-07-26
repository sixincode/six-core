<div class="">
  <x-hive-display-section class="bg-slate-50 py-12 md:py-24">
    <x-hive-display-section component='boxedSection'>
      <div class="grid md:grid-cols-12 gap-4 md:gap-8">
        <div class="md:col-span-5">
          <h2 class="text-3xl font-bold tracking-tight text-gray-800 sm:text-4xl">Why pick 6ixin?</h2>
          <p class="mt-6 text-lg leading-8 text-gray-700">
            Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla.
          </p>
        </div>
        <div class="md:col-span-7">
          <div class="grid gap-4">
            <!-- Domain -->
            <x-hive-display-card component="plex.pill" class="inline-flex space-x-4">
              <x-slot name="image">
                <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Domain')}}">
              </x-slot>
              <x-slot name="title">
                {{_('Domains')}}
              </x-slot>
                 Find a domain for your web visibility
             </x-hive-display-card >

             <!-- Hosting -->
             <x-hive-display-card component="plex.pill" class="inline-flex space-x-4">
               <x-slot name="image">
                 <img src="{{asset('/six-core/img/hosting0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Domain')}}">
               </x-slot>
               <x-slot name="title">
                 {{_('Hosting')}}
               </x-slot>
                  Host your plateform with full availability and scalability services
              </x-hive-display-card >

              <!-- Marketing -->
              <x-hive-display-card component="plex.pill" class="inline-flex space-x-4">
                <x-slot name="image">
                  <img src="{{asset('/six-core/img/marketing0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Domain')}}">
                </x-slot>
                <x-slot name="title">
                  {{_('Marketing')}}
                </x-slot>
                   Promote and increase your platfrom visibility
               </x-hive-display-card >

          </div>
         </div>

      </div>

    </x-hive-display-section>
  </x-hive-display-section>
</div>
