<?php
$pageHeader = [
    'pageTitle' => '404 ไม่บพหน้าที่ต้องการ',
    'pageDesc' => '',
    'url' => '404.php',
    'breadcrumb' => [
        [
            'icon' => 'fa-home',
            'text' => "หน้าแรก"
        ],
    ]
];

session_start();
require_once __DIR__ . '/Tool/Connect.php';
require_once __DIR__ . '/Tool/function.php';

require_once __DIR__ . '/1_head.php';

$dummyCategories = ["พระบูชา", "พระกรุ", "เหรียญพระพุทธ", "พระคณาจารย์", "พระสมเด็จ", "พระปิดตา", "พระกริ่ง", "พระนางพญา", "พระขุนแผน", "แม่นางกวัก", "พระสังกัจจายน์", "พระพุทธชินราช", "กวนอิม", "พระพรหม", "พระหลวงปู่ทวด", "หลวงพ่อคูณ", "ฤาษี", "กุมารทอง", "เครื่องรางทั่วไป", "ผ้ายันต์-ตะกรุด", "สีผึ้ง", "จตุคามรามเทพ", "หนังสืออุปกรณ์พระ", "หลวงปู่นน"];

?>

<body class="bg-darker text-white">
    <?php require_once __DIR__ . '/_header.php'; ?>
    <?php require_once __DIR__ . '/_menu.php'; ?>

    <main id="main-frame" class="container-xl">
        <section class="row py-5 g-4">
            <!-- For Mobile -->
            <section class="for-mobile d-md-none mt-0">
                <aside class="mb-4">
                    <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="icon mr-2"><i class="fas fa-search text-white-50"></i></span>
                            <span>ค้นหา</span>
                        </h3>
                    </header>
                    <form id="store-search">
                        <?php if (isset($_GET['category']) && !empty($_GET['category'])) : ?>
                            <input type="hidden" name="category" value="<?= $_GET['category'] ?>">
                        <?php endif; ?>
                        <div class="input-group">
                            <input id="store-search-input" type="search" value='<?= isset($_GET['search']) ? $_GET['search'] : '' ?>' name="search" class="form-control" placeholder="ค้นหา" style="border-radius: 100px 0 0 100px;">
                            <button class="btn btn-dark" type="submit" style="border-radius: 0 100px 100px 0;"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </aside>
            </section>

            <section id="sidebar" class="order-1 order-md-0 col-md-3 col-lg-3">

                <!-- For PC -->
                <section class="for-pc d-none d-md-block mt-0">
                    <aside class="mb-4">
                        <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                            <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                                <span class="icon mr-2"><i class="fas fa-search text-white-50"></i></span>
                                <span>ค้นหา</span>
                            </h3>
                        </header>
                        <form id="store-search">
                            <?php if (isset($_GET['category']) && !empty($_GET['category'])) : ?>
                                <input type="hidden" name="category" value="<?= $_GET['category'] ?>">
                            <?php endif; ?>
                            <div class="input-group">
                                <input id="store-search-input" type="search" value='<?= isset($_GET['search']) ? $_GET['search'] : '' ?>' name="search" class="form-control" placeholder="ค้นหา" style="border-radius: 100px 0 0 100px;">
                                <button class="btn btn-dark" type="submit" style="border-radius: 0 100px 100px 0;"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </aside>
                </section>

                <aside class="card bg-transparent border-0 d-none d-md-block" style="margin-top: 5px;">
                    <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="icon mr-2"><i class="fas fa-list text-white-50"></i></span>
                            <span>หมวดหมู่พระ</span>
                        </h3>
                    </header>
                    <div class="list-group list-group-flush" style="background-color: rgba(0,0,0,0.25);">
                        <a href="/" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?= isset($_GET['category']) ? (empty($_GET['category']) ? 'active' : '') : 'active' ?>" aria-current="true">ทั้งหมด</a>
                        <?php foreach ($dummyCategories as $cat) : ?>
                            <a href="/category=<?= $cat ?>" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?= isset($_GET['category']) ? ($_GET['category'] === $cat ? 'active' : '') : '' ?>"><?= $cat ?></a>
                        <?php endforeach; ?>
                    </div>
                </aside>

                <aside class="mt-md-5 card bg-transparent border-0">
                    <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="icon mr-2"><i class="fas fa-store text-white-50"></i></span>
                            <span>แนะนำร้านค้า</span>
                        </h3>
                    </header>
                    <div class="row g-1 justify-content-center">
                        <?php
                        $colors = ['ff0', '1a0', 'd21', 'fff', '09a', 'ff00ff', '00d5ff', 'c8ff00'];
                        for ($i = 1; $i <= 20; $i++) :
                        ?>
                            <a href="/shop/anurak-amulet" class="col-auto d-inline-block">
                                <img src="//dummyimage.com/100x100/<?= $colors[array_rand($colors)] ?>" class="rounded-circle" style="border: 3px solid white;" width="55" height="55">
                            </a>
                        <?php endfor; ?>
                    </div>
                </aside>

                <aside class="mt-5 card bg-transparent border-0">
                    <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="icon mr-2"><i class="fab fa-facebook text-white-50"></i></span>
                            <span>Facebook</span>
                        </h3>
                    </header>

                    <aside class="mt-5">
                        <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                            <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                                <span class="icon mr-2"><i class="fas fa-users text-white-50"></i></span>
                                <span>สถิติการเข้าชม</span>
                            </h3>
                        </header>
                        <div class="d-flex justify-content-center flex-wrap">
                            <div class="text-center mt-3">วันนี้</div>
                            <div class="h2 text-white mt-2 w-100 text-center">4</div>
                            <div class="text-center">ครั้ง</div>
                        </div>
                        <div>
                            <div class="mt-2 d-flex justify-content-between" style="border-bottom: 2px dotted rgba(0,0,0,0.15);">
                                <div class="bg-darker mt-1 pr-1" style="margin-bottom: -2.5px;">อาทิตย์นี้</div>
                                <div class="bg-darker mt-1 pl-1" style="margin-bottom: -2.5px;">149 ครั้ง</div>
                            </div>
                            <div class="mt-2 d-flex justify-content-between" style="border-bottom: 2px dotted rgba(0,0,0,0.15);">
                                <div class="bg-darker mt-1 pr-1" style="margin-bottom: -2.5px;">เดือนนี้</div>
                                <div class="bg-darker mt-1 pl-1" style="margin-bottom: -2.5px;">152 ครั้ง</div>
                            </div>
                            <div class="mt-2 d-flex justify-content-between" style="border-bottom: 2px dotted rgba(0,0,0,0.15);">
                                <div class="bg-darker mt-1 pr-1" style="margin-bottom: -2.5px;">ปีนี้</div>
                                <div class="bg-darker mt-1 pl-1" style="margin-bottom: -2.5px;">1,951 ครั้ง</div>
                            </div>
                        </div>
                    </aside>
                </aside>
            </section>

            <article class="order-0 order-md-1 col-md">
                <div class="text-center mb-4"><i class="far fa-times-circle fa-3x text-danger"></i></div>
                <h1 class="text-center">ไม่พบหน้าที่ต้องการ</h1>
            </article>

        </section>
    </main>

    <?php require_once __DIR__ . '/2_foot.php'; ?>
</body>

</html>