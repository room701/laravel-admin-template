@props([
  'name' => null,
  'label' => null,
  'options' => [],
  'value' => null,
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "form-select {$inputClass}",
  ];
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  {!! Form::select($name, $options, $value, $attributes) !!}
</div>
