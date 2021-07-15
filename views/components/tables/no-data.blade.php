@props([
  'content' => '沒有資料',
  'wrapperClass' => '',
])

<div class="pt-14 pb-20 text-center {{ $wrapperClass }}">
  <h2 class="text-4xl font-light text-gray-400 mb-5">{{ $content }}</h2>
</div>
