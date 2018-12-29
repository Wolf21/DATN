<?php


//Auth::routes();
Route::get('/user', 'UsersController@getUserInfo');
//Route::get('/user/edit', 'HomeController@getEdit');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('registerForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::get('/logout', 'Auth\LoginController@logout');

// admin route
Route::get('/password/reset', 'Auth\AuthController@email')->name('getReset');

Route::get('admin/logout', 'Admin\AuthController@logout');

Route::group(['prefix' => '/', 'middleware' => 'not_admin'], function () {
    Route::get('/', 'PagesController@index')->name('index');
    Route::get('/search', 'PagesController@search')->name('search');
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
Route::group(['prefix' => 'admin', 'middleware' => ['admin_and_su', 'auth']], function () {

    Route::get('/home', function () {
        return view('back-end.home');
    });
    // -------------------- quan ly danh muc----------------------
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', 'CategoryController@getList')->name('getCat');
        Route::get('add', 'CategoryController@getAdd')->name('getAddCat');
        Route::post('add', 'CategoryController@postAdd')->name('postAddCat');

        Route::get('delete/{id}', 'CategoryController@getDelete')->name('getDelCat')->where('id', '[0-9]+');

        Route::get('edit/{id}', 'CategoryController@getEdit')->name('getEditCat')->where('id', '[0-9]+');
        Route::post('edit/{id}', 'CategoryController@postEdit')->name('postEditCat')->where('id', '[0-9]+');
    });
    // -------------------- quan ly danh muc--------------------
    Route::group(['prefix' => '/product'], function () {
        Route::get('/{loai}/add', 'ProductsController@getAdd')->name('getAddProduct');
        Route::post('/{loai}/add', 'ProductsController@postAdd')->name('postAddProduct');

        Route::get('/{loai}', 'ProductsController@getList')->name('getProduct');
        Route::get('/delete/{id}', 'ProductsController@getDelete')->name('getDelProduct')->where('id', '[0-9]+');

        Route::get('/edit/{id}', 'ProductsController@getEdit')->name('getEditProduct')->where('id', '[0-9]+');
        Route::post('/edit/{id}', 'ProductsController@postEdit')->name('postEditProduct')->where('id', '[0-9]+');
    });
    // -------------------- quan ly danh muc-----------------------------
    Route::group(['prefix' => '/news'], function () {
        Route::get('/add', 'NewsController@getAdd')->name('getAddNews');
        Route::post('/add', 'NewsController@postAdd')->name('postAddNews');

        Route::get('/', 'NewsController@getList')->name('getNews');
        Route::get('/delete/{id}', 'NewsController@getDelete')->name('getDelNews')->where('id', '[0-9]+');

        Route::get('/edit/{id}', 'NewsController@getEdit')->name('getEditNews')->where('id', '[0-9]+');
        Route::post('/edit/{id}', 'NewsController@postEdit')->name('postEditNews')->where('id', '[0-9]+');
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
    Route::group(['prefix' => '/member', 'middleware' => 'admin'], function () {
        ;

        Route::get('', ['as' => 'getMember', 'uses' => 'Admin_usersController@getList']);
        Route::get('/delete/{id}', ['as' => 'getDelMember', 'uses' => 'Admin_usersController@getDelete'])->where('id', '[0-9]+');
        Route::get('/edit/{id}', ['as' => 'getEditMember', 'uses' => 'Admin_usersController@getEdit'])->where('id', '[0-9]+');
        Route::post('/edit/{id}', ['as' => 'postEditMember', 'uses' => 'Admin_usersController@postEdit'])->where('id', '[0-9]+');
    });
    // ---------------van de khac ----------------------
});
