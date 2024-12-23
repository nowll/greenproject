<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EcoVolunteer - Make a Difference</title>
    @vite('resources/css/app.css')
  </head>
  <body class="bg-gray-50">
    <!-- Navigation -->
    <x-navbar></x-navbar>

    <!-- Hero Section -->

    {{$slot}}

    <!-- Footer -->

    <x-footer></x-footer>

  </body>
</html>
