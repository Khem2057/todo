<x-app-layout>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-center items-center mb-4">
                        <i class="fa-solid fa-user text-6xl"></i>
                    </div>
                    <div class="text-center mb-4">
                        <p>Name: {{ $user->name }}</p>
                        <p>Email: {{ $user->email }}</p>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>