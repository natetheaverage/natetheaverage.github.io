<?php namespace App;

use Laravel\Socialite\Contracts\Factory as Socialite;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Repositories\UserRepository;

class AuthenticateUser
{

    private $users;

    private $socialite;

    private $auth;

    private function _construct(Authenticatable $auth, UserRepository $users, Socialite $socialite)
    {
        $this->auth = $auth;
        $this->socialite = $socialite;
        $this->users = $users;
    }

    public function execute($hasCode)
    {
        if( ! $hasCode ) return $this->getAuthorizationFirst();

        // $user = $this->socialite->driver('etsy')->user();

        dd($user);

    }

    public function getAuthorizationFirst()
    {
        //dd($this->socialite);
        // return $this->socialite->with('etsy')->redirect();
    }


}