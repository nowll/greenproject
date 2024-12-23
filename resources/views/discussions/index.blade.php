<x-layout>

     <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-8">Community Forum</h1>



            <!-- Categories -->
          <div class="gap-4 mb-8">
    @foreach($channels as $channel)
        <a href="{{ route('discussions.index') }}?channel={{ $channel->slug }}">


        <button class="bg-white p-4 rounded-lg hover:bg-gray-50 transition">
            <div class="text-center">
                <div class="font-bold text-gray-800">{{ $channel->name }}</div>
            </div>
        </button>

           </a>
    @endforeach
          </div>

            <!-- Forum Categories -->

            @auth()
                  <a href="{{ route('discussions.create') }}"  class="text-white mb-7 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create Discussions</a>
         @else
                  <a href="{{ route('login') }}"  class="text-white mb-7 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                      Sign in to Create Discussions</a>

            @endauth

                @foreach($discussions as $discussion)

                <div class="space-y-4 mt-8">
                  <div class="bg-white p-6 rounded-lg shadow-md">

                    <h2 class="text-xl font-semibold mb-2">{{ $discussion->title }}</h2>
                        <p class="text-xl  mb-2"><u class="underline">{{ $discussion->author->name }}</u></p>
                    <p class="text-gray-600 mb-4">{{ $discussion->contents }} </p>
                    <div class="flex justify-between items-center">
                      <a href="{{ route('discussions.show',$discussion->slug) }}" class="text-green-600 hover:text-green-700">View All →</a>
                    </div>
                  </div>
                </div>

         @endforeach
          </div>
</x-layout>



