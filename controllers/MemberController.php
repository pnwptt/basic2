<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

use yii\web\Controller;
use yii\web\Response;
use yii\web\Session;

use app\models\LoginForm;
use app\models\ContactForm;
use app\models\member;

class MemberController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }

    public function actionMember(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $items = Member::find()->all();
        return $items;
    }
    
}