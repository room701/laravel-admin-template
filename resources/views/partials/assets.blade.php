@php
  $assetsDir = '/vendor/laravel-admin-ferry'; // 頁面連結用
@endphp

{{-- 如果外部主程式有安蛛 laravel vite 時 (php 中有 vite() 此 function)，
  只套用 laravel vite 嵌入的 tag，因下方 dev mode 中 @vite tag 會有作用上的衝突 --}}
@if (! env('IS_VITE_DEV') || function_exists('vite'))
  {{-- vite production mode --}}
  @php
    $assetsBuildUri = $assetsDir.'/dist'; // 頁面連結用
    $assetsBuildPath = public_path($assetsBuildUri); // 抓取檔案用
    $manifest = json_decode(file_get_contents($assetsBuildPath.'/manifest.json'), true);
  @endphp

  <link rel="stylesheet" href="{{ $assetsBuildUri }}/{{ $manifest['app.html']['css'][0] }}" />
  <script type="module" src="{{ $assetsBuildUri }}/{{ $manifest['app.html']['file'] }}"></script>
@else
  {{-- vite dev mode --}}
  <script type="module" src="http://localhost:3000/@vite/client"></script>
  <link rel="stylesheet" href="http://localhost:3000/resources/css/app.css" />
  <script type="module" src="http://localhost:3000/resources/js/app.js"></script>
@endif

{{-- Fontawasome --}}
<link rel="stylesheet" href="{{ $assetsDir }}/static/fonts/fontawasome/@fortawesome/fontawesome-free/css/all.min.css">
