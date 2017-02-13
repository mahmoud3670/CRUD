<?php
use yii\helpers\Html;
?>

<?php $this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];?>
<?= Html::a('Create New Record ^_^', ['users/create'], ['class' => 'btn btn-success']); ?>
<br><br>
<table class="table table-condensed">

  <th>id</th>
  <th>Name</th>
  <th>User Name</th>
  <th>E-mail</th>
  <th>Phone</th>
  <th>Action</th>
  <?php foreach($model as $field){ ?>
 <tr>
   <td><?= $field->id;?></td>
   <td><?= $field->name;?></td>
   <td><?= $field->username;?></td>
   <td><?= $field->email;?></td>
   <td><?= $field->mobile;?></td>
   <td>
       <?= Html::a("<span class='glyphicon glyphicon-zoom-in' aria-hidden='true'>view</span>", 
   	    ['users/view', 'id' => $field->id]); ?> 

   	   <?= Html::a("<span class='glyphicon glyphicon-pencil' aria-hidden='true'>update</span>", 
        ['users/update', 'id' => $field->id]); ?>  

       <?= Html::a("<span class='glyphicon glyphicon-trash' aria-hidden='true'>Delete</span>", 
            ['users/delete', 'id' => $field->id],
             ['data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
   </td>	
 </tr>
 <?php }?>
</table>