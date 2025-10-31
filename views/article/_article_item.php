<?php
/** @var $model \app\models\Article */
?>

<div>
    <a href="<?php  echo \yii\helpers\Url::to(['/article/view', 'id' => $model->id]) ?>">
        <h3><?php echo \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?php // echo \yii\helpers\Html::encode($model->body) 
              // echo \yii\helpers\StringHelper::truncateWords(\yii\helpers\Html::encode($model->body), 40);        
              // или то же самое, но с использованием модели Article
              echo \yii\helpers\StringHelper::truncateWords($model->getEncodedBody(), 40);      
        ?>
    </div>
    <hr>
</div>



