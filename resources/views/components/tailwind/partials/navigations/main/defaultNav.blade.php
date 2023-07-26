@props([
    // title of the nav
    'title' => '',
    // should the nav be displayed with a shadow
    'has_shadow' => 'true',
    // for backward compatibility with Laravel 8
    'hasShadow' => 'true',
    // reduce padding within the nav
    'reduce_padding' => 'false',
    // for backward compatibility with Laravel 8
    'reducePadding' => 'false',
    // content to display as nav header
    'header' => '',
    // content to display as nav footer
    'footer' => '',
    // additional css
    'class' => '',
])

<!-- ====== Navbar Section Start -->
<!--Nav-->
<nav class="bg-white">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button -->
        <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="menuSlogan flex flex-shrink-0 items-center">
          <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:flex">
          <x-hive-display-link
            title='{{__("Domains")}}'
            url='{{route("central.domains.index")}}'
            current='{{request()->routeIs( "central.domains.*")}}'
            base='six-core::components'
            component='mainNav'
            icon='domain'
            iconWidth='1.5'/>

          <x-hive-display-link
            title='{{__("Hostings")}}'
            url='{{route("central.hostings.index")}}'
            current='{{request()->routeIs( "central.hostings.*")}}'
            base='six-core::components'
            component='mainNav'
            icon='hosting'
            iconWidth='1.5'/>

          <x-hive-display-link
            title='{{__("Marketing")}}'
            url='{{route("central.marketing.index")}}'
            current='{{request()->routeIs( "central.marketing.*")}}'
            base='six-core::components'
            component='mainNav'
            icon='marketing'
            iconWidth='1.5'/>

        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        <!-- Profile dropdown -->
        <div class="relative ml-3">
          <x-hive-display-dropdown>
            <x-slot name="trigger">
            <button type="button" class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
              <span class="sr-only">Open user menu</span>
              <span class="h-8 w-8 bg-slate-300 rounded-full"></span>
             </button>
            </x-slot>
            <x-slot name="content">
           <div class="">
             redefdfdf
           </div>
          </x-slot>
        </x-hive-display-dropdown>

        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 pb-4 pt-2">
      <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
      <a href="#" class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700">Dashboard</a>
      <a href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Team</a>
      <a href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Projects</a>
      <a href="#" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700">Calendar</a>
    </div>
  </div>
</nav>

 
