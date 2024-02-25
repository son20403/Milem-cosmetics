<div class="app">
    <div class="magin_app">
        <section>
            <div class="grid wide">
                <div class="signin">
                    <div class="row">
                        <div class="col l-8 l-o-2">
                            <h1 class="signin_heading">Đăng nhập</h1>
                            <form class="signin_form" method="POST">
                                <div class="signin_form-input">
                                    <label for="#">Tài Khoản:</label>
                                    <input class="signin_input" type="text" placeholder="Tài khoản" name="username" required>
                                </div>
                                <div class="signin_form-input">
                                    <label for="#">Mật khẩu:</label>
                                    <input class="signin_input" type="password" placeholder="Mật khẩu" name="password" required>
                                </div>
                                <button name="signin" class="signin_btn btn btn--primary" type="submit">Đăng nhập</button>
                                <a href="index.php?page_layout=forgot&controller=users&action=forgot" class="forgot_link">Quên mật khẩu ?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>