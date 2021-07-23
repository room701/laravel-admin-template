@props([
  'size' => 'full',
  'class' => '',
  'isForm' => false,
])

@php
  switch($size) {
    case 'full':
      $sizeClass = 'w-full';
      break;
    case 'md':
      $sizeClass = 'w-full md:w-6/7 lg:w-4/5 lg:max-w-xl';
      break;
    case 'lg':
      $sizeClass = 'w-full md:w-9/10 lg:w-8/9 lg:max-w-5xl';
      break;
    case 'xl':
      $sizeClass = 'w-full md:w-11/12 lg:w-10/12 lg:max-w-7xl';
      break;
    default:
      $sizeClass = '';
  }
@endphp

<section class="-mx-4 lg:-mx-0" {{ $attributes }}>
  <div class="c-section {{ $isForm ? 'c-setcion-form' : '' }} {{ $sizeClass }} {{ $class }}">
    {{ $slot }}
  </div>
</section>
