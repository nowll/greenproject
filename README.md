<a id="readme-top"></a>
<!-- PROJECT SHIELDS -->

<!-- PROJECT LOGO -->
<div align="center">
  <h3 align="center">Environmental Volunteer Forum</h3>
  <p align="center">
    A platform connecting environmental volunteers and providing educational resources for environmental protection
    <br />
    <a href="#about-the-project"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/your_username/repo_name">View Demo</a>
    ·
    <a href="https://github.com/your_username/repo_name/issues">Report Bug</a>
    ·
    <a href="https://github.com/your_username/repo_name/issues">Request Feature</a>
  </p>
</div>
<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>
<!-- ABOUT THE PROJECT -->
About The Project
The Environmental Volunteer Forum is a web platform designed to connect people who are passionate about environmental conservation and sustainable living. The platform serves two main purposes:

Facilitating volunteer opportunities for environmental projects in local areas
Providing educational resources and practical tips for environmental protection

The website features real-time air quality data for Jakarta through integration with the WAQI API, helping users stay informed about their local environmental conditions.
Built With

Show Image
Show Image
WAQI API
Show Image

<!-- GETTING STARTED -->
Getting Started
To get a local copy up and running, follow these steps.
Prerequisites

PHP >= 8.1
Composer
MySQL
Node.js and npm

 ```sh
   npm install npm@latest -g
 ```

Get a free API Key at WAQI

Clone the repo
 ```sh
   git clone https://github.com/your_username/repo_name.git
 ```


Install Composer dependencies
 ```sh
   composer install
 ```
shCopy

Install NPM packages
 ```sh
   npm install
 ```
shCopy

Create a copy of .env.example and rename to .env
 ```sh
   cp .env.example .env
 ```
shCopy

Generate application key
 ```sh
   php artisan key:generate
 ```
shCopy

Configure your database in .env
Enter your WAQI API key in .env
 ```sh
   WAQI_API_KEY=your_api_key_here
 ```
Copy

Run migrations
 ```sh
   php artisan migrate
 ```
shCopy


<!-- USAGE -->
Usage
The platform can be used to:

Browse and join environmental volunteer opportunities
Create and manage environmental projects
Access educational resources about environmental protection
Monitor real-time air quality data for Jakarta
Share and discuss environmental initiatives with other volunteers

<!-- FEATURES -->
Features

User authentication and profile management
Volunteer opportunity posting and application system
Educational resources and environmental tips
Real-time air quality monitoring for Jakarta
Discussion forum for environmental topics
Project management tools for organizers

<!-- CONTRIBUTING -->
Contributing
Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

Fork the Project
Create your Feature Branch (git checkout -b feature/AmazingFeature)
Commit your Changes (git commit -m 'Add some AmazingFeature')
Push to the Branch (git push origin feature/AmazingFeature)
Open a Pull Request

<!-- LICENSE -->
License
Distributed under the MIT License. See LICENSE.txt for more information.
<!-- CONTACT -->
Contact
Your Name - @your_twitter - email@example.com
Project Link: https://github.com/your_username/repo_name
<!-- ACKNOWLEDGMENTS -->
Acknowledgments

WAQI API for providing air quality data
Laravel Documentation
Choose an Open Source License
Font Awesome


Our project links: http://202.10.44.72/
<!-- MARKDOWN LINKS & IMAGES -->
