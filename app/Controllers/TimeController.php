<?php

namespace App\Controllers;

class TimeController extends Controller
{
    public function getAcl()
    {
        return ['*' => '*'];
    }

    public function helloAction()
    {
        return $this->response->setContent('hello world!');
    }

    public function currentAction()
    {
        $data = [];
        $data['current_time'] = date('Y-m-d H:i:s');
        $data['memory_usage'] = round(memory_get_usage(false) / 1024) . 'KB';

        return $data;
    }
}
