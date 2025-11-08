<?php
session_start();

define('URLROOT', 'http://localhost/2ParcialLaboratorio_Sosa');

require_once 'config/database.php';
require_once 'app/core/App.php';
require_once 'app/core/Controller.php';
require_once 'app/core/Model.php';

$app = new App();

