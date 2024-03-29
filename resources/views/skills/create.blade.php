<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Store new skill
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white shadow-md rounded-md">

            <x-input-error :messages="$errors->get('name')" class="mt-2" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />

            
            <form method="POST" action="{{ route('skills.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf
        
                <!-- Naam -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus/>
                </div>
        
                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />
                    <x-text-input id="image" class="block mt-1 w-full"
                                    type="file"
                                    name="image"/>
                </div>
        
                
        
                <div class="flex items-center justify-end mt-4">
        
                    <x-primary-button class="ms-3">
                        Save
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
