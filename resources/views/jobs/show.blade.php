<x-layout>
    <x-slot name="pagetitle">
        {{$job->title}}
     </x-slot>

    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{$job->title}}</h2>
    <p>This Job pays {{$job->salary}} per year</p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Button</x-button>
    </p>
</x-layout>