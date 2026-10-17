<?php
    require_once 'koneksi.php';
    require_once 'armadaModel.php';

if (!class_exists('armadaController')) {
    class armadaController{
        private armadaModel $model;

        public function __construct(){
            $armadaPdo = connectDB();
            $this->model = new armadaModel($armadaPdo);
        }
        public function index(): void {
            $armadaList = $this->model->getAllArmada();
            $limit = 10;

            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $page = max($page, 1);
            $offset = ($page - 1) * $limit;

            $armadaList = $this->model->getArmadaPaginated($limit, $offset);
            $totalData = $this->model->getTotalArmada();
            $totalPages = ceil($totalData / $limit);
            require_once "armadaView.php";
        }

        public function formView(){
            require_once('formView.php');
        }

        public function store(): void{
            if($_SERVER["REQUEST_METHOD"] == "POST"){
            $requestDto = new armadaRequestDto($_POST);
            if ($requestDto->isValid()){
                $this->model->insertArmada($requestDto);
            }
            header("Location: index.php");
            require_once('formView.php');
            }
        }
    }
}
?>