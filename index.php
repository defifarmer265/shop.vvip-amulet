<?php

use AltoRouter as Router;
// ประกาศใช้คลาส AltoRouter ในชื่อ Router
require_once __DIR__ . '/vendor/autoload.php';

$router = new Router();

// กำหนด route ในเว็บ
$router->map("GET", "/", function () {
    require __DIR__ . "/home.php";
});

$router->map("GET", "/new-products", function () {
    require __DIR__ . "/new-products.php";
});

$router->map("GET", "/rules", function () {
    require __DIR__ . "/rules.php";
});

// $router->map("GET", "/shops", function () {
//     require __DIR__ . "/shops.php";
// });

$router->map("GET", "/shop/[*:shopName]/[a:page]?", function ($shopName, $page = 'home') {
    // ไฟล์ view-note.php จะเรียกใช้ $id ได้ทันที  เพราะอยู่ใน scope เดียวกัน
    require __DIR__ . "/shop-store.php";
});

// ประมวลผล route
$match = $router->match();

if (is_array($match) && is_callable($match['target'])) {
    // เรียก callback เพื่อดึงหน้าที่ต้องการมาแสดง
    call_user_func_array($match['target'], $match['params']);
} else {
    // แสดงหน้า 404
    require __DIR__ . "/404.php";
}
