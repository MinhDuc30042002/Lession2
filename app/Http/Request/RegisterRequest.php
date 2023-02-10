<?php

namespace App\Http\Request;

use App\Models\User;

class RegisterRequest
{

    protected $email;
    protected $password;
    protected $fullname;

    protected $errors = [];

    public function validated()
    {
        $request = $_POST;
        return $this->rules($request);
    }

    public function rules($request)
    {
        if ($request['fullname'] == '') {
            $this->errors['r_fullname'] = 'Vui lòng nhập địa chỉ họ và tên';
        }

        if ($request['pw'] == '') {
            $this->errors['r_pw']       = 'Vui lòng nhập mật khẩu';
        }

        if ($request['email'] == '') {
            $this->errors['r_email']    = 'Vui lòng nhập địa chỉ email';
        }

        return $this->errors;
    }
}
