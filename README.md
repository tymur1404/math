Getting Started

Install Docker on your computer. Instructions can be found on the official Docker website: https://docs.docker.com/get-docker/

1. Clone the project repository to your computer:

  git clone https://github.com/tymur1404/math.git


2. Move to folder 'math'
   
   cd math

3. Install composer:

   composer install

4. Add your .evn file like .env.example

5. Build Docker:

   docker compose -p math_app -f docker-compose.yml build


6. Start the Docker containers:

   docker-compose up -d


7. Verify that the containers are running:

   docker ps


8. You should see three containers: math_app, math_nginx and math_db.

9. Enter the app container:

   docker exec -it math_app bash


10. Run database migrations:

   php artisan migrate


11. After open new tab terminal and run this command
   npm install && npm run dev

You can now open the project in your browser at http://localhost:8876.
