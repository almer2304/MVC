<?php
require_once "../model/model.php";

class ControllerPlanet {
    private $model;

    public function __construct() {
        $this->model = new ModelPlanet();
    }

    public function index() {
        $planets = $this->model->getAll();
        include "../view/view.php";
    }

    public function show($id) {
        $planet = $this->model->getById($id);
        include "../view/detail.php";
    }
}
