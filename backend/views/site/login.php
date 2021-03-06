<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

$this->title = 'Login';
?>

<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Bem Vindo</h1>
            </div>

            <?php $form = ActiveForm::begin(['id' => 'login-form',
            'options' => ['class' => 'user']
            ]); ?>


            <?= $form->field($model, 'username', [
                    'inputOptions' =>[
                            'class' => 'form-control form-control-user',
                             'placeholder' => 'Insira o username'
                    ]
            ])->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password' ,[
                    'inputOptions' =>[
                        'class' => 'form-control form-control-user',
                        'placeholder' => 'Insira a password'
            ]])->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>
<
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
                <hr>

            <?php ActiveForm::end() ?>
            <hr>

        </div>
    </div>
</div>