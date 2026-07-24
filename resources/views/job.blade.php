<x-layout>
    <x-slot:heading>Job Details</x-slot:heading>
    <h1>Job Details</h1>
    <h2><strong>{{ $job->title }}</strong></h2>
    <p>${{ number_format($job->salary, 2) }}</p>

    <div class="mt-4 border-t border-gray-200 pt-4">
        <a href="/jobs" class="text-blue-500 hover:text-blue-700">Back to Jobs</a>
    </div>
</x-layout>