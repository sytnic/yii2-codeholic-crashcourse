## Code:

https://github.com/thecodeholic/Yii2CrashCourse

## Installation

https://www.yiiframework.com/doc/guide/2.0/ru/start-installation

    composer create-project --prefer-dist yiisoft/yii2-app-basic basic

Сервер PHP

    php -S localhost:8080
    (Ctrl+C to quit)

## Widgets in layouts 

Виджеты в `views/layouts` на странице вызываются двумя способами

    NavBar::begin([      ]);

    echo Nav::widget([   ]);
    echo Alert::widget();

## DB

    CREATE TABLE user(
        id            int auto_increment,
        username      varchar(55)  not null,
        password      varchar(255) not null,
        auth_key      varchar(255) not null,
        access_token  varchar(255) not null,
        PRIMARY KEY (id)
    )

Добавить пользователей: 
- admin, admin, key1, token1
- demo, demo, key2, token2

Таким образом, вход `login` пользователя на основе списка (массива) пользователей заменена на авторизацию на основе пользователей из таблицы `user` БД.  

## Gii

http://yii2-codeholic-crashcourse/web/gii

Model generator

http://yii2-codeholic-crashcourse/web/gii/model

    table - user
    model - User



