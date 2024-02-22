
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng Ký</h1>
                            </div>
                            <form class="user" action="?url=ResgisterController/handleRegister" method="POST">
                            <!-- <div class="form-group">
                                    <input type="text" name="user_id" class="form-control form-control-user" 
                                        aria-describedby="emailHelp" placeholder="Nhập mã số">
                                </div> -->
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user" 
                                        aria-describedby="emailHelp" placeholder="Nhập tên người dùng">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Nhập địa chỉ email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Nhập mật khẩu" required>
                                </div>
                                <input class="mr20 btn btn-primary" type="submit" name="dangky" value="Đăng Ký">
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="?url=LoginController/handleLogin">Bạn đã có tài khoản? Đăng nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
