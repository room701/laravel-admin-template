@props([
  'name' => null,
  'label' => null,
  'type' => 'text',
  'value' => null,
  'wrapperClass' => '',
  'inputClass' => '',
  'prepend' => null,
  'append' => null,
])

@php
  // 因 Form 套件要傳入屬性陣列，使用 getAttributes() 取得屬性陣列
  $attributes = $attributes->class(["form-input {$inputClass}"])->getAttributes();

  if ($type === 'textarea') {
    $input = html()->textarea($name, $value)->attributes($attributes);
  } else {
    $input = html()->input($type, $name, $value)->attributes($attributes);
  }
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  @if (! $prepend && ! $append)
    {!! $input !!}
  @elseif ($prepend)
    <div class="form-prepend">
      <span>{{ $prepend }}</span>
      {!! $input !!}
    </div>
  @elseif ($append)
    <div class="form-append">
      {!! $input !!}
      <span>{{ $append }}</span>
    </div>
  @endif

  {{ $slot }}

</div>
