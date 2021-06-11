@props([
  'wrapperClass' => '',
  'tableClass' => '',
])

<div class="bg-white overflow-x-auto {{ $wrapperClass }}">
  <div class="inline-block min-w-full overflow-hidden">
    <table class="c-data-table {{ $tableClass }}">
      {{ $slot }}
    </table>
  </div>
</div>
