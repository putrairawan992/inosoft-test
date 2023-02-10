
# Bank BRI UI Test

## Requirements


* **PHP v8.1 CLI**
* **Composer v2 or latest**
* **Node v18**

If using Laravel Sail
* **Docker v20 or latest**
* **Docker Compose v20 or latest**


## Development Setup

Copy `.env.example` and rename it to `.env` and fill the value with whatever you desire. As for now, you can leave it as it is. Then type these commands in your terminal:

```
$ composer install
$ npm run install
```
If you using Laravel Sail :

```
$ ./vendor/bin/sail build
```

## Running Development Using Laravel Sail

Compile the UI components first:

```
$ npm run dev
```

Make sure you have run the ``./vendor/bin/sail build`` before. If not, Laravel Sail will building the docker image for the first time.

### Verbose (With logging)

```
$ ./vendor/bin/sail up
```

### Background (No logging)

```
$ ./vendor/bin/sail up -d
```

## Running Development Directly (Not recommended)
The reason for not using direct approach is that the project will have different behaviour depending on host system's global settings. Isolating the whole project in containerization is to offering consistent result across platform and environment without conflicting existing host system setup. Unless, this thing would be deployed directly into server.