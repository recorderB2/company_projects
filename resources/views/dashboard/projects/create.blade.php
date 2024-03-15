<x-app-layout>
  @section('title', 'New Project')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            New Project
        </h2>
    </x-slot>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class="container mx-auto px-4 py-8">
                  @if (session('success'))
                    @include('alerts.success')
                  @endif
                  @if ($errors->any())
                    @include('alerts.errors')
                  @endif
                  <form action="{{route('dashboard.projects.store')}}" method="POST" enctype="multipart/form-data" class="max-w-md">
                    @csrf
                    @include('dashboard.projects.form')
                  </form>
                </div>
          </div>
      </div>
  </div>
  
  
    
</x-app-layout>
