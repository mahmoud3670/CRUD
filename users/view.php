<?php
use yii\helpers\Html;

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><span class='glyphicon glyphicon-zoom-in' aria-hidden='true'> <?= $model['name']?></span></h1>
<table class="table table-condensed">

<h2>
	 <?= Html::a("<span class='glyphicon glyphicon-pencil' aria-hidden='true'>update </span> ", 
        ['users/update', 'id' => $model['id']]); ?>  

       <?= Html::a("<span class='glyphicon glyphicon-trash' aria-hidden='true'> Delete</span>", 
            ['users/delete', 'id' => $model['id']],
             ['data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
      
</h2>
<tr>
  <td class="active"><center>Name</center></td>
  <td class="success"> <center><?= $model['name']?></center> </td>
</tr>
<tr>
  <td class="active"><center>UserName</center></td>
  <td class="success"><center><?= $model['username']?></td>
</tr>
<tr>
  <td class="active"><center>password</center></td>
  <td class="success"><center><?= $model['password']?></td>
</tr>
<tr>
  <td class="active"><center>E-mail</center></td>
  <td class="success"><center><?= $model['email']?></center></td>
</tr>
<tr>
  <td class="active"><center>Phone</center></td>
  <td class="success"><center><?= $model['mobile']?></center></td>
</tr>
<tr>
  <td class="active"><center>gender</center></td>
  <td class="success"><center>
  <?php 
       $gender=$model['gender'];
        if($gender===1)
           echo "Male";
        else
           echo "Fmale";
     ?>
       
   </center></td>
</tr>
<tr>
  <td class="active"><center>created_at</center></td>
  <td class="success"><center><?= $model['created_at']?></center></td>
</tr>
<tr>
  <td class="active"><center>updated_at</center></td>
  <td class="success"><center><?= $model['updated_at']?></center></td>
</tr>
</table>