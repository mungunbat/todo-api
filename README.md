# How to build
```sh
docker-compose up
docker exec -it <php container> composer install --ignore-platform-reqs
docker exec -it <php container> php artisan migrate
```

# API documentation
### Todo URL
host:8080/api/todo/gets
host:8080/api/todo/get/{id}
host:8080/api/todo/store
host:8080/api/todo/update/{id}
host:8080/api/todo/delete/{id}

### Company URL
host:8080/api/company/gets
host:8080/api/company/get/{id}
host:8080/api/company/store
host:8080/api/company/update/{id}
host:8080/api/company/delete/{id}

### Roles URL
host:8080/api/role/gets
host:8080/api/role/get/{id}
host:8080/api/role/store
host:8080/api/role/update/{id}
host:8080/api/role/delete/{id}