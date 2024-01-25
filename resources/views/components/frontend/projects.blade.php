@props(['skills', 'projects'])
<div x-data="{selectedTab: 'all'}" class="flex flex-col gap-10 p-2">

    <div class="mb-4 border-b border-gray-200 dark:border-gray-700">

        <ul class="flex justify-center items-center gap-10 ">
            <li class="flex justify-center items-center gap-10">
                <button @click="selectedTab = 'all' " class="
                    flex text-center px-4 py-2 bg-light-tail-100 
                    dark:bg-dark-green-100  hover:bg-accent-hover 
                    text-black rounded-md" >All
                </button>
            </li>

            @foreach ($skills as $projectSkill)
                <li class="flex justify-center items-center gap-10" x-data="{ projectSkill: {{json_encode($projectSkill)}}}">
                    <button @click="selectedTab = projectSkill.id " class="
                        flex text-center px-4 py-2 bg-light-tail-100 dark:bg-dark-green-100  hover:bg-accent-hover text-black rounded-md" 
                        aria-selected="false">{{$projectSkill->name}}
                    </button>
                </li>
                @endforeach
            
        </ul>
    </div>

    <section class="flex justify-center items-center flex-wrap gap-10">
        @foreach ($projects as $project)
            <x-frontend.project :project="$project"></x-frontend.project>
        @endforeach
    </section>

</div>