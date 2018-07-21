<?php

use \yii\widgets\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

?>

<section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
    <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
            <div class="col-md-12 text-center">

                <div class="mb-5 element-animate">
                    <h1>Свяжитесь с нами</h1>
                    <p>Откройте для себя роскошный номер в мире Grand Memories.</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END section -->

<div class="container">
    <div class="row">
        <?php if( Yii::$app->session->hasFlash('error') ): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>
        <?php if( Yii::$app->session->hasFlash('success') ): ?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Yii::$app->session->getFlash('success'); ?>
            </div>
        <?php endif;?>
    </div>
</div>

<section class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="mb-5">Форма связи</h2>
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <?= $form->field($model, 'name')->label('Ваше имя')->textInput(['autofocus' => true]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <?= $form->field($model, 'phone')->label('Ваш телефон') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">

                    <?= $form->field($model, 'email')->label('Ваш Email') ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <?= $form->field($model, 'message')->label('Сообщение')->textArea(['rows' => 8]) ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                    <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
                </div>
                    <?php ActiveForm::end(); ?>
                </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h3 class="mb-5">Paragraph</h3>
                <p class="mb-5"><img src="images/img_4.jpg" alt="" class="img-fluid"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae labore aspernatur cumque inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. Ducimus harum alias quas, quibusdam provident ea sed, sapiente quo.</p>
                <p>Ullam cumque eveniet, fugiat quas maiores, non modi eos deleniti minima, nesciunt assumenda sequi vitae culpa labore nulla! Cumque vero, magnam ab optio quidem debitis dignissimos nihil nesciunt vitae impedit!</p>
            </div>
        </div>
</section>
<!-- END section -->