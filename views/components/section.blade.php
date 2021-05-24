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
      $sizeClass = 'lg:w-7/8 xl:w-5/6 xl:max-w-2xl';
      break;
    default:
      $sizeClass = '';
  }
@endphp

<div id="{{ $id ?? '' }}" class="c-section c-setcion-form {{ $sizeClass }} {{ $class }}">
  {{ $slot }}
</div>
