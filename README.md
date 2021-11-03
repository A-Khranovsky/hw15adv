# Make secure URL to your localhost server
You may use ngrok application. Download it and follow instructions from
https://dashboard.ngrok.com/get-started/setup

# Run ngrok and notice forwarding url
For example: http://f418-80-90-225-46.ngrok.io

# Create account at Autodesk web site
https://forge.autodesk.com/

# Create an app
Use this link https://forge.autodesk.com/myapps/create

# Fill the form and save
- Callback URL like this: http://f418-80-90-225-46.ngrok.io/callback
- Your Website like this: http://f418-80-90-225-46.ngrok.io

# Notice received data
- Client ID
- Client Secret
- Callback URL

# Up the services
docker-compose up -d

# Add to file .env.example
OAUTH_AUTODESK_CLIENT_ID=your_recived_client_id  
OAUTH_AUTODESK_SECRET_KEY=your_recived_client_secret  
OAUTH_AUTODESK_CALLBACK_URL=like_this_http://f88c-80-90-225-46.ngrok.io/callback  

# Go to the container
docker exec -it hw15adv_php-apache_1 bash

# Run inside the container
cp .env.example .env  
php artisan migrate:fresh --seed  
php artisan key:generate  

# Down services if you are exit
docker-compose down  
