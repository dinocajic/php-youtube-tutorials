# php-youtube-tutorials
Code for the PHP YouTube tutorials

Make sure that you have Docker installed.

Clone the repo.

Run the following command:
docker run -i -t -p "80:80" -v ${PWD}/app:/app -v ${PWD}/mysql:/var/lib/mysql mattrayner/lamp:latest

That will spin up a docker container with LAMP that will allow you to run all of the code.

Visit 0.0.0.0 or 127.0.0.1 to see the application in action
