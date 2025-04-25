<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-4 w-full gap-4">
                        <form action="{{ route('tasks.create') }}" method="post" class="flex gap-4 w-full justify-between ">
                            @csrf
                            <div class="w-full">
                                <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-3" placeholder="Enter title" required>
                            </div>
                            <div class="w-full">
                                <textarea name="description" id="description" cols="30" rows="0" placeholder="Enter Description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                            </div>
                            <div >
                                <button type="submit" class="text-white hover:bg-blue-800 bg-blue-600 p-3 rounded m-1">Add</button>
                            </div>
                        </form>
                    </div>

                    
                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div>
                        <table class="table table-bordered border-gray-300">
                            <thead>
                                <tr>
                                    <th>Sn</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>
                                            <form action="{{ route('tasks.updateStatus', $task->id) }}" method="POST" class="border-gray-300 rounded shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" onchange="this.form.submit()" class="rounded w-full border-gray-300">
                                                    <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                                    <option value="In Progress" {{ $task->status == 'In Progress' ? 'selected' : '' }}>In Progress</option>
                                                    <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                                </select>
                                                
                                            </form>
                                        </td>
                                        <td class="flex gap-2">
                                            <form action="{{ route('tasks.edit', $task->id) }}" >
                                                @csrf
                                                <button type="submit" class="text-white hover:bg-green-800 bg-green-600 p-2 rounded m-1">Update</button>
                                            </form>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-white hover:bg-red-800 bg-red-600 p-2 rounded m-1">Delete</button>
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
    </div>
</x-app-layout>
