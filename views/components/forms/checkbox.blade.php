@props([
  'name',
  'label' => null,
  'options' => [],
  'checked' => [],
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "form-checkbox {$inputClass}",
  ];
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  <div class="flex flex-row flex-wrap">
    @foreach($options as $text => $value)
      <label class="mr-5">
        @php
          $isChecked = false;
          if (is_array($checked)) {
            $isChecked = in_array($value, $checked);
          } else {
            $isChecked = $value == $checked;
          }
        @endphp
        {!! Form::checkbox($name, $value, $isChecked ? true : null, $attributes) !!}
        <span class="ml-1.5 cursor-pointer">{{ $text }}</span>
      </label>
    @endforeach
  </div>
</div>
