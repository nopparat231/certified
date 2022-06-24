<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">พระเครื่อง</h1>

<?php if (isset($_GET['add'])) { ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <h6 class="m-0 font-weight-bold text-primary">เพิ่มข้อมูล พระเครื่อง</h6>

        </div>

        <div class="card-body">

            <form action="?cer&add_db" method="post">

                <div class="mb-3">
                    <label for="id_card" class="form-label">รหัสพระเครื่อง</label>
                    <input type="text" class="form-control" id="id_card" name="id_card" autocomplete="off" required>
                </div>

                <div class="mb-1">
                    <label for="cer_start" class="form-label">cer_start</label>
                    <input type="date" class="form-control" id="cer_start" name="cer_start" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_m_type" class="form-label"> cer_m_type</label>
                    <input type="text" class="form-control" id="cer_m_type" name="cer_m_type" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_m_name" class="form-label"> cer_m_name</label>
                    <input type="text" class="form-control" id="cer_m_name" name="cer_m_name" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_temple" class="form-label"> cer_temple</label>
                    <input type="text" class="form-control" id="cer_temple" name="cer_temple" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_province" class="form-label">cer_province</label>
                    <input type="text" class="form-control" id="cer_province" name="cer_province" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_name" class="form-label"> cer_name</label>
                    <input type="text" class="form-control" id="cer_name" name="cer_name" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_img" class="form-label"> cer_img</label>
                    <input type="text" class="form-control" id="cer_img" name="cer_img" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_img_1" class="form-label"> cer_img_1</label>
                    <input type="text" class="form-control" id="cer_img_1" name="cer_img_1" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_img_2" class="form-label"> cer_img_2</label>
                    <input type="text" class="form-control" id="cer_img_2" name="cer_img_2" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_img_3" class="form-label"> cer_img_3</label>
                    <input type="text" class="form-control" id="cer_img_3" name="cer_img_3" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_img_4" class="form-label"> cer_img_4</label>
                    <input type="text" class="form-control" id="cer_img_4" name="cer_img_4" autocomplete="off" required>
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-danger" onclick="history.back()">Cancle</a>
            </form>

        </div>

    </div>

    <?php } elseif (isset($_GET['edit'])) {

    if (isset($_GET['id_card'])) {

        $id_card = $_GET['id_card'];

        $sql1 = "SELECT * FROM cer WHERE id_card = '$id_card' ";
        $q1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($q1);

    ?>

        <div class="card shadow mb-4">
            <div class="card-header py-3">

                <h6 class="m-0 font-weight-bold text-primary">แก้ไขข้อมูล พระเครื่อง</h6>

            </div>

            <div class="card-body">

                <form action="?cer&edit_db" method="post">

                    <div class="mb-3">
                        <label for="id_card" class="form-label">รหัสพระเครื่อง</label>
                        <input type="text" class="form-control" id="id_card" name="id_card" value="<?php echo $row['id_card'] ?>" autocomplete="off" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="cer_start" class="form-label">cer_start</label>
                        <input type="text" class="form-control" id="cer_start" name="cer_start" value="<?php echo $row['cer_start'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_m_type" class="form-label"> cer_m_type</label>
                        <input type="text" class="form-control" id="cer_m_type" name="cer_m_type" value="<?php echo $row['cer_m_type'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_m_name" class="form-label"> cer_m_name</label>
                        <input type="text" class="form-control" id="cer_m_name" name="cer_m_name" value="<?php echo $row['cer_m_name'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_temple" class="form-label"> cer_temple</label>
                        <input type="text" class="form-control" id="cer_temple" name="cer_temple" value="<?php echo $row['cer_temple'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_province" class="form-label">cer_province</label>
                        <input type="text" class="form-control" id="cer_province" name="cer_province" value="<?php echo $row['cer_province'] ?>" autocomplete="off" required>

                    </div>

                    <div class="mb-3">
                        <label for="cer_name" class="form-label"> cer_name</label>
                        <input type="text" class="form-control" id="cer_name" name="cer_name" value="<?php echo $row['cer_name'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_img" class="form-label"> cer_img</label>
                        <input type="text" class="form-control" id="cer_img" name="cer_img" value="<?php echo $row['cer_img'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_1" class="form-label"> cer_img_1</label>
                        <input type="text" class="form-control" id="cer_img_1" name="cer_img_1" value="<?php echo $row['cer_img_1'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_2" class="form-label"> cer_img_2</label>
                        <input type="text" class="form-control" id="cer_img_2" name="cer_img_2" value="<?php echo $row['cer_img_2'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_3" class="form-label"> cer_img_3</label>
                        <input type="text" class="form-control" id="cer_img_3" name="cer_img_3" value="<?php echo $row['cer_img_3'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_4" class="form-label"> cer_img_4</label>
                        <input type="text" class="form-control" id="cer_img_4" name="cer_img_4" value="<?php echo $row['cer_img_4'] ?>" autocomplete="off" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-danger" onclick="history.back()">Cancle</a>
                </form>

            </div>

        </div>


    <?php
    }
    //เพิ่ม db
} elseif (isset($_GET['add_db'])) {

    if (isset($_POST['id_card'])) {

        $id_card = $_POST["id_card"];
        $cer_start = $_POST["cer_start"];
        $cer_m_type = $_POST["cer_m_type"];
        $cer_m_name = $_POST["cer_m_name"];
        $cer_temple = $_POST["cer_temple"];
        $cer_province = $_POST["cer_province"];
        $cer_name = $_POST["cer_name"];
        $cer_img = $_POST["cer_img"];
        $cer_img_1 = $_POST["cer_img_1"];
        $cer_img_2 = $_POST["cer_img_2"];
        $cer_img_3 = $_POST["cer_img_3"];
        $cer_img_4 = $_POST["cer_img_4"];
        $id_cer = null;
        $cer_creat_at = null;

        $strSQL = "INSERT INTO cer
        values ('" . $id_cer . "',
                '" . $id_card . "',
                '" . $cer_start . "',
                '" . $cer_m_type . "',
                '" . $cer_m_name . "',
                '" . $cer_temple . "',
                '" . $cer_province . "',
                '" . $cer_name . "',
                '" . $cer_img . "',
                '" . $cer_img_1 . "',
                '" . $cer_img_2 . "',
                '" . $cer_img_3 . "',
                '" . $cer_img_4 . "',
                '" . $cer_creat_at . "')";

        $query = mysqli_query($conn, $strSQL) or die(mysqli_error($conn));
        if ($query) {

            echo "<script>
            alert('บันทึกเรียบร้อย');
            window.location.href = 'index.php?cer';
              </script>";
        } else {

            echo "<script>
            alert('Error');
            window.location.href = 'index.php?cer';
              </script>";
        }
    }

    //แก้ไข db
} elseif (isset($_GET['edit_db'])) {

    if (isset($_POST['id_card'])) {

        $strSQL = "update cer set id_card = '" . $_POST['id_card'] . "'
        , cer_start =  '" . $_POST['cer_start'] . "'
        , cer_m_type =  '" . $_POST['cer_m_type'] . "'
        , cer_m_name =  '" . $_POST['cer_m_name'] . "'
        , cer_temple =  '" . $_POST['cer_temple'] . "'
        , cer_province =  '" . $_POST['cer_province'] . "'
        , cer_name =  '" . $_POST['cer_name'] . "'
        , cer_img =  '" . $_POST['cer_img'] . "'
        , cer_img_1 =  '" . $_POST['cer_img_1'] . "'
        , cer_img_2 =  '" . $_POST['cer_img_2'] . "'
        , cer_img_3 =  '" . $_POST['cer_img_3'] . "'
        , cer_img_4 =  '" . $_POST['cer_img_4'] . "'
        where id_card IN ('" . $_POST['id_card'] . "')";

        if (mysqli_query($conn, $strSQL)) {

            echo "<script>
            alert('บันทึกเรียบร้อย');
            window.location.href = 'index.php?cer';
              </script>";
        } else {

            echo "<script>
            alert('Error');
            window.location.href = 'index.php?cer';
              </script>";
        }
    }

    //ลบ
} elseif (isset($_GET['del'])) {

    if (isset($_GET['id_card'])) {

        $id_card = $_GET['id_card'];

        $sql = "DELETE FROM cer WHERE id_card ='$id_card'";

        if (mysqli_query($conn, $sql) == TRUE) {

            echo "<script>
            alert('ลบสำเร็จ');
            window.location.href = 'index.php?cer';
            </script>";
        } else {

            echo "<script>
            alert('Error');
            window.location.href = 'index.php?cer';
            </script>";
        }
    }
} else {

    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <a href="?cer&add" class="btn btn-success btn-circle float-end">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>รหัส</th>
                            <th>cer_start</th>
                            <th>cer_m_type</th>
                            <th>cer_m_name</th>
                            <th>cer_temple</th>
                            <th>cer_province</th>
                            <th>cer_name</th>
                            <th>cer_img</th>
                            <th>cer_img_1</th>
                            <th>cer_img_2</th>
                            <th>cer_img_3</th>
                            <th>cer_img_4</th>

                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        $sql1 = "SELECT * FROM cer ";
                        $q1 = mysqli_query($conn, $sql1);
                        while ($row = mysqli_fetch_array($q1)) {

                            echo "<tr>";
                            echo "<td>" . $row['id_card'] . "</td>";
                            echo "<td>" . $row['cer_start'] . "</td>";
                            echo "<td>" . $row['cer_m_type'] . "</td>";
                            echo "<td>" . $row['cer_m_name'] . "</td>";
                            echo "<td>" . $row['cer_temple'] . "</td>";
                            echo "<td>" . $row['cer_province'] . "</td>";
                            echo "<td>" . $row['cer_name'] . "</td>";
                            echo "<td>" . $row['cer_img'] . "</td>";
                            echo "<td>" . $row['cer_img_1'] . "</td>";
                            echo "<td>" . $row['cer_img_2'] . "</td>";
                            echo "<td>" . $row['cer_img_4'] . "</td>";
                            echo "<td>" . $row['cer_img_4'] . "</td>";
                            echo '<td style="text-align: center"> <a href="?cer&edit&id_card=' . $row['id_card'] . '" class="btn btn-warning btn-sm float-end"><i class="fas fa-pencil-alt"></i></a> </td>';
                            echo "<td style='text-align: center'> <a href='?cer&del&id_card=" . $row['id_card'] . "' onclick=\"return confirm('ต้องการลบรายการนี้ใช่หรือไม่?')\" class='btn btn-danger btn-sm float-end'><i class='fas fa-trash'></i></a> </td>";
                            echo "</tr>";
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php } ?>