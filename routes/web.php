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

        Route::get('/', 'OrdersController@getList')->name('getProduct');
        Route::get('/delete/{id}', 'OrdersController@getDelete')->name('getDelOrder')->where('id', '[0-9]+');

        Route::get('/detail/{id}', 'OrdersController@getDetail')->name('getDetail')->where('id', '[0-9]+');
        Route::post('/detail/{id}', 'OrdersController@postDetail')->name('postDetail')->where('id', '[0-9]+');
    });
    // -------------------- quan ly thong tin khach hang--------------------
    Route::group(['prefix' => '/user'], function () {
        ;

        Route::get('', 'UsersController@getList')->name('getUser');
        Route::get('/delete/{id}', 'UsersController@getDelete')->name('getDelUser')->where('id', '[0-9]+');

        Route::get('/details/{id}', 'UsersController@getEdit')->name('getEditUser')->where('id', '[0-9]+');
        Route::post('/edit/{id}', 'UsersController@postEdit')->name('postEditUser')->where('id', '[0-9]+');
    });
    // -------------------- quan ly thong nhan vien--------------------
    Route::group(['prefix' => '/member', 'middleware' => 'admin'], function () {
        ;

        Route::get('', 'Admin_usersController@getList')->name('getMember');
        Route::get('/delete/{id}', 'Admin_usersController@getDelete')->name('getDelMember')->where('id', '[0-9]+');
        Route::get('/edit/{id}', 'Admin_usersController@getEdit')->name('getEditMember')->where('id', '[0-9]+');
        Route::post('/edit/{id}', 'Admin_usersController@postEdit')->name('postEditMember')->where('id', '[0-9]+');
    });
    // ---------------van de khac ----------------------
});
