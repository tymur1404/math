Getting Started

Install Docker on your computer. Instructions can be found on the official Docker website: https://docs.docker.com/get-docker/

1. Clone the project repository to your computer:

   git clone git clone https://github.com/tymur1404/math.git


2. Generate the application key:

   php artisan key:generate


3. Start the Docker containers:

   docker-compose up -d


4. Verify that the containers are running:

   docker ps


5. You should see three containers: math_app, math_nginx and math_db.

6. Enter the app container:

   docker exec -it math_app bash


7. Run database migrations:

   php artisan migrate


8. After open new tab terminal and run this command
   npm run dev && npm install

You can now open the project in your browser at http://localhost:8876.
