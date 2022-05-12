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

  switch($type) {
    case 'text':       $input = Form::text($name, $value, $attributes);       break;
    case 'number':     $input = Form::number($name, $value, $attributes);     break;
    case 'tel':        $input = Form::tel($name, $value, $attributes);        break;
    case 'date':       $input = Form::date($name, $value, $attributes);       break;
    case 'email':      $input = Form::email($name, $value, $attributes);      break;
    case 'textarea':   $input = Form::textarea($name, $value, $attributes);   break;
    case 'password':   $input = Form::password($name, $attributes);           break;
    case 'file':       $input = Form::file($name, $attributes);               break;
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
