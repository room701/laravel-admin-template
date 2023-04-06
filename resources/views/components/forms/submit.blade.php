@props([
  'text' => '送出',
])

<div class="w-100 h-px"></div>{{-- Just for space padding --}}

<div class="ferry-form-submit">
  <button type="submit" class="ferry-form-submit-button">{{ $text }}</button>
</div>
