<?php
include("header.php");


if (isset($_GET['content'])) {
    include("content.php");
} elseif (isset($_GET['detail'])) {
    include("detail.php");
} elseif (isset($_GET['login'])) {
    include("login.php");
} else {
    include("home.php");
}


include("footer.php");
