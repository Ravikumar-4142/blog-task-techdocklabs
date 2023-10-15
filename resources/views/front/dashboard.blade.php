<x-front-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="text-left w-full border-collapse">
                            <thead>
                                <tr>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">
                                        Title
                                    </th>
                                     <th
                                        class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">
                                        Category
                                    </th>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">
                                        Total Comments</th>
                                    <th
                                        class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr class="hover:bg-grey-lighter">
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $post->title }}</td>
                                     <td class="py-4 px-6 border-b border-grey-light">
                                        {{ $post->getCategory->title }}
                                    </td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        {{ $post->get_comments_count }}
                                    </td>
                                    <td class="py-4 px-6 border-b border-grey-light text-right">

                                        <a href="{{route('post.read',$post->id)}}"
                                            class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Read</a>



                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="text-right p-4 py-10">
                            {{ $posts->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-front-layout>