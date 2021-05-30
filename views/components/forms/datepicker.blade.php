@props([
  'isVueModel' => false, // 同一的 vue vm 裡不可混用不同設定
  'name' => null,
  'label' => null,
  'value' => null,
  'wrapperClass' => '',
  'inputClass' => '',
  'append' => null,
])

@php
  $attributes = $attributes->getAttributes() + [
    'class' => "form-input {$inputClass}",
    'autocomplete' => 'off',
  ];

  $input = Form::text($name, $value, $attributes);
@endphp

<div class="form-group {{ $wrapperClass }}">
  @if ($label)
    <label>{{ $label }}</label>
  @endif

  @if ($append)
    <div class="form-append">
  @endif

      <vue-ctk-date-time-picker
        v-model="date"
        formatted="YYYY-MM-DD"
        output-format="YYYY-MM-DD"
        locale="zh_TW"
        :only-date="true"
        :auto-close="true"
        :no-label="true"
        :no-header="true"
      >
        {!! $input !!}
      </vue-ctk-date-time-picker>

  @if ($append)
      <span class="flex items-center px-4 bg-gray-200 text-gray-500 text-sm rounded-r">{{ $append }}</span>
    </div>
  @endif

</div>

@if (! $isVueModel)
@once
  <script>
    // Vue Component standalone
    document.addEventListener('DOMContentLoaded', (event) => {
      var elements = document.getElementsByTagName('vue-ctk-date-time-picker');
      elements = Array.prototype.slice.call(elements);
      elements.forEach(function(el) {
        // 取 input value
        var date = el.children[0].getAttribute('value');

        new Vue({
          el: el,
          data: {
            date: date
          }
        });
      });
    });
  </script>
@endonce
@endif
