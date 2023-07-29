@props([
'title' => '',
'description' => '',
'class' => '',
'footer' => ''
])
  <div class="p-4 {{$class}} text-center bg-white border shadow-sm border-slate-100 rounded-lg">
    <div class="">
      {{ $image ?? '' }}
    </div>
    <div class="mt-3">
      <p class="text-lg font-semibold text-slate-700">{{$title ?? ''}}</p>
      <p class="text-gray-500">{{$slot}}</p>
    </div>
  </div>
