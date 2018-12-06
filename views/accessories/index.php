<?php

/* @var $this yii\web\View */
$this->title = 'Accessories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-6">
            <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Panel info</h3>
            </div>
            <div class="panel-body">
            <form class="form-horizontal">
                <fieldset>
                    
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="focusedInput">Scan : </label>
                        <div class="col-lg-10">
                            <input class="form-control" id="focusedInput" type="text" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2" for="inputDefault">WO : </label>
                        <div class="col-lg-10">
                            <input class="form-control" id="inputDefault" type="text" value="">
                        </div>
                    </div>
                </fieldset>
            </form>
            </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Last scan workorder</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills">                       
                    <h1> <li><a href="#">WO-12345678<span class="badge"><h1>300</h1></span></a></li></h1>
                    </ul>
                </div>
            </div>
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Serial number</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Workorder</h3>
                </div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
