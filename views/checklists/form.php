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
    <style>
        .btn-manage-group {
            vertical-align: middle;
        }
    </style>
</head>
<body>
        <div id="page-wrapper" style="min-height: 99px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header" style="color:#930000">Checklists</h2>
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
                            <div class="row">
                                <div class="col-md-2 col-md-offset-5" align="center">
                                    <?php 
                                        echo $form->labelEx($model,'category_id');
                                        echo CHtml::dropDownList('category_id','', Category::allCategory(),
                                             array(
                                             'ajax' => array(
                                             'type'=>'POST', 
                                             'url'=>CController::createUrl('subcategory/dynamicSubCategories'), 
                                             'update'=>'#subcategory_id', 
                                             )));
                                        // echo $form->labelEx($model,'category_id');
                                        // echo CHtml::dropDownList('category_id','', Category::allCategory(),
                                        //     array(
                                        //     'ajax' => array(
                                        //     'type'=>'POST',
                                        //     'url'=>CController::createUrl('subcategory/dynamicSubCategories'),
                                        //     'update'=> '#subcategory_id'
                                        // )));
                                        // echo $form->error($model,'category_id');
                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5" id="not_on_list"></div>
                                <div class="col-md-2 btn-manage-group" align="center">
                                    <button class="btn btn-success btn-block">Add</button><br>
                                    <button class="btn btn-danger btn-block">Remove</button>
                                </div>
                                <div class="col-md-5" id="on_list"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
</body>
</html>