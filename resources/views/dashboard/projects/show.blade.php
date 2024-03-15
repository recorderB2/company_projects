<x-app-layout>
    @section('title', 'Dashboard - '.$project->title)
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Project: {{$project->title}}
        </h2>
    </x-slot>

    <div class="py-4">
        @if (session('success'))
            @include('alerts.success')
        @endif
        <div class="max-w-7xl mx-auto sm:px-6">
                <div class="max-w-4xl mx-auto bg-white shadow-md rounded px-8 py-6">
                    <div class="flex items-center">
                        <div class="w-1/3 mr-8">
                            <img src="{{asset( $project->image ? 'storage/'.$project->image : 'images/projects/default.png' )}}" 
                             alt="{{$project->title}}" class="w-full rounded">
                        </div>
                        <div class="w-1/2">
                            <h2 class="text-xl font-bold text-gray-800 mb-2">{{$project->title}}</h2>
                            <p class="text-gray-700 mb-4">{{$project->body}}</p>
                            <div class="flex">
                                <a href="{{route('dashboard.projects.edit', $project)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">Edit</a>
                                <form action="{{ route('dashboard.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Are You Sure You Want To Delete This Project?')">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="cursor-pointer bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Delete">
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
