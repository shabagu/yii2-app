<?php

namespace app\controllers;

use yii\web\Controller;

class AppController extends Controller {

}

function globalDebugPrint($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}
