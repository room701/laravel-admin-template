@props([
  'text' => '送出',
])

<div class="w-100 h-px"></div>{{-- Just for space padding --}}

<div class="bg-gradient-to-r from-indigo-100 to-purple-200 -mx-7 px-7 py-9">
  <button type="submit" class="btn btn-primary btn-lg w-full">{{ $text }}</button>
</div>
