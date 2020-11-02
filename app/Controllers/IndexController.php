<?php

namespace App\Controllers;

use App\Models\City;
use ManaPHP\Rest\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return City::first([]);
    }

    public function helloAction()
    {
        return $this->response->setJsonData('Hello ManaPHP');
    }
}