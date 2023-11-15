<?php

// buat namespace
namespace Helper;

// import data dari conflict
use Data\Conflict;

class MyClass {
    public function useConflict() {
        // buat obeject dari namespace yang di buat
        $conflictObject = new Conflict();
        // Lakukan sesuatu dengan objek $conflictObject
        return $conflictObject;
    }
}


// import data helper
require_once "data/Helper.php";
use function Helper\helpMe;
use const Helper\APPLICATION;
helpMe();
// tampilkan helper menggunakan echo
echo APPLICATION . PHP_EOL;
// masukan Helper\helpMe();