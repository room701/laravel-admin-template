@props([
  'wrapperClass' => '',
  'tableClass' => '',
  'isResponsive' => true,
])

<div class="{{ $wrapperClass }}" {{ $attributes }}>
  <table class="data-table {{ $isResponsive ? 'is-responsive' : '' }} {{ $tableClass }}"
  >
    {{ $slot }}
  </table>
</div>
