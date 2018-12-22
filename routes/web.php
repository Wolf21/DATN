<?php


//Auth::routes();
Route::get('/user', 'HomeController@index');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('loginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('registerForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/user/edit', 'HomeController@edit');

// admin route
Route::get('/password/reset', 'Auth\AuthController@email')->name('getReset');

Route::get('admin/logout', 'Admin\AuthController@logout');

Route::group(['prefix' => '/', 'middleware' => 'not_admin'], function () {
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
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::get('/home', function () {
        return view('back-end.home');
    });
    // -------------------- quan ly danh muc----------------------
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@getList')->name('getCat');
        Route::get('add', 'CategoryController@getAdd')->name('getAddCat');
        Route::post('add', 'CategoryController@postAdd')->name('postAddCat');

        Route::get('delete/{id}', ['as' => 'getDelCat', 'uses' => 'CategoryController@getDelete'])->where('id', '[0-9]+');

        Route::get('edit/{id}', ['as' => 'getEditCat', 'uses' => 'CategoryController@getEdit'])->where('id', '[0-9]+');
        Route::post('edit/{id}', ['as' => 'postEditCat', 'uses' => 'CategoryController@postEdit'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly danh muc--------------------
    Route::group(['prefix' => '/product'], function () {
        Route::get('/{loai}/add', ['as' => 'getAddProduct', 'uses' => 'ProductsController@getAdd']);
        Route::post('/{loai}/add', ['as' => 'postAddProduct', 'uses' => 'ProductsController@postAdd']);

        Route::get('/{loai}', ['as' => 'getProduct', 'uses' => 'ProductsController@getList']);
        Route::get('/delete/{id}', ['as' => 'getDelProduct', 'uses' => 'ProductsController@getDelete'])->where('id', '[0-9]+');

        Route::get('/edit/{id}', ['as' => 'getEditProduct', 'uses' => 'ProductsController@getEdit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'postEditProduct', 'uses' => 'ProductsController@postEdit'])->where('id', '[0-9]+');
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
    Route::group(['prefix' => '/order'], function () {
        ;

        Route::get('/', ['as' => 'getProduct', 'uses' => 'OrdersController@getList']);
        Route::get('/delete/{id}', ['as' => 'getDelOrder', 'uses' => 'OrdersController@getDelete'])->where('id', '[0-9]+');

        Route::get('/detail/{id}', ['as' => 'getDetail', 'uses' => 'OrdersController@getDetail'])->where('id', '[0-9]+');
        Route::post('/detail/{id}', ['as' => 'postDetail', 'uses' => 'OrdersController@postDetail'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly thong tin khach hang--------------------
    Route::group(['prefix' => '/user'], function () {
        ;

        Route::get('', ['as' => 'getUser', 'uses' => 'UsersController@getList']);
        Route::get('/delete/{id}', ['as' => 'getDelUser', 'uses' => 'UsersController@getDelete'])->where('id', '[0-9]+');

        Route::get('/edit/{id}', ['as' => 'getEditUser', 'uses' => 'UsersController@getEdit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'postEditUser', 'uses' => 'UsersController@postEdit'])->where('id', '[0-9]+');
    });
    // -------------------- quan ly thong nhan vien--------------------
    Route::group(['prefix' => '/member'], function () {
        ;

        Route::get('', ['as' => 'getMember', 'uses' => 'Admin_usersController@getList']);
        Route::get('/delete/{id}', ['as' => 'getDelMember', 'uses' => 'Admin_usersController@getDelete'])->where('id', '[0-9]+');

        Route::get('/edit/{id}', ['as' => 'getEditMember', 'uses' => 'Admin_usersController@getEdit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'postEditMember', 'uses' => 'Admin_usersController@postEdit'])->where('id', '[0-9]+');
    });
    // ---------------van de khac ----------------------
});
