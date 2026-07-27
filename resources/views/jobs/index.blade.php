<x-layout>
  <x-slot:heading>Job Listings</x-slot:heading>
  <x-slot:createButton>
    <x-button href="{{ route('jobs.create') }}">Create Job</x-button>
  </x-slot:createButton>
  <ul>
      @foreach ($jobs as $job)
          <li>
              <h3 class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</h3>
              <h2>
                  <a href="/jobs/{{ $job->id }}" class="text-blue-500 hover:text-blue-700 underline">
                      <strong>{{ $job->title }}</strong>
                  </a>
              </h2>
              <p>${{ number_format($job->salary, 2) }}</p>

              <div class="mt-4 border-t border-gray-200 pt-4"></div>
          </li>
      @endforeach
  </ul>

  <div class="mt-6">
      {{ $jobs->links() }}
  </div>
</x-layout>
