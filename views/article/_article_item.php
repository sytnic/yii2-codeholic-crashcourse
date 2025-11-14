<?php
/** @var $model \app\models\Article */
?>

<div>
    <a href="<?php  echo \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php // echo \yii\helpers\Html::encode($model->body) 
              // echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model->body), 40);        
              // или то же самое, но с использованием модели Article
              echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(), 40);      
        ?>
    </div>
    
    <p class="text-muted text-end">
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

    <hr>
</div>



