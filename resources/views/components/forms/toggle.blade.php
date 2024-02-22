@props([
  'id' => null,
  'name' => null,
  'label' => null,
  'value' => '1',
  'checked' => null, // value, null, false (不做任何預先選擇)
  'wrapperClass' => '',
  'inputClass' => '',
])

@php
  // 此元件不能有 required 屬性，因會有缺值的狀況導致表單無法成功驗證並送出，所以刪除此屬性
  if ($attributes->has('required')) {
    $attributes = $attributes->except('required');
  }

  $attributes = $attributes->class(['hidden'])
                           ->merge(['id' => "toggle-{$name}"])
                           ->getAttributes();

  $checked = $checked == $value ? true : null
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  <div>
    <label for="toggle-{{ $name }}" class="form-toggle inline-block cursor-pointer relative {{ $inputClass }}">
      {!! html()->checkbox($name, $checked, $value)->attributes($attributes)->id($id) !!}
      <div class="bar w-12 h-7 bg-gray-200 rounded-full shadow-inner border border-gray-100 transition duration-300"></div>
      <div class="dot absolute w-5 h-5 bg-white rounded-full shadow-md left-1 top-1 transition duration-300"></div>
    </label>
  </div>

  {{ $slot }}
</div>
