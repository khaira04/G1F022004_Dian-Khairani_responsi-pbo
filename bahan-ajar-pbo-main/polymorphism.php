<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Gan");
var_dump($company);

$company->programmer = new BackendProgrammer("Gan");
var_dump($company);

$company->programmer = new FrontendProgrammer("Gan");
var_dump($company);

sayHelloProgrammer(new Programmer("Gan"));
sayHelloProgrammer(new BackendProgrammer("Gan"));
sayHelloProgrammer(new FrontendProgrammer("Gan"));