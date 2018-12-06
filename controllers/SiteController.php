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

class SiteController extends Controller
{   
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $message = '';
        $member = new Member();

        if(!empty($_POST)){
    			$c_user = $_POST['Member']['c_user'];
    			$c_password = $_POST['Member']['c_password'];

    			$member = Member::find()->where(['c_user'=>$c_user,'c_password'=>$c_password])->one();

    			if(!empty($member)){

    				$session = new Session();
    				$session->open();
    				$session->set('i_member_id',$member->i_member_id);
    				$session->set('n_member',$member->n_member);
    				$session->set('c_user',$member->c_user);
    				$session->set('c_costcenter',$member->c_costcenter);
    				$session->set('i_cost',$member->i_cost);
                    $session->set('l_admin',$member->l_admin);
    				return $this->redirect(['index']);

    			} else {

            $message='Username or Password incorrect!';

    			}
    		}

        return $this->render('login',[
              'member'=>$member,
              'message'=>$message
          ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
      $session = new Session();
      $session->open();
      unset($session['l_admin']);
      unset($session['i_member_id']);
      unset($session['n_member']);
      unset($session['c_user']);
      unset($session['c_costcenter']);
      unset($session['i_cost']);
      unset($session['cart']);

  		return $this->redirect(['index']);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
