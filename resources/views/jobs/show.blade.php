<x-layout>
  <x-slot:heading>Job Details</x-slot:heading>

  <div class="mx-auto max-w-2xl">
    <div class="overflow-hidden rounded-lg bg-white shadow-sm outline-1 -outline-offset-1 outline-gray-900/10">
      <div class="px-6 py-6">
        <h3 class="text-sm font-semibold text-indigo-600">{{ $job->employer->name }}</h3>
        <h2 class="mt-1 text-2xl font-bold tracking-tight text-gray-900">{{ $job->title }}</h2>
        <p class="mt-2 text-base font-medium text-gray-700">${{ number_format($job->salary, 2) }} per year</p>
      </div>

      <div class="flex items-center justify-between gap-x-6 border-t border-gray-900/10 bg-gray-50 px-6 py-4">
        <a href="/jobs" class="text-sm/6 font-semibold text-gray-900 hover:text-gray-600">&larr; Back to Jobs</a>
        <div class="flex items-center gap-x-6">
          <x-button href="{{ route('jobs.edit', $job->id) }}">Edit Job</x-button>
          <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <x-button
              type="submit"
              class="text-red-600 hover:text-red-500"
              onclick="return confirm('Are you sure you want to delete this job?')"
             >
             <span>Delete Job</span>
            </form>
          </x-button>
        </div>
      </div>
    </div>
  </div>
</x-layout>
