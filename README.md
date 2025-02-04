# filament-demo
filament demo project, restaurant app

```bash
git clone git@github.com-IviKeiko:Ivikeiko/filament-demo.git
```

```bash
cd filament-demo
```

install php dependencies

```bash
composer install
```

create .env file
```bash
cp .env.example .env
```

generate key
```bash
php artisan key:generate
```

start migration
```bash
php artisan migrate
```

run app
```bash
php artisan serve
```

app: http://127.0.0.1:8000
filament admin panel: http://127.0.0.1:8000/admin

