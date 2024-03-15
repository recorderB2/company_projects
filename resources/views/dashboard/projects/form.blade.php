@php
    $hasProject = isset($project);
@endphp
<div class="mb-4">
    <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
    <input type="text" name="title" 
    class="w-full border border-gray-300 rounded-md px-4 py-2" 
    value="{{$hasProject ? $project->title : ''}}"
    placeholder="{{$hasProject ? '' : 'Enter Project Title' }}">
  </div>
  <div class="mb-4">
    <label for="body" class="block text-gray-700 font-semibold mb-2">Body</label>
    <textarea name="body" class="w-full border border-gray-300 rounded-md px-4 py-2" rows="6" placeholder="{{$hasProject ? '' : 'Enter Project Body'}}">{{$hasProject ? $project->body : ''}}</textarea>
  </div>
  <p class="block text-gray-700 font-semibold mb-2">Image</p>
  <div class="flex items-center mb-4">
    <label for="fileInput" class="relative cursor-pointer">
      <div id="dropArea" class="border-2 border-dashed border-gray-400 rounded-lg p-8">
        <div class="text-center">
          <p class="mt-1 text-sm text-gray-600">
            Drag and drop an image here or <span class="font-medium text-indigo-600 hover:text-indigo-500">browse</span> for one.
          </p>
        </div>
        <input name="image" type="file" id="fileInput" class="hidden" accept="image/*"/>
      </div>
    </label>
    <div id="preview" class="ml-4">
      @if ($hasProject && $project->image)
          <img src="{{asset('storage/'.$project->image)}}" class="w-48 h-32 object-cover rounded-lg">
      @endif
    </div>
  </div>
  <div>
    <input type="submit" class="cursor-pointer bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md" 
    value="{{$hasProject ? 'Update Project' : 'Create Project' }}">
  </div>
@section('script')
  <script src="{{asset('js/dragAndDrop.js')}}"></script>
@endsection

