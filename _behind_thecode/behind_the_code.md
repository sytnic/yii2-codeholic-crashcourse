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

## Создать таблицу article и файлы через CRUD Generator

    CREATE TABLE article (
        id int auto_increment,
        title varchar(1024) not null,
        slug varchar(1024) not null,
        body LONGTEXT not null,
        created_at int,
        updated_at int,
        created_by int,
        -- updated_by int,
        PRIMARY KEY (id) 
    );

    ALTER TABLE article
        ADD CONSTRAINT article_user_created_by_fk
            FOREIGN KEY (created_by) references user (id); 

    -- ALTER TABLE article
    -- ADD CONSTRAINT article_user_updated_by_fk
    --    FOREIGN KEY (updated_by) references user (id); 

Вызвать GII 

    localhost:8080/gii

Сгенерировать модель, Model Generator

    Table name - article
    Model Class Name - Article

    Generate

Использовать CRUD Generator. `@app/` указывает на корень приложения.

    Model Class - app\models\Article
    Search Model Class - app\models\ArticleSearch
    Controller Class - app\controllers\ArticleController
    View Path  - @app/views/article

    Widget Used in Index Page - GridView

    Generate

Теперь `localhost:8080/article` открывает список статей. 

## 
