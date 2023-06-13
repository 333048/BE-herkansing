<?php

    class OverzichtController extends BaseController
    {
        private $overzichtModel;

        public function __construct()
        {
            $this->overzichtModel = $this->model('overzichtModel');
        }

        public function index()
        {
            $leerlingen = $this->overzichtModel->getLeerlingen();
        
            // Laad de view
            $data = [
                
                'leerlingen' => $leerlingen
            ];
            $this->view('overzicht/index', $data);
        }
    }
?>
