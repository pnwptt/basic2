<?php
    use yii\widgets\ActiveForm;
    use yii\web\Session;
    use yii\helpers\Html;

    //use dosamigos\tinymce\TinyMce;
    //use dosamigos\ckeditor\CKEditor;;

    $session = new Session();
    $session->open();
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div id="page-wrapper" style="min-height: 99px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header" style="color:#930000">Error code</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Errorcode
                            <!-- <div align="right">
                                <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                            </div> -->
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12" >
                                    <?php $f = ActiveForm::begin([
                                        'action' => "update?i_errorcode_id=$errorcode->i_errorcode_id",
                                        'options' => ['enctype'=>'multipart/form-data']
                                        ]); ?> 
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <?php echo $f->field($errorcode,'n_errorcode')->label('Errorcode name'); ?>           
                                            </div>     
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <?php echo $f->field($errorcode,'c_rank')->label('Rank'); ?>                
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6">
                                                <?php echo $f->field($errorcode,'c_code')->label('Code'); ?> 
                                            </div>
                                        </div>
                                        <div class="form-group" align="center">
                                            <div class="col-lg-6">
                                                <?php echo $f->field($errorcode,'i_errorcode_type_id')
                                                ->dropdownList($type,['style'=>'width: 200px'])->label('Type'); ?>
                                            </div>
                                        </div>
                                        <div class="row" align="center">
                                            <div class="form-group">
                                                <div class="col-lg-12">
                                                    <?= Html::submitButton('Save', ['class'=>'btn btn-primary']); ?>
                                                    <button type="button" class="btn btn-default " onclick="window.history.back()">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    <!--/box-footer-->
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>       
        </div> 
    </body>
</html>