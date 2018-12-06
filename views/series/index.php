<?php 
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Series</title>
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
                            Series Lists
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
                                                    <th>Serie code</th>
                                                    <th>Serie name</th>
                                                    <th>Quantity/Pallet</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($series as $s):?> 
                                                <tr>
                                                    <td align="center"><?php echo $s->c_series_code; ?></td>
                                                    <td align="center"><?php echo $s->n_series_name; ?></td>
                                                    <td align="center"><?php echo $s->i_pallet_qty; ?></td>
                                                    <td align="center">
                                                        <div class="box-footer" align="center">
                                                            <?= Html::a('Edit', ['form', 'i_series_id'=>$series], ['$s'=>'i_series_id']) ?>
                                                        
                                                        <!-- <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button> -->
                                                        <button type="submit" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure you want to delete?')" ><i class="fas fa-trash-alt"></i></button>
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