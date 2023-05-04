<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Frontend\FrontendController@get_index_page')->name('index_page');
// Route::get('/Admin', function () {
//     return view('layouts.master');
// });




//for super admin
require "adminroutes.php";
//for super admin

// adminregister
Route::get('/admin_register_create', 'Admin\AdminRegisterController@create_admin_register')->name('create_admin_register');
Route::get('/admin_register_list', 'Admin\AdminRegisterController@show_list')->name('admin_register_list');
Route::get('/edit_admin_register/{id}', 'Admin\AdminRegisterController@edit_admin_register')->name('edit_admin');
Route::post('/update_admin/{id}', 'Auth\AdminRegisterController@update_admin_list')->name('update_admin');
Route::post('/delete_admin_register', 'Auth\AdminRegisterController@delete_admin_list')->name('delete_admin');
Route::get('/change_password', 'ChangePasswordController@index')->name('change_password');
Route::post('/change_pass_store', 'ChangePasswordController@store')->name('change_password_store');
Route::get('/update_pass', 'UpdatePasswordController@index')->name('update_password');
Route::post('/update_pass_store', 'UpdatePasswordController@store')->name('update_password_store');

// cuztomize
Route::get('/cus2_option', 'Frontend\FrontendController@get_cus2_option')->name('get_cus2_option');

// style
Route::get('/ajex_get_style_jackets', 'Frontend\FrontendController@ajex_get_style_jacktes')->name('ajex_get_style_jackets');
Route::get('/ajex_get_style_vests', 'Frontend\FrontendController@ajex_get_style_vests')->name('ajex_get_style_vests');
Route::get('/ajex_get_style_pants', 'Frontend\FrontendController@ajex_get_style_pants')->name('ajex_get_style_pants');
Route::get('/ajex_get_style', 'Frontend\FrontendController@ajex_get_style')->name('ajex_get_style');
Route::get('/get_style_pop_up','Frontend\FrontendController@get_style_pop_up')->name('get_style_pop_up');
Route::get('/get_filter_recomment_style', 'Frontend\FrontendController@get_filter_recomment_style')->name('get_filter_recomment_style');
Route::post('/get_swiper_photo_ready', 'Admin\ReadyController@get_swiper_photo_ready_data')->name('get_swiper_photo_ready');
Route::post('/get_swiper_style_ajax', 'Admin\StyleController@get_swiper_style_ajax_data')->name('get_swiper_style_ajax');

// texture
Route::post('/get_pattern_sub', 'Admin\TextureController@get_pattern_sub_data')->name('get_pattern_sub');
Route::get('/get_pattern_all', 'Admin\TextureController@get_pattern_all_data')->name('get_pattern_all');
Route::get('/get_package', 'Admin\TextureController@get_package_data')->name('get_package');
Route::post('/get_swiper_photo_texture', 'Admin\TextureController@get_swiper_photo_texture_data')->name('get_swiper_photo_texture');

// userchangepassword
Route::get('/user_change_password', 'UserChangePasswordController@index')->name('user_change_password');
Route::post('/user_change_pass_store', 'UserChangePasswordController@store')->name('user_change_password_store');
Route::get('/user_update_pass', 'UserUpdatePasswordController@index')->name('user_update_password');
Route::post('/user_update_pass_store', 'UserUpdatePasswordController@store')->name('user_update_password_store');

// grand additional
Route::post('/increase_count_additional', 'Admin\AdditionalController@increase_count_additional_data')->name('increase_count_additional');
Route::get('/get_main_additional_sub_all', 'Admin\AdditionalController@get_main_additional_sub_all_data')->name('get_main_additional_sub_all');

Auth::routes();

