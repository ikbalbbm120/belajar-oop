<?php
spl_autoload_register(function ($class ) {
    // ini kenapa menginclude __DIR__ di concat sama produk kan udah di dalam folder produk
    // ngakibatin php bingung
    require_once  $class . '.php';
});