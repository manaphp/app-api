<?php

namespace App\Controllers;

use ManaPHP\Rest\Controller;

class TimeController extends Controller
{
    public function getAcl()
    {
        return ['*' => '*'];
    }

    public function currentAction()
    {
        $data = [];
        $data['current_time'] = date('Y-m-d H:i:s');
        $data['memory_usage'] = round(memory_get_usage(false) / 1024) . 'KB';
        return $this->response->setJsonContent($data);
    }
}
