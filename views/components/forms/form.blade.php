@props([
  'model' => null,
  'url' => null,
  'method' => 'post',
  'files' => false,
  'class' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'url' => $url,
    'method' => $method,
    'class' => "space-y-default {$class}",
    'files' => $files,
  ];
@endphp

@if (isset($model))
{!! Form::model($model ,$attributes) !!}
@else
{!! Form::open($attributes) !!}
@endif

  {{ $slot }}

{!! Form::close() !!}
