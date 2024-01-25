@props(['skills'])
<section class="bg-green-500 dark:bg-gray-900 p-8">
    <article class="flex justify-around items-center gap-[1rem] flex-wrap">
        @foreach ($skills as $skill)
            <div class="">
                <img src="{{asset('./storage/'. $skill->image)}}" class="w-[4.6rem] h-[8rem] object-contain" alt="{{$skill->name}}">
            </div>
            
        @endforeach
    </article>
</section>