<?php

use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
<?= $form->field($model, 'file')->fileInput() ?>
    <button>Submit</button>
<?php ActiveForm::end(); ?>