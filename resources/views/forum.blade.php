<x-layout>
        <!-- Forum Section -->
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-8">Community Forum</h1>



            <!-- Categories -->
          <div class="gap-4 mb-8">
    @foreach($channels as $channel)
        <button class="bg-white p-4 rounded-lg hover:bg-gray-50 transition">
            <div class="text-center">
                <div class="font-bold text-gray-800">{{ $channel->name }}</div>
            </div>
        </button>
    @endforeach
          </div>

            <!-- Forum Categories -->

            <a href="{{ route('discussions.create') }}"  class="text-white mb-7 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create Discussions</a>
                <div class="space-y-4 mt-8">
                  <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">General Discussion</h2>
                    <p class="text-gray-600 mb-4">Discuss general environmental topics and initiatives.</p>
                    <div class="flex justify-between items-center">
                      <span class="text-sm text-gray-500">24 topics</span>
                      <a href="#" class="text-green-600 hover:text-green-700">View All →</a>
                    </div>
                  </div>

                  <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Project Planning</h2>
                    <p class="text-gray-600 mb-4">Coordinate and plan volunteer projects.</p>
                    <div class="flex justify-between items-center">
                      <span class="text-sm text-gray-500">16 topics</span>
                      <a href="#" class="text-green-600 hover:text-green-700">View All →</a>
                    </div>
                  </div>




                  <div class="bg-white p-6 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-2">Success Stories</h2>
                    <p class="text-gray-600 mb-4">Share your volunteer experience and success stories.</p>
                    <div class="flex justify-between items-center">
                      <span class="text-sm text-gray-500">32 topics</span>
                      <a href="#" class="text-green-600 hover:text-green-700">View All →</a>
                    </div>
                  </div>
                </div>
          </div>
</x-layout>
