<h2 class="text-center">Đăng nhập</h2>
<form method="POST" action="./login">
    <div class="mb-3">
        <label for="email" class="form-label">Địa chỉ email</label>
        <input name="email" type="text" class="form-control" id="email" aria-describedby="email">
    </div>
    <div class="mb-3">
        <label for="pw" class="form-label">Mật khẩu</label>
        <input name="pw" type="password" class="form-control" id="pw">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Lưu mật khẩu</label>
    </div>
    <button type="submit" class="btn btn-primary">Đăng nhập</button>
</form>