<?php

use App\Top;
use App\User;
use App\Color;
use App\Style;

use App\Package;
use App\Texture;
use App\AddToCart;
use App\Favourite;
use App\MainTexture;

use App\FabricPattern;
use App\Style_Category;
use App\LowerMeasurement;
use App\UpperMeasurement;
use App\CustomizeCategory;
use App\Jacket_button;
use App\Pant;
use App\Shirt_Button;
use App\TextureSubCategory;
use App\MainAdditional;
use App\Additional;
use App\Faq;
use App\FaqQuestion;
use App\FaqTitle;
use App\ReadyToWear;
// use App\Style_Category;
use App\TemporaryCustomizeStep;
use App\Order;
use App\CartOrder;

use App\SuitTips;

use App\Shipping;
use App\CartOrderProduct;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\FeatureSet;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\Console\Question\Question;

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
// banner
Route::get('/admin', 'Admin\AdminController@create_banner')->name('create_banner');
Route::post('/store_banner', 'Admin\AdminController@store_banner_data')->name('store_banners');
Route::get('/show_banner', 'Admin\AdminController@show_banner_list')->name('show_banner');
Route::get('/edit_banner/{id}', 'Admin\AdminController@edit_banner_list')->name('edit_banner');
Route::post('/update_banner/{id}', 'Admin\AdminController@update_banner_list')->name('update_banner');


Route::post('/delete_banner', 'Admin\AdminController@delete_banner_list')->name('delete_banner');

// zh-dashboard
Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('dashboard');
Route::get('/list_registerlog', 'Admin\AdminController@list_registerlog')->name('list_registerlog');

Route::get('/get_list_registerlog', 'Admin\AdminController@getUserRegister')->name('get_registerlog');

//testimonial
Route::get('/testimonial_list', 'Admin\TestimonialController@show_testimonial_list')->name('testimonial_list');
Route::get('/add_testimonial', 'Admin\TestimonialController@add_testimonial_data')->name('add_testimonial');
Route::post('/store_testimonial', 'Admin\TestimonialController@store_testimonial_data')->name('store_testimonial');
Route::post('/delete_test', 'Admin\TestimonialController@delete_testimonial_list')->name('delete_test');
Route::get('/edit_testimonial/{id}', 'Admin\TestimonialController@edit_testimonial')->name('edit_testimonial');
Route::post('/update_testimonial/{id}', 'Admin\TestimonialController@update_testimonial_list')->name('update_testimonial');





// Suit
Route::get('/add_category', 'Admin\AdminController@create_category_data')->name('add_category');
Route::post('/store_category', 'Admin\AdminController@store_category_data')->name('store_category');
Route::get('/show_category_list', 'Admin\AdminController@show_category')->name('show_category_list');
//fit-suit
Route::get('/show_fit_suit_list', 'Admin\FitSuitController@show_list')->name('show_fit_suit_list');
Route::post('/store_fit_suit', 'Admin\FitSuitController@store_fit_suit_data')->name('store_fit_suit');
Route::get('/edit_fit_suit/{id}', 'Admin\FitSuitController@edit_fit_suit_data')->name('edit_fit_suit');
Route::get('/add_fit_suit', 'Admin\FitSuitController@add_fit_suit_data')->name('add_fit_suit');
Route::post('/get_edit_fit_suit', 'Admin\FitSuitController@get_edit_fit_suit_data')->name('get_edit_fit_suit');
Route::post('/store_edit_fit_suit', 'Admin\FitSuitController@store_edit_fit_suit_data')->name('store_edit_fit_suit');


Route::post('/delete_fit_suit', 'Admin\FitSuitController@delete_fit_suit_data')->name('delete_fit_suit');


Route::get('/get_texture', 'Admin\FitSuitController@get_texture_data')->name('get_texture');
Route::get('/get_style', 'Admin\FitSuitController@get_style_data')->name('get_style');
Route::get('/get_color', 'Admin\FitSuitController@get_color_data')->name('get_color');
Route::get('/get_color', 'Admin\FitSuitController@get_color_data')->name('get_color');
Route::get('/get_size', 'Admin\FitSuitController@get_size_data')->name('get_size');
Route::get('/get_jacket_button_ajax', 'Admin\TopController@get_jacket_button_all')->name('get_jacket_button_ajax');
Route::get('/cus2_option', 'Frontend\FrontendController@get_cus2_option')->name('get_cus2_option');
Route::get('/get_customize_cate', 'Admin\FitSuitController@get_customize_cate')->name('get_customize_cate');
Route::get('/get_style_cate', 'Admin\FitSuitController@get_style_cate')->name('get_style_cate');
Route::get('/get_vest_lapel_ajax', 'Admin\Shirt_ButtonController@get_vest_lapel_all')->name('get_vest_lapel');
Route::get('/get_pant_pleat_ajax', 'Admin\PantController@get_pant_pleat_all')->name('get_pant_pleat');


// Categories
// Ready To Weare
Route::get('get_ready_to_wear', 'Admin\ReadyController@get_ready_to_wear_data')->name('get_ready_to_wear');
Route::get('create_ready_to_wear', 'Admin\ReadyController@create_ready_to_wear_data')->name('create_ready_to_wear');
Route::post('/get_grand_texture', 'Admin\ReadyController@get_grand_texture_data')->name('get_grand_texture');
Route::post('/store_ready_to_wear', 'Admin\ReadyController@store_ready_to_wear_data')->name('store_ready_to_wear');
Route::get('/edit_ready_to_wear/{id}', 'Admin\ReadyController@edit_ready_to_wear_data')->name('edit_ready_to_wear');
Route::post('/get_edit_ready_to_wear', 'Admin\ReadyController@get_edit_ready_to_wear_data')->name('get_edit_ready_to_wear');
Route::get('/get_grand_texture_all', 'Admin\ReadyController@get_grand_texture_all_data')->name('get_grand_texture_all');
Route::post('/store_edit_ready_to_wear', 'Admin\ReadyController@store_edit_ready_to_wear_data')->name('store_edit_ready_to_wear');
Route::post('/get_style_for_ready_ajax', 'Frontend\FrontendController@get_style_for_ready_ajax_data')->name('get_style_for_ready_ajax');
Route::get('/get_style_category', 'Admin\ReadyController@get_style_category_data')->name('get_style_category');

Route::post('/get_swiper_photo_ready', 'Admin\ReadyController@get_swiper_photo_ready_data')->name('get_swiper_photo_ready');
Route::post('/get_swiper_style_ajax', 'Admin\StyleController@get_swiper_style_ajax_data')->name('get_swiper_style_ajax');


// Texture
Route::get('/edit_texture/{id}', 'Admin\TextureController@edit_texture_data')->name('edit_texture');
Route::get('/add_texture', 'Admin\TextureController@create')->name('grand_texture');
Route::post('/get_edit_texture', 'Admin\TextureController@get_edit_texture_data')->name('get_edit_texture');
Route::post('/store_edit_texture', 'Admin\TextureController@store_edit_texture_data')->name('store_edit_texture');
Route::post('/delete_texture', 'Admin\TextureController@delete_texture_data')->name('delete_texture');
Route::post('/store_texture','Admin\TextureController@store_texture');
Route::get('/grand_texture_list','Admin\TextureController@list')->name('grand_texture_list');
Route::post('/increase_count_texture', 'Admin\TextureController@increase_count_texture_data')->name('increase_count_texture');
Route::post('/get_pattern_sub', 'Admin\TextureController@get_pattern_sub_data')->name('get_pattern_sub');
Route::get('/get_pattern_all', 'Admin\TextureController@get_pattern_all_data')->name('get_pattern_all');
Route::get('/get_package', 'Admin\TextureController@get_package_data')->name('get_package');
Route::post('/get_swiper_photo_texture', 'Admin\TextureController@get_swiper_photo_texture_data')->name('get_swiper_photo_texture');



//Main Texture
Route::get('/main_texture_list', 'Admin\TextureController@show_main_texture_list')->name('main_texture_list');

Route::get('/add_main_texture', 'Admin\TextureController@show_add_main_texture')->name('add_main_texture');
Route::post('/store_main_texture', 'Admin\TextureController@store_main_texture_data')->name('store_main_texture');
Route::post('/delete_main_texture', 'Admin\TextureController@delete_main_texture_data')->name('delete_main_texture');
Route::post('/update_main_texture/{id}', 'Admin\TextureController@update_main_texture_data')->name('update_main_texture');

