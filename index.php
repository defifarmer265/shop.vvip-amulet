<?php
function THdatetime($date, $type = 'datetime')
{
    $arr = explode('-', $date);
    $y = (int) $arr[0];
    $m = (int) $arr[1];
    $d = (int) $arr[2];
    $thMonths = array('', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
    if ($y <= 2300) $y += 543;
    return $d . ' ' . $thMonths[$m] . ' ' . $y;
}
?>
<!doctype html>
<html lang="th">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="assets/css/style.css?v=<?= time() ?>" rel="stylesheet">
    <link rel="stylesheet" href="//cer-pra.com/assets/flag-icon-css-master/css/flag-icon.min.css">

    <title>VVIP-Amulet Shop</title>
</head>

<body class="bg-darker text-white">
    <header class="d-none d-sm-block border-bottom">
        <div class="container-xl d-flex align-items-start p-3 py-4 p-sm-5">
            <img src="//dummyimage.com/500x500" alt="Logo" class="mt-2 mr-4 rounded-circle" style="width: 25vw; max-width: 145px;">
            <div>
                <h1>VVIP-Amulet Shop</h1>
                <p class="lead">ศูนย์รวมร้านพระออนไลน์มาตรฐานชมรมพระเครื่องไทยอินเตอร์</p>
                <hr class="bg-secondary">
                <button class="btn btn-outline-primary"><i class="fas fa-pen mr-2"></i>ลงทะเบียนเปิดร้านค้าออนไลน์</button>
                <!-- <button class="btn btn-success"><i class="fas fa-lock mr-2"></i> เข้าสู่ระบบ</button> -->
            </div>
        </div>
    </header>
    <nav id="menu" class="navbar py-0 navbar-expand-sm navbar-dark border-bottom sticky-top" style="background-color: rgba(0,0,0,0.25);">
        <div class="container-xl position-relative">
            <div class="d-sm-none">
                <h1 class="navbar-brand my-2">VVIP-Amulet Shop</h1>
            </div>
            <div class="ml-auto">
                <button class="navbar-toggler border-0 shadow-none" onclick="document.addEventListener('click', closeNavMenu);" type="button" data-toggle="collapse" data-target="#main-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse flex-nowrap navbar-collapse overflow-auto row g-0 text-nowrap justify-content-between" id="main-nav">
                <ul class="navbar-nav mr-auto col-12 col-sm-auto mx-auto">
                    <li class="d-sm-none">
                        <header class="align-items-center d-flex heading-line mb-4 section-heading mt-0">
                            <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                                <span>VVIP-Amulet Shop</span>
                            </h3>
                        </header>
                    </li>
                    <li class="nav-item"><a href="./" class="nav-link h5 mb-0 p-3 active"><i class="fas fa-home mr-2"></i>หน้าแรก</a></li>
                    <li class="nav-item"><a href="./shop.php" class="nav-link h5 mb-0 p-3"><i class="fas fa-store mr-2"></i>ร้านค้า</a></li>
                    <li class="nav-item"><a href="./news.php" class="nav-link h5 mb-0 p-3"><i class="fas fa-newspaper mr-2"></i>ข่าวสาร</a></li>
                    <li class="nav-item"><a href="./rules.php" class="nav-link h5 mb-0 p-3"><i class="fas fa-exclamation-circle mr-2"></i>กฎระเบียบ</a></li>
                    <li class="nav-item"><a href="./contact.php" class="nav-link h5 mb-0 p-3"><i class="fas fa-phone mr-2"></i>ติดต่อ</a></li>
                </ul>
                <ul class="navbar-nav col-12 col-sm-auto mx-auto">
                    <li class="nav-item">
                        <a href="#welcome-dialog" data-toggle="modal" class="nav-link p-3" title="เข้าสู่ระบบ"><i class="fas fa-lock mr-2 mr-lg-0 mr-xl-2"></i><span class="d-md-none d-xl-inline-block">เข้าสู่ระบบ</span></a>
                    </li>
                    <!-- <li class="nav-item"><a href="#register-dialog" class="nav-link p-3" title="สมัครสมาชิก"><i class="fas fa-user-plus mr-2 mr-lg-0 mr-xl-2"></i><span class="d-md-none d-xl-inline-block">สมัครสมาชิก</span></a></li> -->
                    <li class="nav-item">
                        <a href="#select-lang-dialog" data-toggle="modal" class="nav-link p-3" title="ภาษา"><i class="fas fa-globe-asia mr-2 mr-lg-0 mr-xl-2"></i><span class="d-md-none d-xl-inline-block">ภาษา</span></a>
                    </li>
                    <li class="nav-item d-flex">
                        <a href="#search-dialog" data-toggle="modal" class="btn btn-block btn-outline-light border-0 my-auto d-none d-md-inline-block"><i class="fas fa-search mr-2 mr-sm-0"></i><span class="d-sm-none">ค้นหา</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main-frame" class="container-xl">
        <section class="row py-5 g-4">

            <section id="sidebar" class="order-1 order-md-0 col-md-3 col-lg-3">
                <aside class="card bg-transparent border-0" style="margin-top: 5px;">
                    <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="icon mr-2"><i class="fas fa-list text-white-50"></i></span>
                            <span>หมวดหมู่พระ</span>
                        </h3>
                    </header>
                    <div class="list-group list-group-flush" style="background-color: rgba(0,0,0,0.25);">
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light active" aria-current="true">Cras justo odio</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Dapibus ac facilisis in</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Morbi leo risus</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Porta ac consectetur ac</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent link-light">Porta ac consectetur ac</a>
                    </div>
                </aside>

                <aside class="mt-5 card bg-transparent border-0">
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
                            <a href="#" class="col-auto d-inline-block">
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
                <header class="section-heading mt-จ heading-line heading-line-high d-flex [align-items-center] justify-content-between">
                    <div class="title-section bg-darker d-flex align-items-baseline">
                        <div>
                            <h4>พระเด่นประจำวัน</h4>
                            <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">ข้อมูลล่าสุด วันที่ 7 สิงหาคม 2563</div>
                        </div>
                    </div>
                    <a href="./shop.php" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
                </header>
                <section class="">
                    <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-2 justify-content-center justify-content-sm-start">
                        <?php
                        $names = ["รูปเหมือนบูชาหลวงปู่ฝั้น อาจาโรพิมพ์ยืนถือไม้เท้าเนื้อโลหะ", "หลวงพ่อเกษม เขมโก หน้าตัก12นิ้วสุสานไตรลักษณ์ลำปาง", "เหรียญหลวงปู่เพิ่มเนื้อทองคำปี2518พร้อมใบรับรองฯจากสมาคมฯ", "พระสมเด็จบางขุนพรหม พิมพ์อกครุฑ กรุเก่า", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล หน้าตัก9นิ้ววัดสระประสานสุข", "เหรียญลายกนกข้าง เจ้าคุณนรฯ ปี2513 วัดเทพศิรินทร์ติดรางวัล", "พระผงรูปเหมือนหลวงปู่ชา สุภัทโทรุ่นหัวมีจุดปี16วัดหนองป่าพง", "รูปเหมือนใบโพธิ์ เจ้าคุณนรฯปี2513 เนื้อนวะโลหะวัดเทพศิรินทร์", "รูปหล่อบูชาหลวงพ่อเกษม เขมโก ปี2528 สุสานไตรลักษณ์ลำปาง", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล รุ่นแรกปี2530ติดรางวัล", "เหรียญหันข้างเจ้าคุณนรฯวัดเทพศิรินทร์ ปี2513", "เหรียญหลวงพ่อมุมรุ่นแรกปี2507วัดปราสาทเยอร์ติดรางวัลที่1", "รูปหล่อโบราณรุ่นแรกหลวงพ่อแช่มวัดดอนยายหอมนครปฐม", "หลวงปู่ทวดวัดช้างให้หน้าตัก3นิ้วปี2539", "รูปหล่อบูชาหลวงปู่บุญมีวัดสระประสานสุข หน้าตัก 7นิ้ว รุุ่่น2", "รูปหล่อหลวงปู่เพิ่ม วัดกลางบางแก้ว ปี2518", "พระพุทธรูปทรงเครื่องจักรพรรดิ ภปร.มหามงคล 84 พรรษา ปี 2554", "เหรียญหลวงปู่บุญมีพิมพ์หยดน้ำเนื้อเงินปี2530วัดสระประสานสุข", "เหรียญเสมาเล็กเนื้อเงินหลวงพ่อแช่มวัดดอนยายหอมปี2516", "เหรียญแปดเหลี่ยมหลวงพ่อแช่มวัดดอนยายหอมเนื้อเงินปี2533", "เหรียญที่ระลึกในหลวงรัชกาลที่9เนื้อทองคำพร้อมกล่อง", "หลวงพ่อพระใสวัดโพธิ์ชัยปี2534หน้าตัก 5นิ้ว", "รูปหล่อบูชาหลวงปู่คำพันธ์วัดธาตุมหาชัยจ.นครพนมหน้าตัก5นิ้ว", "รูปหล่อบูชาหลวงพ่อเกษมเขมโกหน้าตัก5นิ้วปี2535หลังหนู", "หลวงพ่อพระใสวัดโพธิ์ชัยหน้าตัก5นิ้วปี2534จ.หนองคาย", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วพิมพ์ป้อมเล็กมีจาร", "พระบูชาหลวงปู่ทวดหน้าตัก10นิ้ว ปี2518", "เหรียญหลวงปู่ดุลย์รุ่นพิเศษกะไหล่ทองลงยาปี2526", "พระกริ่งคุ้มเกล้าภปร.เนื้อนวะปี2552พร้อมกล่อง", "พระพุทธนราวันตบพิธปี2542พร้อมกล่อง3องค์", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วมีชาดทองสวย", "หลวงปู่บุญวัดกลางบางแก้วนครปฐมหน้าตัก5นิ้ว", "หลวงตามหาบัววัดป่าบ้านตาดพิมพ์ยืนสูง13นิ้วปี2553", "พระบรมรูปหยกขาวจักรพรรดิ์ในหลวงร.9พ.ศ.2542", "พระนาคปรกวัดบรมนิวาสฯปี2495ติดรางวัล", "แหวนพิรอดหลวงพ่อม่วงวัดบ้านทวน กาญจนบุรี", "ลูกสะกดหลวงพ่อเนียมสุพรรณบุรี", "เหรียญเงินหลวงพ่อชาวัดหนองป่าพงปี2518", "ตะกรุดโทนหลวงพ่อทบ วัดชนแดน", "พระกลีบบัวใหญ่หลวงปูบุญวัดกลางบางแก้ว", "นกสาริกาคู่ หลวงปู่ทิมวัดระหารไร่", "พิรอดแขน หลวงพ่อม่วงวัดบ้านทวนกาญจนบุรี", "เหรียญเต่าหลวงปู่หลิววัดไร่แตงทองปี2540กะไหล่เงินลงยาสีเขียว", "พระปิดตานางพรายเนื้อผงพรายกุมาร หลวงปู่ทิม", "พระปิดตาหลวงพ่อภุชงค์ ปี04", "พระปิดตาหลวงพ่อเชยวัดท่าควาย", "พระปิดตาหลวงปู่เฮี้ยง พิมพ์หลังยันต์โส วัดป่าชลบุรี 2505", "พระผงของขวัญหลวงปู่ชาวัดหนองป่าพงอ.วารินฯจ.อุบลฯ", "พระนาคปรกวัดบรมฯปี2495พิมพ์ใหญ่", "พระบูชา ส.ก.พระพุทธโลกนาถสิริคุณปี2535", "ภาพถ่ายหลวงปู่ทิม หลังตะกรุดสามกษัตริย์", "ตะกรุดสาริกา หลวงพ่อทบวัดชนแดน", "ตะกรุดเนื้อเงินหลวงพ่อรุ่ง", "เหรียญเม็ดกระดุมหลวงปู่สิม", "ตะกรุดสามกษัตริย์ หลวงปู่ทิม", "เหรียญรุ่นแรกหลวงปู่บุญมีวัดสระประสานสุขเนื้อทองคำปี30", "พระลีลาทุ่งเศรษฐีเจ้าคุณนรฯพิมพ์ใหญ่ติดรางวัล", "พระผงหลวงปู่ฝั้นวัดป่าอุดมสมพรปี2517", "พระผงรูปเหมือนหลังใบไม้หลวงปู่ชาวัดหนองป่าพงจ.อุบลฯ", "พระกริ่งพุทธไชยศรีกะไหล่เงินหลวงปู่เพิ่มวัดกลางบางแก้ว", "พระผงกำแพงแสนหลวงปู่ดุลย์วัดบูรพารามจ.สุรินทร์", "เหรียญหลวงพ่อมุม วัดปราสาทเยอร์ เนื้อเงิน ปี 2515", "เหรียญในหลวงร.9 ครองราชครบ 50ปี ขนาด 7เซ็น พร้อมกล่อง", "เหรียญที่ระลึก 60ปีราชาภิเษกสมรส ขนาด 7ซ.ม.", "พระสมเด็จบางขุนพรหม ปี 2531 พร้อมกล่อง 12องค์", "เหรียญที่ระลึกในหลวงร.9 ราชาภิเษกสมรสและบรมราชาภิเษก", "เหรียญการประชุมองค์การพุทธศาสนิกสัมพันธ์แห่งโลก", "เหรียญร.5 ที่ระลึก 100 ปี สภากาชาดไทย ขนาด7ซ.ม.", "เหรียญรัชกาลที่ 5 ขนาด7เซ็นฯที่ระลึก100ปี โรงพยาบาลศิริราช", "พระบรมรูปในหลวงทรงงาน\"วิริยะ\"ปี 2541", "พระสมเด็จบางขุนพรหม พิมพ์ฐานคู่ พร้อมใบเซอร์", "หลวงปู่ชา วัดหนองป่าพง รุ่นแรก", "เหรียญพระอาจารย์มั่น-พระอาจารย์เสาร์", "เหรียญ ร.5 ทรงม้า ร.ศ.127 เนื้อบรอนท์สวย", "เหรียญพระอาจารย์มั่น หลังพระอาจารย์เสาร์ ยันต์ซ้อน", "หลวงปู่ทวด พิมพ์เตารีดใหญ่A เนื้อนวะ ตอกฉ.", "เหรียญพระครูวิโรจน์ รุ่นแรก นิยม", "เหรียญหลวงปู่มั่น-เสาร์ ยันต์แปด นิยม"];
                        foreach ($names as $name) : ?>
                            <div class="col">
                                <div class="card bg-dark h-100">
                                    <div class="card-body">
                                        <a href="#" class="hover-popup d-block w-100 mb-3 position-relative overflow-hidden" style="height: 0; padding-top: 100%; max-width: 300px;">
                                            <div class="position-absolute d-flex justify-content-center" style="top: 0; left: 0; width: 100%; height: 100%;">
                                                <img class="img-fluid rounded-lg" src="//dummyimage.com/500x500" alt="">
                                            </div>
                                        </a>
                                        <a href="#" class="d-block card-title link-light text-decoration-none lh-base overflow-hidden" style="height: 50px;"><?= $name ?></a>
                                        <a href="#" class="d-block link-secondary small d-flex text-decoration-none align-items-center">
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
                        <?php endforeach; ?>
                    </div>
                </section>
            </article>

        </section>
    </main>
    <footer class="bg-darker text-white mb-4 mb-md-0" style="margin-top: 100px;">
        <div class="container-xl container-xl d-flex justify-content-center px-2 px-lg-0 px-sm-55">
            <div class="bg-secondary mx-1 mx-auto mx-sm-3 mx-xl-0 position-relative px-2 px-sm-5 py-2 row shadow-lg" style="top: -20px; max-width: 500px;">
                <div class="col-12">
                    <p class="mb-0 text-center">
                        <span>©</span><span class="copyright-year">2020</span><span>&nbsp;</span><span>VVIP-Amulet.com</span><span>.&nbsp;</span><span>All Rights Reserved.</span></p>
                </div>
            </div>
        </div>
    </footer>

    <footer id="shopping-tab" class="d-md-none fixed-bottom" style="box-shadow: 0 -5px 10px rgba(0,0,0,0.1);">
        <nav class="navbar py-0 bg-white">
            <ul class="navbar-nav flex-row row gx-0">
                <li class="nav-item col">
                    <a href="#" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark border-right" style="padding: 7.5px 15px 5px;">
                        <i class="fas fa-bars"></i>
                        <span style="margin-top: 2px; font-size: 10px;">Menu</span>
                    </a>
                </li>
                <li class="nav-item col">
                    <a href="#search-dialog" data-toggle="modal" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark border-right" style="padding: 7.5px 15px 5px;">
                        <i class="fas fa-search"></i>
                        <span style="margin-top: 2px; font-size: 10px;">Search</span>
                    </a>
                </li>
                <li class="nav-item col">
                    <a href="#" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark border-right" style="padding: 7.5px 15px 5px;">
                        <i class="fas fa-user"></i>
                        <span style="margin-top: 2px; font-size: 10px;">Profile</span>
                    </a>
                </li>
                <li class="nav-item col">
                    <a href="#cart-dialog" data-toggle="modal" class="nav-link d-flex flex-column justify-content-center align-items-center link-dark" style="padding: 7.5px 15px 5px;">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="badge bg-danger ml-4 mt-1 position-absolute rounded-pill text-white" style="font-size: 9px; top: 0;">0</span>
                        <span style="margin-top: 2px; font-size: 10px;">Cart</span>
                    </a>
                </li>
            </ul>
        </nav>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="search-dialog" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg [modal-dialog-centered]" role="document">
            <div class="modal-content bg-transparent border-0">
                <!-- <div class="modal-body">
                    <div class="container-xl">
                        Add rows here
                    </div>
                </div> -->
                <form id="search-tab">
                    <div class="input-group input-group-lg">
                        <input id="search-input" type="search" name="search" class="form-control" placeholder="ระบุสิ่งที่ต้องการค้นหา" style="border-radius: 100px 0 0 100px;">
                        <button class="btn btn-dark" type="submit" style="border-radius: 0 100px 100px 0;"><i class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cart-dialog" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark">ตะกร้าสินค้าของคุณ</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="select-lang-dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header align-items-center justify-content-center rounded-0">
                    <h4 class="text-black-50 mb-0">Choose your language</h4>
                </div>
                <div class="modal-body">
                    <div class="d-flex justify-content-around py-3">
                        <a href="?lang=en" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="English">
                            <span class="flag-icon flag-icon-gb" style="background-size: 50px; width: 50px; height: 37px;"></span>
                            <p class="text-center mb-1 mt-2 text-dark">English</p>
                            <p class="mb-0 text-black-50 text-center">English</p>
                        </a>
                        <a href="?lang=cn" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Chinese">
                            <span class="flag-icon flag-icon-cn" style="background-size: 50px; width: 50px; height: 37px;"></span>
                            <p class="text-center mb-1 mt-2 text-dark">中文</p>
                            <p class="mb-0 text-black-50 text-center">Chinese</p>
                        </a>
                        <a href="?lang=th" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Thai">
                            <span class="flag-icon flag-icon-th" style="background-size: 50px; width: 50px; height: 37px;"></span>
                            <p class="text-center mb-1 mt-2 text-dark">ภาษาไทย</p>
                            <p class="mb-0 text-black-50 text-center">Thai</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade text-dark" id="welcome-dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">

                <div style="background-image: url(https://live.staticflickr.com/861/42789598015_bd5619758f_b.jpg); background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <div class="modal-header align-items-center justify-content-between py-4" style="background-color: rgba(255,255,255,0.5);">
                        <div style="visibility: hidden;">
                            <button class="btn btn-sm">
                                <span class="flag-icon flag-icon-gb rounded-circle shadow" style="background-size: 47px;width: 35px;height: 35px;"></span>
                            </button>
                        </div>
                        <div class="d-flex align-items-center">
                            <img src="//vvip-amulet.com/assets/img/logo_transparent.png" class="mr-2" style="width: 40px;" alt="VVIP-Amulet">
                            <h2 class="text-light font-weight-bold text-border font-italic mb-0">VVIP-Amulet</h2>
                        </div>
                        <div>
                            <a href="#lang" data-toggle="collapse" class="btn btn-sm">
                                <span class="flag-icon flag-icon-gb rounded-circle shadow" style="background-size: 47px;width: 35px;height: 35px;"></span>
                            </a>
                        </div>
                    </div>
                </div>


                <div id="LoginRegister" class="overflow-auto">
                    <div class="collapse show" id="Intro" data-parent="#LoginRegister">
                        <div class="modal-body">
                            <h2 class="h5 my-4 text-center">เข้าสู่ระบบด้วยบัญชี Social</h2>

                            <div class="row m-0">
                                <div class="col-md-6"><a href="https://www.facebook.com/v3.1/dialog/oauth?client_id=710340632672316&amp;state=485154c29e69dc667508e8142e9299a0&amp;response_type=code&amp;sdk=php-sdk-5.6.1&amp;redirect_uri=https%3A%2F%2Fvvip-amulet.com%2FFB_Login_CallBack.php&amp;scope=email" style="font-size: 14px;" class="py-3 btn rounded-pill btn-primary btn-block my-2"><i class="fab fa-facebook fa-lg mr-3"></i>Sign in with Facebook</a></div>
                                <div class="col-md-6">
                                    <a href="#" style="font-size: 14px;" class="py-3 btn rounded-pill btn-success btn-block my-2"><i class="fab fa-weixin fa-lg mr-3"></i>Sign in with WeChat</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-n3">
                                <div class="align-items-center d-flex justify-content-center my-5 text-center w-100" style="height: 1px; background: lightgray;">
                                    <span class="bg-white px-3 h5 mb-0 text-muted">หรือ</span>
                                </div>
                            </div>

                            <div class="text-center mb-4">
                                <a class="btn btn-light rounded-pill btn-lg" data-toggle="collapse" href="#login">เข้าสู่ระบบ</a>
                                <a class="btn btn-light rounded-pill btn-lg" data-toggle="collapse" href="#register">สมัครสมาชิก</a>
                            </div>
                        </div>
                    </div>
                    <div class="collapse" id="login" data-parent="#LoginRegister">
                        <div class="modal-header align-items-center justify-content-between rounded-0">
                            <button class="btn text-primary" data-toggle="collapse" data-target="#Intro"><i class="fas fa-angle-left fa-2x"></i></button>
                            <h3 class="text-black-50 mb-0">เข้าสู่ระบบ</h3>
                            <button class="btn" style="visibility: hidden;"><i class="fas fa-angle-left fa-2x"></i></button>
                        </div>
                        <div class="modal-body text-center py-5 overflow-hidden">
                            <form id="loginform">
                                <div class="row text-left justify-content-center">
                                    <div class="col-sm-12 px-md-5">
                                        <div class="form-label-group">
                                            <input id="login-username" type="text" name="user" placeholder="ID / E-mail" class="form-control" required="">
                                            <label class="form-label" for="login-username">User ID / E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 px-md-5">
                                        <div class="form-label-group">
                                            <input id="login-password" type="password" name="pass" placeholder="Password" class="form-control" required="">
                                            <label class="form-label" for="login-password">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-auto mb-4 px-md-5">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" checked="">
                                            <label class="form-label custom-control-label" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 px-md-5">
                                    <button type="submit" class="btn btn-success btn-lg rounded-pill btn-block"><i class="fas fa-sign-in-alt fa-1x mr-3 text-white-50"></i>เข้าสู่ระบบ</button>
                                    <div class="mt-2 text-muted">Forgotten your password? <a href="#ForgotPassword" data-dismiss="modal" data-toggle="modal">Click here!</a></div>
                                </div>
                            </form>

                        </div>

                    </div>
                    <div class="collapse" id="register" data-parent="#LoginRegister">
                        <div class="modal-header align-items-center justify-content-between rounded-0">
                            <button class="btn text-primary" data-toggle="collapse" data-target="#Intro"><i class="fas fa-angle-left fa-2x"></i></button>
                            <h3 class="text-black-50 mb-0">สมัครสมาชิก</h3>
                            <button class="btn" style="visibility: hidden;"><i class="fas fa-angle-left fa-2x"></i></button>
                        </div>
                        <div class="modal-body py-5 overflow-hidden">
                            <form id="registerform">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-label-group">
                                            <input id="register-username" type="email" name="email" placeholder="Email" class="form-control" required="">
                                            <label class="form-label" for="register-username">Email <span class="small text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pr-sm-2">
                                        <div class="form-label-group">
                                            <input id="register-password" type="password" name="password" placeholder="Password" class="form-control" required="">
                                            <label class="form-label" for="register-password">Password <span class="small text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pl-sm-2">
                                        <div class="form-label-group">
                                            <input id="register-repassword" type="password" name="repassword" placeholder="Confirm Password" class="form-control" required="">
                                            <label class="form-label" for="register-repassword">Confirm Password <span class="small text-danger">*</span></label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 pr-sm-2">
                                        <div class="form-label-group">
                                            <input id="register-upline" maxlength="8" type="text" name="upline" onkeyup="checkUpline()" placeholder="Referral account" class="form-control text-uppercase">
                                            <label class="form-label" for="register-upline">Referral account</label>
                                        </div>
                                    </div>
                                    <script>
                                        var registerData;
                                        // fetch('action.php?action=LoadCountryUpline')
                                        //     .then((res) => {
                                        //         if (!res.ok) throw new Error(res.statusText);
                                        //         return res.json();
                                        //     }).then((data) => {
                                        //         if (data.success) {
                                        //             registerData = data.data;
                                        //         } else {
                                        //             console.error(data.log);
                                        //         }
                                        //     }).catch((err) => {
                                        //         console.error(err);
                                        //     })

                                        function checkUpline() {
                                            var input = $(event.target);
                                            if (input.val() !== '') {
                                                $('#upline_info').hide().find(':input').prop('disabled', true);
                                                var countryCode = input.val().toUpperCase().substring(0, 2);

                                                $('#register-payment').show();
                                                $('#bank-info').html(registerData[countryCode]['Payment_Detail']);
                                                $('#payment-qrcode').show().attr('src', `upload/upgrade/${registerData[countryCode]['QR_Code']}`);
                                            } else {
                                                $('#register-payment').hide();
                                                if ($('#register-account-type option:selected').val() !== '') {
                                                    $('#upline_info').show().find(':input').prop('disabled', false);
                                                } else {
                                                    $('#upline_info').show().find(':input').prop('disabled', true);
                                                }
                                            }
                                        }
                                    </script>
                                    <div class="col-sm-6 mb-3 pl-sm-2">
                                        <div class="form-label-group">
                                            <select name="type" id="register-account-type" class="form-select font-weight-bold py-2 px-4 rounded-pill" required="required" style="height: 40.7px;" onchange="chooseRegisterLevel()">
                                                <option value="normal" selected="">Normal account</option>
                                                <option value="silver">Silver level account</option>
                                                <option value="gold">Gold level account</option>
                                                <option value="diamond">Diamond level account</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="register-additional-form" style="display: none;">

                                    <div class="table-responsive my-4 shadow-sm">
                                        <table class="table table-sm table-striped table-dark table-bordered mb-0 text-nowrap table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center align-middle" rowspan="2">Account level</th>
                                                    <th class="text-center align-middle border-bottom-0" colspan="4">Access rights</th>
                                                    <th class="text-center align-middle" rowspan="2">Service rate</th>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Create<br>threads</th>
                                                    <th class="text-center">Join<br>auctions</th>
                                                    <th class="text-center">Create<br>auctions</th>
                                                    <th class="text-center">Open<br>shop</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th class="align-middle">Normal</th>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                    <td class="text-center align-middle">Free</td>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">Silver</th>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                    <td class="text-center align-middle">1,500</td>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">Gold</th>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-times text-danger"></i></td>
                                                    <td class="text-center align-middle">2,000</td>
                                                </tr>
                                                <tr>
                                                    <th class="align-middle">Diamond</th>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle"><i class="fas fa-check text-success"></i></td>
                                                    <td class="text-center align-middle">4,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">First name</label>
                                            <input type="text" name="FirstName" class="form-control" placeholder="First Name" value="" required="" disabled="">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Last name</label>
                                            <input type="text" name="LastName" class="form-control" placeholder="Last name" value="" required="" disabled="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Gender</label>
                                            <select name="Sex" class="form-control" required="" disabled="">
                                                <option name="male">Male</option>
                                                <option name="female">Female</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label">Birthday</label>
                                            <input type="date" name="Birthday" class="form-control" placeholder="Birthday" value="" required="" disabled="">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Phone number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">+</span></div>
                                                <input type="text" onkeyup="$(this).val(this.value.replace(/[^0-9]+/g,''))" name="Tel" class="form-control" placeholder="Phone Number" value="" required="" disabled="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea name="Address" class="form-control" placeholder="Address" rows="4" required="" disabled=""></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label class="form-label">Payment information</label>
                                            <textarea name="Bank_Account" class="form-control" placeholder="Bank account, Paypal, Alipay" required="" disabled=""></textarea>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="mb-3 col-md-8">
                                            <label class="form-label">Selfie with ID card or passport</label>
                                            <input type="file" id="inputimage" name="image" class="form-control-file" accept="image/*" required="" disabled="">
                                            <small class="text-muted">Support only: .JPG .PNG .BMP .GIF</small>
                                        </div>
                                        <div class="col-md-4 d-flex align-items-center justify-content-center">
                                            <figure>
                                                <img id="image_upload_preview" src="https://placehold.it/100x100" alt="Image preview" class="d-block mx-auto mw-100 img-thumbnail">
                                                <figcaption class="text-center mt-2">Image preview</figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                    <div class="row" id="upline_info">
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Country</label>
                                            <!-- <input type="text" maxlength="2" name="Country_Code" placeholder="Country Code" class="form-control" value="" required="" onkeyup="this.value = this.value.toLocaleUpperCase();" disabled> -->
                                            <select name="Country_Code" onchange="chooseUpline()" class="form-select" required="" disabled="">
                                                <option value="" selected="" disabled="">Please choose</option>
                                                <option value="TH">Thailand</option>
                                                <option value="CN">China</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="ML">Malaysia</option>
                                            </select>
                                            <script>
                                                function chooseUpline() {
                                                    var country = event.target.value;
                                                    var upline = $('#register_upgrade_upline');
                                                    $('#register-payment').show();
                                                    upline.empty();
                                                    $.each(registerData[country]['Upline'], function(index, el) {
                                                        upline.append(
                                                            $('<option/>').val(el['Upline_Code']).text(country + el['Upline_Code'] + ' ' + el['Upline_Name'])
                                                        );
                                                    });
                                                    $('#bank-info').html(registerData[country]['Payment_Detail']);
                                                    $('#payment-qrcode').show().attr('src', `upload/upgrade/${registerData[country]['QR_Code']}`);
                                                }
                                            </script>
                                        </div>

                                        <div class="mb-3 col-md-4">
                                            <label class="form-label">Header code</label>
                                            <!-- <input type="text" maxlength="2" name="Upline_Code" placeholder="Agent Code" class="form-control" required="" value="" onkeyup="this.value = this.value.toLocaleUpperCase();" disabled> -->
                                            <select id="register_upgrade_upline" name="Upline_Code" class="form-select" required="" disabled="">
                                                <option value="" selected="" disabled="">Please choose</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-4 align-self-end">
                                            <a href="contact-us.php" class="btn" target="_blank">Ask Webmaster</a>
                                        </div>
                                    </div>

                                    <figure id="register-payment" style="display: none;">
                                        <hr class="mx-n3 mt-5 mb-4">
                                        <figcaption class="text-center h4 mb-3">Transfer sign up fee to </figcaption>
                                        <div id="bank-info"></div>
                                        <img src="" style="display: none;" alt="Registration payment information" class="img-fluid rounded" id="payment-qrcode">
                                        <hr class="mx-n3 mb-5 mt-4">
                                    </figure>

                                    <div class="mb-3">
                                        <label class="form-label">Transfer slip</label>
                                        <input type="file" name="Slip" class="form-control-file" accept="image/*" required="" disabled="">
                                        <small class="text-muted">Support only: .JPG .PNG .BMP .GIF</small>
                                    </div>
                                </div>

                                <div class="mb-3 text-center custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="terms" id="terms" required="">
                                    <label class="form-label custom-control-label" for="terms">
                                        I agree to <a href="#termsdialog" data-toggle="modal">Terms and conditions.</a>
                                    </label>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success btn-lg btn-block rounded-pill">Create account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="collapse" id="lang" data-parent="#LoginRegister">
                        <div class="modal-header align-items-center justify-content-between rounded-0">
                            <button class="btn text-primary" data-toggle="collapse" data-target="#Intro"><i class="fas fa-angle-left fa-2x"></i></button>
                            <h3 class="text-black-50 mb-0">Change language</h3>
                            <button class="btn" style="visibility: hidden;"><i class="fas fa-angle-left fa-2x"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex justify-content-around py-3">
                                <a href="?welcome&amp;lang=en" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="English">
                                    <span class="flag-icon flag-icon-gb" style="background-size:  50px; width:  50px; height: 37px;"></span>
                                    <p class="text-center mb-1 mt-2 text-dark">English</p>
                                    <p class="mb-0 text-black-50 text-center">English</p>
                                </a>
                                <a href="?welcome&amp;lang=cn" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Chinese">
                                    <span class="flag-icon flag-icon-cn" style="background-size:  50px; width:  50px; height: 37px;"></span>
                                    <p class="text-center mb-1 mt-2 text-dark">中文</p>
                                    <p class="mb-0 text-black-50 text-center">Chinese</p>
                                </a>
                                <a href="?welcome&amp;lang=th" class="mx-1 d-inline-flex flex-column align-items-center text-decoration-none" title="Thai">
                                    <span class="flag-icon flag-icon-th" style="background-size:  50px; width:  50px; height: 37px;"></span>
                                    <p class="text-center mb-1 mt-2 text-dark">ภาษาไทย</p>
                                    <p class="mb-0 text-black-50 text-center">Thai</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slideout/1.0.1/slideout.min.js"></script>

    <script>
        function chooseRegisterLevel() {
            const select = event.target;
            const level = select.querySelector('option:checked').value;
            const additionalForm = document.getElementById('register-additional-form');
            if (level !== 'normal') {
                additionalForm.style.display = 'block';
                additionalForm.querySelectorAll('input').forEach((el, index, arr) => el.disabled = false);
                additionalForm.querySelectorAll('textarea').forEach((el, index, arr) => el.disabled = false);
                additionalForm.querySelectorAll('select').forEach((el, index, arr) => el.disabled = false);
            } else {
                additionalForm.style.display = 'none';
                additionalForm.querySelectorAll('input').forEach((el, index, arr) => el.disabled = true);
                additionalForm.querySelectorAll('textarea').forEach((el, index, arr) => el.disabled = true);
                additionalForm.querySelectorAll('select').forEach((el, index, arr) => el.disabled = true);
            }
        }
    </script>
    <script>
        const mainNav = document.getElementById('main-nav');
        const mainNavCollapse = new bootstrap.Collapse(mainNav, {
            toggle: false
        });
        // const slideout = new Slideout({
        //     'panel': document.getElementById('main-frame'),
        //     'menu': mainNav,
        //     'padding': 256,
        //     'tolerance': 70,
        // });


        const closeNavMenu = e => {
            const isNav = !!e.target.closest('#main-nav');
            if (isNav) return;
            mainNavCollapse.hide();
            document.body.classList.add('drop');

        }
    </script>
</body>

</html>