@props([
  'text' => '送出',
])

<div class="w-100 h-px"></div>{{-- Just for space padding --}}

<div class="flex justify-center bg-gradient-to-r from-indigo-100 to-purple-200 bg-opacity-75 -mx-7 px-7 py-7">
  <button type="submit" class="btn btn-primary btn-lg w-full max-w-xs">{{ $text }}</button>
</div>
