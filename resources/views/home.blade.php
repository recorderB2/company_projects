@extends('layouts.main')
@section('title', config('app.name', 'Home Page'))
@section('content')
     <!-- Project Cards -->
     <div class="container mx-auto mt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($projects as $project)
                <!-- Project Card 1 -->
                <a href="{{route('home.project', $project)}}" class="bg-white rounded-lg overflow-hidden shadow-md">
                    <img src="{{asset( $project->image ? 'storage/'.$project->image : 'images/projects/default.png' )}}" alt="{{$project->title}}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{$project->title}}</h2>
                        <p class="text-gray-700">{{$project->body}}</p>
                    </div>
                </a>
            @empty
                <h2 class="text-xl font-semibold text-gray-800 mb-2">There Is No Projects At This Moment</h2>
            @endforelse
        </div>
    </div>
@endsection
