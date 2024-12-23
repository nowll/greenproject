<x-layout>

<div class="bg-white border rounded-lg px-8 py-6 mx-auto my-8 max-w-2xl">
    <h2 class="text-2xl font-medium mb-4">Survey</h2>
    <form action="{{ route('discussions.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2">Title</label>
            <input type="text" id="title" name="title"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
        </div>
        <div class="mb-4">
            <label for="gender" class="block text-gray-700 font-medium mb-2">Location</label>
            <select id="channel_id" name="channel_id"
                class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                @foreach ($channels as $channel)
                        <option value="{{ $channel->id }}">{{ $channel->name }}</option>
                  @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
        <textarea id="contents"
              name="contents"
              rows="4"
              class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
              required></textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
        </div>

    </form>
</div>



</x-layout>
