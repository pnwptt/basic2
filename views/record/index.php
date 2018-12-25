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
            font-size:14px; 
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
           /* border: 1px black !important;
            padding: 0px;*/
        }
        .b1 tr{
          border: 1px solid black !important;
        }
        .b1 th{
          border: 1px solid black !important;
        }
        .b1 td{
          border: 1px solid black !important;
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
                        <table align="center">
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
                                    <?php // Html::img('img/bernina_logo.png') โลโก้บริษัท; ?>
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
                <table width="100%">
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
                                <input type="text"><?php //echo $f->field($record, 'c_part_number'); ?><br> 
                                <input type="text"><?php //echo $f->field($record, 'c_part_name'); ?><br> 
                                <input type="text"><?php //echo $f->field($record, 'customer'); ?> <br> 
                                <input type="text"><?php //echo $f->field($record, 'qty'); ?><br> 
                                <input type="text"><?php //<!-- คำนวน samling qty จาก qty  --> ?>  
                            </label>
                        </td>
                        <td width="" align="center">
                            <b class="">Refference to WI-QA-001<hr>
                            <i>Lot judgement</i><br></b>
                            <label>
                                <input type="radio" name="" value="accept">Accpet&nbsp;
                                <input type="radio" name="" value="reject">Reject<br>
                                NCR No: <input type="text" value="" size="8">&nbsp;
                                8D Report No: <input type="text" value="" size="8"><br>
                            </label>   
                        </td>
                        <td class="" width="" align="center">
                            <label>Check by  <input type="text" value="" size="11"><br></label>&nbsp;
                            <label>Date: <input type="date" value="" ></label><br><hr>
                            <label>Approved by <input type="text" value="" size="8"></label>&nbsp;
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
                <table class="b1" width="100%">
                    <thead>
                        <tr>
                            <td align="center" rowspan="2" ><b>Item no.</b></td>
                            <td align="center" rowspan="2" ><b>Error code</b></td>
                            <td align="center" rowspan="2" ><b>Inspection detail</b></td>
                            <td align="center" colspan="2" ><b>Machine no.</b></td>
                            <td align="center" rowspan="2" ><b>Reject detail</b></td>
                            <td align="center" rowspan="2" ><b>Total</b></td>
                        </tr>
                        <tr>
                            <td height="120"  align="center" valign="bottom"><span class="textAlignVer">61019850</span></td>
                            <td align="center" valign="bottom"><span class="textAlignVer"><input type="text" size="5"><?php // ?></span></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" ><i>Measurement</i></td>
                        </tr>
                        <tr>
                            <td align="center" >1 <!-- รันจำนวนเต็ม --> </td>
                            <td align="center" ><input type="text" size="5"></td>
                            <td ><?php //ดึงชื่อ errorcode มาใส่ เมื่อพิมพ์ errorcode?></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center" ><input type="text" size="6"></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="7" ><i>Test Specification</i></td>
                        </tr>
                        <tr>
                            <td align="center" >1 <!-- รันตามจำนวนเต็ม --></td>
                            <td align="center" ><input type="text" size="5"></td>
                            <td ><?php //ดึงชื่อ errorcode มาใส่ ?></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center" ><input type="text" size="6"></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="7" ><i>Failure symptom</i></td>    
                        </tr>
                        <tr>
                            <td align="center" >1</td>
                            <td align="center" ><input type="text" size="5"></td>
                            <td ><?php //ดึงชื่อ errorcode มาใส่ ?></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center" ><input type="text" size="6" ></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><b>Total</b></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center"><input type="text" size="3"></td>
                            <td align="center"><input type="text" size="6" ></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><b>Pallet#</b></td>
                            <td colspan="2" align="center"><input type="text" size="5"></td>
                            <td rowspan="3" align="center"><b>Total R/J (M/C)</b></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><b>Accept</b></td>
                            <td colspan="2" align="center"><input type="text" size="5"></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><b>Reject</b></td>
                            <td colspan="2" align="center"><input type="text" size="5"></td>
                            <td align="center"><input type="text" size="5"></td>
                        </tr>
                    </tbody>
                </table>
                <?php ActiveForm::end(); ?>
            </p>
        </div>
    </body>
</html>