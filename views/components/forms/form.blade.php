@props([
  'model',
  'url' => null,
  'method' => 'post',
  'files' => false,
  'class' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "space-y-default {{ $class ?? '' }}",
  ];
@endphp

@if (isset($model))
{!! Form::model($model ,$attributes) !!}
@else
{!! Form::open($attributes) !!}
@endif

  {{ $slot }}

{!! Form::close() !!}
