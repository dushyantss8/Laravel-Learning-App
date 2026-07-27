<x-layout>
  <x-slot:heading>Create New Job</x-slot:heading>

  <form action="/jobs" method="POST" class="mx-auto max-w-2xl">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Job Details</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Enter the details of the job you want to post.</p>
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <!-- Title -->
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 @error('title') outline-red-500 @else outline-gray-300 @enderror focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input id="title" type="text" name="title" value="{{ old('title') }}" placeholder="Software Engineer" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required />
              </div>
            </div>
            @error('title')
              <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
            @enderror
          </div>

          <!-- Salary -->
          <div class="sm:col-span-4">
            <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
            <div class="mt-2">
              <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 @error('salary') outline-red-500 @else outline-gray-300 @enderror focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input id="salary" type="number" name="salary" value="{{ old('salary') }}" placeholder="50000" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" required />
              </div>
            </div>
            @error('salary')
              <p class="mt-2 text-sm/6 text-red-600">{{ $message }}</p>
            @enderror
          </div>

        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/jobs" class="text-sm/6 font-semibold text-gray-900 hover:text-gray-600">Cancel</a>
      <x-button type="submit">Save</x-button>
    </div>
  </form>
</x-layout>