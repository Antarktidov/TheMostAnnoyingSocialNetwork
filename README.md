# Самая худшая соцсеть (The Worst Social Network)

Это - самая бесяцая соцсеть. Здесь единственный контент - голосовые, к котором можно ставить только негативные реакции. Идея позаимстована [у Душнилы](https://www.youtube.com/watch?v=ZylVaL5GR6E). Один пользователь может поставить неограниченное количество негативных реакций и их нельзя удалить.

[Изображение ПК-версии](https://github.com/Antarktidov/TheBloatestSocialNetwork/blob/main/images/Index%20Desktop.png)

## Требуемое ПО

* PHP
* Composer
* База данных
* Node.js

## Установка

Клонируйте ропозиторий и установите зависимости:

```bash
git clone https://github.com/Antarktidov/TheBloatestSocialNetwork.git
cd TheWorstSocialNetwork
composer install
npm i
nmp run build
```

Настройте проект также, как [обычное Ларавел-приложение](https://laravel.com/docs/11.x/installation#initial-configuration), создав и отредактировал файл ```.env```.

Запустите миграции
```bash
php artisan migrate
```

Запустите проект, введя в одном терминале
```bash
npm run dev
```

А в другом
```bash
php artisan serve
```

## Использование

* Чтобы войти или зарегистировавться, перейдите по пути: ```/home```
* Чтобы опубликовать аудиозапись, перейдите по пути ```/create```
* Чтобы просмотреть все записи (и поставить им негатвиные реакции), откройте главную страницу
