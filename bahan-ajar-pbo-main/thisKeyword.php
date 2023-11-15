<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$dian = new Person("dian", "bengkulu");

// tambahkan value nama di object
$dian->nama = "dian";

// panggil function sayHelloNull dengan parameter
$dian->sayHelloNull("Kic");

// buat object dari kelas person
$khairani = new Person("khairani", "padang");

// tambahkan value nama di object
$khairani->nama = "khairani";

// panggil function sayHelloNull dengan parameter null
$khairani->sayHelloNull(null);
