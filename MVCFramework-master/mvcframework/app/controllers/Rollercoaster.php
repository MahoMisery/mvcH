<?php
    class Rollercoaster extends Controller{
        public function __construct()
        {
            
        }

        public function index(){
            $data = ['title' => 'Test page'];

            $this->view('rollercoaster/index', $data);
        }
    }
?>