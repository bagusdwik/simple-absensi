<?php

namespace Bagus\SimpleAbsensi\controller;

use Bagus\SimpleAbsensi\routes\Views;

class LoginController
{
  public function index()
  {
    Views::render('login', [
      "title" => "Login"
    ]);
  }
}
