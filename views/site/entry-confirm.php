<?php

/**
 * Description of entry-confirm
 *
 * @author TNChalise <teknarayanchalise@lftechnology.com>
 * @created_on : 12 Dec, 2014, 2:28:29 PM
 * @package 

 */
use yii\helpers\Html;
?>

<p>You have entered the following information:</p>
<ul>
    <li><label>Username</label>: <?php echo Html::encode($model->username); ?></li>
    <li><label>Email</label>: <?php echo Html::encode($model->email); ?></li>
</ul>


