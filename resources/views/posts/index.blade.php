<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 mb-10">
                    <div class="mb-10"> There </div>

                        <div  class="inline justify-center bg-blue-100">
                            
                            <a href="{{route('posts.create')}}">
                                <x-button class="ml-4" >
                                    {{ __('Post') }} 
                                </x-button>
                            </a>
                        </div>
                            @if($posts->count())
                                @foreach ($posts as $post)
                                    <x-post-list :post="$post" />
                                @endforeach
                                {{$posts-> links()}}
                            @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
