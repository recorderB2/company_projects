<x-app-layout>
  @section('title', 'Dashboard - Projects')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            All Projects
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4 py-8">
                    <div class="flex justify-between items-center mb-4">
                      <a href="{{route('dashboard.projects.create')}}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">New Project</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                       <!-- Project Card start -->
                       @foreach ($projects as $project)
                         <a href="{{route('dashboard.projects.show', $project)}}" class="bg-white shadow-md rounded-md overflow-hidden block hover:shadow-lg transition-shadow duration-300">
                           <img class="w-full h-32 object-cover object-center" 
                           src="{{asset( $project->image ? 'storage/'.$project->image : 'images/projects/default.png' )}}" 
                           alt="{{$project->title}}">
                           <div class="px-4 py-4">
                             <h3 class="text-lg font-semibold text-gray-800 mb-2">{{$project->title}}</h3>
                             <p class="text-gray-600 text-sm">{{$project->body}}</p>
                          </div>
                         </a>
                       @endforeach
                    <!-- project card end-->
                    </div>
                  </div>
                  
            </div>
        </div>
    </div>
</x-app-layout>
