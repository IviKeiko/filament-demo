# filament-demo
filament demo project, restaurant app

```bash
git clone git@github.com-IviKeiko:Ivikeiko/filament-demo.git
```

```bash
cd filament-demo/backend
```

create .env file
```bash
cp .env.example .env
```

```bash
  docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
```

```bash
./vendor/bin/sail up -d
```

```bash
./vendor/bin/sail artisan key:generate
```
```bash
./vendor/bin/sail artisan migrate
```


app: [http://127.0.0.1:8000](http://localhost/)
filament admin panel: [http://127.0.0.1:8000/admin](http://localhost/admin/login)

