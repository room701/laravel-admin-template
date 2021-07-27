@props([
  'name' => null,
  'label' => null,
  'value' => '1',
  'checked' => null, // value, null, false (不做任何預先選擇)
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'id' => "toggle-{$name}",
    'class' => 'hidden',
  ];

  $checked = $checked == $value ? true : null
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  <div>
    <label for="toggle-{{ $name }}" class="form-toggle inline-block cursor-pointer relative {{ $inputClass }}">
      {!! Form::checkbox($name, $value, $checked, $attributes) !!}
      <div class="bar w-12 h-7 bg-gray-200 rounded-full shadow-inner border border-gray-100 transition duration-300"></div>
      <div class="dot absolute w-5 h-5 bg-white rounded-full shadow-md left-1 top-1 transition duration-300"></div>
    </label>
  </div>

  {{ $slot }}
</div>
