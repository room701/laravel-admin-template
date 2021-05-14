@props([
  'label',
  'type' => 'text',
  'wrapper-class',
  'input-class',
])

<div class="form-group {{ $wrapperClass ?? '' }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif
  <input type="{{ $type }}" class="form-input {{ $inputClass ?? '' }}">
</div>
