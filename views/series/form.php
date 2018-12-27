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
                <h1 class="page-header" style="color:#930000">Series</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Add Series
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
                                ]);?> 
                                    <!-- <div class="form-group"> 
                                        <?php //echo $f->field($series,'c_series_code')->label('Serie code'); ?>
                                    </div> -->
                                    <div class="form-group">
                                        <?php echo $f->field($series,'n_series_name')->label('Serie name'); ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo $f->field($series,'i_pallet_qty')->label('Pallet Quantity'); ?>
                                    </div>
                                    <div class="box-footer" align="center">
                                        <button type="button" class="btn btn-default" onclick="window.history.back()">Cancel</button>
                                        <button type="submit" class="btn btn-primary " onclick="return confirm('Are you sure?')">Submit</button>
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