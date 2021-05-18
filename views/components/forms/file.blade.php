@props([
  'name' => null,
  'label' => null,
  'wrapperClass' => '',
  'inputClass' => '',
  'id' => bin2hex(random_bytes(4)),
])

@php
  $attributesHTML = '';
  foreach ($attributes as $attribute => $value) {
    $attributesHTML .= " {$attribute}=\"{$value}\"";
  }
@endphp

<div class="form-group {{ $wrapperClass }}">
  <label>{{ $label }}</label>
  <label class="form-input cursor-pointer {{ $inputClass }}" for="{{ $id }}" x-data="{ file: null }">
    <input name="{{ $name }}" type="file" id="{{ $id }}" @change="file = $event.target.files.length ? $event.target.files[0].name : null" class="hidden" {!! $attributesHTML !!}>
    <span class="block w-full truncate" x-text="file || '選擇檔案...'"></span>
  </label>
</div>
