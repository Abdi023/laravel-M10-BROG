@props(['skills', 'projects'])
<section class="p-20 flex flex-col gap-10">

    <article class="">
        <div class="flex flex-col justify-center text-center items-center gap-4">
            <h2 class="text-2xl font-[900]">Mijn laatste werk</h2>
            <p class=" text-base w-[45ch]">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Mollitia ad doloribus beatae recusandae.
            </p>
        </div>
    </article>

    <x-frontend.projects :skills="$skills" :projects="$projects"/>

</section>