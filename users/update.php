<?php

// Map site
$this->title = 'Update Users: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><span class='glyphicon glyphicon-pencil' aria-hidden='true'>Update: <?= $model['name']?></span></h1>
<?= $this->render('commonForm', ['model' => $model]) ?>