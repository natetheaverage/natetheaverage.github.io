<?php

namespace App\Http\Controllers;

use Auth;
use Canvas\Models\Tag;
use Canvas\Models\Post;
use Canvas\Models\User;
use Canvas\Models\Settings;
use Illuminate\Http\Request;
use Canvas\Jobs\BlogIndexData;
use App\AuthenticateUser;

class WelcomeController extends Controller
{
    /**
     * Display the Site index page.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
        $layout = $tag ? Tag::layout($tag)->first() : config('blog.tag_layout');
        $socialHeaderIconsUser = User::where('id', Settings::socialHeaderIconsUserId())->first();
        $css = Settings::customCSS();
        $js = Settings::customJS();

        return view('welcome', $data, compact('css', 'js', 'socialHeaderIconsUser', 'user'));
    }

    /**
     * Display the site login page.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function etsyLogin(AuthenticateUser $aUser, Request $request)
    {
      $url = "https://openapi.etsy.com/v2/shops/6577223/listings/active.js?callback=getData&api_key=ljv61i2bg4wa3s9ho3egqgz7";
      
      $jdata = 'something';

      
      return $aUser->execute($request->has('code'));
      // if()
      // {

      // }
      // return \Socialite::with('etsy')->redirect();
    }
} 
