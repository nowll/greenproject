<x-layout>


    <main class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Latest Posts</h1>

        <!-- Blog Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Blog Post Card 1 -->
          <article class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset("img/1.jpg")}}" alt="Blog post image" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                <a href="sdg" class="hover:text-blue-600">Understanding SDG 12 and Climate Action</a>
              </h2>
              <p class="text-gray-600 mb-4">Overview of SDG 12 goals and its connection to combating climate change.</p>
              <div class="flex items-center text-sm text-gray-500">
                <span>Descember 15, 2024</span>
                <span class="mx-2">•</span>
                <span>3 min read</span>
              </div>
            </div>
          </article>

          <!-- Blog Post Card 2 -->
          <article class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset("img/2.jpg")}}" alt="Blog post image" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                <a href="/carbon-footprint" class="hover:text-blue-600">Reducing Carbon Footprint in Daily Life</a>
              </h2>
              <p class="text-gray-600 mb-4">Practical tips for individuals to minimize their carbon footprint.</p>
              <div class="flex items-center text-sm text-gray-500">
                <span>Descember 20, 2024</span>
                <span class="mx-2">•</span>
                <span>4 min read</span>
              </div>
            </div>
          </article>

          <!-- Blog Post Card 3 -->
          <article class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset("img/3.jpg") }}" alt="Blog post image" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                <a href="/sustainable-system" class="hover:text-blue-600">Sustainable Food Systems</a>
              </h2>
              <p class="text-gray-600 mb-4">Importance of choosing local, seasonal, and organic food.</p>
              <div class="flex items-center text-sm text-gray-500">
                <span>Descember 05, 2024</span>
                <span class="mx-2">•</span>
                <span>6 min read</span>
              </div>
            </div>
          </article>


          <article class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset("img/4.jpg") }}" alt="Blog post image" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                <a href="/business-prod" class="hover:text-blue-600">The Role of Businesses in Responsible Production</a>
              </h2>
              <p class="text-gray-600 mb-4">Insights into how companies can adopt sustainable practices.</p>
              <div class="flex items-center text-sm text-gray-500">
                <span>Descember 02, 2024</span>
                <span class="mx-2">•</span>
                <span>3 min read</span>
              </div>
            </div>
          </article>



          <article class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset("img/5.jpg") }}" alt="Blog post image" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                <a href="/waste-management" class="hover:text-blue-600">Recycling and Waste Management</a>
              </h2>
              <p class="text-gray-600 mb-4">Educating about the impact of improper waste disposal on the environment.</p>
              <div class="flex items-center text-sm text-gray-500">
                <span>Descember 07, 2024</span>
                <span class="mx-2">•</span>
                <span>6 min read</span>
              </div>
            </div>
          </article>




          <article class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset("img/6.jpg") }}" alt="Blog post image" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold text-gray-800 mb-2">
                <a href="/community-power" class="hover:text-blue-600">The Power of Community and Policy Advocacy
                </a>
              </h2>
              <p class="text-gray-600 mb-4">The role of policy changes and advocacy in promoting sustainable practices.</p>
              <div class="flex items-center text-sm text-gray-500">
                <span>Descember 10, 2024</span>
                <span class="mx-2">•</span>
                <span>4 min read</span>
              </div>
            </div>
          </article>


        </div>
      </main>

</x-layout>
