@props([
  'name' => null,
  'label' => null,
  'wrapperClass' => '',
  'inputClass' => '',
  'id' => 'file-input-' . bin2hex(random_bytes(4)),
])

@php
  $attributesHTML = '';
  foreach ($attributes as $attribute => $value) {
    $attributesHTML .= " {$attribute}=\"{$value}\"";
  }
@endphp

<div class="form-group {{ $wrapperClass }}">
  <label>{{ $label }}</label>
  <label class="form-input cursor-pointer {{ $inputClass }}" for="{{ $id }}">
    <input id="{{ $id }}" name="{{ $name }}" type="file" class="hidden" {!! $attributesHTML !!}>
    <span class="block w-full truncate text-gray-500">選擇檔案</span>
  </label>
</div>

<script>
  document.getElementById('{{ $id }}').addEventListener('change', function(e) {
    let fileNameEl = e.target.nextElementSibling;
    fileNameEl.innerText = e.target.files.length ? e.target.files[0].name : '選擇檔案';
  });
</script>