//Main Texture SubCategory
Route::get('/main_texture_sub_list', 'Admin\TextureController@show_main_texture_sub_list')->name('main_texture_sub_list');

Route::get('/add_main_texture_sub', 'Admin\TextureController@show_add_main_texture_sub')->name('add_main_texture_sub');
Route::post('/store_main_texture_sub', 'Admin\TextureController@store_main_texture_sub_data')->name('store_main_texture_sub');
Route::post('/delete_main_texture_sub', 'Admin\TextureController@delete_main_texture_sub_data')->name('delete_main_texture_sub');
Route::post('/update_main_texture_sub/{id}', 'Admin\TextureController@update_main_texture_sub_data')->name('update_main_texture_sub');

Route::get('/get_main_texture', 'Admin\TextureController@get_main_texture_data')->name('get_main_texture');

Route::post('/get_main_texture_sub', 'Admin\TextureController@get_main_texture_sub_data')->name('get_main_texture_sub');
Route::get('/get_main_texture_sub_all', 'Admin\TextureController@get_main_texture_sub_all_data')->name('get_main_texture_sub_all');

//Fabric Pattern
Route::get('/create_fabric_pattern', 'Admin\TextureController@create_fabric_pattern_data')->name('create_fabric_pattern');
Route::post('/get_sub_data_ajax', 'Admin\TextureController@get_sub_data_ajax_data')->name('get_sub_data_ajax');
Route::post('/store_fabric_pattern', 'Admin\TextureController@store_fabric_pattern_data')->name('store_fabric_pattern');
Route::get('/show_fabric_pattern', 'Admin\TextureController@show_fabric_pattern_data')->name('show_fabric_pattern');
Route::post('/delete_fabric_pattern', 'Admin\TextureController@delete_fabric_pattern_data')->name('delete_fabric_pattern');
Route::post('/update_fabric_pattern/{id}', 'Admin\TextureController@update_fabric_pattern_data')->name('update_fabric_pattern');


// Additional
// Main Additional
Route::get('/main_additional_list', 'Admin\AdditionalController@show_main_additional_list')->name('main_additional_list');
Route::get('/add_main_additional', 'Admin\AdditionalController@show_add_main_additional')->name('add_main_additional');
Route::post('/store_main_additional', 'Admin\AdditionalController@store_main_additional_data')->name('store_main_additional');
Route::post('/delete_main_additional', 'Admin\AdditionalController@delete_main_additional_data')->name('delete_main_additional');
Route::post('/update_main_additional/{id}', 'Admin\AdditionalController@update_main_additional_data')->name('update_main_additional');
//Main Additional SubCategory
Route::get('/main_additional_sub_list', 'Admin\AdditionalController@show_main_additional_sub_list')->name('main_additional_sub_list');
Route::get('/add_main_additional_sub', 'Admin\AdditionalController@show_add_main_additional_sub')->name('add_main_additional_sub');
Route::post('/store_main_additional_sub', 'Admin\AdditionalController@store_main_additional_sub_data')->name('store_main_additional_sub');
Route::post('/delete_main_additional_sub', 'Admin\AdditionalController@delete_main_additional_sub_data')->name('delete_main_additional_sub');
Route::post('/update_main_additional_sub/{id}', 'Admin\AdditionalController@update_main_additional_sub_data')->name('update_main_additional_sub');
//grand additional
Route::get('/get_main_additional', 'Admin\AdditionalController@get_main_additional_data')->name('get_main_additional');
Route::post('/get_main_additional_sub', 'Admin\AdditionalController@get_main_additional_sub_data')->name('get_main_additional_sub');
Route::post('store_additional','Admin\AdditionalController@store_additional');
Route::get('/add_additional', 'Admin\AdditionalController@create')->name('grand_additional');
Route::get('/grand_additional_list','Admin\AdditionalController@list')->name('grand_additional_list');
Route::get('/edit_additional/{id}', 'Admin\AdditionalController@edit_additional_data')->name('edit_additional');
Route::post('/delete_additional', 'Admin\AdditionalController@delete_additional_data')->name('delete_additional');
Route::post('/get_edit_additional', 'Admin\AdditionalController@get_edit_additional_data')->name('get_edit_additional');
Route::get('/get_main_additional_sub_all', 'Admin\AdditionalController@get_main_additional_sub_all_data')->name('get_main_additional_sub_all');
Route::post('/store_edit_additional', 'Admin\AdditionalController@store_edit_additional_data')->name('store_edit_additional');

Route::post('/increase_count_additional', 'Admin\AdditionalController@increase_count_additional_data')->name('increase_count_additional');

//check step1 and step3
Route::post('/check_style_in_step1_ajax', 'Frontend\FrontendController@check_style_in_step1_ajax_data')->name('check_style_in_step1_ajax');


// Style
Route::get('/edit_style/{id}', 'Admin\StyleController@edit_style_data')->name('edit_style');
Route::get('/add_style', 'Admin\StyleController@create')->name('style');
Route::post('/get_edit_style', 'Admin\StyleController@get_edit_style_data')->name('get_edit_style');
Route::post('/store_edit_style', 'Admin\StyleController@store_edit_style_data')->name('store_edit_style');
Route::post('/delete_style', 'Admin\StyleController@delete_style_data')->name('delete_style');
Route::post('create_style','Admin\StyleController@create_style');
Route::get('/list_style','Admin\StyleController@list')->name('style_list');
Route::get('/ajex_get_style_jackets', 'Frontend\FrontendController@ajex_get_style_jacktes')->name('ajex_get_style_jackets');
Route::get('/ajex_get_style_vests', 'Frontend\FrontendController@ajex_get_style_vests')->name('ajex_get_style_vests');
Route::get('/ajex_get_style_pants', 'Frontend\FrontendController@ajex_get_style_pants')->name('ajex_get_style_pants');
Route::get('/ajex_get_style', 'Frontend\FrontendController@ajex_get_style')->name('ajex_get_style');
Route::get('/get_style_pop_up','Frontend\FrontendController@get_style_pop_up')->name('get_style_pop_up');
Route::get('/get_filter_recomment_style', 'Frontend\FrontendController@get_filter_recomment_style')->name('get_filter_recomment_style');

// Color
Route::get('/edit_color/{id}', 'Admin\ColorController@edit_color_data')->name('edit_color');
Route::get('/add_color', 'Admin\ColorController@create')->name('color');
Route::post('/get_edit_color', 'Admin\ColorController@get_edit_color_data')->name('get_edit_color');
Route::post('/store_edit_color', 'Admin\ColorController@store_edit_color_data')->name('store_edit_color');
Route::post('/delete_color', 'Admin\ColorController@delete_color_data')->name('delete_color');
Route::post('create_color','Admin\ColorController@create_color');
Route::get('/list_color','Admin\ColorController@list')->name('color_list');

// Size
Route::get('/edit_size/{id}', 'Admin\SizeController@edit_size_data')->name('edit_size');
Route::get('/add_size', 'Admin\SizeController@create')->name('size');
Route::post('/get_edit_size', 'Admin\SizeController@get_edit_size_data')->name('get_edit_size');
Route::post('/store_edit_size', 'Admin\SizeController@store_edit_size_data')->name('store_edit_size');
Route::post('/delete_size', 'Admin\SizeController@delete_size_data')->name('delete_size');
Route::post('create_size','Admin\SizeController@create_size');
Route::get('/list_size','Admin\SizeController@list')->name('size_list');

// Customize
// Top
Route::get('/show_top_list', 'Admin\TopController@show_list')->name('show_top_list');
Route::post('/store_top', 'Admin\TopController@store_top_data')->name('store_top');
Route::get('/edit_top/{id}', 'Admin\TopController@edit_top_data')->name('edit_top');
Route::get('/add_top', 'Admin\TopController@add_top_data')->name('add_top');
Route::post('/get_edit_top', 'Admin\TopController@get_edit_top_data')->name('get_edit_top');
Route::post('/store_edit_top', 'Admin\TopController@store_edit_top_data')->name('store_edit_top');
Route::post('/delete_top', 'Admin\TopController@delete_top_data')->name('delete_top');
Route::get('/get_jacket_button', 'Frontend\FrontendController@get_jacket_button')->name('get_jacket_button');
Route::get('/get_vest_lapel', 'Frontend\FrontendController@get_vest_lapel')->name('get_vest_lapel');
Route::get('/get_pant_pleat', 'Frontend\FrontendController@get_pant_pleat')->name('get_pant_pleat');

