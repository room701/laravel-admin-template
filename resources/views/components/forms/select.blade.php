@props([
  'name' => null,
  'label' => null,
  'options' => [], // ['value' => 'key']
  'value' => null,
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  $attributes = $attributes->class(["form-select {$inputClass}"])->getAttributes();
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  {!! html()->select($name, $options, $value)->attributes($attributes) !!}

  <div class="mt-2.5">
    {!! $slot !!}
  </div>
</div>
