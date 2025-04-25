<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4 w-full gap-4">
                        <form action="{{ route('tasks.update', $task->id) }}" method="post" class="flex gap-4 w-full justify-between ">
                            @csrf
                            @method('PUT')
                            <div class="w-full">
                                <input type="text" value="{{ $task->title }}" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="Enter title" required>
                            </div>
                            <div class="w-full">
                                <textarea name="description" id="description"  cols="30" rows="0" placeholder="Enter Description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ $task->description }}</textarea>
                            </div>
                            <div class="flex gap-2">
                                
                                <button type="submit" class="text-white hover:bg-blue-800 bg-blue-600 p-3 rounded m-1">Update</button>
                                <a href="{{ route('tasks.index') }}" class="bg-red-600 text-white hover:bg-red-800  p-3 rounded m-1">Cancel</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