// Pant
Route::get('/show_pant_list', 'Admin\PantController@show_list')->name('show_pant_list');
Route::post('/store_pant', 'Admin\PantController@store_pant_data')->name('store_pant');
Route::get('/edit_pant/{id}', 'Admin\PantController@edit_pant_data')->name('edit_pant');
Route::get('/add_pant', 'Admin\PantController@add_pant_data')->name('add_pant');
Route::post('/get_edit_pant', 'Admin\PantController@get_edit_pant_data')->name('get_edit_pant');
Route::post('/store_edit_pant', 'Admin\PantController@store_edit_pant_data')->name('store_edit_pant');
Route::post('/delete_pant', 'Admin\PantController@delete_pant_data')->name('delete_pant');

// Shirt_button
Route::get('/show_shirt_button_list', 'Admin\Shirt_ButtonController@show_list')->name('show_shirt_button_list');
Route::post('/store_shirt_button', 'Admin\Shirt_ButtonController@store_shirt_button_data')->name('store_shirt_button');
Route::get('/edit_shirt_button/{id}', 'Admin\Shirt_ButtonController@edit_shirt_button_data')->name('edit_shirt_button');
Route::get('/add_shirt_button', 'Admin\Shirt_ButtonController@add_shirt_button_data')->name('add_shirt_button');
Route::post('/get_edit_shirt_button', 'Admin\Shirt_ButtonController@get_edit_shirt_button_data')->name('get_edit_shirt_button');
Route::post('/store_edit_shirt_button', 'Admin\Shirt_ButtonController@store_edit_shirt_button_data')->name('store_edit_button');
Route::post('/delete_shirt_button', 'Admin\Shirt_ButtonController@delete_shirt_button_data')->name('delete_button');

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
//favourite
Route::post('/add_to_cart_grand', 'Admin\AddToCartController@add_cart')->name('add_to_cart_grand');

// package
Route::get('/package_list', 'Admin\PackageController@show_package_list')->name('package_list');
Route::get('/add_package', 'Admin\PackageController@add_package_data')->name('add_package');
Route::post('/store_package', 'Admin\PackageController@store_package_data')->name('store_package');
Route::post('/delete_package', 'Admin\PackageController@delete_package_list')->name('delete_package');
Route::get('/edit_package/{id}', 'Admin\PackageController@edit_package')->name('edit_package');
Route::post('/update_package/{id}', 'Admin\PackageController@update_package_list')->name('update_package');
Route::get('/ajex_package', 'Frontend\FrontendController@ajex_package')->name('ajex_package');
Route::get('/search', 'Frontend\FrontendController@search')->name('search');
Route::get('/ajex_search', 'Frontend\FrontendController@ajex_search')->name('ajex_search');

//Customize Category
Route::get('/customize_category_list', 'Admin\CustomizeCategoryController@show_customize_category_list')->name('customize_category_list');
Route::get('/add_customize_category', 'Admin\CustomizeCategoryController@add_customize_category_data')->name('add_customize_category');
Route::post('/store_customize_category', 'Admin\CustomizeCategoryController@store_customize_category_data')->name('store_customize_category');
Route::get('/edit_customize_cate/{id}', 'Admin\CustomizeCategoryController@edit_customize_cate')->name('edit_customize_cate');
Route::post('/update_customize_cate_list/{id}', 'Admin\CustomizeCategoryController@update_customize_cate_list')->name('update_customize_cate');

//Style Category
Route::get('/style_category_list', 'Admin\Style_CategoryController@show_style_category_list')->name('style_category_list');
Route::get('/add_style_category', 'Admin\Style_CategoryController@add_style_category_data')->name('add_style_category');
Route::post('/store_style_category', 'Admin\Style_CategoryController@store_style_category_data')->name('store_style_category');
Route::get('/edit_style_cate/{id}', 'Admin\Style_CategoryController@edit_style_cate')->name('edit_style_cate');
Route::post('/update_style_cate_list/{id}', 'Admin\Style_CategoryController@update_style_cate_list')->name('update_style_cate');

//Jacket Button
Route::get('/jacket_button_list', 'Admin\Jacket_buttonController@show_jacket_button_list')->name('jacket_button_list');
Route::get('/add_jacket_button', 'Admin\Jacket_buttonController@add_jacket_button_data')->name('add_jacket_button');
Route::post('/store_jacket_button', 'Admin\Jacket_buttonController@store_jacket_button_data')->name('store_jacket_button');
Route::get('/edit_jacket_button/{id}', 'Admin\Jacket_buttonController@edit_jacket_button')->name('edit_jacket_button');
Route::post('/update_jacket_button_list/{id}', 'Admin\Jacket_buttonController@update_jacket_button_list')->name('update_jacket_button');
Route::post('/delete_jacket_button', 'Admin\Jacket_buttonController@delete_jacket_button')->name('delete_jacket_button');

// Vest Lapel
Route::get('/vest_lapel_list', 'Admin\Vest_lapelController@show_vest_lapel_list')->name('vest_lapel_list');
Route::get('/add_vest_lapel', 'Admin\Vest_lapelController@add_vest_lapel_data')->name('add_vest_lapel');
Route::post('/store_vest_lapel', 'Admin\Vest_lapelController@store_vest_lapel_data')->name('store_vest_lapel');
Route::get('/edit_vest_lapel/{id}', 'Admin\Vest_lapelController@edit_vest_lapel')->name('edit_vest_lapel');
Route::post('/update_vest_lapel_list/{id}', 'Admin\Vest_lapelController@update_vest_lapel_list')->name('update_vest_lapel');
Route::post('/delete_vest_lapel', 'Admin\Vest_lapelController@delete_vest_lapel')->name('delete_vest_lapel');

// Pant Pleat
Route::get('/pant_pleat_list', 'Admin\Pant_pleatController@show_pant_pleat_list')->name('pant_pleat_list');
Route::get('/add_pant_pleat', 'Admin\Pant_pleatController@add_pant_pleat_data')->name('add_pant_pleat');
Route::post('/store_pant_pleat', 'Admin\Pant_pleatController@store_pant_pleat_data')->name('store_pant_pleat');
Route::get('/edit_pant_pleat/{id}', 'Admin\Pant_pleatController@edit_pant_pleat')->name('edit_pant_pleat');
Route::post('/update_pant_pleat_list/{id}', 'Admin\Pant_pleatController@update_pant_pleat_list')->name('update_pant_pleat');
Route::post('/delete_pant_pleat', 'Admin\Pant_pleatController@delete_pant_pleat')->name('delete_pant_pleat');

// Faq title
Route::get('/faq_title_list', 'Admin\FaqTitleController@show_faq_title_list')->name('faq_title_list');
Route::get('/add_faq_title', 'Admin\FaqTitleController@add_faq_title_data')->name('add_faq_title');
Route::post('/store_faq_title', 'Admin\FaqTitleController@store_faq_title_data')->name('store_faq_title');
Route::get('/edit_faq_title/{id}', 'Admin\FaqTitleController@edit_faq_title')->name('edit_faq_title');
Route::post('/update_faq_title_list/{id}', 'Admin\FaqTitleController@update_faq_title_list')->name('update_faq_title');
Route::post('/delete_faq_title', 'Admin\FaqTitleController@delete_faq_title')->name('delete_faq_title');

// Faq question
Route::get('/faq_question_list', 'Admin\FaqQuestionController@show_faq_question_list')->name('faq_question_list');
Route::get('/add_faq_question', 'Admin\FaqQuestionController@add_faq_question_data')->name('add_faq_question');
Route::post('/store_faq_question', 'Admin\FaqQuestionController@store_faq_question_data')->name('store_faq_question');
Route::get('/edit_faq_question/{id}', 'Admin\FaqQuestionController@edit_faq_question')->name('edit_faq_question');
Route::post('/update_faq_question_list/{id}', 'Admin\FaqQuestionController@update_faq_question_list')->name('update_faq_question');
Route::post('/delete_faq_question', 'Admin\FaqQuestionController@delete_faq_question')->name('delete_faq_question');

