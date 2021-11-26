#Installation Instruction
```shell
$ git clone url foldername
$ cd foldername
$ cp .env.example .env
$ composer install
$ ./vendor/bin/sail up
$ ./vendor/bin/sail php artisan migrate:fresh --seed
$ then visit http://127.0.0.1:80/
```

#Testing
```shell
//fork this public postman collection
https://www.postman.com/wargodz009/workspace/jay/collection/9441471-612e8ccb-eb6e-4a63-b2a1-c912bcd3d26d
```

#Documentation
```shell
visit the sail path + /docs/index.html
for example: http://127.0.0.1:80/docs/index.html
```