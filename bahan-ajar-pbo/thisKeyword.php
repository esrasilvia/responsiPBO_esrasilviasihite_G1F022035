<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$esra = new Person("Esra", "Medan");

// tambahkan value nama di object
$esra->nama = "Esra";

// panggil function sayHelloNull dengan parameter
$esra->sayHelloNull("Kic");

// buat object dari kelas person
$tasya = new Person("Tasya", "Lampung");

// tambahkan value nama di object
$tasya->nama = "Tasya";

// panggil function sayHelloNull dengan parameter null
$tasya->sayHelloNull(null);
