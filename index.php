<?php
$pageHeader = [
    'pageTitle' => '',
    'pageDesc' => 'ศูนย์รวมร้านพระออนไลน์มาตรฐานชมรมพระเครื่องไทยอินเตอร์',
    'url' => 'index.php',
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
                            <input id="store-search-input" type="search" value='<?= isset($_GET['search']) ? $_GET['search'] : '' ?>' name="search" class="form-control" placeholder="ค้นหาในร้านค้า" style="border-radius: 100px 0 0 100px;">
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
                        <a href="./" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?= isset($_GET['category']) ? (empty($_GET['category']) ? 'active' : '') : 'active' ?>" aria-current="true">ทั้งหมด</a>
                        <?php foreach ($dummyCategories as $cat) : ?>
                            <a href="./category=<?= $cat ?>" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?= isset($_GET['category']) ? ($_GET['category'] === $cat ? 'active' : '') : '' ?>"><?= $cat ?></a>
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
                            <a href="./shop-store.php" class="col-auto d-inline-block">
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
                <section class="mb-5">
                    <header class="section-heading mt-จ heading-line heading-line-high d-flex [align-items-center] justify-content-between">
                        <div class="title-section bg-darker d-flex align-items-baseline">
                            <div>
                                <h4>ข่าวประชาสัมพันธ์</h4>
                                <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">ประจำวันที่ <?= THdatetime(date('Y-m-d H:i:s'), 'date') ?></div>
                            </div>
                        </div>
                        <a href="./news.php" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
                    </header>
                    <div class="list-group list-group-flush rounded-lg shadow-sm" style="background-color: rgba(0,0,0,0.25);">
                        <a href="#" class="py-3 list-group-item border-darker list-group-item border-darker-action bg-transparent link-light d-flex">
                            <div class="mr-3">
                                <img src="//dummyimage.com/200x300" class="hover-popup" alt="" style="width: 100px; height: 100px;">
                            </div>
                            <div>
                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla porro unde quidem, laborum ipsa neque cum, fugit explicabo magni eos quod! Aut ipsa eum quos pariatur totam.</p>
                                <span class="small blockquote-footer text-muted"><?= THdatetime(date('Y-m-d')) ?></span>
                            </div>
                        </a>
                        <a href="#" class="py-3 list-group-item border-darker list-group-item border-darker-action bg-transparent link-light d-flex">
                            <div class="mr-3">
                                <img src="//dummyimage.com/200x300" class="hover-popup" alt="" style="width: 100px; height: 100px;">
                            </div>
                            <div>
                                <p class="mb-2">Nulla porro unde quidem, laborum ipsa neque cum, fugit explicabo magni eos quod! Aut ipsa eum quos pariatur totam.</p>
                                <span class="small blockquote-footer text-muted"><?= THdatetime(date('Y-m-d')) ?></span>
                            </div>
                        </a>
                    </div>
                </section>

                <section class="for-mobile d-md-none mb-5">
                    <aside class="card bg-transparent border-0">
                        <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                            <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                                <span class="icon mr-2"><i class="fas fa-list text-white-50"></i></span>
                                <span>หมวดหมู่พระ</span>
                            </h3>
                        </header>
                        <div class="d-none d-md-block list-group list-group-flush" style="background-color: rgba(0,0,0,0.25);">
                            <a href="./<?= $pageHeader['url'] ?>?page=products" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?= isset($_GET['category']) ? (empty($_GET['category']) ? 'active' : '') : 'active' ?>" aria-current="true">ทั้งหมด</a>
                            <?php foreach ($dummyCategories as $cat) : ?>
                                <a href="./<?= $pageHeader['url'] ?>?page=products&category=<?= $cat ?>" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?= isset($_GET['category']) ? ($_GET['category'] === $cat ? 'active' : '') : '' ?>"><?= $cat ?></a>
                            <?php endforeach; ?>
                        </div>
                        <select id="select-category" onchange="location.href = `./<?= $pageHeader['url'] ?>?page=products${this.value !== '' ? `&category=${this.value}` : ''}`;" class="form-select d-md-none">
                            <option value>ทั้งหมด</option>
                            <?php foreach ($dummyCategories as $cat) : ?>
                                <option <?= isset($_GET['category']) ? ($_GET['category'] === $cat ? 'selected' : '') : '' ?>><?= $cat ?></option>
                            <?php endforeach; ?>
                        </select>
                    </aside>
                </section>

                <section class="mb-5">
                    <header class="section-heading mt-0 heading-line heading-line-high d-flex [align-items-center] justify-content-between">
                        <div class="title-section bg-darker d-flex align-items-baseline">
                            <div>
                                <h4>พระเด่นประจำวัน</h4>
                                <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">วันที่ <?= THdatetime(date('Y-m-d H:i:s')) ?></div>
                            </div>
                        </div>
                        <a href="./products.php" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
                    </header>
                    <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-2 justify-content-center justify-content-sm-start">
                        <?php
                        $names = ["รูปเหมือนบูชาหลวงปู่ฝั้น อาจาโรพิมพ์ยืนถือไม้เท้าเนื้อโลหะ", "หลวงพ่อเกษม เขมโก หน้าตัก12นิ้วสุสานไตรลักษณ์ลำปาง", "เหรียญหลวงปู่เพิ่มเนื้อทองคำปี2518พร้อมใบรับรองฯจากสมาคมฯ", "พระสมเด็จบางขุนพรหม พิมพ์อกครุฑ กรุเก่า", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล หน้าตัก9นิ้ววัดสระประสานสุข", "เหรียญลายกนกข้าง เจ้าคุณนรฯ ปี2513 วัดเทพศิรินทร์ติดรางวัล", "พระผงรูปเหมือนหลวงปู่ชา สุภัทโทรุ่นหัวมีจุดปี16วัดหนองป่าพง", "รูปเหมือนใบโพธิ์ เจ้าคุณนรฯปี2513 เนื้อนวะโลหะวัดเทพศิรินทร์", "รูปหล่อบูชาหลวงพ่อเกษม เขมโก ปี2528 สุสานไตรลักษณ์ลำปาง", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล รุ่นแรกปี2530ติดรางวัล", "เหรียญหันข้างเจ้าคุณนรฯวัดเทพศิรินทร์ ปี2513", "เหรียญหลวงพ่อมุมรุ่นแรกปี2507วัดปราสาทเยอร์ติดรางวัลที่1", "รูปหล่อโบราณรุ่นแรกหลวงพ่อแช่มวัดดอนยายหอมนครปฐม", "หลวงปู่ทวดวัดช้างให้หน้าตัก3นิ้วปี2539", "รูปหล่อบูชาหลวงปู่บุญมีวัดสระประสานสุข หน้าตัก 7นิ้ว รุุ่่น2", "รูปหล่อหลวงปู่เพิ่ม วัดกลางบางแก้ว ปี2518", "พระพุทธรูปทรงเครื่องจักรพรรดิ ภปร.มหามงคล 84 พรรษา ปี 2554", "เหรียญหลวงปู่บุญมีพิมพ์หยดน้ำเนื้อเงินปี2530วัดสระประสานสุข", "เหรียญเสมาเล็กเนื้อเงินหลวงพ่อแช่มวัดดอนยายหอมปี2516", "เหรียญแปดเหลี่ยมหลวงพ่อแช่มวัดดอนยายหอมเนื้อเงินปี2533", "เหรียญที่ระลึกในหลวงรัชกาลที่9เนื้อทองคำพร้อมกล่อง", "หลวงพ่อพระใสวัดโพธิ์ชัยปี2534หน้าตัก 5นิ้ว", "รูปหล่อบูชาหลวงปู่คำพันธ์วัดธาตุมหาชัยจ.นครพนมหน้าตัก5นิ้ว", "รูปหล่อบูชาหลวงพ่อเกษมเขมโกหน้าตัก5นิ้วปี2535หลังหนู", "หลวงพ่อพระใสวัดโพธิ์ชัยหน้าตัก5นิ้วปี2534จ.หนองคาย", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วพิมพ์ป้อมเล็กมีจาร", "พระบูชาหลวงปู่ทวดหน้าตัก10นิ้ว ปี2518", "เหรียญหลวงปู่ดุลย์รุ่นพิเศษกะไหล่ทองลงยาปี2526", "พระกริ่งคุ้มเกล้าภปร.เนื้อนวะปี2552พร้อมกล่อง", "พระพุทธนราวันตบพิธปี2542พร้อมกล่อง3องค์", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วมีชาดทองสวย", "หลวงปู่บุญวัดกลางบางแก้วนครปฐมหน้าตัก5นิ้ว", "หลวงตามหาบัววัดป่าบ้านตาดพิมพ์ยืนสูง13นิ้วปี2553", "พระบรมรูปหยกขาวจักรพรรดิ์ในหลวงร.9พ.ศ.2542", "พระนาคปรกวัดบรมนิวาสฯปี2495ติดรางวัล", "แหวนพิรอดหลวงพ่อม่วงวัดบ้านทวน กาญจนบุรี", "ลูกสะกดหลวงพ่อเนียมสุพรรณบุรี", "เหรียญเงินหลวงพ่อชาวัดหนองป่าพงปี2518", "ตะกรุดโทนหลวงพ่อทบ วัดชนแดน", "พระกลีบบัวใหญ่หลวงปูบุญวัดกลางบางแก้ว", "นกสาริกาคู่ หลวงปู่ทิมวัดระหารไร่", "พิรอดแขน หลวงพ่อม่วงวัดบ้านทวนกาญจนบุรี", "เหรียญเต่าหลวงปู่หลิววัดไร่แตงทองปี2540กะไหล่เงินลงยาสีเขียว", "พระปิดตานางพรายเนื้อผงพรายกุมาร หลวงปู่ทิม", "พระปิดตาหลวงพ่อภุชงค์ ปี04", "พระปิดตาหลวงพ่อเชยวัดท่าควาย", "พระปิดตาหลวงปู่เฮี้ยง พิมพ์หลังยันต์โส วัดป่าชลบุรี 2505", "พระผงของขวัญหลวงปู่ชาวัดหนองป่าพงอ.วารินฯจ.อุบลฯ", "พระนาคปรกวัดบรมฯปี2495พิมพ์ใหญ่", "พระบูชา ส.ก.พระพุทธโลกนาถสิริคุณปี2535", "ภาพถ่ายหลวงปู่ทิม หลังตะกรุดสามกษัตริย์", "ตะกรุดสาริกา หลวงพ่อทบวัดชนแดน", "ตะกรุดเนื้อเงินหลวงพ่อรุ่ง", "เหรียญเม็ดกระดุมหลวงปู่สิม", "ตะกรุดสามกษัตริย์ หลวงปู่ทิม", "เหรียญรุ่นแรกหลวงปู่บุญมีวัดสระประสานสุขเนื้อทองคำปี30", "พระลีลาทุ่งเศรษฐีเจ้าคุณนรฯพิมพ์ใหญ่ติดรางวัล", "พระผงหลวงปู่ฝั้นวัดป่าอุดมสมพรปี2517", "พระผงรูปเหมือนหลังใบไม้หลวงปู่ชาวัดหนองป่าพงจ.อุบลฯ", "พระกริ่งพุทธไชยศรีกะไหล่เงินหลวงปู่เพิ่มวัดกลางบางแก้ว", "พระผงกำแพงแสนหลวงปู่ดุลย์วัดบูรพารามจ.สุรินทร์", "เหรียญหลวงพ่อมุม วัดปราสาทเยอร์ เนื้อเงิน ปี 2515", "เหรียญในหลวงร.9 ครองราชครบ 50ปี ขนาด 7เซ็น พร้อมกล่อง", "เหรียญที่ระลึก 60ปีราชาภิเษกสมรส ขนาด 7ซ.ม.", "พระสมเด็จบางขุนพรหม ปี 2531 พร้อมกล่อง 12องค์", "เหรียญที่ระลึกในหลวงร.9 ราชาภิเษกสมรสและบรมราชาภิเษก", "เหรียญการประชุมองค์การพุทธศาสนิกสัมพันธ์แห่งโลก", "เหรียญร.5 ที่ระลึก 100 ปี สภากาชาดไทย ขนาด7ซ.ม.", "เหรียญรัชกาลที่ 5 ขนาด7เซ็นฯที่ระลึก100ปี โรงพยาบาลศิริราช", "พระบรมรูปในหลวงทรงงาน\"วิริยะ\"ปี 2541", "พระสมเด็จบางขุนพรหม พิมพ์ฐานคู่ พร้อมใบเซอร์", "หลวงปู่ชา วัดหนองป่าพง รุ่นแรก", "เหรียญพระอาจารย์มั่น-พระอาจารย์เสาร์", "เหรียญ ร.5 ทรงม้า ร.ศ.127 เนื้อบรอนท์สวย", "เหรียญพระอาจารย์มั่น หลังพระอาจารย์เสาร์ ยันต์ซ้อน", "หลวงปู่ทวด พิมพ์เตารีดใหญ่A เนื้อนวะ ตอกฉ.", "เหรียญพระครูวิโรจน์ รุ่นแรก นิยม", "เหรียญหลวงปู่มั่น-เสาร์ ยันต์แปด นิยม"];
                        for ($i = 1; $i <= 4; $i++) : ?>
                            <div class="col">
                                <div class="card bg-dark h-100">
                                    <div class="card-body">
                                        <a href="#" class="hover-popup d-block w-100 mb-3 position-relative overflow-hidden" style="height: 0; padding-top: 100%; max-width: 300px;">
                                            <div class="position-absolute d-flex justify-content-center" style="top: 0; left: 0; width: 100%; height: 100%;">
                                                <img class="img-fluid rounded-lg" src="//dummyimage.com/500x500" alt="">
                                            </div>
                                        </a>
                                        <a href="#" class="d-block card-title link-light text-decoration-none lh-base overflow-hidden" style="height: 50px;"><?= $names[array_rand($names)] ?></a>
                                        <a href="./shop-store.php" class="d-block link-secondary small d-flex text-decoration-none align-items-center">
                                            <i class="fas fa-store fa-sm mr-1"></i>
                                            <span>ชื่อร้านค้า</span>
                                        </a>
                                    </div>
                                    <div class="card-footer align-items-center d-flex">
                                        <span class="d-inline-flex justify-content-center align-items-center rounded-circle bg-danger bg-gradient mr-2" style="width: 30px; height: 30px;"><i class="fas fa-dollar-sign"></i></span>
                                        <span class="text-danger font-weight-bold" style="font-size: 18px;">30,000</span>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </section>

                <section class="mb-5">
                    <header class="section-heading mt-0 heading-line heading-line-high d-flex [align-items-center] justify-content-between">
                        <div class="title-section bg-darker d-flex align-items-baseline">
                            <div>
                                <h4>พระใหม่ล่าสุด</h4>
                                <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">วันที่ <?= THdatetime(date('Y-m-d H:i:s')) ?></div>
                            </div>
                        </div>
                        <a href="./products.php" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
                    </header>
                    <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-2 justify-content-center justify-content-sm-start">
                        <?php
                        $names = ["รูปเหมือนบูชาหลวงปู่ฝั้น อาจาโรพิมพ์ยืนถือไม้เท้าเนื้อโลหะ", "หลวงพ่อเกษม เขมโก หน้าตัก12นิ้วสุสานไตรลักษณ์ลำปาง", "เหรียญหลวงปู่เพิ่มเนื้อทองคำปี2518พร้อมใบรับรองฯจากสมาคมฯ", "พระสมเด็จบางขุนพรหม พิมพ์อกครุฑ กรุเก่า", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล หน้าตัก9นิ้ววัดสระประสานสุข", "เหรียญลายกนกข้าง เจ้าคุณนรฯ ปี2513 วัดเทพศิรินทร์ติดรางวัล", "พระผงรูปเหมือนหลวงปู่ชา สุภัทโทรุ่นหัวมีจุดปี16วัดหนองป่าพง", "รูปเหมือนใบโพธิ์ เจ้าคุณนรฯปี2513 เนื้อนวะโลหะวัดเทพศิรินทร์", "รูปหล่อบูชาหลวงพ่อเกษม เขมโก ปี2528 สุสานไตรลักษณ์ลำปาง", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล รุ่นแรกปี2530ติดรางวัล", "เหรียญหันข้างเจ้าคุณนรฯวัดเทพศิรินทร์ ปี2513", "เหรียญหลวงพ่อมุมรุ่นแรกปี2507วัดปราสาทเยอร์ติดรางวัลที่1", "รูปหล่อโบราณรุ่นแรกหลวงพ่อแช่มวัดดอนยายหอมนครปฐม", "หลวงปู่ทวดวัดช้างให้หน้าตัก3นิ้วปี2539", "รูปหล่อบูชาหลวงปู่บุญมีวัดสระประสานสุข หน้าตัก 7นิ้ว รุุ่่น2", "รูปหล่อหลวงปู่เพิ่ม วัดกลางบางแก้ว ปี2518", "พระพุทธรูปทรงเครื่องจักรพรรดิ ภปร.มหามงคล 84 พรรษา ปี 2554", "เหรียญหลวงปู่บุญมีพิมพ์หยดน้ำเนื้อเงินปี2530วัดสระประสานสุข", "เหรียญเสมาเล็กเนื้อเงินหลวงพ่อแช่มวัดดอนยายหอมปี2516", "เหรียญแปดเหลี่ยมหลวงพ่อแช่มวัดดอนยายหอมเนื้อเงินปี2533", "เหรียญที่ระลึกในหลวงรัชกาลที่9เนื้อทองคำพร้อมกล่อง", "หลวงพ่อพระใสวัดโพธิ์ชัยปี2534หน้าตัก 5นิ้ว", "รูปหล่อบูชาหลวงปู่คำพันธ์วัดธาตุมหาชัยจ.นครพนมหน้าตัก5นิ้ว", "รูปหล่อบูชาหลวงพ่อเกษมเขมโกหน้าตัก5นิ้วปี2535หลังหนู", "หลวงพ่อพระใสวัดโพธิ์ชัยหน้าตัก5นิ้วปี2534จ.หนองคาย", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วพิมพ์ป้อมเล็กมีจาร", "พระบูชาหลวงปู่ทวดหน้าตัก10นิ้ว ปี2518", "เหรียญหลวงปู่ดุลย์รุ่นพิเศษกะไหล่ทองลงยาปี2526", "พระกริ่งคุ้มเกล้าภปร.เนื้อนวะปี2552พร้อมกล่อง", "พระพุทธนราวันตบพิธปี2542พร้อมกล่อง3องค์", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วมีชาดทองสวย", "หลวงปู่บุญวัดกลางบางแก้วนครปฐมหน้าตัก5นิ้ว", "หลวงตามหาบัววัดป่าบ้านตาดพิมพ์ยืนสูง13นิ้วปี2553", "พระบรมรูปหยกขาวจักรพรรดิ์ในหลวงร.9พ.ศ.2542", "พระนาคปรกวัดบรมนิวาสฯปี2495ติดรางวัล", "แหวนพิรอดหลวงพ่อม่วงวัดบ้านทวน กาญจนบุรี", "ลูกสะกดหลวงพ่อเนียมสุพรรณบุรี", "เหรียญเงินหลวงพ่อชาวัดหนองป่าพงปี2518", "ตะกรุดโทนหลวงพ่อทบ วัดชนแดน", "พระกลีบบัวใหญ่หลวงปูบุญวัดกลางบางแก้ว", "นกสาริกาคู่ หลวงปู่ทิมวัดระหารไร่", "พิรอดแขน หลวงพ่อม่วงวัดบ้านทวนกาญจนบุรี", "เหรียญเต่าหลวงปู่หลิววัดไร่แตงทองปี2540กะไหล่เงินลงยาสีเขียว", "พระปิดตานางพรายเนื้อผงพรายกุมาร หลวงปู่ทิม", "พระปิดตาหลวงพ่อภุชงค์ ปี04", "พระปิดตาหลวงพ่อเชยวัดท่าควาย", "พระปิดตาหลวงปู่เฮี้ยง พิมพ์หลังยันต์โส วัดป่าชลบุรี 2505", "พระผงของขวัญหลวงปู่ชาวัดหนองป่าพงอ.วารินฯจ.อุบลฯ", "พระนาคปรกวัดบรมฯปี2495พิมพ์ใหญ่", "พระบูชา ส.ก.พระพุทธโลกนาถสิริคุณปี2535", "ภาพถ่ายหลวงปู่ทิม หลังตะกรุดสามกษัตริย์", "ตะกรุดสาริกา หลวงพ่อทบวัดชนแดน", "ตะกรุดเนื้อเงินหลวงพ่อรุ่ง", "เหรียญเม็ดกระดุมหลวงปู่สิม", "ตะกรุดสามกษัตริย์ หลวงปู่ทิม", "เหรียญรุ่นแรกหลวงปู่บุญมีวัดสระประสานสุขเนื้อทองคำปี30", "พระลีลาทุ่งเศรษฐีเจ้าคุณนรฯพิมพ์ใหญ่ติดรางวัล", "พระผงหลวงปู่ฝั้นวัดป่าอุดมสมพรปี2517", "พระผงรูปเหมือนหลังใบไม้หลวงปู่ชาวัดหนองป่าพงจ.อุบลฯ", "พระกริ่งพุทธไชยศรีกะไหล่เงินหลวงปู่เพิ่มวัดกลางบางแก้ว", "พระผงกำแพงแสนหลวงปู่ดุลย์วัดบูรพารามจ.สุรินทร์", "เหรียญหลวงพ่อมุม วัดปราสาทเยอร์ เนื้อเงิน ปี 2515", "เหรียญในหลวงร.9 ครองราชครบ 50ปี ขนาด 7เซ็น พร้อมกล่อง", "เหรียญที่ระลึก 60ปีราชาภิเษกสมรส ขนาด 7ซ.ม.", "พระสมเด็จบางขุนพรหม ปี 2531 พร้อมกล่อง 12องค์", "เหรียญที่ระลึกในหลวงร.9 ราชาภิเษกสมรสและบรมราชาภิเษก", "เหรียญการประชุมองค์การพุทธศาสนิกสัมพันธ์แห่งโลก", "เหรียญร.5 ที่ระลึก 100 ปี สภากาชาดไทย ขนาด7ซ.ม.", "เหรียญรัชกาลที่ 5 ขนาด7เซ็นฯที่ระลึก100ปี โรงพยาบาลศิริราช", "พระบรมรูปในหลวงทรงงาน\"วิริยะ\"ปี 2541", "พระสมเด็จบางขุนพรหม พิมพ์ฐานคู่ พร้อมใบเซอร์", "หลวงปู่ชา วัดหนองป่าพง รุ่นแรก", "เหรียญพระอาจารย์มั่น-พระอาจารย์เสาร์", "เหรียญ ร.5 ทรงม้า ร.ศ.127 เนื้อบรอนท์สวย", "เหรียญพระอาจารย์มั่น หลังพระอาจารย์เสาร์ ยันต์ซ้อน", "หลวงปู่ทวด พิมพ์เตารีดใหญ่A เนื้อนวะ ตอกฉ.", "เหรียญพระครูวิโรจน์ รุ่นแรก นิยม", "เหรียญหลวงปู่มั่น-เสาร์ ยันต์แปด นิยม"];
                        for ($i = 1; $i <= 40; $i++) : ?>
                            <div class="col">
                                <div class="card bg-dark h-100">
                                    <div class="card-body">
                                        <a href="#" class="hover-popup d-block w-100 mb-3 position-relative overflow-hidden" style="height: 0; padding-top: 100%; max-width: 300px;">
                                            <div class="position-absolute d-flex justify-content-center" style="top: 0; left: 0; width: 100%; height: 100%;">
                                                <img class="img-fluid rounded-lg" src="//dummyimage.com/500x500" alt="">
                                            </div>
                                        </a>
                                        <a href="#" class="d-block card-title link-light text-decoration-none lh-base overflow-hidden" style="height: 50px;"><?= $names[array_rand($names)] ?></a>
                                        <a href="./shop-store.php" class="d-block link-secondary small d-flex text-decoration-none align-items-center">
                                            <i class="fas fa-store fa-sm mr-1"></i>
                                            <span>ชื่อร้านค้า</span>
                                        </a>
                                    </div>
                                    <div class="card-footer align-items-center d-flex">
                                        <span class="d-inline-flex justify-content-center align-items-center rounded-circle bg-danger bg-gradient mr-2" style="width: 30px; height: 30px;"><i class="fas fa-dollar-sign"></i></span>
                                        <span class="text-danger font-weight-bold" style="font-size: 18px;">30,000</span>
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </section>
            </article>

        </section>
    </main>

    <?php require_once __DIR__ . '/2_foot.php'; ?>
</body>

</html>