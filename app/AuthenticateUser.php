<?php namespace App;

use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Contracts\Auth\Authenticatable;

class AuthenticateUser {

private $users;

private $socialite;

private $auth;

 public function _construct(Authenticator $auth, UserRepository $users, Socialite $socialite)
 {
    $this->auth = $auth;
    $this->socialite = $socialite;
    $this->users = $users;
 }

 public function execute()
 {

 }




}