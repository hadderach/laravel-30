<x-layout>
  <x-slot:heading>Jobs</x-slot:heading>
  <div class="p-2 max-w-lg space-y-4 text-black-500 list-disc list-inside dark:text-black-400">
    @foreach ($jobs as $job)
        
          <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out">
            <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
            <div>
              <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} / year
            </div>
          </a>
    @endforeach
      </div>
      <div>
        {{ $jobs->links() }}
      </div>
</x-layout>