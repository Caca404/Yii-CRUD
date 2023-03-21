<?php
    use yii\helpers\Html;
?>

<?= Html::encode($message) ?>
<br />
<?php 
    foreach ($modelo as $key => $error) {
        echo ucfirst($key).": ".$error[0]."<br/>";
    }
?>