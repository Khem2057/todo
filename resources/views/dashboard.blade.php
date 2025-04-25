<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold">Welcome to the Dashboard</h1>
                    <div class="flex mt-4 justify-between w-full gap-4">
                        <div class="bg-gray-100 p-8 rounded-lg shadow w-1/4">
                            <p class="text-3xl text-center font-semibold">{{ $totalTasks > 0 ? $totalTasks : 0 }}</p>
                            <h2 class="text-xl text-center">Total Tasks</h2>
                        </div>
                        <div class="bg-gray-100 p-8 rounded-lg shadow w-1/4">
                            <p class="text-3xl text-center font-semibold">{{ $pendingTasks > 0 ? $pendingTasks : 0 }}</p>
                            <h2 class="text-xl text-center">Pending</h2>
                        </div>
                        <div class="bg-gray-100 p-8 rounded-lg shadow w-1/4">
                            <p class="text-3xl text-center font-semibold">{{ $inProgressTasks > 0 ? $inProgressTasks : 0 }}</p>
                            <h2 class="text-xl text-center">In Progress</h2>
                        </div>
                        <div class="bg-gray-100 p-8 rounded-lg shadow w-1/4">
                            <p class="text-3xl text-center font-semibold">{{ $completedTasks > 0 ? $completedTasks : 0 }}</p>
                            <h2 class="text-xl text-center">Completed</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
