<?php

    /* @var $this \yii\web\View */
    /* @var $content string */

    use app\widgets\Alert;
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use app\assets\AppAsset;

    AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="stylesheet" href="../css/flatly.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <style>
            .navbar-default .btn-danger{
             margin-top:3px;    
             padding: 10px 10px 10px 10px;    
            }        
        </style>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                'brandLabel' => Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    // ['label' => 'Accessories', 'url' => ['/accessories/index']],
                    // ['label' => 'Member', 'url' => ['/member/index']],
                    ['label' => 'Series', 'url' => ['/series/index']],
                    ['label' => 'Errorcode', 'url' => ['/error/index']],
                    ['label' => 'Errorcode Type', 'url' => ['/errortype/index']],
                    ['label' => 'PPA Record Form', 'url' => ['/record/index']],
                    ['label' => 'Checklists', 'url' => ['/checklists/index']],
                    // ['label' => 'Contact', 'url' => ['/site/contact']],
                    !Yii::$app->session->get('c_user') ? (
                        ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (      
                        '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->session->get('c_user').')',
                            ['class' => 'btn btn-danger']
                        )
                        . Html::endForm()
                        . '</li>'
                    )
                ],
            ]);
            NavBar::end();
            ?>

            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Bernina Thailand <?= date('Y') ?></p>

                <!-- <p class="pull-right"><em>Powered by </em><span class="text-primary">Jirawat Khanfan</span></p> -->
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
