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
![1](https://github.com/user-attachments/assets/d8f8015c-5c0a-4c06-92d4-0ee7d4f8d4b8)
<hr>

![2](https://github.com/user-attachments/assets/7ef1024d-86a0-44db-ab73-963863648aa8)

<hr>

![3](https://github.com/user-attachments/assets/53a9de41-4780-4279-b978-53ba570822df)
