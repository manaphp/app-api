<?php
namespace App;

use App\Controllers\TimeController;

class Router extends \ManaPHP\Router
{
    public function __construct()
    {
        $this->_prefix = '/api';

        parent::__construct(true);
        $this->addGet('/', [TimeController::class, 'current']);
        $this->addGet('/time/current', [TimeController::class, 'current']);
    }
}