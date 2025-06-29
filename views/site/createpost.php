<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\helpers\Url


?>

<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg2.webp">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 m-auto">
                    <div class="page-title-content text-center">
                        <h2 class="title">发布日志</h2>
                        <div class="bread-crumbs">
                            <a href="index.html">主页</a>
                            <span class="breadcrumb-sep"> // </span>
                            <span class="active">发布日志</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-overlay3"></div>
    </section>
    <!--== End Page Title Area ==-->
</main>



<section class="about-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mt-5 pt-4">
                    <h2 class="title">创建新日志</h2>
                    <p>在这里书写海洋的故事</p>
                </div>

                <div class="post-form">
                    <?php $form = ActiveForm::begin(['options' => ['class' => 'post-form-wrapper']]); ?>
                    <?= $form->field($model, 'author_id')->hiddenInput([
                        'value' => Yii::$app->user->isGuest ? null : Yii::$app->user->id
                    ])->label(false) ?>
                    <div class="form-group">
                        <?= $form->field($model, 'name')->textInput([
                            'class' => 'form-control',
                            'placeholder' => '请输入日志标题'
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $form->field($model, 'content')->textarea([
                            'class' => 'form-control',
                            'rows' => 10,
                            'placeholder' => '请输入日志内容'
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <?= $form->field($model, 'tagString')->textInput([
                            'class' => 'form-control',
                            'placeholder' => '请输入日志标签'
                        ]) ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-theme">
                            发布日志 <i class="icofont-rounded-double-right"></i>
                        </button>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--== Start Divider Area Wrapper ==-->

<!--== End Divider Area Wrapper ==-->
</main>