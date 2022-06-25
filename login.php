<div class="body-signin">
    <main class="form-signin w-100 m-auto">
        <form action="login_db.php" method="post">
            <img class="mb-4" src="./ref/img/logo.png" alt="" width="70" height="60">
            <h1 class="h3 mb-3 fw-normal">กรุณาเข้าสู่ระบบ</h1>
            <?php

            if (isset($_GET['error'])) :
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error'] ?>
                </div>

            <?php endif ?>
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary" type="submit">เข้าสู่ระบบ</button>

        </form>
    </main>
</div>