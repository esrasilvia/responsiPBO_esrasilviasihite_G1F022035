<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Esra silvia sihite");
var_dump($company);

$company->programmer = new BackendProgrammer("Erika Manik");
var_dump($company);

$company->programmer = new FrontendProgrammer("Glori Sitorus");
var_dump($company);

sayHelloProgrammer(new Programmer("Esra silvia sihitr"));
sayHelloProgrammer(new BackendProgrammer("Erika Manik"));
sayHelloProgrammer(new FrontendProgrammer("Glori Sitorus"));