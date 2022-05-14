@props([
  'tag' => 'a',
  'size' => 'md',
  'color' => 'blue',
])

@php
  $class = 'btn' . ' '; // 留意後方空格

  switch ($size) {
    case 'xs':
      $class .= 'btn-xs';
      break;

    case 'sm':
      $class .= 'btn-sm';
      break;

    case 'md':
      $class .= 'btn-md';
      break;

    case 'lg':
      $class .= 'btn-lg';
      break;
  }

  $class .= ' '; // 留意後方空格

  switch ($color) {
    case 'blue':
      $class .= 'btn-blue';
      break;

    case 'red':
      $class .= 'btn-red';
      break;
  }
@endphp

<{{ $tag }} {{ $attributes->class([$class])->merge() }}>{{ $slot }}</{{ $tag }}>
