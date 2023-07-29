<div class="">
  <x-hive-display-section class="bg-slate-50 py-12 md:py-24">
    <x-hive-display-section component='boxedSection'>
      <div class="grid md:grid-cols-3 gap-4 md:gap-8">
        <!-- Domains -->
        <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
          <x-slot name="image">
            <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Domains')}}">
          </x-slot>
          <x-slot name="title">
            {{_('Buy a Domain')}}
          </x-slot>
             Find a domain for your web visibility
         </x-hive-display-link >


         <!-- Websites -->
         <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
           <x-slot name="image">
             <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Websites')}}">
           </x-slot>
           <x-slot name="title">
             {{_('Build your Website')}}
           </x-slot>
              Find a domain for your web visibility
          </x-hive-display-link >



          <!-- Hostings -->
          <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
            <x-slot name="image">
              <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Hostings')}}">
            </x-slot>
            <x-slot name="title">
              {{_('Find the right Hosting')}}
            </x-slot>
               Find a domain for your web visibility
           </x-hive-display-link >



           <!-- Email -->
           <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
             <x-slot name="image">
               <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Email')}}">
             </x-slot>
             <x-slot name="title">
               {{_('Create a professional Email')}}
             </x-slot>
                Find a domain for your web visibility
            </x-hive-display-link >



            <!-- Marketing -->
            <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
              <x-slot name="image">
                <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Marketing')}}">
              </x-slot>
              <x-slot name="title">
                {{_('Boost your business')}}
              </x-slot>
                 Find a domain for your web visibility
             </x-hive-display-link >



             <!-- Bundles -->
             <x-hive-display-link   base='six-core::components' source='cards' component="stageShow">
               <x-slot name="image">
                 <img src="{{asset('/six-core/img/domain0.jpg')}}" class="rounded-full w-12 h-12" alt="{{__('Bundles')}}">
               </x-slot>
               <x-slot name="title">
                 {{_('Bundles')}}
               </x-slot>
                  Find a domain for your web visibility
              </x-hive-display-link >




      </div>

    </x-hive-display-section>
  </x-hive-display-section>
</div>
