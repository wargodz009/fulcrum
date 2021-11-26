#Installation Instruction (USING LARAVEL SAIL)
```shell 
$ //
$ git clone https://github.com/wargodz009/fulcrum.git foldername
$ cd foldername
$ cp .env.example .env
$ composer install
$ ./vendor/bin/sail up
$ ./vendor/bin/sail npm install
$ ./vendor/bin/sail npm run prod
$ ./vendor/bin/sail php artisan migrate:fresh --seed
$ Site http://127.0.0.1:8081/
$ API documentation http://127.0.0.1:8081/docs/index.html
```

#API MANUAL TESTING
```shell
//fork this public postman collection
https://www.postman.com/wargodz009/workspace/jay/collection/9441471-612e8ccb-eb6e-4a63-b2a1-c912bcd3d26d
// or test on the documentation itself (/docs/index.html)
```