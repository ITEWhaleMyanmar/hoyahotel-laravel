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

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('posts')->name('posts/')->group(static function() {
            Route::get('/',                                             'PostsController@index')->name('index');
            Route::get('/create',                                       'PostsController@create')->name('create');
            Route::post('/',                                            'PostsController@store')->name('store');
            Route::get('/{post}/edit',                                  'PostsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'PostsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{post}',                                      'PostsController@update')->name('update');
            Route::delete('/{post}',                                    'PostsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('things-to-dos')->name('things-to-dos/')->group(static function() {
            Route::get('/',                                             'ThingsToDoController@index')->name('index');
            Route::get('/create',                                       'ThingsToDoController@create')->name('create');
            Route::post('/',                                            'ThingsToDoController@store')->name('store');
            Route::get('/{thingsToDo}/edit',                            'ThingsToDoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ThingsToDoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{thingsToDo}',                                'ThingsToDoController@update')->name('update');
            Route::delete('/{thingsToDo}',                              'ThingsToDoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('specials')->name('specials/')->group(static function() {
            Route::get('/',                                             'SpecialsController@index')->name('index');
            Route::get('/create',                                       'SpecialsController@create')->name('create');
            Route::post('/',                                            'SpecialsController@store')->name('store');
            Route::get('/{special}/edit',                               'SpecialsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SpecialsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{special}',                                   'SpecialsController@update')->name('update');
            Route::delete('/{special}',                                 'SpecialsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('dinings')->name('dinings/')->group(static function() {
            Route::get('/',                                             'DiningController@index')->name('index');
            Route::get('/create',                                       'DiningController@create')->name('create');
            Route::post('/',                                            'DiningController@store')->name('store');
            Route::get('/{dining}/edit',                                'DiningController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'DiningController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{dining}',                                    'DiningController@update')->name('update');
            Route::delete('/{dining}',                                  'DiningController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('facilities')->name('facilities/')->group(static function() {
            Route::get('/',                                             'FacilitiesController@index')->name('index');
            Route::get('/create',                                       'FacilitiesController@create')->name('create');
            Route::post('/',                                            'FacilitiesController@store')->name('store');
            Route::get('/{facility}/edit',                              'FacilitiesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'FacilitiesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{facility}',                                  'FacilitiesController@update')->name('update');
            Route::delete('/{facility}',                                'FacilitiesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('rooms')->name('rooms/')->group(static function() {
            Route::get('/',                                             'RoomsController@index')->name('index');
            Route::get('/create',                                       'RoomsController@create')->name('create');
            Route::post('/',                                            'RoomsController@store')->name('store');
            Route::get('/{room}/edit',                                  'RoomsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RoomsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{room}',                                      'RoomsController@update')->name('update');
            Route::delete('/{room}',                                    'RoomsController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('current-special-offers')->name('current-special-offers/')->group(static function() {
            Route::get('/',                                             'CurrentSpecialOfferController@index')->name('index');
            Route::get('/create',                                       'CurrentSpecialOfferController@create')->name('create');
            Route::post('/',                                            'CurrentSpecialOfferController@store')->name('store');
            Route::get('/{currentSpecialOffer}/edit',                   'CurrentSpecialOfferController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CurrentSpecialOfferController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{currentSpecialOffer}',                       'CurrentSpecialOfferController@update')->name('update');
            Route::delete('/{currentSpecialOffer}',                     'CurrentSpecialOfferController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('current-special-offers')->name('current-special-offers/')->group(static function() {
            Route::get('/',                                             'CurrentSpecialOffersController@index')->name('index');
            Route::get('/create',                                       'CurrentSpecialOffersController@create')->name('create');
            Route::post('/',                                            'CurrentSpecialOffersController@store')->name('store');
            Route::get('/{currentSpecialOffer}/edit',                   'CurrentSpecialOffersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'CurrentSpecialOffersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{currentSpecialOffer}',                       'CurrentSpecialOffersController@update')->name('update');
            Route::delete('/{currentSpecialOffer}',                     'CurrentSpecialOffersController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('Admin')->name('admin/')->group(static function() {
        Route::prefix('contact-us')->name('contact-us/')->group(static function() {
            Route::get('/',                                             'ContactUsController@index')->name('index');
            Route::get('/create',                                       'ContactUsController@create')->name('create');
            Route::post('/',                                            'ContactUsController@store')->name('store');
            Route::get('/{contactU}/edit',                              'ContactUsController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ContactUsController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{contactU}',                                  'ContactUsController@update')->name('update');
            Route::delete('/{contactU}',                                'ContactUsController@destroy')->name('destroy');
        });
    });
});