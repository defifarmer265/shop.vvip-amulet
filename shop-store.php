<?php
$pageHeader = [
    'pageTitle' => '',
    'pageDesc' => 'ซื้อขาย',
    'url' => 'index.php',
    'breadcrumb' => [
        [
            'icon' => 'fa-home',
            'link' => './',
            'text' => "หน้าแรก"
        ],
        [
            'text' => "แทงหวยออนไลน์"
        ]
    ]
];

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
                    <div class="col-12">
                        <nav id="store-nav" class="border-bottom border-dark border-top flex-nowrap navbar navbar-expand p-0 text-nowrap" style="margin: 0 -15px;">
                            <ul class="mx-auto navbar-nav overflow-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-3 link-light active">หน้าหลัก</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-3 link-light">ข้อมูลร้านค้า</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-3 link-light">สินค้ามาใหม่</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link p-3 link-light">การชำระเงิน</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </section>

            <section id="sidebar" class="order-1 order-md-0 col-md-3 col-lg-3">
                <aside class="card bg-transparent border-0" style="margin-top: 5px;">
                    <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="icon mr-2"><i class="fas fa-list text-white-50"></i></span>
                            <span>หมวดหมู่พระ</span>
                        </h3>
                    </header>
                    <div class="list-group list-group-flush" style="background-color: rgba(0,0,0,0.25);">
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light active" aria-current="true">Cras justo odio</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Morbi leo risus</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light">Porta ac consectetur ac</a>
                    </div>
                </aside>

            </section>

            <article class="order-0 order-md-1 col-md">

                <section class="">
                    <header class="section-heading mt-จ heading-line heading-line-high d-flex [align-items-center] justify-content-between">
                        <div class="title-section bg-darker d-flex align-items-baseline">
                            <div>
                                <h4>พระเด่นประจำวัน</h4>
                                <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">วันที่ <?= THdatetime(date('Y-m-d H:i:s')) ?></div>
                            </div>
                        </div>
                        <a href="./shop.php" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
                    </header>

                </section>
            </article>

        </section>
    </main>

    <?php require_once __DIR__ . '/2_foot.php'; ?>
</body>

</html>