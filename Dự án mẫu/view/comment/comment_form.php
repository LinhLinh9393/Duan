<?php
session_start();
$id_pro = $_REQUEST['id_pro'];
include "../../model/pdo.php";
include "../../model/comment.php";




$list_comment = load_all_list_comment($id_pro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <style>
        .comment table {
            width: 100%;
            text-align: center;
        }

        .comment td:nth-child(1) {
            width: 50%;
            background-color: #ccc;

        }

        .comment td:nth-child(2) {
            width: 10%;
            background-color: #ccc;

        }

        .comment td:nth-child(3) {
            width: 40%;
            background-color: #ccc;
        }
    </style>
</head>

<body>


    <nav class="aside__list_category">
        <div class="nav__title">Bình luận</div>
        <div class="nav__content_other nav__content_list comment">
            <table>
                <?php
                echo "test", $id_pro;
                foreach ($list_comment as $list) {
                    extract($list);
                    $link_category = "index.php?act=product&id_category=" . $id;
                    echo '<tr><td >' . $content . '</td>';
                    echo '<td >' . $id_user . '</td>';
                    echo '<td >' . $comment_day . '</td></tr>';
                }
                ?>
                <!-- <li><a href="#">Đồng hồ</a></li>
          <li><a href="#">Laptop</a></li>
          <li><a href="#">Điện thoại</a></li>
          <li><a href="#">Ba lô</a></li>
          <li><a href="#">Đồng hồ</a></li>
          <li><a href="#">Laptop</a></li>
          <li><a href="#">Điện thoại</a></li>
          <li><a href="#">Ba lô</a></li> -->
            </table>
        </div>
        <div class="nav__footer nav__footer_searchbox">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="id_pro" value="<?= $id_pro ?>">
                <input type="text" name="message" placeholder="Gửi bình luận">
                <input type="submit" value="Bình luận" name="comment">
            </form>
        </div>

        <?php
        if (isset($_POST['comment']) && ($_POST['comment'])) {
            $content = $_POST['message'];
            $id_pro = $_POST['id_pro'];
            $id_user = $_SESSION['username']['id'];
            $comment_day = date('h:i:sa d/m/Y');
            insert_comment($content, $id_user, $id_pro, $comment_day);
            header("location:" . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </nav>
</body>

</html>