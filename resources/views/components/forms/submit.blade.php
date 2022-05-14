@props([
  'text' => '送出',
])

<div class="w-100 h-px"></div>{{-- Just for space padding --}}

<div class="ferry-form-submit">
  <button type="submit" class="w-full max-w-xs bg-blue-600 px-5 py-3.5 text-white rounded">{{ $text }}</button>
</div>
