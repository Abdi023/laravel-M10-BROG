<x-frontend-layout>
    {{-- Hero primary --}}
    <x-frontend.hero></x-frontend.hero>
    {{-- Promote tail-100 --}}
    <x-frontend.promote></x-frontend.promote>
    {{-- About Secondary --}}
    <x-frontend.about></x-frontend.about>
    {{-- Skills tail-100 --}}
    <x-frontend.skills :skills="$skills"></x-frontend.skills>
    {{-- Portfolio primary --}}
    <x-frontend.portfolio :skills="$skills" :projects="$projects"></x-frontend.portfolio>
    {{-- Services Secondary --}}
    <x-frontend.services></x-frontend.services>
    {{-- Contact Primary --}}
    <x-frontend.contact></x-frontend.contact>
</x-frontend-layout>