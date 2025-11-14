<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Article $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">
        <small>Created At:
            <b> 
          <?php // Вывод времени создания статьи, по дате создания
                //echo Yii::$app->formatter->asDatetime($model->created_at); 
                // Вывод времени создания статьи, как давно создана
                echo Yii::$app->formatter->asRelativeTime($model->created_at);
          ?></b>
          By: <b><?php echo $model->createdBy->username; ?></b>
        </small>
    </p>

    <p>
        <?php  // id заменены на slug в процессе перехода на slug   ?>
        <?= Html::a('Update', ['update', 'slug' => $model->slug], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'slug' => $model->slug], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php /* // Показывает все поля (данные) статьи
        DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'slug',
            'body:ntext',
            'created_at',
            'updated_at',
            'created_by',
        ],
    ]) */ ?>

    <div>
        <?php  // Показывает только body (текст) статьи
               // echo Html::encode($model->body);
               // или то же самое, но с использованием модели Article
               echo $model->getEncodedBody(); 
        ?>
    </div>



</div>
