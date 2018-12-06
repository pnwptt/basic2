<?php

/* @var $this yii\web\View */
$this->title = 'Member';
$this->params['breadcrumbs'][] = $this->title;

use antkaz\vue\VueAsset;
//use inquid\vue\Vue;
VueAsset::register($this); // register VueAsset
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
                    
                    </div>
                </div>
            </div>          
        </div>        
    </div>
</div>
