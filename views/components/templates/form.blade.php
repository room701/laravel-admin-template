<div class="c-section c-setcion-form lg:w-7/8 xl:w-5/6 xl:max-w-2xl mx-auto">

  <x-admin-view::error/>

  <x-admin-view::form.input label="名稱" input-class="aaa"/>

  <div class="form-group">
    <label>選擇</label>
    <select class="form-select">
      <option>Red</option>
      <option>Blue</option>
      <option>White</option>
    </select>
  </div>

  <div class="form-group">
    <label>類型</label>
    <div class="flex flex-row flex-wrap">
      <label class="mr-5">
        <input name="type" type="radio" class="form-radio" checked>
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
      <label class="mr-5">
        <input name="type" type="radio" class="form-radio">
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
    </div>
  </div>

  <div class="form-group">
    <label>勾選</label>
    <div class="flex flex-row flex-wrap">
      <label class="mr-5">
        <input type="checkbox" class="form-checkbox">
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
      <label class="mr-5">
        <input type="checkbox" class="form-checkbox">
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
      <label class="mr-5">
        <input type="checkbox" class="form-checkbox">
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
      <label class="mr-5">
        <input type="checkbox" class="form-checkbox">
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
      <label class="mr-5">
        <input type="checkbox" class="form-checkbox">
        <span class="ml-1.5 cursor-pointer">Click me</span>
      </label>
    </div>
  </div>

  <div class="form-group">
    <label>名稱</label>
    <input type="text" class="form-input">
  </div>

  <div class="form-group">
    <label>金額</label>
    <div class="form-append">
      <input type="text" class="form-input">
      <span class="flex items-center px-4 bg-gray-200 text-gray-500 text-sm rounded-r">台幣</span>
    </div>
  </div>

  <div class="form-group">
    <label>檔案</label>
    <label class="form-input cursor-pointer" for="file-1" x-data="{ file: null }">
      <input type="file" class="hidden" id="file-1" @change="file = $event.target.files.length ? $event.target.files[0].name : null">
      <span class="block w-full truncate" x-text="file || '選擇檔案...'"></span>
    </label>
  </div>

  <div class="w-100 h-px"></div>

  <div class="bg-gradient-to-r from-indigo-50 to-purple-100 -mx-7 px-7 py-9">
    <button class="btn btn-primary btn-lg w-full">送出</button>
  </div>

</div>
