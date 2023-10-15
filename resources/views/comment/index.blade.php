<x-app-layout>
  <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
    <div class="container mx-auto px-6 py-2">
      <div class="text-right">

      </div>

      <div class="bg-white shadow-md rounded my-6">
        <table class="text-left w-full border-collapse">
          <thead>
            <tr>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Post
                Comment
              </th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Post
                Title
              </th>
              <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light w-2/12">
                Commented By</th>
              <th
                class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right w-2/12">
                Actions</th>
            </tr>
          </thead>
          <tbody>
            @can('Comment access')
            @foreach($comments as $comment)
            <tr class="hover:bg-grey-lighter">
              <td class="py-4 px-6 border-b border-grey-light">{{ $comment->comment }}</td>
              <td class="py-4 px-6 border-b border-grey-light">{{ $comment->getPost->title }}</td>
              <td class="py-4 px-6 border-b border-grey-light">
                {{ $comment->getUser->name }}
              </td>
              <td class="py-4 px-6 border-b border-grey-light text-right">
                @can('Comment delete')
                <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" class="inline">
                  @csrf
                  @method('delete')
                  <button
                    class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
                </form>
                @endcan
              </td>
            </tr>
            @endforeach
            @endcan
          </tbody>
        </table>

        @can('Comment access')
        <div class="text-right p-4 py-10">
          {{ $comments->links() }}
        </div>
        @endcan
      </div>

    </div>
  </main>
  </div>
</x-app-layout>