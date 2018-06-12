<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'TestPage';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p> this's test page </p>

    <code><?= __FILE__ ?></code>
</div>
< ?php
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',                                           // title свойство (обычный текст)
        'description:html',                                // description свойство, как HTML
        [                                                  // name свойство зависимой модели owner
            'label' => 'Owner',
            'value' => $model->owner->name,            
            'contentOptions' => ['class' => 'bg-red'],     // настройка HTML атрибутов для тега, соответсвующего value
            'captionOptions' => ['tooltip' => 'Tooltip'],  // настройка HTML атрибутов для тега, соответсвующего label
        ],
        'created_at:datetime',                             // дата создания в формате datetime
    ],
]);
?>