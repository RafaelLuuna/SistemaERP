<?php

class Produtos extends Controller
{
    use Model;

    public function __construct(){
        $this->view('master');
    }

    public function index(){
        $this->view('admin/header');

    }
    
    
}