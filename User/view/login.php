<div class="container-login">
            <!---------------------------------- Form login-------------------------- -->
            <div class="form-login container-sm">
                <div class="fl-left">
                <?php if (isset($_GET['succeed_signUp'])){
                                    echo $_GET['succeed_signUp'];
                                } ?>
                    <h1 class="name-lg">Đăng nhập</h1>
                    <?php
                            if (isset($_SESSION['tb']) && ($_SESSION['tb'] != ""))
                                echo $_SESSION['tb'];
                                unset($_SESSION['tb']);
                            ?>
                           
                    <form action="index.php?pg=dangnhap" method="post">
                        <div class="lg-user_name">
                            <div class="lg-user_name__input">
                                <div class="input-group">
                                    <input required="" type="text" name="username" autocomplete="off" class="input input-login-register input-user_name"  >
                                    <label class="user-label">Tên đăng nhập</label > 
                                    <i class="fa-solid fa-user"></i>
                                  </div>
                            </div>
                        </div>
                        <div class="lg-password">
                            <div class="lg-password__input">
                                <div class="input-group">
                                    <input required="" type="password" name="password" autocomplete="off" class="input input-login-register input-password"  >
                                    <label class="user-label">Mật khẩu</label>
                                    <i class="fa-solid fa-eye showPassword"></i>

                                  </div>
                        </div>
                        <div class="err-password">
                            <small class="hide">Tên tài khoản hoặc Mật khẩu sai</small>
                        </div>
                        </div>
                        <div class="fg-pass">
                        <a href="?pg=forgot_password">Quên mật khẩu ?</a>
                        </div>
                        <div class="btn-login">
                            <input type="submit" name="dangnhap"  value="Đăng nhập">
                        </div>
                        <div class="d-xxl-none d-flex justify-content-center align-items-center mt-2">
                            Bạn chưa có tài khoản
                            <div class="register-now ml-2 ">Đăng ký ngay !</div>
                        </div>
                        
                    </form>
                </div>
                <div class="fl-right">
                    <!-- <img src="/asset/img/sl1.jpg" alt=""> -->
                    <h1>Bạn chưa có tài khoản ?</h1>
                    
                        <div class="register-now">Đăng ký ngay !</div>
                    
                </div>
            </div>
            <!-- -----------------------------End Form login------------------------- -->
            <div class="form-register container-sm hide">
                <div class="fl-left">
                    <h1 class="name-lg">Đăng kí</h1>
                    <form id="registrationForm" action="index.php?pg=dangky" method="post">
                        <div class="rg-user_name">
                            <div class="rg-user_name__input">
                                <div class="input-group">
                                    <input required="" type="text" name="username" autocomplete="off" class="input input-login-register input-user_name" id="username">
                                    <label class="user-label">Tên đăng nhập</label>
                                    <i class="fa-solid fa-user"></i>
                                  </div>
                            </div>
                            <div class="error" style="height: 30px;" id="usernameError"></div>
                        </div>
                        <div class="rg-email">
                            <div class="rg-email__input">
                                <div class="input-group">
                                    <input required="" type="email" name="email" autocomplete="off" class="input input-login-register input-email"  id="email">
                                    <label class="user-label">Email</label>
                                    <i class="fa-solid fa-envelope"></i>
                                  </div>
                            </div>
                            <div class="error" style="height: 30px;" id="emailError"></div>

                        </div>
                        <div class="rg-password">
                            <div class="rg-password__input">
                                <div class="input-group">
                                    <input required="" type="password" name="password" autocomplete="off" class="input input-login-register input-password rg-password_input"  id="password">
                                    <label class="user-label">Mật khẩu</label>
                                    <i class="fa-solid fa-eye showPassword" ></i>
                                  </div>
                            </div>
                            <div class="error" style="height: 30px;" id="passwordError"></div>

                        </div>
                        <div class="rg-password_confirm">
                            <div class="rg-passwordConfirm__input">
                                <div class="input-group">
                                    <input required="" type="password" name="repassword" autocomplete="off" class="input input-login-register input-password rg-password_confirm__input"  id="confirmPassword">
                                    <label class="user-label">Nhập lại mật khẩu</label>
                                    <i class="fa-solid fa-eye showPassword" ></i>
                                    <!-- <i class="fa-regular fa-eye"></i> -->
                                  </div>
                        </div>
                        <div class="error" style="height: 30px;" id="confirmPasswordError"></div>

                        </div>
                        <div class="btn-register">
                            <input type="submit" name="dangky" value="Đăng kí">
                        </div>
                        <div class="d-xxl-none d-flex justify-content-center align-items-center mt-2">
                            Bạn đã có tài khoản
                            <div class="login login-now ml-2 ">Đăng nhập ngay !</div>
                        </div>
                        
                    </form>
                </div>
                <div class="fl-right">
                    <!-- <img src="/asset/img/sl1.jpg" alt=""> -->
                    <h1>Bạn đã có tài khoản ?</h1>
                    
                        <div class="login-now">Đăng nhập ngay !!!</div>
                    
                </div>
            </div>
        </div>