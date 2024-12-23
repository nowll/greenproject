<x-layout>
      <!-- Hero Section -->
      <div class="bg-green-500 text-white py-40">
        <div class="container mx-5 px-4 py-20 text-center">
          <h1 class="text-4xl font-bold mb-4">Make a Difference Today</h1>
          <p class="text-xl mb-8">Join our community of environmental volunteers and help create a sustainable future.</p>
          <a href="/discussions" class="bg-white text-green-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100">Get Started</a>
        </div>
      </div>

      <!-- Features -->
      <div class="container mx-5 px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
            <div class="container mx-auto p-4">

                <h1 class="text-3xl font-bold mb-4 text-center">Air Quality in {{ $data['city']['name'] }}</h1>

                <div class="bg-white p-4 rounded shadow-md">
                    <h2 class="text-xl font-bold">Current Air Quality</h2>
                    <p>AQI: <strong>{{ $data['aqi'] }}</strong></p>
                    <p>Dominant Pollutant: <strong>{{ $data['dominentpol'] }}</strong></p>
                </div>

                <div class="mt-4 bg-white p-4 rounded shadow-md">
                    <h2 class="text-xl font-bold">Pollutant Details</h2>
                    <ul class="list-disc pl-6">
                        @foreach ($data['iaqi'] as $pollutant => $value)
                            <li>{{ ucfirst($pollutant) }}: {{ $value['v'] }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            </div>
          <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="map" id="map"></div>
          </div>



      </div>


      <style>
        #map {
            width: 100%;
            height: 400px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
        }
    </style>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.css" rel="stylesheet">
        <script>
            // Initialize base OpenStreetMap layer
            const osmLayer = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            });

            // Initialize WAQI air quality layer
            const waqiLayer = L.tileLayer('https://tiles.waqi.info/tiles/usepa-aqi/{z}/{x}/{y}.png', {
                attribution: 'Air Quality Tiles © <a href="http://waqi.info">waqi.info</a>',
                opacity: 0.6
            });

            // Create map and add both layers
            const map = L.map('map', {
                layers: [osmLayer, waqiLayer]
            }).setView([-6.2088, 106.8456], 11); // Set view to Jakarta, Indonesia
        </script>

</x-layout>
