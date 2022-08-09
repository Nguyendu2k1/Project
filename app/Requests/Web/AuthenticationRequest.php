<?php
require_once('app/Requests/BaseRequest.php');

class AuthenticationRequest extends BaseRequest
{
  public function validateRegister($data)
  {
    if (empty($data['email'])) {
      $this->errors['email'] = 'Email không được để trống';
    }
    if (empty($data['name'])) {
      $this->errors['name'] = 'Name không được để trống';
    }
    if (empty($data['password'])) {
      $this->errors['password'] = 'Pasword không được để trống';
    } else {
      if ($data['password'] !== $data['password_confirmation']) {
        $this->errors['password_confirmation'] = 'Không trùng khớp';
      }
    }

    return $this->errors;
  }
  public function validateLogin($data)
  {
    if (empty($data['email'])) {
      $this->errors['email'] = 'Email không được để trống';
    }
    if (empty($data['password'])) {
      $this->errors['password'] = 'Pasword không được để trống';
    }


    return $this->errors;
  }
}
