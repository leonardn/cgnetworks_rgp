<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UserMessage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-message-form">

    <?php $form = ActiveForm::begin(['id' => $model->formName()]); ?>

    <?php // $form->field($model, 'user_id')->textInput() ?>

    <?php //$form->field($model, 'to_user_id')->textInput() ?>

    <?= $form->field($model, 'message')->textarea(['rows' => 6]) ?>

    <?php // $form->field($model, 'created_date')->textInput() ?>

    <?php // $form->field($model, 'is_read')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Send' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>
        <div class="row"></div>
    </div>

    <?php ActiveForm::end(); ?>
    
    <div class='loader' id='loader'>
      <div class='loader-container'>
        <h3><b id='loader-header'>Please wait a moment while we are sending your message.</b></h3>
        <div class='progress progress-striped active' id='activeBar'>
          <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
        </div>
      </div>
    </div>

</div>

<?php
$script = <<< JS
    $('form#{$model->formName()}').on('beforeSubmit', function(e)
    {
        var \$form = $(this);
        $.post(
            \$form.attr("action"),
            \$form.serialize()
            )
        .done(function(result)
            {
                if(result == "success")
                {
                    $('form#{$model->formName()}').hide();
                    $('div.modal-header').hide();
                    showPreLoader('#loader', '#bar', '#activeBar', '#loader-header')
                }
                else
                {
                    $('form#{$model->formName()}').show();
                    $('div.modal-header').show();
                }
            })
        .fail(function(){
            /* ERROR MESSAGE*/
            $('form#{$model->formName()}').show();
            $('div.modal-header').show();
        });
        return false;
    });

    function showPreLoader(loader, bar, activeBar, loaderHeader) {
        var loader = $(loader);
        loader.show();

        var bar = $(bar);
        var activeBar = $(activeBar);
        var loaderHeader = $(loaderHeader);

        var tenPercentActiveBar = Math.round(activeBar.width() / 10);

        var progress = setInterval(function() {
            if (bar.width() >= activeBar.width())
            {
                clearInterval(progress);
                loaderHeader.html("Your message has been sent!").addClass("text-success");
                setTimeout(function() {
                    $(document).find('#modal').modal('hide');
                    setTimeout(function(){
                        $('div.modal-header').show();
                    }, 500);
                }, 800);
            }
            else
            {
                if (bar.width() / tenPercentActiveBar >= 10) 
                {
                    bar.text("Still working ... 100%");
                    bar.width(activeBar.width());
                }
                else 
                {
                    bar.width(bar.width() + tenPercentActiveBar);
                    bar.text(Math.round(bar.width() / tenPercentActiveBar) + "0%");
                }
            }
        }, 500);
    }
JS;
$this->registerJs($script);
?>
