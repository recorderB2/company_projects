<x-app-layout>
    @section('title', 'Dashboard')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-gray-100 font-sans leading-normal tracking-normal">
                    <div class="container mx-auto px-4 py-8">
                        <h1 class="text-3xl font-semibold mb-4">Website Statistics</h1>
                
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                            <!-- Statistic Card 1 -->
                            <div class="bg-white shadow rounded-lg p-6">
                                <h2 class="text-lg font-semibold mb-2">Users</h2>
                                <p class="text-3xl font-bold">{{$users->count()}}</p>
                            </div>
                
                            <!-- Statistic Card 2 -->
                            <div class="bg-white shadow rounded-lg p-6">
                                <h2 class="text-lg font-semibold mb-2">Projects</h2>
                                <p class="text-3xl font-bold">{{$projects->count()}}</p>
                            </div>

                            <!-- Statistic Card 3 -->
                            <div class="bg-white shadow rounded-lg p-6">
                                <h2 class="text-lg font-semibold mb-2">Subscribers</h2>
                                <p class="text-3xl font-bold">{{$subscribers->count()}}</p>
                            </div>

                        </div>
                    </div>
                
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
