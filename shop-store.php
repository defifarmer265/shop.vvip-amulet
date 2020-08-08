<?php
$pageHeader = [
    'pageTitle' => 'อนุรักษ์พระเครื่อง',
    'pageDesc' => 'ร้านอนุรักษ์พระเครื่อง โดย วรวุฒิ พิพัฒน์โรจนกมล',
    'url' => 'shop-store.php',
    'breadcrumb' => [
        [
            'icon' => 'fa-home',
            'link' => './',
            'text' => "หน้าแรก"
        ],
        [
            'icon' => 'fa-store',
            'link' => './shop.php',
            'text' => "ร้านค้า"
        ],
        [
            'text' => 'อนุรักษ์พระเครื่อง'
        ]
    ]
];

$page = $_GET['page'] ?? 'index';

session_start();
require_once __DIR__ . '/Tool/Connect.php';
require_once __DIR__ . '/Tool/function.php';

require_once __DIR__ . '/1_head.php';
?>

<body class="bg-darker text-white">
    <?php require_once __DIR__ . '/_header.php'; ?>
    <?php require_once __DIR__ . '/_menu.php'; ?>

    <main id="main-frame" class="container-xl">
        <section class="row py-5 gx-4 gy-5">
            <section class="mt-0">
                <div id="headerCarousel" class="carousel slide" data-interval="false" data-ride="carousel" style="z-index: 0;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="//dummyimage.com/1200x700" style="max-height: 500px; object-fit: cover; object-position: center;" class="d-block rounded-bottom w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="//dummyimage.com/1200x700" style="max-height: 500px; object-fit: cover; object-position: center;" class="d-block rounded-bottom w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="//dummyimage.com/1200x700" style="max-height: 500px; object-fit: cover; object-position: center;" class="d-block rounded-bottom w-100" alt="...">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#headerCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#headerCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="row g-0 px-lg-5 align-items-center" style="margin-top: -20px;">
                    <div class="col-auto" style="width: 22vw; max-width: 200px;">
                        <a href="#" class="hover-popup d-block w-100 mb-3 position-relative overflow-hidden" style="height: 0; padding-top: 100%; max-width: 300px;">
                            <div class="position-absolute d-flex justify-content-center" style="top: 0; left: 0; width: 100%; height: 100%;">
                                <img src="//dummyimage.com/500x300" alt="Store Logo" class="rounded-circle" style="height: 100%; width: 100%; border: 5px solid var(--bs-darker);">
                            </div>
                        </a>
                    </div>
                    <div class="col pl-3 pl-md-5 mt-4">
                        <h1 class="h3">อนุรักษ์พระเครื่อง</h1>
                        <h5 class="text-muted">วรวุฒิ พิพัฒน์โรจนกมล</h5>
                    </div>
                    <!-- <div class="col-auto mt-4"></div> -->
                </div>
            </section>
            <div class="col-12 mt-0 sticky-top bg-darker" style="top: 57px; z-index: 1021;">
                <nav id="store-nav" class="border-bottom border-dark border-top flex-nowrap navbar navbar-expand p-0 text-nowrap" style="margin: 0 -15px;">
                    <ul class="mx-auto navbar-nav overflow-auto">
                        <li class="nav-item">
                            <a href="<?=$pageHeader['url']?>?page=index" class="nav-link p-3 link-light <?=$page === 'index' ? 'active' : ''?>">หน้าหลัก</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$pageHeader['url']?>?page=info" class="nav-link p-3 link-light <?=$page === 'info' ? 'active' : ''?>">ข้อมูลร้านค้า</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$pageHeader['url']?>?page=announce" class="nav-link p-3 link-light <?=$page === 'announce' ? 'active' : ''?>">ประกาศร้านค้า</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$pageHeader['url']?>?page=products" class="nav-link p-3 link-light <?=$page === 'products' ? 'active' : ''?>">สินค้าทั้งหมด</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=$pageHeader['url']?>?page=payment" class="nav-link p-3 link-light <?=$page === 'payment' ? 'active' : ''?>">การชำระเงิน</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <?php 
                if ($page === 'index')  include __DIR__.'/store/__storeIndex.php';
                if ($page === 'info')   include __DIR__.'/store/__storeInfo.php';
            ?>

        </section>
    </main>

    <?php require_once __DIR__ . '/2_foot.php'; ?>
</body>

</html>