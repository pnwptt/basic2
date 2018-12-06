<?php
    use yii\widgets\ActiveForm;
    use yii\web\Session;
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
                        Add Error code
                        <!-- <div align="right">
                            <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                        </div> -->
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12" >
                                <?php $f = ActiveForm::begin([
                                    'action' => 'form',
                                    'options' => ['enctype'=>'multipart/form-data']
                                ]); ?> 
                                    <div class="form-group">
                                        <?php echo $f->field($errorcode,'n_errorcode')->label('Errorcode name'); ?>                
                                    </div>
                                    <div class="form-group">
                                        <?php echo $f->field($errorcode,'c_rank')->label('Rank'); ?>                
                                    </div>
                                    <div class="form-group">
                                        <?php echo $f->field($errorcode,'c_code')->label('Code'); ?> 
                                    </div>
                                    <div class="form-group" align="center">
                                        <?php echo $f->field($errorcode,'i_errorcode_type_id')
                                            ->dropdownList($type,['style'=>'width: 200px'])->label('Type'); ?>
                                    </div>
                                    <div class="box-footer" align="center">
                                        <button type="button" class="btn btn-default " onclick="window.history.back()">Cancel</button>
                                        <button type="submit" value="save" class="btn btn-primary">Submit</button>
                                    </div><!--/box-footer-->

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