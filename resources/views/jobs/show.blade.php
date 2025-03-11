<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <h1 class="text-lg font-bold">{{ $job['title'] }}</h1>
    <h2 class="text-sm font-bold">{{ $job['employer']->name }}</h2>
    <p>{{ $job['salary'] }} / year</p>
    <p class="mt-6"><x-button href="/jobs/{{ $job['id'] }}/edit">Edit</x-button></p>
</x-layout>
