@props([
  'items' => [ //array
    // ['name' => '修改資料', 'link' => '/', 'new-page' => true],
  ],
  'iconClass' => '',
  'wrapperClass' => '',
  'togglerId' => 'toolbar-dropdown-toggler-' . bin2hex(random_bytes(4)),
])

<input id="{{ $togglerId }}" type="checkbox" class="hidden">

<div class="toolbar-dropdown relative {{ $wrapperClass }}">
  <label for="{{ $togglerId }}" class="cursor-pointer {{ $iconClass }}">
    {!! $slot !!}
  </label>

  {{-- 關閉用遮罩 --}}
  <div class="hidden fixed inset-0 h-full w-full z-10"
       onclick="document.getElementById('{{ $togglerId }}').checked = false;"
  ></div>

  {{-- 子選單外框 --}}
  <div class="hidden absolute z-20 right-0 mt-2.5 w-48 bg-white shadow">
    {{-- 子選單 --}}
    @foreach ($items as $item)
      <a href="{{ $item['link'] }}" {!! ! empty($item['new-page']) ? 'target="_blank"' : '' !!}
        class="block px-5 py-3 text-sm text-gray-600 hover:bg-indigo-400 hover:text-white">
        {{ $item['name'] }}
      </a>
    @endforeach
  </div>
</div>
