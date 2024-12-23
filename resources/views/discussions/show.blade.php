<x-layout>
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

            <div class="space-y-4 mt-8 mb-4">
                  <div class="bg-white p-6 rounded-lg shadow-md">

                    <h2 class="text-xl font-semibold mb-2">{{ $discussion->title }}</h2>
                        <p class="text-xl  mb-2"><u class="underline">{{ $discussion->author->name }}</u></p>
                    <p class="text-gray-600 mb-4">{{ $discussion->contents }} </p>

                  </div>
                </div>


        <h2 class="text-4xl font-bold dark:text-black">Reply</h2>
         @foreach($discussion->replies()->paginate(3) as $reply)


          <div class="space-y-4 m-8">
                  <div class="bg-white p-6 rounded-lg shadow-md">

                    <h2 class="text-xl font-semibold mb-2">{{ $reply->owner->name }}</h2>

                    <p class="text-gray-600 mb-4">{{ $reply->contents }} </p>
                    {{-- <button type="submit" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">
                       Mark as best reply
                    </button> --}}
                  </div>
                </div>



         @endforeach

              {{ $discussion->replies()->paginate(3)->links() }}


         <form action="{{ route('replies.store',$discussion->slug) }}" method="POST">
            @csrf

             @auth()

                 <textarea type="text" name="contents" id="contents" class="block mt-6 w-full h-40 px-5 py-2.5 bg-white leading-7 text-base font-normal shadow-xs text-gray-900 bg-transparent border border-gray-300 rounded-3xl placeholder-gray-400 focus:outline-none resize-none mb-5" placeholder="Reply" required=""></textarea>
         <div class="flex">
             <button type="submit" class="w-52 h-12 px-4 bg-green-500 hover:bg-green-800 transition-all duration-700 rounded-full shadow-xs text-white text-base font-semibold leading-6">Send Reply</button>
         </div>

             @else


                 <a href="{{ route('login') }}" class="text-white -mb-20 bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> Sing in To Reply</a>

             @endauth



         </form>
     </div>




</x-layout>



