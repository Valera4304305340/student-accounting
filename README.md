# Student Accounting System

## Docker Environment Setup

### Требования
- Docker Desktop with WSL2
- Git

### Запуск проекта
```bash
docker compose up -d --build
docker compose exec app composer create-project laravel/laravel .
docker compose exec app chmod -R 777 storage bootstrap/cache
