## Деплой проекта
1. Проверить необходимое окружение (Все зависимости в composer.json). Для установки всех зависимостей запустить команды:
```composer install```  
```composer update```
2. Подключение к сторонней базе данных не требуется, все работает на дефолтной sqlite базе в дирекории /database
3. Команды для решения возможных проблем с правами на linux:
```
cp .env.example .env
sudo chown -R $USER:www-data storage
sudo chown -R $USER:www-data bootstrap/cache
chmod -R 775 storage
chmod -R 775 bootstrap/cache
sudo chmod -R ugo+rw storage
```
4. Запуск сервера на локальной машине:  
```php artisan serve```
     
Если все сделано правильно на этом этапе laravel должен выдать ошибку "Base table or view not found" и предложение о запуске миграции  
Запуск миграции с сидером:
``` php artisan migrate:fresh --seed```  
  
Необходимые записи в сидере, пользователь для входа там же (aa@example.com, aaaaaa)  
может работать на дефолтной базе sqlite

## Методы

get api/orders - получить список всех пользователей   
post api/login - получение токена  

## Пример работы
![1](https://github.com/user-attachments/assets/a8ec3b15-9699-4cbb-9c94-8b2d9ca34534)

<hr>

![2](https://github.com/user-attachments/assets/da4763d8-15dd-44a6-9b4e-fe685c8a7fd5)

<hr>

![3](https://github.com/user-attachments/assets/84c61c18-33ed-44c4-9490-15cfffa97cb1)
