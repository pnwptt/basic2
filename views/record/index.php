<?php
    use yii\widgets\ActiveForm;
    use yii\web\Session;

    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\helpers\Url;
    //use dosamigos\tinymce\TinyMce;
    //use dosamigos\ckeditor\CKEditor;;

    $session = new Session();
    $session->open();
?>
<!DOCTYPE html>
<html>
    <head>
    	<title>Record Form</title>
    </head>
    <style type="text/css">
        body{
            font-size:12px; 
        }
        .textAlignVer{
            display:block;
            filter: flipv fliph;
            -webkit-transform: rotate(-90deg); 
            -moz-transform: rotate(-90deg); 
            transform: rotate(-90deg); 
            position:relative;
            width:20px;
            white-space:nowrap;
            font-size:12px;
            margin-bottom:10px;
        }

        th.left, td.left {
            padding: 0px;
            text-align: left;    
        }
        table {
            border: 1px !important;
            padding: 0px;
        }
    </style>
    <body>
    	<div id="page-wrapper" style="min-height: 99px;">
            <div class="row">
                <div class="col-md-12" style="height:120px;">
                    <p>
                        <?php $f = ActiveForm::begin([
                            'action' => 'form',
                            'options' => ['enctype'=>'multipart/form-data']
                        ]); ?> 
                        <table width="100%">
                            <tr> 
                                
                                <!-- ******************************************************************************* -->
                                <th>
                                    <b>
                                        <div class="form-group" align="center">
                                             PPA Inspection Record
                                            <?php echo $f->field($series,'i_series_id')->dropdownList($serieslist, ['style'=>'width: 120px'])->label('Series'); ?>
                                        </div>
                                        <hr>
                                    </b>
                                </th>
                                <td class="">
                                    <?php // Html::img('img/bernina_logo.png'); ?>
                                </td>
                                <!-- ******************************************************************************* -->
                            </tr>
                        </table>
                        <?php ActiveForm::end(); ?>
                    </p>
                </div>
            </div>

            <!-- ========================================= -->
            <p>
                <?php $f = ActiveForm::begin([
                    'action' => 'form',
                    'options' => ['enctype'=>'multipart/form-data']
                ]); ?> 
                <table width="100%" style="width: 100%;">
                    <tr>
                        <td width="">
                            <label>Order number: </label><br>
                            <label>Part number: </label><br>
                            <label>Part name: </label><br>
                            <label>Customer: </label><br>
                            <label>Quantity: </label><br>
                            <label>Sampling Qty: </label>
                        </td>
                        <td width="">
                            <label>
                                <input type="text"><?php //echo $f->field($record, 'c_order_number'); ?><br> 
                                <input type="text"><br> 
                                <input type="text"><br> 
                                <input type="text"><br> 
                                <input type="text"><br> 
                                <input type="text">  
                            </label>
                        </td>
                        <td width="" align="center">
                            <b class="">Refference to WI-QA-001<hr>
                            <i>Lot judgement</i><br></b>
                            <label>
                                <input type="checkbox" name="" value="accept"> Accpet 
                                <input type="checkbox" name="" value="reject"> Reject <br>
                                NCR No: <input type="text" value="" size="8"><br>
                                8D Report No: <input type="text" value="" size="8"><br>
                            </label>   
                        </td>
                        <td class="" width="" align="center">
                            <label>Check by  <input type="text" value="" size="11"><br></label>
                            <label>Date: <input type="date" value="" ></label><br><hr>
                            <label>Approved by <input type="text" value="" size="8"></label>
                            <label>Date: <input type="date" value=""></label><br>
                        </td>
                    </tr>
                </table>
                <?php ActiveForm::end(); ?>
            </p>
        </div>
        <div>
            <p>
                <?php $f = ActiveForm::begin([
                    'action' => 'form',
                    'options' => ['enctype'=>'multipart/form-data']
                ]); ?> 
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <td align="center" rowspan="2" bgcolor="#DCDCDC"><b>Item no.</b></td>
                            <td align="center" rowspan="2" bgcolor="#FAEBD7"><b>Error code</b></td>
                            <td align="center" rowspan="2" bgcolor="#DCDCDC"><b>Inspection detail</b></td>
                            <td align="center" colspan="2" bgcolor="#FAEBD7"><b>Machine no.</b></td>
                            <td align="center" rowspan="2" bgcolor="#DCDCDC"><b>Reject detail</b></td>
                            <td align="center" rowspan="2" bgcolor="#FAEBD7"><b>Total</b></td>
                        </tr>
                        <tr>
                            <td height="120" bgcolor="#F0F8FF" align="center"><span class="textAlignVer">61019850</span></td>
                            <td bgcolor="#FFF5EE" align="center"><span class="textAlignVer"><input type="text" size="5"><?php // ?></span></td>
                        </tr>
                    </thead>
                    <tbody border="1">
                        <tr>
                            <td colspan="7" bgcolor="#CCFFCC"><i>Measurement</i></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#FAF0E6">1</td>
                            <td align="center" bgcolor="#AFEEEE"><input type="text" size="5"></td>
                            <td bgcolor="#FFFFCC"><?php //ดึงชื่อ errorcode มาใส่ ?></td>
                            <td bgcolor="#F0F8FF" align="center"><input type="text" size="3"></td>
                            <td bgcolor="#FFF5EE" align="center"><input type="text" size="3"></td>
                            <td align="center" bgcolor="#F5F5F5"><input type="text" size="6"></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="7" bgcolor="#CCFFCC"><i>Test Specification</i></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#FAF0E6">1</td>
                            <td align="center" bgcolor="#AFEEEE"><input type="text" size="5"></td>
                            <td bgcolor="#FFFFCC"><?php //ดึงชื่อ errorcode มาใส่ ?></td>
                            <td bgcolor="#F0F8FF" align="center"><input type="text" size="3"></td>
                            <td bgcolor="#FFF5EE" align="center"><input type="text" size="3"></td>
                            <td align="center" bgcolor="#F5F5F5"><input type="text" size="6"></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="7" bgcolor="#CCFFCC"><i>Failure symptom</i></td>    
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#FAF0E6">1</td>
                            <td align="center" bgcolor="#AFEEEE"><input type="text" size="5"></td>
                            <td bgcolor="#FFFFCC"><?php //ดึงชื่อ errorcode มาใส่ ?></td>
                            <td bgcolor="#F0F8FF" align="center"><input type="text" size="3"></td>
                            <td bgcolor="#FFF5EE" align="center"><input type="text" size="3"></td>
                            <td align="center" bgcolor="#F5F5F5"><input type="text" size="6" ></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" bgcolor="#FFB6C1"><b>Total</b></td>
                            <td bgcolor="#F0F8FF" align="center"><input type="text" size="3"></td>
                            <td bgcolor="#FFF5EE" align="center"><input type="text" size="3"></td>
                            <td align="center" bgcolor="#F5F5F5"><input type="text" size="6" ></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" bgcolor="#FFF8DC"><b>Pallet#</b></td>
                            <td colspan="2" align="center" bgcolor="#FFFFF0"><input type="text" size="5"></td>
                            <td rowspan="3" align="center" bgcolor="#F8F8FF"><b>Total R/J (M/C)</b></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" bgcolor="#FFB6C1"><b>Accept</b></td>
                            <td colspan="2" align="center" bgcolor="#FFFFF0"><input type="text" size="5"></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center" bgcolor="#FFF8DC"><b>Reject</b></td>
                            <td colspan="2" align="center" bgcolor="#FFFFF0"><input type="text" size="5"></td>
                            <td bgcolor="#FAFAD2" align="center"><input type="text" size="5"></td>
                        </tr>
                    </tbody>
                </table>
                <?php ActiveForm::end(); ?>
            </p>
        </div>
    </body>
</html>