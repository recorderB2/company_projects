<x-app-layout>
    @section('title', 'Dashboard - Mails')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Send Mails
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
                <form action="{{route('dashboard.mails.send')}}" method="POST" class="max-w-md">
                      @csrf
                        <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subject</label>
                        <input type="text" name="subject" class="w-full border border-gray-300 rounded-md px-4 py-2" placeholder="Enter email subject">
                      </div>
                      <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                        <input type="text" name="title" class="w-full border border-gray-300 rounded-md px-4 py-2" placeholder="Enter email title">
                      </div>
                      <div class="mb-4">
                        <label for="body" class="block text-gray-700 font-semibold mb-2">Body</label>
                        <textarea name="body" class="w-full border border-gray-300 rounded-md px-4 py-2" rows="6" placeholder="Enter email body"></textarea>
                      </div>
                      <div class="mb-12">
                        <label for="lang" class="block text-gray-700 font-semibold mb-2">Lang</label>
                        <select name="lang" class="block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:border-indigo-500">
                          <option value="en">English</option>
                          <option value="ar">العربية</option>
                        </select> 
                      </div>
                                         
                      <div>
                        <input type="submit" value="Send" class="bg-gray-800 hover:bg-gray-900 text-white font-semibold py-2 px-4 rounded-md cursor-pointer">
                    </div>
                    </form>
                  </div>
                  
            </div>
        </div>
    </div>
</x-app-layout>
