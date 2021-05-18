@props([
  'name' => null,
  'label' => null,
  'type' => 'text',
  'value' => null,
  'wrapperClass' => '',
  'inputClass' => '',
  'append' => null,
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "form-input {$inputClass}",
  ];

  switch($type) {
    case 'text':       $input = Form::text($name, $value, $attributes);     break;
    case 'number':     $input = Form::number($name, $value, $attributes);   break;
    case 'date':       $input = Form::date($name, $value, $attributes);     break;
    case 'email':      $input = Form::email($name, $value, $attributes);    break;
    case 'password':   $input = Form::password($name, $attributes);         break;
    case 'file':       $input = Form::file($name, $attributes);             break;
  }
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
