<?php


//Auth::routes();
Route::get('/user', 'HomeController@index');
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/user/edit', 'HomeController@edit');

// admin route
Route::get('/password/reset', 'Auth\AuthController@email')->name('getReset');

Route::get('admin/logout', 'Admin\AuthController@logout');

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'PagesController@index')->name('index');
// cart
    Route::get('cart', 'PagesController@getCart')->name('getCart');
    Route::get('cart/add/{id}', 'PagesController@addCart')->name('addCart');
    Route::get('cart/update/{id}/{qty}-{dk}', 'PagesController@getUpdateCart')->name('getUpdateCart');
    Route::get('cart/delete/{id}', 'PagesController@getDeleteCart')->name('getDeleteCart');
    Route::get('cart/empty', 'PagesController@empty')->name('getEmpty');

// tien hanh dat hang
    Route::get('order', 'PagesController@getOrder')->name('getOrder');
    Route::post('order/complete', 'PagesController@postOrder')->name('orderComplete');
// category
    Route::get('/{cat}', 'PagesController@getCategories')->name('getCategories');
    Route::get('/{cat}/{id}-{slug}', 'PagesController@detail')->name('getDetail');
});

Route::resource('payment', 'PayMentController');

// --------------------------------cac cong viec trong admin (back-end)---------------------------------------
Route::group(['prefix' => 'admin'], function () {

    Route::get('/home', function () {
        return view('back-end.home');
    });
    // -------------------- quan ly danh muc----------------------
    Route::group(['prefix' => 'danhmuc'], function () {
        Route::get('add', ['as' => 'getaddcat', 'uses' => 'CategoryController@getadd']);
        Route::post('add', ['as' => 'postaddcat', 'uses' => 'CategoryController@postadd']);

        Route::get('/', ['as' => 'getcat', 'uses' => 'CategoryController@getlist']);
        Route::get('del/{id}', ['as' => 'getdellcat', 'uses' => 'CategoryController@getdel'])->where('id', '[0-9]+');

        Route::get('edit/{id}', ['as' => 'geteditcat', 'uses' => 'CategoryController@getedit'])->where('id', '[0-9]+');
        Route::post('edit/{id}', ['as' => 'posteditcat', 'uses' => 'CategoryController@postedit'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly danh muc--------------------
    Route::group(['prefix' => '/sanpham'], function () {
        Route::get('/{loai}/add', ['as' => 'getaddpro', 'uses' => 'ProductsController@getadd']);
        Route::post('/{loai}/add', ['as' => 'postaddpro', 'uses' => 'ProductsController@postadd']);

        Route::get('/{loai}', ['as' => 'getpro', 'uses' => 'ProductsController@getlist']);
        Route::get('/del/{id}', ['as' => 'getdellpro', 'uses' => 'ProductsController@getdel'])->where('id', '[0-9]+');

        Route::get('/{loai}/edit/{id}', ['as' => 'geteditpro', 'uses' => 'ProductsController@getedit'])->where('id', '[0-9]+');
        Route::post('/{loai}/edit/{id}', ['as' => 'posteditpro', 'uses' => 'ProductsController@postedit'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly danh muc-----------------------------
    Route::group(['prefix' => '/news'], function () {
        Route::get('/add', ['as' => 'getaddnews', 'uses' => 'NewsController@getadd']);
        Route::post('/add', ['as' => 'postaddnews', 'uses' => 'NewsController@postadd']);

        Route::get('/', ['as' => 'getnews', 'uses' => 'NewsController@getlist']);
        Route::get('/del/{id}', ['as' => 'getdellnews', 'uses' => 'NewsController@getdel'])->where('id', '[0-9]+');

        Route::get('/edit/{id}', ['as' => 'geteditnews', 'uses' => 'NewsController@getedit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'posteditnews', 'uses' => 'NewsController@postedit'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly đơn đặt hàng--------------------
    Route::group(['prefix' => '/donhang'], function () {
        ;

        Route::get('', ['as' => 'getpro', 'uses' => 'OdersController@getlist']);
        Route::get('/del/{id}', ['as' => 'getdeloder', 'uses' => 'OdersController@getdel'])->where('id', '[0-9]+');

        Route::get('/detail/{id}', ['as' => 'getdetail', 'uses' => 'OdersController@getdetail'])->where('id', '[0-9]+');
        Route::post('/detail/{id}', ['as' => 'postdetail', 'uses' => 'OdersController@postdetail'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly thong tin khach hang--------------------
    Route::group(['prefix' => '/khachhang'], function () {
        ;

        Route::get('', ['as' => 'getmem', 'uses' => 'UsersController@getlist']);
        Route::get('/del/{id}', ['as' => 'getdelmem', 'uses' => 'UsersController@getdel'])->where('id', '[0-9]+');

        Route::get('/edit/{id}', ['as' => 'geteditmem', 'uses' => 'UsersController@getedit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'posteditmem', 'uses' => 'UsersController@postedit'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly thong nhan vien--------------------
    Route::group(['prefix' => '/nhanvien'], function () {
        ;

        Route::get('', ['as' => 'getnv', 'uses' => 'Admin_usersController@getlist']);
        Route::get('/del/{id}', ['as' => 'getdelnv', 'uses' => 'Admin_usersController@getdel'])->where('id', '[0-9]+');

        Route::get('/edit/{id}', ['as' => 'geteditnv', 'uses' => 'Admin_usersController@getedit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'posteditnv', 'uses' => 'Admin_usersController@postedit'])->where('id', '[0-9]+');
    });
    // ---------------van de khac ----------------------
});
