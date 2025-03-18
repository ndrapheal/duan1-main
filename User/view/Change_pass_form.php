<?php if(isset($_GET['succeed'])){ ?>
            <span><?php echo $_GET['succeed']  ?></span>
      <?php   }  ?><br>
    <form action="index.php?pg=change_pass_form" method="post">
        <label for="">Mật khẩu mới</label> <br>
        <input type="password" name="new_password" placeholder="Nhập mật khẩu mới">
        <label for="">Xác nhận mật khẩu</label> <?php if(isset($_GET['failure'])){ ?>
            <span><?php echo $_GET['failure']  ?></span>
      <?php   }  ?><br>
        <input type="password" name="confirm_new_password" placeholder="Xác nhận mật khẩu">
        <input type="submit" name="enter_change_password" value="Xác nhận">
    </form>
    <?php if(isset($_GET['succeed'])){ ?>
           <a href="index.php?pg=login">Đăng nhập</a>
      <?php   }  ?><br>