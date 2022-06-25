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
                    <label for="id_card" class="form-label">หมายเลขบัตรรับรอง</label>
                    <input type="text" class="form-control" id="id_card" name="id_card" autocomplete="off" required>
                </div>

                <div class="mb-1">
                    <label for="cer_start" class="form-label">วันออกบัตรรับรอง</label>
                    <input type="text" class="form-control" id="datepicker" name="cer_start" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_m_type" class="form-label">ประเภทพระ</label>
                    <input type="text" class="form-control" id="cer_m_type" name="cer_m_type" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_m_name" class="form-label">ชื่อพระ</label>
                    <input type="text" class="form-control" id="cer_m_name" name="cer_m_name" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_temple" class="form-label">วัด / กรุ</label>
                    <input type="text" class="form-control" id="cer_temple" name="cer_temple" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_province" class="form-label">จังหวัด</label>
                    <select type="text" class="form-control select2" name="cer_province" id="cer_province" placeholder="จังหวัด" required>
                        <option></option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cer_name" class="form-label">เจ้าของพระ</label>
                    <input type="text" class="form-control" id="cer_name" name="cer_name" autocomplete="off" required>
                </div>

                <div class="mb-3">
                    <label for="cer_img" class="form-label">รูปบัตร</label>
                    <div class='preview'>
                        <img src="" id="cer_img" style="width: 300px;height: 200px;">
                    </div>
                    <input type="file" name="pic_cer_img" id="pic_cer_img" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                    <input type="hidden" name="cer_img" value="">
                </div>

                <div class="mb-3">
                    <label for="cer_img_1" class="form-label">รูปบัตร 1</label>
                    <div class='preview'>
                        <img src="" id="cer_img_1" style="width: 300px;height: 200px;">
                    </div>
                    <input type="file" name="pic_cer_img_1" id="pic_cer_img_1" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                    <input type="hidden" name="cer_img_1" value="">
                </div>

                <div class="mb-3">
                    <label for="cer_img_2" class="form-label">รูปบัตร 2</label>
                    <div class='preview'>
                        <img src="" id="cer_img_2" style="width: 300px;height: 200px;">
                    </div>
                    <input type="file" name="pic_cer_img_2" id="pic_cer_img_2" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                    <input type="hidden" name="cer_img_2" value="">
                </div>

                <div class="mb-3">
                    <label for="cer_img_3" class="form-label">รูปบัตร 3</label>
                    <div class='preview'>
                        <img src="" id="cer_img_3" style="width: 300px;height: 200px;">
                    </div>
                    <input type="file" name="pic_cer_img_3" id="pic_cer_img_3" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                    <input type="hidden" name="cer_img_3" value="">
                </div>

                <div class="mb-3">
                    <label for="cer_img_4" class="form-label">รูปบัตร 4</label>
                    <div class='preview'>
                        <img src="" id="cer_img_4" style="width: 300px;height: 200px;">
                    </div>
                    <input type="file" name="pic_cer_img_4" id="pic_cer_img_4" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                    <input type="hidden" name="cer_img_4" value="">
                </div>

                <button type="submit" class="btn btn-primary">ตกลง</button>
                <a class="btn btn-danger" onclick="history.back()">ยกเลิก</a>
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
                        <label for="id_card" class="form-label">หมายเลขบัตรรับรอง</label>
                        <input type="text" class="form-control" id="id_card" name="id_card" value="<?php echo $row['id_card'] ?>" autocomplete="off" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="cer_start" class="form-label">วันออกบัตรรับรอง</label>
                        <input type="text" class="form-control" id="cer_start" name="cer_start" value="<?php echo $row['cer_start'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_m_type" class="form-label">ประเภทพระ</label>
                        <input type="text" class="form-control" id="cer_m_type" name="cer_m_type" value="<?php echo $row['cer_m_type'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_m_name" class="form-label">ชื่อพระ</label>
                        <input type="text" class="form-control" id="cer_m_name" name="cer_m_name" value="<?php echo $row['cer_m_name'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_temple" class="form-label">วัด / กรุ</label>
                        <input type="text" class="form-control" id="cer_temple" name="cer_temple" value="<?php echo $row['cer_temple'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_province" class="form-label">จังหวัด</label>
                        <input type="text" class="form-control" id="cer_province" name="cer_province" value="<?php echo $row['cer_province'] ?>" autocomplete="off" required>

                    </div>

                    <div class="mb-3">
                        <label for="cer_name" class="form-label">เจ้าของพระ</label>
                        <input type="text" class="form-control" id="cer_name" name="cer_name" value="<?php echo $row['cer_name'] ?>" autocomplete="off" required>
                    </div>

                    <div class="mb-3">
                        <label for="cer_img" class="form-label">รูปบัตร</label>
                        <div class='preview'>
                            <img src="../uploads/<?php echo $row['cer_img'] ?>" id="cer_img" style="width: 300px;height: 200px;">
                        </div>
                        <input type="file" name="pic_cer_img" id="pic_cer_img" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                        <input type="hidden" name="cer_img" value="<?php echo $row['cer_img'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_1" class="form-label">รูปบัตร 1</label>
                        <div class='preview'>
                            <img src="../uploads/<?php echo $row['cer_img_1'] ?>" id="cer_img_1" style="width: 300px;height: 200px;">
                        </div>
                        <input type="file" name="pic_cer_img_1" id="pic_cer_img_1" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                        <input type="hidden" name="cer_img_1" value="<?php echo $row['cer_img_1'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_2" class="form-label">รูปบัตร 2</label>
                        <div class='preview'>
                            <img src="../uploads/<?php echo $row['cer_img_2'] ?>" id="cer_img_2" style="width: 300px;height: 200px;">
                        </div>
                        <input type="file" name="pic_cer_img_2" id="pic_cer_img_2" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                        <input type="hidden" name="cer_img_2" value="<?php echo $row['cer_img_2'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_3" class="form-label">รูปบัตร 3</label>
                        <div class='preview'>
                            <img src="../uploads/<?php echo $row['cer_img_3'] ?>" id="cer_img_3" style="width: 300px;height: 200px;">
                        </div>
                        <input type="file" name="pic_cer_img_3" id="pic_cer_img_3" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                        <input type="hidden" name="cer_img_3" value="<?php echo $row['cer_img_3'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="cer_img_4" class="form-label">รูปบัตร 4</label>
                        <div class='preview'>
                            <img src="../uploads/<?php echo $row['cer_img_4'] ?>" id="cer_img_4" style="width: 300px;height: 200px;">
                        </div>
                        <input type="file" name="pic_cer_img_4" id="pic_cer_img_4" accept=".png,.jpg,.jpeg" style="margin-left: 6rem;" />
                        <input type="hidden" name="cer_img_4" value="<?php echo $row['cer_img_4'] ?>">
                    </div>


                    <button type="submit" class="btn btn-primary">ตกลง</button>
                    <a class="btn btn-danger" onclick="history.back()">ยกเลิก</a>
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

        $sql1 = "SELECT id_card FROM cer WHERE id_card = '$id_card' ";
        $q1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($q1) == 0) {

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
                alert('Error INSERT');
                window.location.href = 'index.php?cer';
                  </script>";
            }
        } else {

            echo "<script>
            alert('Error รหัสพระเครื่องนี้ใช้ไปแล้ว');
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
                            <th>หมายเลขบัตรรับรอง</th>
                            <th>วันออกบัตรรับรอง</th>
                            <th>ประเภทพระ</th>
                            <th>ชื่อพระ</th>
                            <th>วัด / กรุ</th>
                            <th>จังหวัด</th>
                            <th>เจ้าของพระ</th>
                            <th>รูปบัตร</th>
                            <th>รูปพระ 1</th>
                            <th>รูปพระ 2</th>
                            <th>รูปพระ 3</th>
                            <th>รูปพระ 4</th>

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
                            echo "<td> <a href='../uploads/" . $row['cer_img'] . "' target='_blank'><img src='../uploads/" . $row['cer_img'] . "' class='img-fluid' ></a> </td>";
                            echo "<td> <a href='../uploads/" . $row['cer_img_1'] . "' target='_blank'><img src='../uploads/" . $row['cer_img_1'] . "' class='img-fluid' ></a> </td>";
                            echo "<td> <a href='../uploads/" . $row['cer_img_2'] . "' target='_blank'><img src='../uploads/" . $row['cer_img_2'] . "' class='img-fluid' ></a> </td>";
                            echo "<td> <a href='../uploads/" . $row['cer_img_3'] . "' target='_blank'><img src='../uploads/" . $row['cer_img_3'] . "' class='img-fluid' ></a> </td>";
                            echo "<td> <a href='../uploads/" . $row['cer_img_4'] . "' target='_blank'><img src='../uploads/" . $row['cer_img_4'] . "' class='img-fluid' ></a> </td>";
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

<script>
    //ดึงจังวัดมาอัตโนมัติ
    $(".select2").select2();

    $.ajax({
        url: "https://raw.githubusercontent.com/kongvut/thai-province-data/master/json/thai_provinces.json",
        dataType: "json",
        data: {
            province: 'province'
        },
        success: function(data) {

            $.each(data.RECORDS, function(index, value) {
                // console.log(value.name_th)

                $("#cer_province").append("<option value='" + value.name_th + "'> " + value.name_th + "</option>");

            });

        }
    });

    //อัพรูป 0
    $("#pic_cer_img").on("change", function(e) { // จะทำงานก็ต่อเมื่อกด submit ฟอร์ม
        e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
        var fd = new FormData(); // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object

        var files = $('#pic_cer_img')[0].files; //เป็นการดึงข้อมูลรูปภาพเพื่อเตรียมเช็คไฟล์ก่อนทำงานส่วน Ajax

        // เช็คว่ามีไฟล์รูปภาพอยู่หรือไม่
        if (files.length > 0) {

            fd.append('file', files[0]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element 

            $.ajax({
                url: 'Upload.php', //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
                type: 'post',
                data: fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
                contentType: false,
                processData: false,
                success: function(response) { //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้

                    if (response != 0) {
                        $("#cer_img").attr("src", "../uploads/" + response);
                        $("input[name='cer_img']").val(response);
                        //$('.preview img').show();
                    } else {
                        alert('File not uploaded');
                    }
                }
            });
        } else {
            alert("Please select a file.");
        }
    });

    //อัพรูป 1
    $("#pic_cer_img_1").on("change", function(e) { // จะทำงานก็ต่อเมื่อกด submit ฟอร์ม
        e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
        var fd = new FormData(); // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object

        var files = $('#pic_cer_img_1')[0].files; //เป็นการดึงข้อมูลรูปภาพเพื่อเตรียมเช็คไฟล์ก่อนทำงานส่วน Ajax

        // เช็คว่ามีไฟล์รูปภาพอยู่หรือไม่
        if (files.length > 0) {

            fd.append('file', files[0]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element 

            $.ajax({
                url: 'Upload.php', //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
                type: 'post',
                data: fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
                contentType: false,
                processData: false,
                success: function(response) { //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้

                    if (response != 0) {
                        $("#cer_img_1").attr("src", "../uploads/" + response);
                        $("input[name='cer_img_1']").val(response);
                        //$('.preview img').show();
                    } else {
                        alert('File not uploaded');
                    }
                }
            });
        } else {
            alert("Please select a file.");
        }
    });

    //อัพรูป 2
    $("#pic_cer_img_2").on("change", function(e) { // จะทำงานก็ต่อเมื่อกด submit ฟอร์ม
        e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
        var fd = new FormData(); // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object

        var files = $('#pic_cer_img_2')[0].files; //เป็นการดึงข้อมูลรูปภาพเพื่อเตรียมเช็คไฟล์ก่อนทำงานส่วน Ajax

        // เช็คว่ามีไฟล์รูปภาพอยู่หรือไม่
        if (files.length > 0) {

            fd.append('file', files[0]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element 

            $.ajax({
                url: 'Upload.php', //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
                type: 'post',
                data: fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
                contentType: false,
                processData: false,
                success: function(response) { //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้

                    if (response != 0) {
                        $("#cer_img_2").attr("src", "../uploads/" + response);
                        $("input[name='cer_img_2']").val(response);
                        //$('.preview img').show();
                    } else {
                        alert('File not uploaded');
                    }
                }
            });
        } else {
            alert("Please select a file.");
        }
    });

    //อัพรูป 3
    $("#pic_cer_img_3").on("change", function(e) { // จะทำงานก็ต่อเมื่อกด submit ฟอร์ม
        e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
        var fd = new FormData(); // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object

        var files = $('#pic_cer_img_3')[0].files; //เป็นการดึงข้อมูลรูปภาพเพื่อเตรียมเช็คไฟล์ก่อนทำงานส่วน Ajax

        // เช็คว่ามีไฟล์รูปภาพอยู่หรือไม่
        if (files.length > 0) {

            fd.append('file', files[0]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element 

            $.ajax({
                url: 'Upload.php', //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
                type: 'post',
                data: fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
                contentType: false,
                processData: false,
                success: function(response) { //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้

                    if (response != 0) {
                        $("#cer_img_3").attr("src", "../uploads/" + response);
                        $("input[name='cer_img_3']").val(response);
                        //$('.preview img').show();
                    } else {
                        alert('File not uploaded');
                    }
                }
            });
        } else {
            alert("Please select a file.");
        }
    });

    //อัพรูป 4
    $("#pic_cer_img_4").on("change", function(e) { // จะทำงานก็ต่อเมื่อกด submit ฟอร์ม
        e.preventDefault(); // ปิดการใช้งาน submit ปกติ เพื่อใช้งานผ่าน ajax
        var fd = new FormData(); // เตรียมข้อมูล form สำหรับส่งด้วย  FormData Object

        var files = $('#pic_cer_img_4')[0].files; //เป็นการดึงข้อมูลรูปภาพเพื่อเตรียมเช็คไฟล์ก่อนทำงานส่วน Ajax

        // เช็คว่ามีไฟล์รูปภาพอยู่หรือไม่
        if (files.length > 0) {

            fd.append('file', files[0]); //ใช้ในการแทรกค่าไฟล์รูปภาพใน element 

            $.ajax({
                url: 'Upload.php', //ให้ระบุชื่อไฟล์ PHP ที่เราจะส่งค่าไป
                type: 'post',
                data: fd, //ข้อมูลจาก input ที่ส่งเข้าไปที่ PHP
                contentType: false,
                processData: false,
                success: function(response) { //หากทำงานสำเร็จ จะรับค่ามาจาก JSON หลังจากนั้นก็ให้ทำงานตามที่เรากำหนดได้

                    if (response != 0) {
                        $("#cer_img_4").attr("src", "../uploads/" + response);
                        $("input[name='cer_img_4']").val(response);
                        //$('.preview img').show();
                    } else {
                        alert('File not uploaded');
                    }
                }
            });
        } else {
            alert("Please select a file.");
        }
    });
</script>