// Faq
Route::get('/faq_list', 'Admin\FaqController@show_faq_list')->name('faq_list');
Route::get('/add_faq', 'Admin\FaqController@add_faq_data')->name('add_faq');
Route::post('/store_faq', 'Admin\FaqController@store_faq_data')->name('store_faq');
Route::get('/edit_faq/{id}', 'Admin\FaqController@edit_faq')->name('edit_faq');
Route::post('/update_faq_list/{id}', 'Admin\FaqController@update_faq_list')->name('update_faq');
Route::post('/delete_faq', 'Admin\FaqController@delete_faq')->name('delete_faq');

// Suit Tip
Route::get('/suit_tip_list', 'Admin\SuitTipsController@show_suit_tip_list')->name('suit_tip_list');
Route::get('/add_suit_tip', 'Admin\SuitTipsController@add_suit_tip_data')->name('add_suit_tip');
Route::post('/store_suit_tip', 'Admin\SuitTipsController@store_suit_tip_data')->name('store_suit_tip');
Route::get('/edit_suit_tip/{id}', 'Admin\SuitTipsController@edit_suit_tip')->name('edit_suit_tip');
Route::post('/update_suit_tip_list/{id}', 'Admin\SuitTipsController@update_suit_tip_list')->name('update_suit_tip');
Route::post('/delete_suit_tip', 'Admin\SuitTipsController@delete_suit_tip')->name('delete_suit_tip');

Route::post('/delete_style_category', 'Admin\Style_CategoryController@delete_style_cate')->name('delete_style_category');
//Measurement
Route::get('/personal_info_list', 'Admin\MeasurementController@show_personal_info_list')->name('personal_info_list');
Route::get('/upper_measure_list', 'Admin\MeasurementController@show_upper_measure_list')->name('upper_measure_list');
Route::get('/lower_measure_list', 'Admin\MeasurementController@show_lower_measure_list')->name('lower_measure_list');
//update
Route::post('/update_lower_measure/{id}', 'Admin\MeasurementController@update_lower_measure_list')->name('update_lower_measure');
Route::post('/update_upper_measure/{id}', 'Admin\MeasurementController@update_upper_measure_list')->name('update_upper_measure');
Route::post('/update_user_info_measure/{id}', 'Admin\MeasurementController@update_userinfo_measure_list')->name('update_user_info_measure');


//delete
Route::post('/delete_lower', 'Admin\MeasurementController@delete_lower_measure_list')->name('delete_lower');
Route::post('/delete_upper', 'Admin\MeasurementController@delete_upper_measure_list')->name('delete_upper');
Route::post('/delete_personalInfo','Admin\MeasurementController@delete_personalInfo_list')->name('delete_personalInfo');

//Temporary
Route::post('/store_customize_step_data', 'Admin\TemporaryController@store_customize_step_data_in')->name('store_customize_step_data');
Route::post('/update_customize_step_data', 'Admin\TemporaryController@update_customize_step_data_in')->name('update_customize_step_data');
Route::post('/get_customize_step_data', 'Admin\TemporaryController@get_customize_step_data_in')->name('get_customize_step_data');
Route::post('/delete_customize_step_data', 'Admin\TemporaryController@delete_customize_step_data_in')->name('delete_customize_step_data');

Route::post('/store_suit_code_step6_ajax', 'Admin\TemporaryController@store_suit_code_step6_ajax_in')->name('store_suit_code_step6_ajax');




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

// userchangepassword
Route::get('/user_change_password', 'UserChangePasswordController@index')->name('user_change_password');
Route::post('/user_change_pass_store', 'UserChangePasswordController@store')->name('user_change_password_store');
Route::get('/user_update_pass', 'UserUpdatePasswordController@index')->name('user_update_password');
Route::post('/user_update_pass_store', 'UserUpdatePasswordController@store')->name('user_update_password_store');

Auth::routes();

Route::group(['prefix' => '/', 'as' => '.'], function () {
    //    auth
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
// mail
Route::get('send-mail', function () {

   $details = [
       'title' => 'Mail from ItSolutionStuff.com',
       'body' => 'This is for testing email using smtp'
   ];


   Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));


   dd("Email is Sent.");

});

//payment


Route::get('payment_list','Admin\PaymentController@list')->name('payment_list');
Route::post('/delete_payment', 'Admin\PaymentController@delete_list')->name('delete_payment');
Route::post('/pay', 'Admin\PaymentController@pay')->name('payment');
Route::get('success','Admin\PaymentController@success');
Route::get('error','Admin\PaymentController@error');


// Kz Fabric

Route::get('/fabrics','Frontend\FrontendController@show_fabrics')->name('fabrics');
Route::get('/additional','Frontend\FrontendController@show_additional')->name('additional');

Route::post('/store_measure_ajax', 'Frontend\FrontendController@store_measure_data')->name('store_measure_ajax');

Route::post('/store_user_info_measure_ajax', 'Frontend\FrontendController@store_user_info_measure_ajax_data')->name('store_user_info_measure_ajax');

// paypal
Route::get('/paypal','Frontend\FrontendController@show_paypal')->name('paypal');


Route::post('/back_to_cus_3', 'Frontend\FrontendController@back_to_cus_3_data')->name('back_to_cus_3');


