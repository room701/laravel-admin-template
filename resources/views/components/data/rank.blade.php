@props([
  'title' => 'Reviews',
  'data' => [],
])

<div class="mx-auto border border-gray-100 shadow rounded px-6 py-4">
  <h2 class="text-lg font-medium text-gray-700 mb-2">Reviews</h2>

  @if (count($data) == 0)
    <p class="text-sm text-gray-500">無資料</p>
  @else
    <div class="space-y-5">
      @foreach ($data as $key => $value)
        <div class="flex items-center">
          <div class="w-1/6 text-indigo-500 font-semibold">
            <span>{{ $key ?? '' }}</span>
          </div>
          <div class="w-4/6">
            <div class="bg-gray-300 w-full rounded-lg h-2">
              <div style="width: {{ $value }}%" class="bg-indigo-600 rounded-lg h-2"></div>
            </div>
          </div>
          <div class="w-1/6 text-gray-700 pl-3">
            <span class="text-sm">{{ $value }}</span>
          </div>
        </div>
      @endforeach
    </div>
  @endif

</div>
