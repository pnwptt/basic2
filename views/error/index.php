<?php 
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error code</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> -->
  </head>
  <body>
      <div id="page-wrapper" style="min-height: 99px;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-header" style="color:#930000" >Error code</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Error code Lists
                        <a style="float:right" class="btn btn-xs btn-default" href="form" >Add</a>
                    <!-- <div align="right">
                        <button type="button" onClick="window.location.href='/add_error_code'"> Add </button>
                    </div> -->
                    </div>
                    <div class="panel-body">
                        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <!-- <div class="table-resposive"> -->
                            <div class="row">
                                <div class="col-sm-12">
                                   <table class="table table-striped table-bordered table-hover dataTable on-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example-info" style="width: 100%;">
                                        <thead>
                                           <tr>
                                            <th>Rank</th>
                                            <th>Error code</th>
                                            <th>Inspection detail</th>                                          
                                            <th>Type</th>
                                            <th>Actions</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach ($errorcode as $e): ?>
                                                <tr>
                                                    <td align="center"><?php echo $e->c_rank; ?></td>
                                                    <td align="center"><?php echo $e->c_code; ?></td>
                                                    <td><?php echo $e->n_errorcode; ?></td>
                                                    <td align="center"><?php echo $e->type->n_errorcode_type; ?></td>
                                                    <td>
                                                        <div class="box-footer" align="center">
                                                            <?= 
                                                                        // $options = ['class' => 'btn btn-xs btn-danger',]
                                                            Html::a( 'Edit', ['form', 'i_errorcode_id'=> $errorcode], ['$e'=>'i_errorcode_id'] ) 
                                                            ?>

                                                            <button type="submit" class="btn btn-xs btn-danger" onClick="return confirm('Are you sure you want to delete?')"><i class="fas fa-trash-alt"></i></button>
                                                        </div>   
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
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
