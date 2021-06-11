@props([
  'size' => 'full',
  'id' => null,
  'class' => '',
  'isForm' => false,
])

@php
  switch($size) {
    case 'full':
      $sizeClass = 'w-full';
      break;
    case 'md':
      $sizeClass = 'w-full md:w-6/7 lg:w-5/6 lg:max-w-2xl';
      break;
    case 'lg':
      $sizeClass = 'w-full md:w-8/9 lg:w-7/8 lg:max-w-3xl';
      break;
    case 'xl':
      $sizeClass = 'w-full md:w-11/12 lg:w-10/12';
      break;
    default:
      $sizeClass = '';
  }
@endphp

<div id="{{ $id ?? '' }}" class="c-section {{ $isForm ? 'c-setcion-form' : '' }} {{ $sizeClass }} {{ $class }}">
  {{ $slot }}
</div>
