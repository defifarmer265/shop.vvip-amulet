<nav id="menu" class="navbar py-0 navbar-expand-sm navbar-dark sticky-top" data-old-style="background-color: rgba(0,0,0,0.25);" style="z-index: 1022; height: 57px; background: linear-gradient(170deg, #1d2023, #3b4046);">
    <div class="container-xl position-relative">
        <a href="/" class="text-decoration-none link-light d-flex d-sm-none">
            <div class="mr-2 my-auto">
                <img src="//dummyimage.com/500x500" alt="Logo" class="rounded-circle" style="width: 40px;max-width: 90px;">
            </div>
            <h1 class="d-inline-flex flex-column ml-1 my-2 navbar-brand pt-0">
                <span class="font-weight-bold">VVIP-Amulet <span class="font-weight-light small">Shop</span></span>
                <span style="font-size: 12px;" class="font-weight-light text-white-50">ศูนย์รวมร้านพระออนไลน์ไทยอินเตอร์</span>
            </h1>
        </a>
        <div class="ml-auto">
            <button class="navbar-toggler border-0 shadow-none" onclick="document.body.addEventListener('click', closeNavMenu);" type="button" data-toggle="collapse" data-target="#main-nav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse flex-nowrap navbar-collapse overflow-auto row g-0 text-nowrap justify-content-between" id="main-nav">
            <ul class="navbar-nav mr-auto col-12 col-sm-auto mx-auto">
                <li class="d-sm-none">
                    <header class="align-items-center d-flex heading-line mb-4 section-heading mt-0">
                        <h3 class="align-items-center bg-darker d-flex h5 mb-0 title-section">
                            <span class="font-weight-bold">VVIP-Amulet <span class="font-weight-light small">Shop</span></span>
                        </h3>
                    </header>
                </li>
                <li class="nav-item"><a href="/" class="nav-link h5 mb-0 p-3 <?= $pageHeader['url'] === 'index.php' ? 'active bg-gradient' : '' ?>"><i class="fas fa-home mr-2"></i>หน้าแรก</a></li>
                <li class="nav-item"><a href="/new-products" class="nav-link h5 mb-0 p-3 <?= $pageHeader['url'] === 'new-products.php' ? 'active bg-gradient' : '' ?>"><i class="fas fa-box mr-2"></i>สินค้าใหม่</a></li>
                <li class="nav-item"><a href="/shops" class="nav-link h5 mb-0 p-3 <?= $pageHeader['url'] === 'shops.php' ? 'active bg-gradient' : '' ?>"><i class="fas fa-store mr-2"></i>ร้านค้า</a></li>
                <li class="nav-item"><a href="/news" class="nav-link h5 mb-0 p-3 <?= $pageHeader['url'] === 'news.php' ? 'active bg-gradient' : '' ?>"><i class="fas fa-newspaper mr-2"></i>ข่าวสาร</a></li>
                <li class="nav-item"><a href="/rules" class="nav-link h5 mb-0 p-3 <?= $pageHeader['url'] === 'rules.php' ? 'active bg-gradient' : '' ?>"><i class="fas fa-exclamation-circle mr-2"></i>กฎระเบียบ</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link h5 mb-0 p-3 <?= $pageHeader['url'] === 'contact.php' ? 'active bg-gradient' : '' ?>"><i class="fas fa-phone mr-2"></i>ติดต่อ</a></li>
            </ul>
            <ul class="navbar-nav col-12 col-sm-auto mx-auto">
                <li class="nav-item">
                    <a href="#welcome-dialog" data-toggle="modal" class="nav-link p-3" title="เข้าสู่ระบบ"><i class="fas fa-lock mr-2 mr-lg-0 mr-xl-2"></i><span class="d-md-none d-xl-inline-block">เข้าสู่ระบบ</span></a>
                </li>
                <!-- <li class="nav-item"><a href="#register-dialog" class="nav-link p-3" title="สมัครสมาชิก"><i class="fas fa-user-plus mr-2 mr-lg-0 mr-xl-2"></i><span class="d-md-none d-xl-inline-block">สมัครสมาชิก</span></a></li> -->
                <li class="nav-item">
                    <a href="#select-lang-dialog" data-toggle="modal" class="nav-link p-3" title="ภาษา"><i class="fas fa-globe-asia mr-2 mr-lg-0 mr-xl-2"></i><span class="d-md-none d-xl-inline-block">ภาษา</span></a>
                </li>
                <!-- <li class="nav-item d-flex">
                    <a href="#search-dialog" data-toggle="modal" class="btn btn-block btn-outline-light border-0 my-auto d-none d-md-inline-block"><i class="fas fa-search mr-2 mr-sm-0"></i><span class="d-sm-none">ค้นหา</span></a>
                </li> -->
            </ul>
        </div>
    </div>
</nav>