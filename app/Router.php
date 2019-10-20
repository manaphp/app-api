<?php
namespace App;

use App\Controllers\IndexController;
use App\Controllers\TimeController;

class Router extends \ManaPHP\Router
{
    public function __construct()
    {
        $this->_prefix = '/api';

        parent::__construct(true);
        $this->add('/', 'index::hello');
        $this->addGet('/time/current', [TimeController::class, 'current']);
    }
}