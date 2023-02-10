<h2 class="text-center">Đăng nhập</h2>
<form class="needs-validation" novalidate method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Địa chỉ email</label>
        <input name="email" type="text" class="form-control" id="email" aria-describedby="email">
        <?php if (isset($data['r_email'])) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $data['r_email'] ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3">
        <label for="pw" class="form-label">Mật khẩu</label>
        <input name="pw" type="password" class="form-control" id="pw">
        <?php if (isset($data['r_pw'])) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?= $data['r_pw'] ?>
            </div>
        <?php } ?>
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lưu mật khẩu</label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
    <?php if (isset($data['r_match'])) { ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?= $data['r_match'] ?>
        </div>
    <?php } ?>
</form>

<!-- <script src="public/js/form.js"></script> -->