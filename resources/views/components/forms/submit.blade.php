@props([
  'text' => '送出',
])

<div class="w-100 h-px"></div>{{-- Just for space padding --}}

<div class="flex justify-center bg-gradient-to-r from-gray-100/70 to-slate-200/60 -mx-6 px-6 py-6">
  <button type="submit" class="w-full max-w-xs bg-blue-600 px-5 py-3.5 text-white rounded">{{ $text }}</button>
</div>
