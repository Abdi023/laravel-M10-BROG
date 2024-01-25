@props(['project'])


<div
    x-data="{skill: {{ json_encode($project->skill) }} }"
    :class="selectedTab == 'all' || selectedTab == skill.id ? 'block' : 'hidden' " 
    class="w-[25rem] h-25rem] bg-white border 
        border-gray-200 rounded-lg shadow 
        dark:bg-gray-800 dark:border-gray-700">

    <div class=" border-black border-solid border-b-2">
        <img class="rounded-t-lg object-cover w-full h-[15rem] bg-center" src="{{asset('./storage/'. $project->image)}}" alt="" />
    </div>
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$project->skill->name}}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$project->name}}</p>
        <a href="{{$project->project_url}}" target="_blank" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Bekijk
             <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
