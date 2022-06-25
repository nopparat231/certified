<section class="py-5 text-center container">
    <form action="?detail" method="get">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6">ค้นหาเลขที่ใบรับรอง</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input name="id_card" class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="เลขที่ใบรับรอง" aria-label="Search">
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    <button type="submit" class="nav-link px-3" style="background-color: black;">ค้นหา</button>
                </div>
            </div>
        </header>
    </form>
</section>

<!-- ====== -->

<?php

if (isset($_GET['id_card'])) {

    $id_card = $_GET['id_card'];
    $sql = "SELECT * FROM cer WHERE id_card = '$id_card' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0" style="background-color: #f9f9f9;">

                    <div class="card-body">
                        <br>
                        <h3 class="card-title" style="text-align: center;">* <?= $row['cer_m_name'] ?> *</h3>
                        <h5 class="card-title" style="text-align: center;"><?= $row['cer_temple'] ?></h5>

                        <div class="row justify-content-center">
                            <div class="col-sm-6">
                                <div class="card border-0">
                                    <div class="card-body">

                                        <div class="card border-0" style="width: 100%;">
                                            <!-- <img src="https://fakeimg.pl/350x250/?text=imgEx" class="card-img-top" alt="img" width="100%" height="100%"> -->
                                            <a href="./uploads/<?= $row['cer_img'] ?>" target="_blank"><img src="./uploads/<?= $row['cer_img'] ?>" class="card-img-top" alt="..."></a>

                                            <div class="card-body">
                                                <h3 class="card-title">ข้อมูลทั่วไป</h3>

                                            </div>
                                            <ul class="list-group list-group-flush fs-5">
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">หมายเลขบัตรรับรอง </span><span><?= $row['id_card'] ?></span>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">วันออกบัตรรับรอง </span><span><?= $row['cer_start'] ?></span>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">ประเภทพระ</span><span><?= $row['cer_m_type'] ?></span>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">ชื่อพระ </span><span><?= $row['cer_m_name'] ?></span>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">วัด / กรุ </span><span><?= $row['cer_temple'] ?></span>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">จังหวัด </span><span><?= $row['cer_province'] ?></span>
                                                </li>
                                                <li class="list-group-item d-flex">
                                                    <span class="w-50">เจ้าของพระ </span><span><?= $row['cer_name'] ?></span>
                                                </li>


                                            </ul>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-4">
                                <h2>* รายละเอียด *</h2>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 g-2">
                                <div class="col">
                                    <div class="card">
                                        <a href="./uploads/<?= $row['cer_img_1'] ?>" target="_blank"><img src="./uploads/<?= $row['cer_img_1'] ?>" class="card-img-top" alt="..."></a>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <a href="./uploads/<?= $row['cer_img_2'] ?>" target="_blank"><img src="./uploads/<?= $row['cer_img_2'] ?>" class="card-img-top" alt="..."></a>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <a href="./uploads/<?= $row['cer_img_3'] ?>" target="_blank"><img src="./uploads/<?= $row['cer_img_3'] ?>" class="card-img-top" alt="..."></a>

                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <a href="./uploads/<?= $row['cer_img_4'] ?>" target="_blank"><img src="./uploads/<?= $row['cer_img_4'] ?>" class="card-img-top" alt="..."></a>

                                    </div>
                                </div>
                            </div>




                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

<?php

} else {
    echo '<h1>ไม่พบข้อมูลพระ</h1>';
}

?>