Route::group(['prefix' => '/', 'as' => '.'], function () {
    //auth
    Route::get('register', ['as' => 'register', 'uses' => 'Auth\UserRegisterController@create']);
    Route::post('register', ['as' => 'registered', 'uses' => 'Auth\UserRegisterController@store']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\UserLoginController@logout']);
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\UserLoginController@loginform']);
    Route::post('login', ['as' => 'logined', 'uses' => 'Auth\UserLoginController@login']);

});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('forget-password', function () {
    return view('frontend.forgetPassword');
})->name('forget-password');

Route::get('new-password', function () {
    return view('frontend.newPassword');
});


//payment
Route::get('payment_list','Admin\PaymentController@index')->name('payment_list');



// Kz Fabric
Route::get('/fabrics','Frontend\FrontendController@show_fabrics')->name('fabrics');

Route::get('/additional','Frontend\FrontendController@show_additional')->name('additional');

Route::post('/store_measure_ajax', 'Frontend\FrontendController@store_measure_data')->name('store_measure_ajax');

Route::post('/store_measure_from_profile_ajax', 'Frontend\FrontendController@store_measure_profile_data')->name('store_measure_from_profile_ajax');

Route::post('/store_user_info_measure_ajax', 'Frontend\FrontendController@store_user_info_measure_ajax_data')->name('store_user_info_measure_ajax');

// paypal
Route::get('/paypal','Frontend\FrontendController@show_paypal')->name('paypal');
Route::post('/paypal/create','Admin\PaypalController@create')->name('paypal.create');
Route::post('/paypal/create/capture','Admin\PaypalController@processTransaction')->name('paypal.processTransaction');

Route::post('/back_to_cus_3', 'Frontend\FrontendController@back_to_cus_3_data')->name('back_to_cus_3');

// customize 
Route::get('/customize', 'Frontend\CustomizeController@customize')->name('customize');
// Customize step 2 fabric
Route::get('/chooseFabric','ScrollController@show_choose_fabrics')->name('chooseFabric');
Route::post('/get_fabric_grand_advance_filter_ajax','Frontend\FrontendController@get_advance_fabric')->name('get_fabric_grand_advance_filter_ajax');

//step 6 recomment style
Route::post('/get_style_ajax','Frontend\FrontendController@get_style_data')->name('get_style_ajax');
Route::post('/get_style_view_more_ajax','Frontend\FrontendController@get_style_view_more_data')->name('get_style_view_more_ajax');

// Route::get('chooseFabric', function () {
//   return view('frontend.choose-fabric');
// });

//demo
Route::get('demo', function () {
    return view('frontend.demo');
});
Route::get('contact', function () {
    return view('frontend.contact');
});
Route::get('package-detail', function () {
    return view('frontend.packageDetail');
});

// ready to wear
Route::get('ready-to-wear', 'Frontend\ReadyToWareController@ready_to_wear')->name('ready_to_wear');
Route::post('/get_style_for_ready_ajax', 'Frontend\FrontendController@get_style_for_ready_ajax_data')->name('get_style_for_ready_ajax');

    //check step1 and step3
    Route::post('/check_style_in_step1_ajax', 'Frontend\FrontendController@check_style_in_step1_ajax_data')->name('check_style_in_step1_ajax');

Route::get('suit-tips', 'Frontend\SuittipsController@suit')->name('suittips');

Route::get('suit-tips-detail/{id}','Frontend\SuittipsController@detail')->name('suit-tip-details');

Route::get('faq', 'Frontend\FaqController@faq')->name('faq');

// Route::get('search-result', function () {
//     return view('frontend.search-result');
// })->name('search-result');

Route::get('cart', 'Frontend\FrontendController@cart')->name('cart');

Route::get('profile', 'Frontend\ProfileContoller@user_profile')->name('profile');

Route::post('/store_user_profile_ajax','Frontend\FrontendController@store_user_profile_data')->name('store_user_profile_ajax');

Route::post('/ajax_store_order','Frontend\OrderController@store_order')->name('ajax_store_order');

Route::post('/get_shipping_ajax','Frontend\OrderController@update_order_shipping')->name('get_shipping_ajax');

Route::post('/store_chekout_address_ajax','Frontend\OrderController@store_order_address')->name('store_chekout_address_ajax');

Route::resource('shippings', 'Admin\ShippingController');

Route::post('/get_order_summary_data','Frontend\OrderController@get_order_summary_all');

// Top
Route::get('/get_jacket_button', 'Frontend\FrontendController@get_jacket_button')->name('get_jacket_button');
Route::get('/get_vest_lapel', 'Frontend\FrontendController@get_vest_lapel')->name('get_vest_lapel');
Route::get('/get_pant_pleat', 'Frontend\FrontendController@get_pant_pleat')->name('get_pant_pleat');

//Fabric backend
Route::post('/get_grand_all_data_ajax', 'Frontend\FrontendController@get_grand_all_data')->name('get_grand_all_data_ajax');

Route::post('/get_grand_data_ajax', 'Frontend\FrontendController@get_grand_data')->name('get_grand_data_ajax');
Route::post('/get_filter_grand_data_ajax', 'Frontend\FrontendController@get_filter_grand_data')->name('get_filter_grand_data_ajax');
Route::post('/get_filter_grand_key_data_ajax', 'Frontend\FrontendController@get_filter_grand_key_data')->name('get_filter_grand_key_data_ajax');

// Additional backend
Route::post('/get_grand_data_add_ajax', 'Frontend\FrontendController@get_grand_add_data')->name('get_grand_data_add_ajax');
Route::post('/get_filter_grand_data_add_ajax', 'Frontend\FrontendController@get_filter_grand_add_data')->name('get_filter_grand_data_add_ajax');
Route::post('/get_filter_grand_key_data_add_ajax', 'Frontend\FrontendController@get_filter_grand_key_add_data')->name('get_filter_grand_key_data_add_ajax');
//favourite
Route::post('/add_to_favourite_grand', 'Frontend\FrontendController@add_favourite_grand')->name('add_to_favourite_grand');

// pacakge
Route::get('/ajex_package', 'Frontend\FrontendController@ajex_package')->name('ajex_package');
Route::get('/search', 'Frontend\FrontendController@search')->name('search');
Route::get('/ajex_search', 'Frontend\FrontendController@ajex_search')->name('ajex_search');
