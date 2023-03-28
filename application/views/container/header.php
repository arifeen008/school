<nav class="navbar navbar-expand-lg" style="background-color:#25e946;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url('picture/logo.jpg') ?>" class="me-2" height="50" alt="MDB Logo" loading="lazy" />
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo base_url('home')?>">หน้าหลัก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        เกี่ยวกับเรา
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">ประวัติโรงเรียน</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="<?php echo base_url('home/manager')?>">ผู้บริหารและบุคลากร</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">อาคาร สถานที่</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        ข่าวประชาสัมพันธ์
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">ข่าวประชาสัมพันธ์ 2556</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">ข่าวประชาสัมพันธ์ 2555</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('home/contact_us')?>">ติดต่อเรา</a>
                </li>

            </ul>
        </div>
    </div>
</nav>