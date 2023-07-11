<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\CategoriaController;

Route::get('/', [ElementoController::class, 'showHomeWithElements']);
//Login Rutas

Route::group(['prefix' => 'Users','controller' => UserController::class], function () {
    Route::get('/', 'showAllUsers')->name('users');
    Route::get('/CreateUser', 'showCreateUser')->name('user.create');
    Route::post('/CreateUser', 'createUser')->name('user.create.post');
    Route::get('/EditUser/{user}', 'showEditUser')->name('user.edit');
    Route::put('/EditUser/{user}', 'updateUser')->name('user.edit.put');
    Route::delete('/DeleteUser/{user}', 'deleteUser')->name('user.delete');
});
Route::group(['prefix' => 'Categories','controller' => CategoriaController::class], function () {
    Route::get('/', 'showAllCategories')->name('categories');
    Route::get('/CreateCategory', 'showCreateCategory')->name('category.create');
    Route::post('/CreateCategory', 'createCategory')->name('category.create.post');
    Route::get('/EditCategory/{categoria}', 'showEditCategory')->name('category.edit');
    Route::put('/EditCategory/{categoria}', 'updateCategory')->name('category.edit.put');
    Route::delete('/DeleteCategory/{categoria}', 'deleteCategory')->name('category.delete');
});
Route::group(['prefix' => 'Elements','controller' => ElementoController::class], function () {
    Route::get('/', 'showAllElements')->name('elements');
    Route::get('/CreateElement', 'showCreateElement')->name('element.create');
    Route::post('/CreateElement', 'createElement')->name('element.create.post');
    Route::get('/EditElement/{elemento}', 'showEditElement')->name('element.edit');
    Route::put('/EditElement/{elemento}', 'updateElement')->name('element.edit.put');
    Route::delete('/DeleteElement/{elemento}', 'deleteElement')->name('element.delete');
});

Route::group(['controller' => LoginController::class], function () {
    Route::get('login', 'showLoginForm')->name('login');
    Route::post('login', 'login');
    // Ruta del logout
    Route::post('logout', 'logout')->name('logout');
});

Route::group(['controller' => RegisterController::class], function () {
    // Ruta de registro
    Route::get('register', 'showRegistrationForm')->name('register');
    Route::post('register', 'register');
});

Route::group(['controller' => ForgotPasswordController::class], function () {
    // Ruta de reset de password
    Route::get('password/reset', 'showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'showResetForm')->name('password.reset');
    Route::post('password/reset', 'reset');
});
Route::group(['controller' => ConfirmPasswordController::class], function () {
    // Password Confirmation Routes...
    Route::get('password/confirm', 'showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'confirm');
});
Route::group(['controller' => VerificationController::class], function () {
    // Email Verification Routes...
    Route::get('email/verify', 'show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('email/resend', 'resend')->name('verification.resend');
});


