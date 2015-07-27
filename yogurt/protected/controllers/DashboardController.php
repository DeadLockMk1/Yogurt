<?php

/**
 * Created by PhpStorm.
 * User: LeFranj
 * Date: 25.07.2015
 * Time: 0:47
 */
class DashboardController extends Controller
{
    public $layout = '//layouts/dashboard';

    public function actionHome()
    {
        $this->render('dashboardHome');
    }
}