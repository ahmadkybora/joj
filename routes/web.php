<?php

use Illuminate\Support\Facades\Route;


Auth::routes();
//------------------------------Auth------------------------------
Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->name('login');
    Route::post('/login', 'LoginController@login');
    Route::post('/logout', 'LoginController@logout')->name('logout');
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'RegisterController@register');

});
//-------------------------middleware isAdmin---------------------
//Route::group(['middleware' => 'isAdmin'], function () {
//-------------------------Panel----------------------------------
Route::group(['namespace' => 'Panel'], function () {
    Route::group(['prefix' => 'panel'], function () {
        //----------------------Dashboard-------------------------
        Route::group(['namespace' => 'Dashboard'], function () {
            Route::group(['prefix' => 'dashboard'], function () {
                Route::get('/', 'DashboardController@index')->name('dashboard');
                Route::get('/insert', 'DashboardController@insert')->name('dashboard.insert');
                Route::post('/store', 'DashboardController@store')->name('dashboard.store');
            });
        });
        //-------------------------User----------------------------
        Route::group(['namespace' => 'User'], function () {
            //-------------------------users----------------------------
            Route::group(['prefix' => 'users'], function () {
                Route::get('/', 'UserController@index')->name('users.index');
                Route::get('/insert', 'UserController@insert')->name('users.insert');
                Route::post('/store', 'UserController@store')->name('users.store');
                Route::get('/show/{id}', 'UserController@show')->name('users.show');
                Route::get('/edit/{id}', 'UserController@edit')->name('users.edit');
                Route::post('/update/{id}', 'UserController@update')->name('users.update');
                Route::post('/delete/{id}', 'UserController@delete')->name('users.delete');
                Route::post('/archive/{id}', 'UserController@archive')->name('users.archive');
                Route::get('/access/{id}', 'UserController@access')->name('users.access');
                Route::post('/access/{id}', 'UserController@doAccess')->name('users.doAccess');
            });
            //-------------------------user-logs----------------------------
            Route::group(['prefix' => 'users-logs'], function () {
                Route::get('/', 'UserLogController@index')->name('users-logs.index');
                Route::get('/show/{id}', 'UserLogController@show')->name('users-logs.show');
                Route::post('/delete/{id}', 'UserLogController@delete')->name('users-logs.delete');
                Route::post('/archive/{id}', 'UserLogController@archive')->name('users-logs.archive');
            });
        });
        //-------------------------comments----------------------------
        Route::group(['namespace' => 'Comment'], function () {
            Route::group(['prefix' => 'comments'], function () {
                Route::get('/', 'CommentController@index')->name('comments.index');
                Route::get('/show/{id}', 'CommentController@show')->name('comments.show');
                Route::post('/delete/{id}', 'CommentController@delete')->name('comments.delete');
                Route::post('/archive/{id}', 'CommentController@archive')->name('comments.archive');
            });
        });
        //-------------------------Acl---------------------------------
        Route::group(['namespace' => 'Acl'], function () {
            //-------------------------roles----------------------------
            Route::group(['prefix' => 'roles'], function () {
                Route::get('/', 'RoleController@index')->name('roles.index');
                Route::get('/insert', 'RoleController@insert')->name('roles.insert');
                Route::post('/store', 'RoleController@store')->name('roles.store');
                Route::get('/show/{id}', 'RoleController@show')->name('roles.show');
                Route::get('/edit/{id}', 'RoleController@edit')->name('roles.edit');
                Route::post('/update/{id}', 'RoleController@update')->name('roles.update');
                Route::post('/delete/{id}', 'RoleController@delete')->name('roles.delete');
                Route::post('/archive/{id}', 'RoleController@archive')->name('roles.archive');
            });
            //-------------------------permissions----------------------------
            Route::group(['prefix' => 'permissions'], function () {
                Route::get('/', 'PermissionController@index')->name('permissions.index');
                Route::get('/show/{id}', 'PermissionController@show')->name('permissions.show');
                Route::post('/delete/{id}', 'RoleController@delete')->name('permissions.delete');
                Route::post('/archive/{id}', 'PermissionController@archive')->name('permissions.archive');
            });
        });
        //--------------------------Category-----------------------
        Route::group(['namespace' => 'Category'], function () {
            Route::group(['prefix' => 'categories'], function () {
                Route::get('/', 'CategoryController@index')->name('categories.index');
                Route::get('/insert', 'CategoryController@insert')->name('categories.insert');
                Route::post('/store', 'CategoryController@store')->name('categories.store');
                Route::get('/show/{id}', 'CategoryController@show')->name('categories.show');
                Route::get('/edit/{id}', 'CategoryController@edit')->name('categories.edit');
                Route::post('/update/{id}', 'CategoryController@update')->name('categories.update');
                Route::post('/delete/{id}', 'CategoryController@delete')->name('categories.delete');
                Route::post('/archive/{id}', 'CategoryController@archive')->name('categories.archive');
            });
        });
        //-------------------------Article-------------------------
        Route::group(['namespace' => 'Article'], function () {
            //-------------------------articles-categories-------------------------
            Route::group(['prefix' => 'articles-categories'], function () {
                Route::get('/', 'ArticlesCategoriesController@index')->name('articles-categories.index');
                Route::get('/insert', 'ArticlesCategoriesController@insert')->name('articles-categories.insert');
                Route::post('/store', 'ArticlesCategoriesController@store')->name('articles-categories.store');
                Route::get('/show', 'ArticlesCategoriesController@show')->name('articles-categories.show');
                Route::get('/edit', 'ArticlesCategoriesController@edit')->name('articles-categories.edit');
                Route::post('/update', 'ArticlesCategoriesController@update')->name('articles-categories.update');
                Route::post('/delete', 'ArticlesCategoriesController@delete')->name('articles-categories.delete');
            });
            //-------------------------articles-------------------------
            Route::group(['prefix' => 'articles'], function () {
                Route::get('/', 'ArticleController@index')->name('articles.index');
                Route::get('/insert', 'ArticleController@insert')->name('articles.insert');
                Route::post('/store', 'ArticleController@store')->name('articles.store');
                Route::get('/show', 'ArticleController@show')->name('articles.show');
                Route::get('/edit', 'ArticleController@edit')->name('articles.edit');
                Route::post('/update', 'ArticleController@update')->name('articles.update');
                Route::post('/delete', 'ArticleController@delete')->name('articles.delete');
            });
        });
        //-------------------------Product-------------------------
        Route::group(['namespace' => 'Product'], function () {
            //-------------------------products-categories-------------------------
            Route::group(['prefix' => 'products-categories'], function () {
                Route::get('/', 'ProductsCategoriesController@index')->name('products-categories.index');
                Route::get('/insert', 'ProductsCategoriesController@insert')->name('products-categories.insert');
                Route::post('/store', 'ProductsCategoriesController@store')->name('products-categories.store');
                Route::get('/show/{id}', 'ProductsCategoriesController@show')->name('products-categories.show');
                Route::get('/edit/{id}', 'ProductsCategoriesController@edit')->name('products-categories.edit');
                Route::post('/update/{id}', 'ProductsCategoriesController@update')->name('products-categories.update');
                Route::post('/delete/{id}', 'ProductsCategoriesController@delete')->name('products-categories.delete');
                Route::post('/archive/{id}', 'ProductsCategoriesController@archive')->name('products-categories.archive');
            });
            //-------------------------articles-------------------------
            Route::group(['prefix' => 'products'], function () {
                Route::get('/', 'ProductController@index')->name('products.index');
                Route::get('/insert', 'ProductController@insert')->name('products.insert');
                Route::post('/store', 'ProductController@store')->name('products.store');
                Route::get('/show/{id}', 'ProductController@show')->name('products.show');
                Route::get('/edit/{id}', 'ProductController@edit')->name('products.edit');
                Route::post('/update/{id}', 'ProductController@update')->name('products.update');
                Route::post('/delete/{id}', 'ProductController@delete')->name('products.delete');
                Route::post('/archive/{id}', 'ProductController@archive')->name('products.archive');
            });
        });
        //-------------------------Brand-------------------------
        Route::group(['namespace' => 'Brand'], function () {
            Route::group(['prefix' => 'brands'], function () {
                Route::get('/', 'BrandController@index')->name('brands.index');
                Route::get('/insert', 'BrandController@insert')->name('brands.insert');
                Route::post('/store', 'BrandController@store')->name('brands.store');
                Route::get('/show/{id}', 'BrandController@show')->name('brands.show');
                Route::get('/edit/{id}', 'BrandController@edit')->name('brands.edit');
                Route::post('/update/{id}', 'BrandController@update')->name('brands.update');
                Route::post('/delete/{id}', 'BrandController@delete')->name('brands.delete');
                Route::post('/archive/{id}', 'BrandController@archive')->name('brands.archive');
            });
        });
        //-------------------------Trading_info--------------------------------
        Route::group(['namespace' => 'Trading_info'], function () {
            //----------------------------payments-----------------------------
            Route::group(['prefix' => 'payments'], function () {
                Route::get('/', 'PaymentController@index')->name('payments.index');
                Route::get('/show/{id}', 'PaymentController@show')->name('payments.show');
                Route::post('/delete/{id}', 'PaymentController@delete')->name('payments.delete');
                Route::post('/archive/{id}', 'PaymentController@archive')->name('payments.delete');
            });
            //----------------------------orders-----------------------------
            Route::group(['prefix' => 'orders'], function () {
                Route::get('/', 'OrderController@index')->name('orders.index');
                Route::get('/show/{id}', 'OrderController@show')->name('orders.show');
                Route::post('/delete/{id}', 'OrderController@delete')->name('orders.delete');
                Route::post('/archive/{id}', 'OrderController@archive')->name('orders.delete');
            });
            //--------------------------cards-------------------------------
            Route::group(['prefix' => 'cards'], function () {
                Route::get('/', 'CardController@index')->name('cards.index');
                Route::get('/show/{id}', 'CardController@show')->name('cards.show');
                Route::post('/delete/{id}', 'CardController@delete')->name('cards.delete');
                Route::post('/archive/{id}', 'CardController@archive')->name('cards.delete');
            });
            //--------------------------------------------------
        });
        //--------------------------Message-----------------------
        Route::group(['namespace' => 'Message'], function () {
            Route::group(['prefix' => 'messages'], function () {
                Route::get('/', 'MessageController@index')->name('messages.index');
                Route::get('/insert', 'MessageController@insert')->name('messages.insert');
                Route::post('/store', 'MessageController@store')->name('messages.store');
                Route::get('/show/{id}', 'MessageController@show')->name('messages.show');
                Route::get('/edit/{id}', 'MessageController@edit')->name('messages.edit');
                Route::post('/update/{id}', 'MessageController@update')->name('messages.update');
                Route::post('/delete/{id}', 'MessageController@delete')->name('messages.delete');
                Route::post('/archive/{id}', 'MessageController@archive')->name('messages.delete');
            });
        });
        //------------------------Error----------------------------
        Route::group(['namespace' => 'Error'], function () {
            Route::group(['prefix' => 'errors'], function () {
                Route::get('/401', 'ErrorController@error_401')->name('error.401');
                Route::get('/403', 'ErrorController@error_403')->name('error.403');
                Route::get('/404', 'ErrorController@error_404')->name('error.404');
            });
        });
        //---------------------------------------------------------
    });
});
//});
//------------------------Front-------------------------
Route::group(['prefix' => '/'], function () {
    Route::group(['namespace' => 'Front'], function () {
        //------------------------Home-------------------------
        Route::group(['namespace' => 'Home'], function () {
            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/products/{id}','HomeController@singleProduct')->name('product.single-product');
        });
        //------------------------Blog-------------------------
        Route::group(['namespace' => 'Blog'], function () {
            Route::group(['prefix' => 'blog'], function () {
                //------------------------blog-------------------------
                Route::get('/', 'BlogController@home')->name('blog.home');
            });
        });
        //------------------------Shop-------------------------
        Route::group(['namespace' => 'Shop'], function () {
            //------------------------shop-------------------------
            Route::group(['prefix' => 'shop'], function () {
                Route::get('/', 'ShopController@home')->name('shop.home');
            });
        });
        //------------------------Account-------------------------
        Route::group(['namespace' => 'Account'], function () {
            //-----------------------account----------------------------
            Route::group(['prefix' => 'account'], function () {
                Route::get('/', 'AccountController@profileShow')->name('account.profile-show');
                Route::get('/edit/{id}', 'AccountController@ProfileEdit')->name('account.profile-edit');
                Route::post('/update/{id}', 'AccountController@profileUpdate')->name('account.profile-update');
                Route::get('/cart-show/{id}', 'AccountController@cartShow')->name('account.cart-show');
                Route::get('/cart-edit/{id}', 'AccountController@cartEdit')->name('account.cart-edit');
                Route::post('/cart-update/{id}', 'AccountController@cartUpdate')->name('account.cart-update');
                Route::get('/order-show/{id}', 'AccountController@orderShow')->name('account.order-show');
                Route::get('/delete-order/{id}', 'AccountController@orderDelete')->name('account.order-delete');
                Route::get('/order-history/{id}', 'AccountController@historyOrder')->name('account.order-history');
            });
        });
        //------------------------Cart-----------------------------
        Route::group(['namespace' => 'Cart'], function () {
            //------------------------cart-------------------------
            Route::group(['prefix' => 'cart'], function () {
                Route::get('/add/{id}', 'CartController@add')->name('cart.add');
                Route::get('/show/{id}', 'CartController@show')->name('cart.show');
                Route::get('/edit/{id}', 'CartController@edit')->name('cart.edit');
                Route::post('/update/{id}', 'CartController@update')->name('cart.update');
                Route::post('/delete/{id}', 'CartController@delete')->name('cart.delete');
            });
        });
        //--------------------------------------------------------
    });
});

