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


Route::get('/', 'WelcomeController@index')->name('nta.welcome');

    //return view('welcome', compact('baseUrl')); 

Route::get('/etsyLogin', 'WelcomeController@etsyLogin')->name('nta.etsy.login');



Route::group(['prefix' => 'api'], function (){
    Route::get('store', 'EtsyController@store')->name('nta.etsy.store');
    Route::get('listings', 'EtsyController@listings')->name('nta.etsy.listings');
    Route::get('images/{listingId}', ['uses' => 'EtsyController@images'] )->name('nta.etsy.images');
});

Route::get('store', function () {
        return view('pages.store');
    })->name('nta.store');
Route::get('services', function () {
        return view('pages.services');
    })->name('nta.services');
Route::get('details', function () {
        return view('pages.details');
    })->name('nta.details');
Route::get('fun', function () {
        return view('pages.fun');
    })->name('nta.fun');

Route::group(['prefix' => 'services'], function () {
    Route::get('costumery', function () {
        return view('pages.costume.costumery');
    })->name('nta.costumery');
    Route::get('puppetry', function () {
        return view('pages.costume.puppetry');
    })->name('nta.puppetry');
    Route::get('for-hire', function () {
        return view('pages.performance.for-hire');
    })->name('nta.for-hire');;
    Route::get('prototyping', function () {
        return view('pages.technology.prototype');
    })->name('nta.prototyping');
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