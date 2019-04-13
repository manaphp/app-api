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
}