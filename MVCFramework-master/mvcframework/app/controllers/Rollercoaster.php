<?php
    class Rollercoaster extends Controller{
        public function __construct()
        {
            $this->rollercoasterModel = $this->model('Rollercoasters');
        }

        public function index(){
            $model = $this->rollercoasterModel->getCoasters();
            $tablesRow = "";
            foreach($model as $value){
                $tablesRow .= "
                <tr>
                <td>$value->id</td>
                <td>$value->nameRollerCoaster</td>
                <td>$value->nameAmusementPark</td>
                <td>$value->country</td>
                <td>$value->topSpeed</td>
                <td>$value->height</td>
                </tr>
                ";
            }
            $data = ['title' => 'Test page', 
                    'data' => $tablesRow];

            $this->view('rollercoaster/index', $data);
        }
    }
?>