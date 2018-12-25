<?php 
    use yii\helpers\Html;

    $this->title = 'Errorcode Type';
    $this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Error code Type</title>
    </head>
    <body>
    	<div id="page-wrapper" style="min-height: 99px;">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header" style="color:#930000">Error code Type</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Type
                            <a style="float:right" class="btn btn-xs btn-default" href="form" >Add</a>
                            <!-- <div align="right">
                            	
                                <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                            </div> -->
                        </div>
                        <div class="panel-body">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table width="100%" class="table table-striped table-bordered table-hover dataTable on-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example-info" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Error code Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($errortype as $et):?> 
                                                <tr>
                                                    <td align="center"><?php echo $et->n_errorcode_type; ?></td>
                                                    <td align="center">
                                                        <div class="box-footer" align="center">
                                                            <?= Html::a('Update', ['update', 'i_errorcode_type_id'=> $et->i_errorcode_type_id], ['class'=> 'label label-default']) ?>
                                                        
                                                        <!-- <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button> -->
                                                        <span><?= Html::a('Delete', ['delete', 'i_errorcode_type_id'=> $et->i_errorcode_type_id], ['class' => 'label label-danger',
                                                                'data' => [
                                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                                    'method' => 'post',
                                                                ],
                                                              ])
                                                        ?></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td align="center">
                                                        <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button>
                                                        <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')" ><i class="fas fa-trash-alt"></i></button>
                                                    </td>
                                                </tr> -->
                                                <?php endforeach;?>
                                            </tbody>
                                        </table>
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