Route::get('customize', function (Request $request) {
    $user = Session::get('user_id');
    $favs = Favourite::where('user_id',Session::get('user_id'))->get();
    $carts = AddToCart::where('user_id',Session::get('user_id'))->get();
    $packages = Package::all();
    $customize_cates = CustomizeCategory::all();
    $jacket_customize_cate = CustomizeCategory::find(1);
    $vest_customize_cate = CustomizeCategory::find(2);
    $pant_customize_cate = CustomizeCategory::find(3);
    $suit_customize_cate = CustomizeCategory::find(9);
    $style_cates = Style_Category::all();
    $styles = Style::all();
    // return dd($styles);
    // dd($user);
    if($user != null)
    {
      $user_info = User::find($user);
      $upper = UpperMeasurement::where('user_id',$user)->first();
      $lower = LowerMeasurement::where('user_id',$user)->first();
    }
    else
    {
      $user_info = null;
      $upper = null;
      $lower = null;
    }
    //start scroll controller
    $textures = MainTexture::all();
        $subs = TextureSubCategory::all();
        $patterns = FabricPattern::all();
        // $packages = Package::all();
        $colors = Color::all();
//start fabric data for infinite scroll line 518 to line 1074

  logger("texture========521");
        if ($request->colors == null && $request->types == null && $request->patterns == null && $request->prices == null && $request->packages == null) {
            $Grands = Texture::orderBy('popular_count', 'desc')->paginate(6);
            // dd($Grands);
        } else {
            //start advence filter
            $page = $request->page;
            $grands = Texture::all();
            $start_grands_result = [];
            $last_grands_result = [];
            $third_grands_result = [];
            $four_grands_result = [];
            $connect_arr = [];
            $last_last_grands_result = [];
            $next_start = $request->start;
            $next_end = $next_start+5;
            logger("Next Start = ".$next_start);
            //start one filter
            if ($request->colors != null && $request->types == null && $request->patterns == null && $request->packages == null)
            {
                //only color
                for ($i = 0; $i < count($request->colors); $i++) {
                  // if($request->prices == null)
                  // {
                    $grands = Texture::where('color_id', $request->colors[$i])->get();
                  // }
                  // elseif($request->prices[0] == 0)
                  // {
                  //   $grands = Texture::where('color_id', $request->colors[$i])->orderBy('price','asc')->get();
                  // }
                  // elseif($request->prices[0] == 1)
                  // {
                  //   $grands = Texture::where('color_id', $request->colors[$i])->orderBy('price','desc')->get();
                  // }
                    // logger($grands);
                    array_push($start_grands_result, $grands);
                }
                //last result
                for ($i = 0; $i < count($start_grands_result); $i++) {
                    foreach ($start_grands_result[$i] as $rg) {
                        array_push($last_grands_result, $rg);
                    }
                }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            if ($request->colors == null && $request->types != null && $request->patterns == null && $request->packages == null)
            {
                //only types
                for ($i = 0; $i < count($request->types); $i++) {
                  // if($request->prices == null)
                  // {
                    $grands = Texture::where('main_texture_id', $request->types[$i])->get();
                  // }
                  // elseif($request->prices[0] == 0)
                  // {
                  //   $grands = Texture::where('main_texture_id', $request->types[$i])->orderBy('price','asc')->get();
                  // }
                  // elseif($request->prices[0] == 1)
                  // {
                  //   $grands = Texture::where('main_texture_id', $request->types[$i])->orderBy('price','desc')->get();
                  // }
                    // logger($grands);
                    array_push($start_grands_result, $grands);
                }
                //last result
                for ($i = 0; $i < count($start_grands_result); $i++) {
                    foreach ($start_grands_result[$i] as $rg) {
                        array_push($last_grands_result, $rg);
                    }
                }
                if($request->prices != null)
                {
                  if ($request->prices[0] == 0) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                  } elseif($request->prices[0] == 1) {
                      array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                  }
                }
            }
            if ($request->colors == null && $request->types == null && $request->patterns != null && $request->packages == null)
            {
              logger("find pattern");
                //only pattern
                for ($i = 0; $i < count($request->patterns); $i++) {
                  // if($request->prices == null)
                  // {
                    $grands = Texture::where('pattern_id', $request->patterns[$i])->get();
                  // }
                  // elseif($request->prices[0] == 0)
                  // {
                  //   $grands = Texture::where('pattern_id', $request->patterns[$i])->orderBy('price','asc')->get();
                  // }
                  // elseif($request->prices[0] == 1)
                  // {
                  //   $grands = Texture::where('pattern_id', $request->patterns[$i])->orderBy('price','desc')->get();
                  // }
                    // logger($grands);
                    array_push($start_grands_result, $grands);
                }
                //last result
                for ($i = 0; $i < count($start_grands_result); $i++) {
                    foreach ($start_grands_result[$i] as $rg) {
                        array_push($last_grands_result, $rg);
                    }
                }
                if($request->prices != null)
                {
                  if ($request->prices[0] == 0) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                  } elseif($request->prices[0] == 1) {
                      array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                  }
                }
            }
            if ($request->colors == null && $request->types == null && $request->patterns == null && $request->packages != null)
            {
              logger("find package");
                //only package
                for ($i = 0; $i < count($request->packages); $i++) {

                    $grands = Texture::where('package_id', $request->packages[$i])->get();
                    // logger($grands);
                    array_push($start_grands_result, $grands);
                }
                //last result
                for ($i = 0; $i < count($start_grands_result); $i++) {
                    foreach ($start_grands_result[$i] as $rg) {
                        array_push($last_grands_result, $rg);
                    }
                }
                if($request->prices != null)
                {
                  logger("price package");
                  if ($request->prices[0] == 0) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                  } elseif($request->prices[0] == 1) {
                      array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                  }
                }
                if($request->prices != null)
                {
                  if ($request->prices[0] == 0) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                  } elseif($request->prices[0] == 1) {
                      array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                  }
                }
            }
            //end one filter
            //start two filter
            if ($request->colors != null && $request->types != null && $request->patterns == null && $request->packages == null) {
              //color and type
              for ($i = 0; $i < count($request->colors); $i++) {

                  $grands = Texture::where('color_id', $request->colors[$i])->get();

                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->types); $j++) {
                          if ($rg->main_texture_id == $request->types[$j]) {
                              array_push($last_grands_result, $rg);
                          }
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            elseif ($request->colors != null && $request->types == null && $request->patterns != null && $request->packages == null) {
              //color and pattern
              for ($i = 0; $i < count($request->colors); $i++) {
                  $grands = Texture::where('color_id', $request->colors[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->patterns); $j++) {
                          if ($rg->pattern_id == $request->patterns[$j]) {
                              array_push($last_grands_result, $rg);
                          }
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            elseif ($request->colors == null && $request->types != null && $request->patterns != null && $request->packages == null) {
              //type and pattern
              for ($i = 0; $i < count($request->types); $i++) {
                  $grands = Texture::where('main_texture_id', $request->types[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->patterns); $j++) {
                          if ($rg->pattern_id == $request->patterns[$j]) {
                              array_push($last_grands_result, $rg);
                          }
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            elseif ($request->colors != null && $request->types == null && $request->patterns == null && $request->packages != null) {
              //color and package
              for ($i = 0; $i < count($request->colors); $i++) {
                  $grands = Texture::where('color_id', $request->colors[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->packages); $j++) {
                          if ($rg->package_id == $request->packages[$j]) {
                              array_push($last_grands_result, $rg);
                          }
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            elseif ($request->colors == null && $request->types != null && $request->patterns == null && $request->packages != null) {
              //type and package
              for ($i = 0; $i < count($request->types); $i++) {
                  $grands = Texture::where('main_texture_id', $request->types[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->packages); $j++) {
                          if ($rg->package_id == $request->packages[$j]) {
                              array_push($last_grands_result, $rg);
                          }
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            elseif ($request->colors == null && $request->types != null && $request->patterns == null && $request->packages != null) {
              //pattern and package
              for ($i = 0; $i < count($request->patterns); $i++) {
                  $grands = Texture::where('pattern_id', $request->patterns[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->packages); $j++) {
                          if ($rg->package_id == $request->packages[$j]) {
                              array_push($last_grands_result, $rg);
                          }
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
            }
            //end two filter
            //start three filter
            if ($request->colors != null && $request->types != null && $request->patterns != null && $request->packages == null) {
              //color,type and pattern
              for ($i = 0; $i < count($request->colors); $i++) {
                  $grands = Texture::where('color_id', $request->colors[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->types); $j++) {
                          if ($rg->main_texture_id == $request->types[$j]) {
                              array_push($third_grands_result, $rg);
                          }
                      }
                  }
              }

              foreach ($third_grands_result as $rg) {
                  // logger("lllllllllll");
                  // logger($rg);
                  // logger("pattern-id".$rg->pattern_id);
                  for ($j = 0; $j < count($request->patterns); $j++) {
                      if ($rg->pattern_id == $request->patterns[$j]) {
                          array_push($last_grands_result, $rg);
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
          }
          if ($request->colors == null && $request->types != null && $request->patterns != null && $request->packages != null) {
            //type and pattern and package
            for ($i = 0; $i < count($request->types); $i++) {
                $grands = Texture::where('main_texture_id', $request->types[$i])->get();
                // logger($grands);
                array_push($start_grands_result, $grands);
            }
            //last result
            for ($i = 0; $i < count($start_grands_result); $i++) {
                foreach ($start_grands_result[$i] as $rg) {
                    for ($j = 0; $j < count($request->patterns); $j++) {
                        if ($rg->pattern_id == $request->patterns[$j]) {
                            array_push($third_grands_result, $rg);
                        }
                    }
                }
            }

            foreach ($third_grands_result as $rg) {
                // logger("lllllllllll");
                // logger($rg);
                // logger("pattern-id".$rg->pattern_id);
                for ($j = 0; $j < count($request->packages); $j++) {
                    if ($rg->package_id == $request->packages[$j]) {
                        array_push($last_grands_result, $rg);
                    }
                }
            }
            if($request->prices != null)
            {
              if ($request->prices[0] == 0) {
                array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
              } elseif($request->prices[0] == 1) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
              }
            }
        }
        if ($request->colors == null && $request->types != null && $request->patterns != null && $request->packages != null) {
          //color and pattern and package
          for ($i = 0; $i < count($request->colors); $i++) {
              $grands = Texture::where('color_id', $request->colors[$i])->get();
              // logger($grands);
              array_push($start_grands_result, $grands);
          }
          //last result
          for ($i = 0; $i < count($start_grands_result); $i++) {
              foreach ($start_grands_result[$i] as $rg) {
                  for ($j = 0; $j < count($request->patterns); $j++) {
                      if ($rg->pattern_id == $request->patterns[$j]) {
                          array_push($third_grands_result, $rg);
                      }
                  }
              }
          }

          foreach ($third_grands_result as $rg) {
              // logger("lllllllllll");
              // logger($rg);
              // logger("pattern-id".$rg->pattern_id);
              for ($j = 0; $j < count($request->packages); $j++) {
                  if ($rg->package_id == $request->packages[$j]) {
                      array_push($last_grands_result, $rg);
                  }
              }
          }
          if($request->prices != null)
          {
            if ($request->prices[0] == 0) {
              array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
            } elseif($request->prices[0] == 1) {
                array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
            }
          }
      }
      if ($request->colors == null && $request->types != null && $request->patterns != null && $request->packages != null) {
        //color and type and package
        for ($i = 0; $i < count($request->colors); $i++) {
            $grands = Texture::where('color_id', $request->colors[$i])->get();
            // logger($grands);
            array_push($start_grands_result, $grands);
        }
        //last result
        for ($i = 0; $i < count($start_grands_result); $i++) {
            foreach ($start_grands_result[$i] as $rg) {
                for ($j = 0; $j < count($request->types); $j++) {
                    if ($rg->main_texture_id == $request->types[$j]) {
                        array_push($third_grands_result, $rg);
                    }
                }
            }
        }

        foreach ($third_grands_result as $rg) {
            // logger("lllllllllll");
            // logger($rg);
            // logger("pattern-id".$rg->pattern_id);
            for ($j = 0; $j < count($request->packages); $j++) {
                if ($rg->package_id == $request->packages[$j]) {
                    array_push($last_grands_result, $rg);
                }
            }
        }
        if($request->prices != null)
        {
          if ($request->prices[0] == 0) {
            array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
          } elseif($request->prices[0] == 1) {
              array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
          }
        }
    }
            //end three filter
            //start four filter
            if ($request->colors != null && $request->types != null && $request->patterns != null && $request->packages != null) {
              //color and type and pattern and package
              logger("four filter");
              for ($i = 0; $i < count($request->colors); $i++) {
                  $grands = Texture::where('color_id', $request->colors[$i])->get();
                  // logger($grands);
                  array_push($start_grands_result, $grands);
              }
              //last result
              for ($i = 0; $i < count($start_grands_result); $i++) {
                  foreach ($start_grands_result[$i] as $rg) {
                      for ($j = 0; $j < count($request->patterns); $j++) {
                          if ($rg->pattern_id == $request->patterns[$j]) {
                              array_push($third_grands_result, $rg);
                          }
                      }
                  }
              }
              for ($i = 0; $i < count($third_grands_result); $i++) {
                  logger("check bool");
                  logger($third_grands_result[0]->main_texture_id);
                    for ($j = 0; $j < count($request->types); $j++) {
                        if ($third_grands_result[$i]->main_texture_id == $request->types[$j]) {
                            array_push($four_grands_result, $third_grands_result[$i]);
                        }
                    }
            }

              foreach ($four_grands_result as $rg) {
                  // logger("lllllllllll");
                  // logger($rg);
                  // logger("pattern-id".$rg->pattern_id);
                  for ($j = 0; $j < count($request->packages); $j++) {
                      if ($rg->package_id == $request->packages[$j]) {
                          array_push($last_grands_result, $rg);
                      }
                  }
              }
              if($request->prices != null)
              {
                if ($request->prices[0] == 0) {
                  array_multisort(array_column($last_grands_result, 'price'), SORT_ASC, $last_grands_result);
                } elseif($request->prices[0] == 1) {
                    array_multisort(array_column($last_grands_result, 'price'), SORT_DESC, $last_grands_result);
                }
              }
          }
            //end four filter
            //only price
            if($request->colors == null && $request->types == null && $request->patterns == null && $request->packages == null && $request->prices != null)
            {
              logger("only pricessssssssssssssssssssssss");
              if($request->prices[0] == 0)
              {
                $grands = Texture::orderBy('price','asc')->get();
                foreach($grands as $grand)
                {
                  array_push($last_grands_result, $grand);
                }
              }
              else
              {
                $grands = Texture::orderBy('price','desc')->get();
                foreach($grands as $grand)
                {
                  array_push($last_grands_result, $grand);
                }
              }
            }
            logger("Page No ---".$page);
            logger("Next Start ---".$next_start);
            logger("Result Count ---".count($last_grands_result));
            logger("Next End ---".$next_end);
            for($i=$next_start;$i<count($last_grands_result);$i++)
            {
              array_push($connect_arr,$last_grands_result[$i]);
              if($i==$next_end)
              {
                break;
              }
            }
            logger(count($connect_arr));
            if(count($connect_arr) == 0)
            {
              $Grands = [];
            }
            else
            {
              $Grands = $connect_arr;
            }
        }

        //end fabric data for infinite scroll line 518 to line 1074
        //start fabric data for infinite scroll line 1074 to line


        //end fabric data for infinite scroll line 1074 to line
        //start jacket data for infinite scroll line 1080 to line
        if($request->jacket_status == 1)
        {
          if($request->style != null)
          {
            logger("Style have");
            $not_unique_tops = Top::where('style',$request->style)->paginate(6);

          }
          else
          {
            logger("not style have");
            $not_unique_tops = Top::paginate(6);
          }

        }
        else
        {
          $not_unique_tops = null;
        }

        //end jacket data for infinite scroll line 1080 to line
        //start pant data for infinite scroll line 1080 to line
        if($request->pant_status == 1)
        {
          if($request->style != null)
          {
            $not_unique_pants = Pant::where('style',$request->style)->paginate(6);
          }
          else
          {
            $not_unique_pants = Pant::paginate(6);
          }
        }
        else
        {
          $not_unique_pants = null;
        }

        //end pant data for infinite scroll line 1080 to line
        //start vest data for infinite scroll line 1123 to line
        if($request->vest_status == 1)
        {
          if($request->style != null)
          {
            $not_unique_vests = Shirt_Button::where('style',$request->style)->paginate(6);
          }
          else
          {
            $not_unique_vests = Shirt_Button::paginate(6);
          }
        }
        else
        {
          $not_unique_vests = null;
        }
        //end pant data for infinite scroll line 1123 to line
        $vest_articles = '';
        $pant_articles = '';
        $jacket_articles = '';
        $texture_articles = '';
        $style_articles = '';
        $public_path_vest = 'http://localhost:8000/assets/images/customize/shirt_button/';
        $public_path_pant = 'http://localhost:8000/assets/images/customize/pant/';
        $public_path_jacket = 'http://localhost:8000/assets/images/customize/';
        $public_path_texture = 'http://localhost:8000/assets/images/categories/texture/';
        $public_path_style = 'http://localhost:8000/assets/images/categories/style/';


        if ($request->ajax()) {
          logger("Texture-ID====".$request->texture_id);
          if($request->jacket_status == 0 && $request->pant_status == 0 && $request->vest_status == 0)
          {
            foreach ($Grands as $grand) {

                logger("texture infinite scrolllllllllllllll");
                  $texture_articles .= '

                  <div class="mb-3 mb-md-0 px-2">
                  <div class="radio-group fabric-group">';
                  if($grand->id == $request->texture_id)
                  {
                    $texture_articles .='
                    <input type="radio" name="FABRIC" value="" id="texture_check_'.$grand->id.'" class="form-check-input" checked/>';
                  }
                  else
                  {
                    $texture_articles .='
                    <input type="radio" name="FABRIC" value="" id="texture_check_'.$grand->id.'" class="form-check-input"/>';
                  }

                  $texture_articles .='

                    <div class="cursor-pointer" data-bs-toggle="modal"
                         data-bs-target="#myFabric' . $grand->id .'" onclick="get_texture_swiper(' . $grand->id . ')">
                      <div class="img-container mb-1">
                        <img src="' . $public_path_texture . $grand->photo_one . '"
                             alt="" class="img-responsive">
                      </div>
                      <p class="mb-2 small-text fabric-text">' .
                  $grand->name
                  . '</p>
                      <p class="text-gold">$ ' . $grand->price . '</p>
                    </div>
                  </div>
                  </div>
                  ';
            }
            return response()->json(['res' => $texture_articles, 'page_no' => 8]);
          }
          if($request->jacket_status == 0 && $request->pant_status == 1 && $request->vest_status == 0)
          {
            foreach($not_unique_pants as $pant)
            {
                $pant_articles .= '
                <label class="row cursor-pointer mb-5" for="sb1">
                      <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                        <span class="row g-0 mb-2">
                          <span class="col-1 mt-1">
                             <input type="radio" name="pant" id="choose_pant'.$pant->id.'" value="'.$pant->id.'"
                                    class="form-check-input me-2 mb-1" onclick="getpant('.$pant->id.','.$pant->price.')"/>
                          </span>
                          <span class="col-11 ps-2">
                            <span class="title">'.$pant->color.'</span>
                          </span>
                        </span>
                        <span class=" d-block more">
                        $'.$pant->price.'
                        </span>
                        <span class="d-block more">
                        '.$pant->description.'
                        </span>
                      </span>
                  <span class="col-12 col-md-6 jacket">
                      <span class="fit-img-container">
                        <img src="'.$public_path_pant.$pant->photo_one.'" alt="" class="">
                      </span>
                    </span>
                </label>
                ';
            }
            return response()->json(['res' => $pant_articles, 'page_no' => 8]);
          }
          if($request->jacket_status == 0 && $request->pant_status == 0 && $request->vest_status == 1)
          {
              foreach($not_unique_vests as $vest)
              {
                $vest_articles.='
                <label class="row cursor-pointer mb-5" for="sb1">
                      <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                        <span class="row g-0 mb-2">
                          <span class="col-1 mt-1">
                             <input type="radio" name="vest" id="choose_vest'.$vest->id.'" value="'.$vest->id.'"
                                    class="form-check-input me-2 mb-1" onclick="getvest('.$vest->id.','.$vest->price.')"/>
                          </span>
                          <span class="col-11 ps-2">
                            <span class="title">'.$vest->color.'</span>
                          </span>
                        </span>
                        <span class=" d-block more">
                        $'.$vest->price.'
                        </span>
                        <span class="text-white-50 d-block">
                        '.$vest->description.'
                        </span>
                      </span>
                  <span class="col-12 col-md-6 jacket">
                      <span class="fit-img-container">
                        <img src="'.$public_path_vest.$vest->photo_one.'" alt="" class="">
                      </span>
                    </span>
                </label>
                ';
              }
              return response()->json(['res' => $vest_articles, 'page_no' => 8]);

          }
          if($request->jacket_status == 1 && $request->pant_status == 0 && $request->vest_status == 0)
          {
            logger("jacketkkkkkkkkkkkkkkkkkkkkkkkkkk");
            foreach($not_unique_tops as $top)
            {
              $jacket_articles .='
              <label class="row cursor-pointer mb-5" for="sb1">
                    <span class="col-md-6 mb-2 d-flex flex-column justify-content-center">
                      <span class="row g-0 mb-2">
                        <span class="col-1 mt-1">
                          <input type="radio" name="jacket" id="choose_jacket'.$top->id.'" value="'.$top->id.'"
                                  class="form-check-input me-2 mb-1" onclick="getjacket('.$top->id.','.$top->price.')"/>
                        </span>
                        <span class="col-11 ps-2">
                          <span class="title">'.$top->color.'</span>
                        </span>
                      </span>
                      <span class=" d-block more">
                      $'.$top->price.'
                      </span>
                      <span class=" d-block more">
                      '.$top->description.'
                      </span>
                    </span>
                <span class="col-12 col-md-6 jacket">
                    <span class="">
                      <img src="'.$public_path_jacket.$top->photo_one.'" alt="" class="">
                    </span>
                  </span>
              </label>
              ';
            }
            return response()->json(['res' => $jacket_articles, 'page_no' => 8]);
          }

            // dd($artcles);
        }

        $user = Session::get('user_id');
        if($user != null)
        {
          $user_info = User::find($user);
          $upper = UpperMeasurement::where('user_id',$user)->first();
          $lower = LowerMeasurement::where('user_id',$user)->first();
        }
        else
        {
          $user_info = null;
          $upper = null;
          $lower = null;
        }
        $tops = Top::all()->unique('style');

        $vests = Shirt_Button::all()->unique('style');

        $pants = Pant::all()->unique('style');

        $top_cates = CustomizeCategory::all();
        $jacket_buttons = Jacket_button::all();
        // return view('frontend.choose-fabric', compact('upper','lower','user','Grands', 'textures', 'subs','colors', 'patterns', 'favs', 'carts','packages')
    //end scroll controller
    // dd($upper);

    // dd($style_cates);
        $additionals = Additional::orderBy('popular_count','desc')->limit(4)->get();
    // dd($additionals);
    $grand_textures = Texture::all();
    $shippings = Shipping::all();
    $temporary_id = Session::get('has_step');
    $temporary = TemporaryCustomizeStep::find($temporary_id);
    // dd($temporary);
    // dd($shippings);
    return view('frontend.customize',compact('temporary','jacket_customize_cate','vest_customize_cate','pant_customize_cate','suit_customize_cate','shippings','grand_textures','additionals','not_unique_pants','pants','not_unique_vests','vests','not_unique_tops','jacket_buttons','top_cates','tops','styles','style_cates','favs','carts','packages','customize_cates','user','user_info','upper','lower','Grands', 'textures', 'subs','colors', 'patterns'));


});
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
Route::get('ready-to-wear', function (Request $request) {
  $user = Session::get('user_id');
  // dd($user);
  $user_detail = User::find($user);
  // dd($user_detail);
  $favs = Favourite::where('user_id',Session::get('user_id'))->get();
  $carts = AddToCart::where('user_id',Session::get('user_id'))->get();
  $popup_readys = ReadyToWear::all();
  $styles = Style::all();
  $style_cates = Style_Category::all();
  $packages = Package::all();
  $textures = Texture::all();
  $main_textures = MainTexture::all();
  if(!empty($request->style_cate_name) || !empty($request->texture_id) || !empty($request->package_id))
  {
      logger("yes");
      $readys_arr = [];
      $readys_style = [];
      $readys_package = [];
      $readys_texture = [];
      $last_readys_result = [];
      $connect_arr = [];//for paginate
      $next_start = $request->start;
      $next_end = $next_start+5;
     //start one only
     if(!empty($request->style_cate_name) && !$request->texture_id && !($request->package_id))
     {
       $qty = 1;
       foreach($request->style_cate_name as $style_cate)
         {
           $one_readys = ReadyToWear::where('style_id',$style_cate)->get();
           array_push($readys_arr,$one_readys);
         }
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {
          foreach ($readys_arr[$i] as $rg) {
              array_push($last_readys_result, $rg);
          }
      }
     }
     if(!$request->style_cate_name && !empty($request->texture_id) && !($request->package_id))
     {
       $qty = 1;
       foreach($request->texture_id as $texture)
       {
        $one_readys = ReadyToWear::where('main_texture_id',$texture)->get();
         array_push($readys_arr,$one_readys);
       }
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {
        foreach ($readys_arr[$i] as $rg) {
            array_push($last_readys_result, $rg);
        }
    }
     }
     if(!$request->style_cate_name && !($request->texture_id) && !empty($request->package_id))
     {
       $qty = 1;
       foreach($request->package_id as $package)
       {
        $one_readys = ReadyToWear::where('package_id',$package)->get();
         array_push($readys_arr,$one_readys);
       }
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {
        foreach ($readys_arr[$i] as $rg) {
            array_push($last_readys_result, $rg);
        }
      }
     }
     // end one only
    // start two only
    // start(style,texture)
    if(!empty($request->style_cate_name) && !empty($request->texture_id) && !($request->package_id))
    {
      $qty = 2;
      foreach($request->style_cate_name as $style_cate)
      {
        $rstyle = ReadyToWear::where('style_id',$style_cate)->get();
        array_push($readys_style,$rstyle);
      }
      for ($i = 0; $i < count($readys_style); $i++) {
        foreach ($readys_style[$i] as $rs) {
            for ($j = 0; $j < count($request->texture_id); $j++) {
                if ($rs->main_texture_id == $request->texture_id[$j]) {
                    array_push($readys_arr, $rs);
                }
              }
            }
          }
          // logger($readys_arr);
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {
            array_push($last_readys_result, $readys_arr[$i]);
      }
      logger($last_readys_result);
    }
    // end(style,texture)
    // start(style,package)
    if(!empty($request->style_cate_name) && !($request->texture_id) && !empty($request->package_id))
    {
      $qty = 2;
      foreach($request->style_cate_name as $style_cate)
      {
        $rstyle = ReadyToWear::where('style_id',$style_cate)->get();
        array_push($readys_style,$rstyle);
      }
      for ($i = 0; $i < count($readys_style); $i++) {
        foreach ($readys_style[$i] as $rs) {
            for ($j = 0; $j < count($request->package_id); $j++) {
                if ($rs->package_id == $request->package_id[$j]) {
                    array_push($readys_arr, $rs);
                }
              }
            }
          }
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {

            array_push($last_readys_result, $readys_arr[$i]);

    }
    }
    // end(style,package)
    // start(texture,package)
    if(!($request->style_cate_name) && !empty($request->texture_id) && !empty($request->package_id))
    {
      $qty = 2;
      foreach($request->texture_id as $texture)
      {
        $rtexture = ReadyToWear::where('main_texture_id',$texture)->get();
        array_push($readys_style,$rtexture);
      }
      for ($i = 0; $i < count($readys_style); $i++) {
        foreach ($readys_style[$i] as $rs) {
            for ($j = 0; $j < count($request->package_id); $j++) {
                if ($rs->package_id == $request->package_id[$j]) {
                    array_push($readys_arr, $rs);
                }
              }
            }
          }
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {

            array_push($last_readys_result, $readys_arr[$i]);

      }
    }
    // end(texture,package)
    // end two only
    //start three only
    if(!empty($request->style_cate_name) && !empty($request->texture_id) && !empty($request->package_id))
    {
      $qty=2;
      for ($i = 0; $i < count($request->style_cate_name); $i++) {
        $rstyle = ReadyToWear::where('style_id',$request->style_cate_name[$i])->get();
        array_push($readys_style,$rstyle);
        // logger($grands);
        // array_push($readys_style, $rstyle);
    }
    //last result
    for ($i = 0; $i < count($readys_style); $i++) {
        foreach ($readys_style[$i] as $rs) {
            for ($j = 0; $j < count($request->texture_id); $j++) {
                if ($rs->main_texture_id == $request->texture_id[$j]) {
                    array_push($readys_texture, $rs);
                }
            }
        }
    }

    foreach ($readys_texture as $rg) {
        // logger("lllllllllll");
        // logger($rg);
        // logger("pattern-id".$rg->pattern_id);
        for ($j = 0; $j < count($request->package_id); $j++) {
            if ($rg->package_id == $request->package_id[$j]) {
                array_push($readys_arr, $rg);
            }
        }
    }
      //last result
      for ($i = 0; $i < count($readys_arr); $i++) {

        array_push($last_readys_result, $readys_arr[$i]);

  }
    }
    //end three only
     //start all paginage
     for($i=$next_start;$i<count($last_readys_result);$i++)
     {
       logger($last_readys_result[0]);
       array_push($connect_arr,$last_readys_result[$i]);
       if($i==$next_end)
       {
         break;
       }
     }
     logger(count($connect_arr));
     if(count($connect_arr) == 0)
     {
       $readys = [];
     }
     else
     {
       $readys = $connect_arr;
     }
    //  logger($connect_arr);
     //end all paginate
  }//filter all end
  else
  {
    logger("no");
    $readys = ReadyToWear::paginate(6);
  }
  $articles = '';
  $public_path = 'http://localhost:8000/assets/images/categories/ready/';
  if ($request->ajax()) {
    foreach($readys as $ready)
    {

//       $articles.='
//       <div class="col-6 col-lg-4 ready__item">
//         <div class="ready__item--img-group">
//           <img src="'.$public_path.$ready->photo_one.'" alt="">
//            <i class='.'bx bx-heart'.'></i>
//         </div>
//         <div class="ready__item--info">
//           <p>'.$ready->name.'</p>
//           <p><strong>$ '.$ready->price.'</strong></p>
//         </div>
//       </div>
// ';
        $articles.='
        <div class="col-6 col-lg-4 ready__item" data-bs-toggle="modal"
             data-bs-target="#myready'.$ready->id.'" onclick="get_swiper('.$ready->id.')">
          <div class="ready__item--img-group">
            <img src="'.$public_path.$ready->photo_one.'" alt="">';
            if(!empty($user))
            {

            $artcles.='
              <button id="wishlist'.$ready->id.'" onclick="whishlist('.$user.','.$ready->id.','.$ready->photo_one.','.$ready->name.','.$ready->price.')>
              <i class='.'bx bx-heart'.'></i>
              </button>
              <button id="delete{{$ready->id}}" onclick="deletedata('.$user.','.$ready->id.','.$ready->photo_one.','.$ready->name.','.$ready->price.'" style="display: none;">
              <i class="bx bx-heart"></i>
              </button>';
            }
            else
            {
              $articles.='
              <button type="button" class=""
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"><i class="bx bx-heart"></i>
              </button>';
            }
            $articles.='
          </div>
          <div class="ready__item--info">
            <p>'.$ready->name.'</p>
            <p><strong>$ '.$ready->price.'</strong></p>
          </div>
        </div>
        ';
    }
    return response()->json(['res' => $articles, 'page_no' => 8]);
  }
    return view('frontend.readyToWear',compact('popup_readys','main_textures','user','user_detail','favs','carts','readys','styles','packages','textures','style_cates'));
});
Route::get('suit-tips', function (Request $request) {
    $features = SuitTips::where('feature',"Yes")->get();
    $suit_tips = SuitTips::paginate(3);
    $articles = '';
    $public_path = 'http://localhost:8000/assets/images/suit_tip/';
    if ($request->ajax()) {
      foreach($suit_tips as $tip)
      {
        $articles .='
        <div class="col-12 col-md-6 col-lg-4 tips__item">
          <img class="item__img" src="'.$public_path.$tip->photo.'" alt="">
          <div class="item__texts">
            <span>'.$tip->brand.' - '.\Carbon\Carbon::parse($tip->created_at)->format('M d Y').'</span>
            <h6>'.$tip->title.'</h6>
            <p class="item__texts-desc">'.$tip->description.'</p>
            <button class="pop-up__button mt-4">
              <a href="/suit-tips-detail/'.$tip->id.'">Detail</a>
            </button>
          </div>
        </div>
        ';
      }
      return response()->json(['res' => $articles, 'page_no' => 8]);
    }


    return view('frontend.suitTips',compact('suit_tips','features'));
});
Route::get('faq', function () {
  $faq_titles = Faq::select('name', 'title', 'question')->get()->groupBy([function($title){
    return $title->title;
  },'question']);
  // return dd($faq_titles);
  $faq_questions = FaqQuestion::all();
  $faqs = Faq::all();
    return view('frontend.faq',compact('faq_titles','faq_questions','faqs'));
});
Route::get('search-result', function (Request $request) {

  // $term = request()->all();
  // return dd($term);
    return view('frontend.search-result');
})->name('search-result');

Route::get('cart', function () {
  $favs = Favourite::where('user_id',Session::get('user_id'))->get();
  $carts = AddToCart::where('user_id',Session::get('user_id'))->get();
  $user_id = Session::get('user_id');
  $user_info = User::find($user_id);
    return view('frontend.add-to-cart',compact('favs','carts','user_id','user_info'));
});
Route::get('suit-tips-detail/{id}', function ($id) {
    $suit_tip = SuitTips::where('id',$id)->first();
    $latest_suit_tips = SuitTips::latest()->take(3)->get();
    // return dd($latest_suit_tip);
    return view('frontend.suitTipsDetail',compact('suit_tip','latest_suit_tips'));
})->name('suit-tip-details');
Route::get('profile', function () {
  $user = Session::get('user_id');
  // dd($user);
  $user_detail = User::find($user);
  // dd($user_detail);
  $favs = Favourite::where('user_id',Session::get('user_id'))->get();
  $carts = AddToCart::where('user_id',Session::get('user_id'))->get();
  //dd($encrypted."---".$decrypted);

  $upper = UpperMeasurement::where('user_id',$user)->first();
  $lower = LowerMeasurement::where('user_id',$user)->first();
  $cus_orders = Order::where('user_id',$user)->get();
  $cart_orders = CartOrder::where('user_id',$user)->get();
  $cart_order_products = CartOrderProduct::all();
  return view('frontend.profile',compact('cart_order_products','favs','carts','user_detail','upper','lower','cus_orders','cart_orders'));
})->name('profile');




Route::post('/store_user_profile_ajax','Frontend\FrontendController@store_user_profile_data')->name('store_user_profile_ajax');

Route::post('/ajax_store_order','Frontend\OrderController@store_order')->name('ajax_store_order');
Route::post('/get_shipping_ajax','Frontend\OrderController@update_order_shipping')->name('get_shipping_ajax');

Route::post('/store_chekout_address_ajax','Frontend\OrderController@store_order_address')->name('store_chekout_address_ajax');


Route::resource('shippings', 'Admin\ShippingController');
