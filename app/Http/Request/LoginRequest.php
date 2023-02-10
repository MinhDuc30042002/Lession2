<?php

namespace App\Http\Request;

use App\Models\User;

class LoginRequest
{

    protected $email;
    protected $password;
    protected $errors = [];

    public function validated()
    {
        $request = $_POST;
        return $this->rules($request);
    }

    public function rules($request)
    {
        if ($request['email'] == '') {
            $this->errors['r_email'] = 'Vui lòng nhập địa chỉ email';
        }

        if ($request['pw'] == '') {
            $this->errors['r_pw']    = 'Vui lòng nhập mật khẩu';
        }

        if ($request['email'] != '' && $request['pw'] != '') {
            $user = User::login($request['email'], md5($request['pw']));

            if ($user == null) {
                $this->errors['r_match'] = 'Thông tin không chính xác';
            }
        }

        return $this->errors;
    }

    protected function messages()
    {
        return [
            $this->errors['email'] => 'Vui lòng nhập địa chỉ email',
            $this->errors['pw']    => 'Vui lòng nhập mật khẩu'
        ];
    }

    protected function attributes()
    {
        return [
            'email' => 'Địa chỉ email',
            'pw'    => 'Mật khẩu'
        ];
    }
}
