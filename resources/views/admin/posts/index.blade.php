<x-dashboard.master heading="Manage Posts">
    <x-setting heading="Manage Posts">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-6 align-middle inline-block min-w-full sm:px-10 lg:px-12"> <!-- Increased padding -->
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200"> <!-- Set larger minimum width -->
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="px-12 py-10 whitespace-nowrap"> <!-- Further increased padding -->
                                        <div class="flex items-center">
                                            <div class="text-4xl font-medium text-gray-900"> <!-- Increased font size to match h2 -->
                                                <a href="/posts/{{ $post->slug }}">
                                                    {{ $post->title }}
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-12 py-10 whitespace-nowrap text-right text-4xl font-medium"> <!-- Increased font size to match h2 -->
                                        <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                    </td>
                                    <td class="px-12 py-10 whitespace-nowrap text-right text-4xl font-medium"> <!-- Increased font size to match h2 -->
                                        <form method="POST" action="/admin/posts/{{ $post->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-3xl text-gray-400 hover:text-gray-600">Delete</button> <!-- Increased text size to match h2 -->
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-dashboard.master>