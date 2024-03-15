@extends('layouts.main')
@section('title', $project->title)
@section('content')
<div class="py-4">
    <div class="max-w-7xl mx-auto sm:px-6">
            <div class="max-w-4xl mx-auto bg-white shadow-md rounded px-8 py-6">
                <div class="flex items-center">
                    <div class="w-1/3 mr-8 project-img">
                        <img src="{{asset( $project->image ? 'storage/'.$project->image : 'images/projects/default.png' )}}" 
                         alt="{{$project->title}}" class="w-full rounded">
                    </div>
                    <div class="w-1/2">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">{{$project->title}}</h2>
                        <p class="text-gray-700 mb-4">{{$project->body}}</p>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
