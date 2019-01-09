<?php 
    use yii\helpers\Html;

    $this->title = 'Checklists';
    $this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form lists</title>
  
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> -->
  </head>
  <body>
        <div id="page-wrapper" style="min-height: 99px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header" style="color:#930000" >form lists</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form lists
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
                                    <table width="100%" class="table table-striped table-bordered table-hover dataTable on-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example-info" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Work Order</th>
                                                    <th>Record Date</th>
                                                    <th>P/N</th>
                                                    <th>Order Qty</th>
                                                    <th>Insp. Qty</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($records as $records):?> 
                                                <tr>
                                                    <td align="center"><?php echo $records->order_number; ?></td>
                                                    <td align="center"><?php echo $records->d_records_date; ?></td>
                                                    <td align="center"><?php echo $records->part_number; ?></td>
                                                    <td align="center"><?php echo $records->qty; ?></td>
                                                    <td align="center"><?php echo $records->sampling_qty;?></td>
                                                    <td align="center"><?php echo $records->c_status;?></td>
                                                    <td align="center">
                                                        <div class="box-footer" align="center">
                                                            <span><?= Html::a('Update', ['update', 'i_checklists_id'=> $records->i_checklists_id], ['class'=> 'label label-default'] );?></span>
                                                          
                                                            <!-- <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button> -->
                                                            <span><?= Html::a('Delete', ['delete', 'i_checklists_id'=> $records->i_checklists_id], ['class' => 'label label-danger',
                                                                'data' => [
                                                                    'confirm' => 'Are you sure you want to delete this item?',
                                                                    'method' => 'post',
                                                                    ],
                                                                ])?>
                                                            </span>
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
