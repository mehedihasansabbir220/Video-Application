# Video Application

This is a web application built with Laravel for uploading, managing, and watching videos.

## Features

- **Upload Video:** Users can upload videos with title, description, and optional thumbnail.
- **View Videos:** List of all uploaded videos with a watch button to view each video.
- **Edit and Delete:** Users can edit video details and delete videos.
- **Search Videos:** Search videos by title using the search bar.
- **Live Search:** Real-time search results as you type in the search bar.

## Installation

1. **Clone the repository:**
   ```bash
   git clone <repository_url>
   cd video-app
2. Install dependencies:
   1. composer install
    2. npm install && npm run dev
3. Set up environment variables:
   1. Duplicate .env.example to .env and configure your database settings.
    2. Generate application key: php artisan key:generate
4. Run migrations:
   1. ` php artisan migrate `
5. Start the development server:
   1. ` php artisan serve `
6. Access the application:
Open your web browser and visit `http://localhost:8000`
#### Usage
- Upload Video:
Click on "Upload Video" in the navigation bar and fill out the form to upload a video.

- View Videos:

All uploaded videos are displayed on the homepage (/).
Click "Watch Now" button to view any video.
Edit and Delete Videos:

Click on a video title to view details.
Edit or delete the video from the details page.
Search Videos:

Use the search bar in the navigation to search videos by title.
Results will appear instantly as you type.
Contributing
Contributions are welcome! Please fork the repository and submit a pull request.

####  License
This project is licensed under the MIT License - see the LICENSE file for details.# Video-Application
