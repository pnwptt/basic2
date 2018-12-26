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
                                                    <th>Form ID</th>
                                                    <th>Series</th>
                                                    <th>Effective Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($checklists as $cl):?> 
                                                <tr>
                                                    <td align="center"><?php echo $cl->i_forms_id; ?></td>
                                                    <td align="center"><?php echo $cl->i_series_id; ?></td>
                                                    <td align="center"><?php echo $cl->d_effective_date; ?></td>
                                                    <td align="center">
                                                        <div class="box-footer" align="center">
                                                            <span><?=  // $options = ['class' => 'btn btn-xs btn-danger',] ['$e'=>'i_errorcode_id']
                                                                Html::a('Update', ['update', 'i_checklists_id'=> $cl->i_checklists_id], ['class'=> 'label label-default'] );?></span>
                                                          
                                                        <!-- <button type="button" class="btn btn-success" href="/edit/" onClick="addHtmlTableRow()"><i class="fa fa-edit"></i></button> -->
                                                         <span><?= Html::a('Delete', ['delete', 'i_checklists_id'=> $cl->i_checklists_id], ['class' => 'label label-danger',
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
