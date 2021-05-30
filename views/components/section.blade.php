@props([
  'size' => 'full',
  'id' => null,
  'class' => '',
])

@php
  switch($size) {
    case 'full':
      $sizeClass = '';
      break;
    case 'md':
      $sizeClass = 'w-full md:w-6/7 lg:w-5/6 lg:max-w-2xl';
      break;
    default:
      $sizeClass = '';
  }
@endphp

<div id="{{ $id ?? '' }}" class="c-section c-setcion-form {{ $sizeClass }} {{ $class }}">
  {{ $slot }}
</div>
