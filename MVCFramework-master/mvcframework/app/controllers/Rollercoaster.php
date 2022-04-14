<?php
    class Rollercoaster extends Controller{

        // bouwt een constructor
        public function __construct()
        {
            $this->rollercoasterModel = $this->model('Rollercoasters');
        }


            // haalt de data terug van de model zodat de user deze terug weergeven krijgt in de browser, this->view... zorgt ervoor dat de data gestuurd word naar de view rollercoaster/map
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