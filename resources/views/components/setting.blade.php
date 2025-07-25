@props(['heading'])

<section class=" py-8 max-w-4xl mx-auto">

        {{-- <h1 class="text-xl font-bold mb-8 pb-2 border-b-4">
            {{$heading}}
        </h1> --}}

    <div class="flex">
        {{-- <aside class="bg-gray-100 border border-gray-200 p-4 rounded-xl mr-8 ">
            <h4 class="font-bold mb-4">Links</h4>
            <ul>
                <li> 
                    <a href="/admin/posts" class="{{request()->is('admin/posts') ? 'text-blue-500': ''}}">All Posts</a>
                </li>
                <li class="mt-2"> 
                    <a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500': ''}}">New Post</a>
                </li>
            </ul>
        </aside> --}}

        <main class="flex-1">
            <x-panel>
                {{$slot}}
            </x-panel> 
        </main>
    </div>
</section> 

