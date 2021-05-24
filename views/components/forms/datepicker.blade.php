@props([
  'name' => null,
  'label' => null,
  // 'type' => 'text',
  // 'value' => null,
  // 'wrapperClass' => '',
  // 'inputClass' => '',
  // 'append' => null,
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

  @if (! $append)
    {!! $input !!}
  @else
    <div class="form-append">
      {!! $input !!}
      <span class="flex items-center px-4 bg-gray-200 text-gray-500 text-sm rounded-r">{{ $append }}</span>
    </div>
  @endif

</div>
