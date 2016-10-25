<?php
include('../EspacoAluno/control/request_controller.php');

$controller = new RequestController();



echo json_encode($controller->execute());
