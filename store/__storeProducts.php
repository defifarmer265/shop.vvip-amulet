<section id="sidebar" class="col-md-3 col-lg-3">
    <div class="h-100 sticky-top" style="top: 117px;">
        <aside class="mb-5">
            <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                    <span class="icon mr-2"><i class="fas fa-search text-white-50"></i></span>
                    <span>ค้นหา</span>
                </h3>
            </header>
            <form id="store-search">
                <input type="hidden" name="page" value="<?= $page ?>">
                <?php if (isset($_GET['category']) && !empty($_GET['category'])) : ?>
                <input type="hidden" name="category" value="<?= $_GET['category'] ?>">
                <?php endif; ?>
                <div class="input-group">
                    <input id="store-search-input" type="search" value='<?=isset($_GET['search']) ? $_GET['search'] : ''?>' name="search" class="form-control" placeholder="ค้นหาในร้านค้า" style="border-radius: 100px 0 0 100px;">
                    <button class="btn btn-dark" type="submit" style="border-radius: 0 100px 100px 0;"><i class="fas fa-search"></i></button>
                </div>
            </form>
        </aside>

        <aside class="card bg-transparent border-0">
            <header class="section-heading mb-3 heading-line d-flex align-items-center justify-content-between">
                <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                    <span class="icon mr-2"><i class="fas fa-list text-white-50"></i></span>
                    <span>หมวดหมู่พระ</span>
                </h3>
            </header>
            <div class="d-none d-md-block list-group list-group-flush" style="background-color: rgba(0,0,0,0.25);">
                <a href="./<?=$pageHeader['url']?>?page=products" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?=isset($_GET['category']) ? (empty($_GET['category']) ? 'active' : '') : 'active'?>" aria-current="true">ทั้งหมด</a>
                <?php foreach ($dummyCategories as $cat) : ?>
                    <a href="./<?=$pageHeader['url']?>?page=products&category=<?=$cat?>" class="list-group-item border-darker list-group-item border-darker-action bg-transparent link-light <?=isset($_GET['category']) ? ($_GET['category'] === $cat ? 'active' : '') : ''?>"><?= $cat ?></a>
                <?php endforeach; ?>
            </div>
            <select id="select-category" onchange="location.href = `./<?=$pageHeader['url']?>?page=products${this.value !== '' ? `&category=${this.value}` : ''}`;" class="form-select d-md-none">
                <option value>ทั้งหมด</option>
                <?php foreach ($dummyCategories as $cat) : ?>
                    <option <?=isset($_GET['category']) ? ($_GET['category'] === $cat ? 'selected' : '') : ''?>><?= $cat ?></option>
                <?php endforeach; ?>
            </select>
        </aside>
    </div>
</section>

