<?php

class Controller
{
    //controller view method
    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
    public function model($model)
    {
        require_once '../app/model/' . $model . '.php';
        return new $model;
    }
}
