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

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-md-6 g-3">


            <?php

            $sql = "SELECT * FROM cer ";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col">
                    <div class="card h-100 border-0">
                        <a href="?detail&id_card=<?= $row['id_card'] ?>"><img src="./uploads/<?= $row['cer_img_1'] ?>" style="width: 100%;height: 100%;" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['cer_m_name'] ?></h5>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>

    </div>
</div>