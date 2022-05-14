@props([
  'name' => '',
])

<div class="ferry-search">
  <div class="ferry-search-icon">
    <i class="fa-solid fa-magnifying-glass"></i>
  </div>
  <div class="ferry-search-form">
    <input placeholder="Search" {{ $attributes->class(['form-input'])->merge() }}>
    <button type="button">查詢</button>
  </div>
</div>
