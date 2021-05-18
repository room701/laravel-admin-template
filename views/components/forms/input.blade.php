@props([
  'name' => null,
  'label' => null,
  'type' => 'text',
  'value' => null,
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "form-input {$inputClass}",
  ];
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  @switch($type)
    @case('text')       {!! Form::text($name, $value, $attributes) !!}     @break
    @case('number')     {!! Form::number($name, $value, $attributes) !!}   @break
    @case('date')       {!! Form::date($name, $value, $attributes) !!}     @break
    @case('email')      {!! Form::email($name, $value, $attributes) !!}    @break
    @case('password')   {!! Form::password($name, $attributes) !!}         @break
    @case('file')       {!! Form::file($name, $attributes) !!}             @break
  @endswitch
</div>
