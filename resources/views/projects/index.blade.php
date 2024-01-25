<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('projects.create') }}" 
                    class="px-4 py-4 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">
                    New Project
                </a>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Skill
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $project->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $project->skill->name }}
                                </td>
                                                                                              
                                <td class="px-6 py-4">
                                    <img class="w-12 h-12" src="{{asset('storage/' . $project->image)}}" alt=""/>
                                </td>
                                <td class="flex gap-4 justify-end px-6 py-4">
                                    <a href="{{ route('projects.edit', $project->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a>
                                    <form action="{{route('projects.destroy', $project->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="font-medium text-red-600 hover:underline"
                                            onclick="return confirm('Are you sure??')"
                                        >Delete</button>
                                        {{-- je kunt onderste versie gebruik of bovenste voor delete --}}
                                        {{-- <a href="{{ route('skills.destroy', $skill->id) }}" 
                                            onclick="event.preventDefault(); this.closest('form').submit();"
                                            class="font-medium text-red-600 hover:underline">Delete</a>     --}}
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>
                                    <h2>No Projects</h2>
                                </td>
                            </tr>
                        @endforelse
                        
                        
                  
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