<article class="col-md">

    <section class="mb-5">
        <header class="section-heading mt-จ heading-line heading-line-high d-flex [align-items-center] justify-content-between">
            <div class="title-section bg-darker d-flex align-items-baseline">
                <div>
                    <h4>พระเด่นประจำร้าน</h4>
                    <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">วันที่
                        <?= THdatetime(date('Y-m-d H:i:s')) ?></div>
                </div>
            </div>
            <a href="./<?= $pageHeader['url'] ?>?page=products" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
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
                            <div class="d-block link-secondary small d-flex text-decoration-none align-items-center">
                                <i class="fas fa-clock fa-sm mr-1"></i>
                                <span><?= THdatetime(date('Y-m-d H:i:s'), 'date') ?></span>
                            </div>
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

    <section class="">
        <header class="section-heading mt-จ heading-line heading-line-high d-flex [align-items-center] justify-content-between">
            <div class="title-section bg-darker d-flex align-items-baseline">
                <div>
                    <h4>พระมาใหม่</h4>
                    <div class="text-muted blockquote-footer mt-1 font-weight-light mb-0">วันที่
                        <?= THdatetime(date('Y-m-d H:i:s')) ?></div>
                </div>
            </div>
            <a href="./<?= $pageHeader['url'] ?>?page=products" class="title-section btn btn-link bg-darker align-items-center d-flex mb-2 text-light text-decoration-none">ดูทั้งหมด</a>
        </header>
        <div class="row row-cols-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-2 justify-content-center justify-content-sm-start">
            <?php
            $names = ["รูปเหมือนบูชาหลวงปู่ฝั้น อาจาโรพิมพ์ยืนถือไม้เท้าเนื้อโลหะ", "หลวงพ่อเกษม เขมโก หน้าตัก12นิ้วสุสานไตรลักษณ์ลำปาง", "เหรียญหลวงปู่เพิ่มเนื้อทองคำปี2518พร้อมใบรับรองฯจากสมาคมฯ", "พระสมเด็จบางขุนพรหม พิมพ์อกครุฑ กรุเก่า", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล หน้าตัก9นิ้ววัดสระประสานสุข", "เหรียญลายกนกข้าง เจ้าคุณนรฯ ปี2513 วัดเทพศิรินทร์ติดรางวัล", "พระผงรูปเหมือนหลวงปู่ชา สุภัทโทรุ่นหัวมีจุดปี16วัดหนองป่าพง", "รูปเหมือนใบโพธิ์ เจ้าคุณนรฯปี2513 เนื้อนวะโลหะวัดเทพศิรินทร์", "รูปหล่อบูชาหลวงพ่อเกษม เขมโก ปี2528 สุสานไตรลักษณ์ลำปาง", "รูปหล่อบูชาหลวงปู่บุญมี โชติปาโล รุ่นแรกปี2530ติดรางวัล", "เหรียญหันข้างเจ้าคุณนรฯวัดเทพศิรินทร์ ปี2513", "เหรียญหลวงพ่อมุมรุ่นแรกปี2507วัดปราสาทเยอร์ติดรางวัลที่1", "รูปหล่อโบราณรุ่นแรกหลวงพ่อแช่มวัดดอนยายหอมนครปฐม", "หลวงปู่ทวดวัดช้างให้หน้าตัก3นิ้วปี2539", "รูปหล่อบูชาหลวงปู่บุญมีวัดสระประสานสุข หน้าตัก 7นิ้ว รุุ่่น2", "รูปหล่อหลวงปู่เพิ่ม วัดกลางบางแก้ว ปี2518", "พระพุทธรูปทรงเครื่องจักรพรรดิ ภปร.มหามงคล 84 พรรษา ปี 2554", "เหรียญหลวงปู่บุญมีพิมพ์หยดน้ำเนื้อเงินปี2530วัดสระประสานสุข", "เหรียญเสมาเล็กเนื้อเงินหลวงพ่อแช่มวัดดอนยายหอมปี2516", "เหรียญแปดเหลี่ยมหลวงพ่อแช่มวัดดอนยายหอมเนื้อเงินปี2533", "เหรียญที่ระลึกในหลวงรัชกาลที่9เนื้อทองคำพร้อมกล่อง", "หลวงพ่อพระใสวัดโพธิ์ชัยปี2534หน้าตัก 5นิ้ว", "รูปหล่อบูชาหลวงปู่คำพันธ์วัดธาตุมหาชัยจ.นครพนมหน้าตัก5นิ้ว", "รูปหล่อบูชาหลวงพ่อเกษมเขมโกหน้าตัก5นิ้วปี2535หลังหนู", "หลวงพ่อพระใสวัดโพธิ์ชัยหน้าตัก5นิ้วปี2534จ.หนองคาย", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วพิมพ์ป้อมเล็กมีจาร", "พระบูชาหลวงปู่ทวดหน้าตัก10นิ้ว ปี2518", "เหรียญหลวงปู่ดุลย์รุ่นพิเศษกะไหล่ทองลงยาปี2526", "พระกริ่งคุ้มเกล้าภปร.เนื้อนวะปี2552พร้อมกล่อง", "พระพุทธนราวันตบพิธปี2542พร้อมกล่อง3องค์", "พระชัยวัฒน์หลวงปู่บุญวัดกลางบางแก้วมีชาดทองสวย", "หลวงปู่บุญวัดกลางบางแก้วนครปฐมหน้าตัก5นิ้ว", "หลวงตามหาบัววัดป่าบ้านตาดพิมพ์ยืนสูง13นิ้วปี2553", "พระบรมรูปหยกขาวจักรพรรดิ์ในหลวงร.9พ.ศ.2542", "พระนาคปรกวัดบรมนิวาสฯปี2495ติดรางวัล", "แหวนพิรอดหลวงพ่อม่วงวัดบ้านทวน กาญจนบุรี", "ลูกสะกดหลวงพ่อเนียมสุพรรณบุรี", "เหรียญเงินหลวงพ่อชาวัดหนองป่าพงปี2518", "ตะกรุดโทนหลวงพ่อทบ วัดชนแดน", "พระกลีบบัวใหญ่หลวงปูบุญวัดกลางบางแก้ว", "นกสาริกาคู่ หลวงปู่ทิมวัดระหารไร่", "พิรอดแขน หลวงพ่อม่วงวัดบ้านทวนกาญจนบุรี", "เหรียญเต่าหลวงปู่หลิววัดไร่แตงทองปี2540กะไหล่เงินลงยาสีเขียว", "พระปิดตานางพรายเนื้อผงพรายกุมาร หลวงปู่ทิม", "พระปิดตาหลวงพ่อภุชงค์ ปี04", "พระปิดตาหลวงพ่อเชยวัดท่าควาย", "พระปิดตาหลวงปู่เฮี้ยง พิมพ์หลังยันต์โส วัดป่าชลบุรี 2505", "พระผงของขวัญหลวงปู่ชาวัดหนองป่าพงอ.วารินฯจ.อุบลฯ", "พระนาคปรกวัดบรมฯปี2495พิมพ์ใหญ่", "พระบูชา ส.ก.พระพุทธโลกนาถสิริคุณปี2535", "ภาพถ่ายหลวงปู่ทิม หลังตะกรุดสามกษัตริย์", "ตะกรุดสาริกา หลวงพ่อทบวัดชนแดน", "ตะกรุดเนื้อเงินหลวงพ่อรุ่ง", "เหรียญเม็ดกระดุมหลวงปู่สิม", "ตะกรุดสามกษัตริย์ หลวงปู่ทิม", "เหรียญรุ่นแรกหลวงปู่บุญมีวัดสระประสานสุขเนื้อทองคำปี30", "พระลีลาทุ่งเศรษฐีเจ้าคุณนรฯพิมพ์ใหญ่ติดรางวัล", "พระผงหลวงปู่ฝั้นวัดป่าอุดมสมพรปี2517", "พระผงรูปเหมือนหลังใบไม้หลวงปู่ชาวัดหนองป่าพงจ.อุบลฯ", "พระกริ่งพุทธไชยศรีกะไหล่เงินหลวงปู่เพิ่มวัดกลางบางแก้ว", "พระผงกำแพงแสนหลวงปู่ดุลย์วัดบูรพารามจ.สุรินทร์", "เหรียญหลวงพ่อมุม วัดปราสาทเยอร์ เนื้อเงิน ปี 2515", "เหรียญในหลวงร.9 ครองราชครบ 50ปี ขนาด 7เซ็น พร้อมกล่อง", "เหรียญที่ระลึก 60ปีราชาภิเษกสมรส ขนาด 7ซ.ม.", "พระสมเด็จบางขุนพรหม ปี 2531 พร้อมกล่อง 12องค์", "เหรียญที่ระลึกในหลวงร.9 ราชาภิเษกสมรสและบรมราชาภิเษก", "เหรียญการประชุมองค์การพุทธศาสนิกสัมพันธ์แห่งโลก", "เหรียญร.5 ที่ระลึก 100 ปี สภากาชาดไทย ขนาด7ซ.ม.", "เหรียญรัชกาลที่ 5 ขนาด7เซ็นฯที่ระลึก100ปี โรงพยาบาลศิริราช", "พระบรมรูปในหลวงทรงงาน\"วิริยะ\"ปี 2541", "พระสมเด็จบางขุนพรหม พิมพ์ฐานคู่ พร้อมใบเซอร์", "หลวงปู่ชา วัดหนองป่าพง รุ่นแรก", "เหรียญพระอาจารย์มั่น-พระอาจารย์เสาร์", "เหรียญ ร.5 ทรงม้า ร.ศ.127 เนื้อบรอนท์สวย", "เหรียญพระอาจารย์มั่น หลังพระอาจารย์เสาร์ ยันต์ซ้อน", "หลวงปู่ทวด พิมพ์เตารีดใหญ่A เนื้อนวะ ตอกฉ.", "เหรียญพระครูวิโรจน์ รุ่นแรก นิยม", "เหรียญหลวงปู่มั่น-เสาร์ ยันต์แปด นิยม"];
            for ($i = 1; $i <= 20; $i++) : ?>
                <div class="col">
                    <div class="card bg-dark h-100">
                        <div class="card-body">
                            <a href="#" class="hover-popup d-block w-100 mb-3 position-relative overflow-hidden" style="height: 0; padding-top: 100%; max-width: 300px;">
                                <div class="position-absolute d-flex justify-content-center" style="top: 0; left: 0; width: 100%; height: 100%;">
                                    <img class="img-fluid rounded-lg" src="//dummyimage.com/500x500" alt="">
                                </div>
                            </a>
                            <a href="#" class="d-block card-title link-light text-decoration-none lh-base overflow-hidden" style="height: 50px;"><?= $names[array_rand($names)] ?></a>
                            <div class="d-block link-secondary small d-flex text-decoration-none align-items-center">
                                <i class="fas fa-clock fa-sm mr-1"></i>
                                <span><?= THdatetime(date('Y-m-d H:i:s'), 'date') ?></span>
                            </div>
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
<script>
    const toggleAnnounce = () => document.getElementById('store-announce-container').classList.toggle('show-all')
</script>