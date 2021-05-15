@props([
  'name',
  'label',
  'type' => 'text',
  'placeholder',
  'wrapper-class',
  'input-class',
])

<div class="form-group {{ $wrapperClass ?? '' }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif
  <input name="{{ $name ?? '' }}"
         value=""
         type="{{ $type }}"
         class="form-input {{ $inputClass ?? '' }}"
         placeholder="{{ $placeholder ?? '' }}"
  >
</div>
