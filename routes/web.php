<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'WelcomeController@index')->name('home');
    //return view('welcome', compact('baseUrl'));

Route::get('/kinect', function () {
    return view('kinect');
});

Route::group(['prefix' => 'costume'], function () {
    Route::get('production', function () {
        return view('pages.costume.production');
    });
    Route::get('contract', function () {
        return view('pages.costume.contract');
    });
    Route::get('alacart', function () {
        return view('pages.costume.alacart');
    });
});

Route::group(['prefix' => 'clothing'], function () {
    Route::get('design', function () {
        return view('pages.clothing.design');
    });
    Route::get('print', function () {
        return view('pages.clothing.print');
    });
    Route::get('handmade', function () {
        return view('pages.clothing.handmade');
    });
});

Route::group(['prefix' => 'performance'], function () {
    Route::get('for-hire', function () {
        return view('pages.performance.for-hire');
    });
    Route::get('wardrobe', function () {
        return view('pages.performance.wardrobe');
    });
    Route::get('makeup', function () {
        return view('pages.performance.makeup');
    });
    Route::get('talent', function () {
        return view('pages.performance.talent');
    });
    Route::get('direction', function () {
        return view('pages.performance.direction');
    });
    Route::get('workshops', function () {
        return view('pages.performance.workshops');
    });
    Route::get('dance', function () {
        return view('pages.performance.dance');
    });
});

Route::group(['prefix' => 'technology'], function () {
    Route::get('app-development', function () {
        return view('pages.technology.app-development');
    });
    Route::get('machine', function () {
        return view('pages.technology.machine');
    });
    Route::get('prototype', function () {
        return view('pages.technology.prototype');
    });
    Route::get('quadrocopters', function () {
        return view('pages.technology.quadrocopters');
    });
    Route::get('fuckery', function () {
        return view('pages.technology.fuckery');
    });
});

Route::group(['prefix' => 'large'], function () {
    Route::get('installation', function () {
        return view('pages.large.installation');
    });
    Route::get('treehouse', function () {
        return view('pages.large.treehouse');
    });
    Route::get('pop-ups', function () {
        return view('pages.large.pop-ups');
    });
    Route::get('art-cars', function () {
        return view('pages.large.art-cars');
    });
    Route::get('set-design', function () {
        return view('pages.large.set-design');
    });
});

Route::group(['prefix' => 'fuckshitstack'], function () {
    Route::get('shirt-cocking', function () {
        return view('pages.fuckshitstack.shirt-cocking');
    });
    Route::get('naked-not-the-drink-more-like-no-cloths', function () {
        return view('pages.fuckshitstack.naked-not-the-drink-more-like-no-cloths');
    });
    Route::get('no-touching-policy', function () {
        return view('pages.fuckshitstack.no-touching-policy');
    });
    Route::get('learn-stuff-from-a-naked-guy', function () {
        return view('pages.fuckshitstack.learn-stuff-from-a-naked-guy');
    });
});