<h2 class="text-center">Đăng ký</h2>
<form method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
        <input name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <?php if (isset($data['r_fullname'])) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $data['r_fullname'] ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Địa chỉ email</label>
        <input name="email" type="email" class="form-control" id="exampleInputPassword1">
        <?php if (isset($data['r_email'])) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $data['r_email'] ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input name="pw" type="password" class="form-control" id="exampleInputPassword1">
        <?php if (isset($data['r_pw'])) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $data['r_pw'] ?>
            </div>
        <?php } ?>
    </div>
    <button type="submit" class="btn btn-primary">Đăng ký</button>
</form>