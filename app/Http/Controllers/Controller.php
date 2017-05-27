<?php

namespace App\Http\Controllers;

use Auth;
use Canvas\Models\Tag;
use Canvas\Models\Post;
use Canvas\Models\User;
use Canvas\Models\Settings;
use Illuminate\Http\Request;
use Canvas\Jobs\BlogIndexData;
use Canvas\Http\Controllers\Controller;


use Canvas\Http\Controllers\Controller as CanvasController;

abstract class Controller extends CanvasController
{
    /**
     * Display the blog index page.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tag = $request->get('tag');
        $data = $this->dispatch(new BlogIndexData($tag));
        $layout = $tag ? Tag::layout($tag)->first() : config('blog.tag_layout');
        $socialHeaderIconsUser = User::where('id', Settings::socialHeaderIconsUserId())->first();
        $css = Settings::customCSS();
        $js = Settings::customJS();

        return view($layout, $data, compact('css', 'js', 'socialHeaderIconsUser'));
    }
}
