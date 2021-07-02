@props([
  'name',
  'label' => null,
  'options' => [], // ['value' => 'key']
  'checked' => null,
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "form-radio {$inputClass}",
  ];
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  <div class="flex flex-row flex-wrap">
    @foreach($options as $value => $text)
      <label class="mr-5">
        {!! Form::radio($name, $value, $checked == $value ? true : null, $attributes) !!}
        <span class="ml-1.5 cursor-pointer">{{ $text }}</span>
      </label>
    @endforeach
  </div>
</div>
