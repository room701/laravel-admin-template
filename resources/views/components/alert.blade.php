@props([
  'type',
  'content',
  'wrapperClass' => '',
  'closeBtnClass' => '',
])

@php
  switch ($type) {
    case 'notify':
      $iconClass = 'fa-circle-check';
      $wrapperDefaultClass = 'notify';
      break;

    case 'error':
      $iconClass = 'fa-circle-xmark';
      $wrapperDefaultClass = 'error';
      break;

    default:
      $iconClass = 'fa-circle-exclamation';
      $wrapperDefaultClass = 'info';
  }
@endphp

<div class="ferry-alert {{ $wrapperDefaultClass }} {{ $wrapperClass }}">
  <div class="w-full flex items-center">

    <i class="fa-solid {{ $iconClass }} mr-4 fa-xl"></i>

    @if (is_string($content))
      {{ $content }}
    @else
      <ul class="list-disc list-inside">
        @foreach ($content as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    @endif

  </div>

  <button type="button"
          class="flex-shrink-0 flex rounded-md {{ $closeBtnClass }}"
          onclick="this.parentElement.remove();"
    >
    <i class="fa-solid fa-xmark fa-xl"></i>
  </button>

</div>
