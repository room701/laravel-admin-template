@props([
  'tag' => 'a',
  'size' => 'md',
  'color' => 'blue',
])

@php
  $class = 'rounded text-center leading-none' . ' '; // 留意後方空格

  switch ($size) {
    case 'md':
      $class .= 'px-3 py-1.5';
      break;

    case 'sm':
      $class .= 'px-3 py-1.5 text-sm';
      break;
  }

  $class .= ' '; // 留意後方空格

  switch ($color) {
    case 'blue':
      $class .= 'bg-blue-500 text-white';
      break;

    case 'red':
      $class .= 'bg-red-500 text-white';
      break;
  }
@endphp

<{{ $tag }} {{ $attributes->class([$class])->merge() }}>{{ $slot }}</{{ $tag }}>
