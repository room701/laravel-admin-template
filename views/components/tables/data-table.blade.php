@props([
  'wrapperClass' => '',
  'tableClass' => '',
  'isResponsive' => true,
])

<div class="{{ $wrapperClass }}">
  <table class="data-table {{ $isResponsive ? 'is-responsive' : '' }} {{ $tableClass }}"
  >
    {{ $slot }}
  </table>
</div>
