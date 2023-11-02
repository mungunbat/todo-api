# How to build
```sh
docker-compose up
docker exec -it <php container> composer install --ignore-platform-reqs
docker exec -it <php container> php artisan migrate
```

# API documentation
### Todo URL
host:8080/api/todo/gets<br>
host:8080/api/todo/get/{id}<br>
host:8080/api/todo/store<br>
host:8080/api/todo/update/{id}<br>
host:8080/api/todo/delete/{id}

### Company URL
host:8080/api/company/gets<br>
host:8080/api/company/get/{id}<br>
host:8080/api/company/store<br>
host:8080/api/company/update/{id}<br>
host:8080/api/company/delete/{id}

### Roles URL
host:8080/api/role/gets<br>
host:8080/api/role/get/{id}<br>
host:8080/api/role/store<br>
host:8080/api/role/update/{id}<br>
host:8080/api/role/delete/{id}