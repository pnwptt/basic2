<?php
    use yii\widgets\ActiveForm;
    use yii\web\Session;
    //use dosamigos\tinymce\TinyMce;
    //use dosamigos\ckeditor\CKEditor;;

    $session = new Session();
    $session->open();
?>
<?php 
    use yii\helpers\Html;

    $this->title = 'Checklists';
    $this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Checklists</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> -->
  </head>
  <body>
        <div id="page-wrapper" style="min-height: 99px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header" style="color:#930000" >Checklists</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Checklists
                        <!-- <div align="right">
                            <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                        </div> -->
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <!-- <div class="table-resposive"> -->
                                    <div class="row">
                                        <?php $f = ActiveForm::begin([
                                            'action' => 'form',
                                            'options' => ['enctype'=>'multipart/form-data']
                                        ]); ?> 
                                        <div class="col-sm-12">
                                            <div align="center">
                                                <?php echo $f->field($series, 'i_series_id')->dropdownList($serieslist, ['style'=>'width: 120px'])->label('Series'); ?>
                                            </div>
                                            <table width="100%" class="table table-striped table-bordered table-hover dataTable on-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example-info" style="width: 100%;">
                                                <thead>
                                                    
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        <?php ActiveForm::end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </body>
</html>
