<?php

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

Route::get('/', 'App\Http\Controllers\AuthController@home');


Route::post('user-properties', 'App\Http\Controllers\UserController@user_properties');


Route::post('Residential-properties', 'App\Http\Controllers\PropertyController@Residential_properties');
Route::post('villa_properties', 'App\Http\Controllers\PropertyController@villa_properties');

Route::post('independent_properties', 'App\Http\Controllers\PropertyController@independent_properties');

Route::post('banner_properties', 'App\Http\Controllers\PropertyController@banner_properties');

Route::post('newlisted_properties', 'App\Http\Controllers\PropertyController@newlisted_properties');


Route::post('apartment_properties', 'App\Http\Controllers\PropertyController@apartment_properties');

Route::post('home-advance-count', 'App\Http\Controllers\PropertyController@advance_count');


Route::get('single-list/{id}/{property_type}', 'App\Http\Controllers\PropertydetailsController@single_list');
Route::get('services-single-list/{id}/{name}', 'App\Http\Controllers\AuthController@services_single_list');
Route::get('builder-details/{id}', 'App\Http\Controllers\AuthController@builder_details');

Route::post('getproperty-type', 'App\Http\Controllers\PropertydetailsController@getproperty_type');



Route::post('home-properties', 'App\Http\Controllers\PropertyController@home_properties');
Route::post('home-properties1/{type}/{location}', 'App\Http\Controllers\PropertyController@home_properties1');
Route::post('home-properties1_count/{type}/{location}', 'App\Http\Controllers\PropertyController@home_properties1_count');
Route::post('search-advance', 'App\Http\Controllers\PropertyController@search_advance');
Route::get('search-simple/{type}/{location}', 'App\Http\Controllers\PropertyController@search_simple');
Route::get('unsubscribe/{email}', 'App\Http\Controllers\AuthController@unsubscribe');

Route::post('subscribe', 'App\Http\Controllers\AuthController@subscribe');

Route::post('register', 'App\Http\Controllers\UserController@user_register');

Route::get('404', 'App\Http\Controllers\AuthController@not_found');
Route::get('404', 'App\Http\Controllers\AuthController@header');
Route::get('about', 'App\Http\Controllers\AuthController@about');
Route::get('categories', 'App\Http\Controllers\AuthController@categories');
Route::get('addproperty', 'App\Http\Controllers\AuthController@addproperty');
Route::get('blog', 'App\Http\Controllers\AuthController@blog');
Route::get('registration', 'App\Http\Controllers\AuthController@register');
Route::get('propertydetails', 'App\Http\Controllers\AuthController@propertydetails');
Route::get('single-list', 'App\Http\Controllers\AuthController@single_list');
Route::get('services-details', 'App\Http\Controllers\AuthController@services_details_show');
Route::post('services-details', 'App\Http\Controllers\AuthController@services_details');

Route::get('Thankyou', 'App\Http\Controllers\AuthController@thankyou');
Route::get('404', 'App\Http\Controllers\AuthController@error_page');
Route::get('blog-details', 'App\Http\Controllers\AuthController@blogdetails');
Route::post('blogcontact-submit', 'App\Http\Controllers\AuthController@blogcontact_submit');
Route::post('subscribe', 'App\Http\Controllers\AuthController@subscribe');



/*admin-dashboard*/
Route::get('admin-panel', 'App\Http\Controllers\AdminController@home');
Route::get('blog-table', 'App\Http\Controllers\AdminController@blog_table');
Route::get('newsletter-table', 'App\Http\Controllers\AdminController@newsletter_table');

Route::get('contact-table', 'App\Http\Controllers\AdminController@contact_table');
Route::get('add-blog', 'App\Http\Controllers\AdminController@add_blog');
Route::get('add-newsletter', 'App\Http\Controllers\AdminController@add_newsletter');

/*end-admin-dashboard*/

Route::get('500', 'App\Http\Controllers\AuthController@server_error');

Route::get('home', 'App\Http\Controllers\AuthController@home');

Route::get('privacy-policy', 'App\Http\Controllers\AuthController@privacy_policy');
Route::get('terms-conditions', 'App\Http\Controllers\AuthController@terms_conditions');

Route::get('not_found', 'App\Http\Controllers\AuthController@not_found');

Route::get('terms', 'App\Http\Controllers\AuthController@terms');
Route::get('faq', 'App\Http\Controllers\AuthController@faq');

Route::get('Realestate_news', 'App\Http\Controllers\AuthController@Realestate_news');


Route::get('pricing', 'App\Http\Controllers\AuthController@pricing');
Route::get('about', 'App\Http\Controllers\AuthController@about');

Route::get('logins', 'App\Http\Controllers\AuthController@index');


Route::get('logins', 'App\Http\Controllers\AuthController@index');
Route::get('contact', 'App\Http\Controllers\AuthController@contact');
Route::post('contact-submit', 'App\Http\Controllers\AuthController@contact_submit');
Route::get('service-contact', 'App\Http\Controllers\AuthController@service_contact');
Route::post('single-contact-submit', 'App\Http\Controllers\AuthController@service_contact_submit');
Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin'); 
Route::post('user-login', 'App\Http\Controllers\AuthController@userLogin'); 
Route::post('post-registration', 'App\Http\Controllers\AuthController@postRegistration'); 
Route::get('dashboard', 'App\Http\Controllers\AuthController@dashboard'); 
Route::get('change-password', 'App\Http\Controllers\AuthController@changepassword'); 
Route::post('change-password', 'App\Http\Controllers\AuthController@store')->name('change.password');
Route::get('banner-details/{id}', 'App\Http\Controllers\AuthController@bannerdetails');
Route::get('logout', 'App\Http\Controllers\AuthController@logout');
Route::get('user_logout', 'App\Http\Controllers\AuthController@user_logout');
Route::get('forgot-password', 'App\Http\Controllers\AuthController@forgot_password');
Route::post('forgot_password_post','App\Http\Controllers\AuthController@forgot_password_post');

Route::get('/auth/redirect/{provider}', 'App\Http\Controllers\SocialController@redirect');
Route::get('/callback/{provider}', 'App\Http\Controllers\SocialController@callback');


Route::get('admin-login', 'App\Http\Controllers\AdminController@admin_login');
Route::post('admin-login', ['as'=>'admin.auth','uses'=>'App\Http\Controllers\AdminLoginController@adminAuth']);

Route::group(['middleware' => ['web']], function () {
	
	Route::get('admin/admin-panel', ['as'=>'admin.admin-panel','uses'=>'App\Http\Controllers\AdminController@home']);

	/* property */


Route::get('property-add', 'App\Http\Controllers\AdminController@property_add');
	Route::post('admin/submit-property', 'App\Http\Controllers\AdminController@submit_property');
	Route::get('property-type', 'App\Http\Controllers\AdminController@property_type');
Route::get('property-type-add', 'App\Http\Controllers\AdminController@property_type_add');

	/* property */
	
	/* category */
	
	Route::GET('admin/category', 'CategoryController@view');
Route::GET('admin/category-add', 'CategoryController@add');
Route::post('admin/category-insert', 'CategoryController@adminstore');
Route::GET('admin/category-edit/{id}', 'CategoryController@edit');
Route::post('admin/category-update/{id}', 'CategoryController@adminupdate');
Route::delete('admin/category/{id}', 'CategoryController@destroys')->name('category.destroys');
Route::post('admin/category/status', 'CategoryController@status');
	
	/* category */
	
		
	/* cities */
	Route::get('cities-table', 'App\Http\Controllers\AdminController@cities_table');
Route::get('cities-add', 'App\Http\Controllers\AdminController@cities_add');
	/* cities */
	
		/* contact */
Route::get('contact-table', 'App\Http\Controllers\AdminController@contact_table');
  Route::get('contact', 'App\Http\Controllers\AuthController@contact');
Route::post('contact-submit', 'App\Http\Controllers\AuthController@contact_submit');
	/* contact */
	
			/* slides */
Route::get('slides-add', 'App\Http\Controllers\AdminController@slides_add');
Route::get('slides-table', 'App\Http\Controllers\AdminController@slides_table');
Route::post('slide-submit', 'App\Http\Controllers\AdminController@slide_submit');
	/* slides */
	/* farmlands-slides */
Route::get('farmland-add-slides', 'App\Http\Controllers\AdminController@farmland_add_slides');
Route::get('farmland-slides', 'App\Http\Controllers\AdminController@farmland_slides');
Route::post('farmland-slide-submit', 'App\Http\Controllers\AdminController@farmland_slide_submit');
	/* farmlands-slides */
	
				/* blog */
Route::get('blog-table', 'App\Http\Controllers\AdminController@blog_table');
Route::get('add-blog', 'App\Http\Controllers\AdminController@add_blog');
Route::GET('blog-edit/{id}', 'App\Http\Controllers\AdminController@edit');
Route::post('blog-submit', 'App\Http\Controllers\AdminController@blog_submit');
Route::delete('blog/{id}', 'App\Http\Controllers\AdminController@destroys')->name('blog.destroys');
Route::post('blog-table/status', 'App\Http\Controllers\AdminController@status');
	           /* blog */
			   
		/* newsletter */
Route::get('newsletter-table', 'App\Http\Controllers\AdminController@newsletter_table');
Route::get('newsletter-add', 'App\Http\Controllers\AdminController@newsletter_add');
	/* newsletter */
	
			/* enquiries */
	Route::get('enquiries-table', 'App\Http\Controllers\AdminController@enquirie_table');
	/* enquiries */

			/* userdetails */
Route::get('userdetails', 'App\Http\Controllers\AdminController@userdetails');
Route::get('add-userdetails', 'App\Http\Controllers\AdminController@add_userdetails');
//Route::get('indexmyprofile', 'App\Http\Controllers\AdminController@indexmyprofile');
Route::post('profile', 'App\Http\Controllers\AdminController@profile');
Route::get('update-user', 'App\Http\Controllers\UserController@showuser');

Route::post('update-user', 'App\Http\Controllers\UserController@update');

	/* userdetails */
	
	
	Route::post('login', ['as'=>'user.auth','uses'=>'App\Http\Controllers\UserLoginController@userAuth']);
		Route::post('sms-login', ['as'=>'user.auth','uses'=>'App\Http\Controllers\UserLoginController@sms_login']);
		Route::post('otp-verify', ['as'=>'user.auth','uses'=>'App\Http\Controllers\UserLoginController@otp_verify']);
	
	Route::get('admin-panel', 'App\Http\Controllers\AdminController@home');
Route::get('ApartmentSaleRent', 'App\Http\Controllers\AdminController@ApartmentSaleRent');
Route::get('ApartmentSaleRent1', 'App\Http\Controllers\AdminController@ApartmentSaleRent1');
Route::get('villa', 'App\Http\Controllers\AdminController@villa');
Route::get('plot', 'App\Http\Controllers\AdminController@plot');
Route::get('farmlands', 'App\Http\Controllers\AdminController@farmlands');
Route::get('farmhouse', 'App\Http\Controllers\AdminController@farmhouse');
Route::get('independent-house', 'App\Http\Controllers\AdminController@independent_house');

Route::get('services', 'App\Http\Controllers\AdminController@services');
Route::get('electrical', 'App\Http\Controllers\AdminController@electrical');
Route::get('electrical-table', 'App\Http\Controllers\AdminController@electrical_table');
Route::GET('electrical-edit/{id}', 'App\Http\Controllers\AdminController@electrical_edit');
Route::delete('electrical-table/{id}', 'App\Http\Controllers\AdminController@service_destroys')->name('electrical-table.destroys');

Route::post('sales-submit', 'App\Http\Controllers\AdminController@sales_submit');
Route::get('furniture', 'App\Http\Controllers\AdminController@furniture');
Route::get('furniture-table', 'App\Http\Controllers\AdminController@furniture_table');
Route::GET('furniture-edit/{id}', 'App\Http\Controllers\AdminController@furniture_edit');
Route::delete('furniture-table/{id}', 'App\Http\Controllers\AdminController@service_destroys')->name('furniture_electrical-table.destroys');

Route::post('furniture-submit', 'App\Http\Controllers\AdminController@furniture_submit');
Route::get('interior-service', 'App\Http\Controllers\AdminController@interior_service');
Route::get('interior-service-table', 'App\Http\Controllers\AdminController@interior_service_table');
Route::GET('interior-service-edit/{id}', 'App\Http\Controllers\AdminController@interior_service_edit');
Route::delete('interior-service-table/{id}', 'App\Http\Controllers\AdminController@service_destroys')->name('interior-service-table.destroys');

Route::post('interior-service-submit', 'App\Http\Controllers\AdminController@interior_service_submit');

	Route::post('blog-submit', 'App\Http\Controllers\AdminController@blog_submit');

Route::post('sales-submit', 'App\Http\Controllers\AdminController@sales_submit');

Route::delete('blog/{id}', 'App\Http\Controllers\AdminController@destroys')->name('blog.destroys');
Route::post('blog-table/status', 'App\Http\Controllers\AdminController@status');
Route::delete('electrical-table/{id}', 'App\Http\Controllers\AdminController@service_destroys')->name('electrical-table.destroys');

Route::get('slides', 'App\Http\Controllers\AdminController@slides');
Route::get('add-slides', 'App\Http\Controllers\AdminController@add_slides');


});
 
Route::get('dummy', 'App\Http\Controllers\AuthController@dummy');
Route::get('user-panel', 'App\Http\Controllers\UserController@user_panel');
Route::get('indexmyprofile', 'App\Http\Controllers\UserController@indexmyprofile');
Route::post('profile', 'App\Http\Controllers\UserController@profile');
Route::post('editprofile/{id}', 'App\Http\Controllers\UserController@editprofile');


Route::get('addproperty', 'App\Http\Controllers\UserController@addproperty');
Route::get('addproperty1', 'App\Http\Controllers\UserController@addproperty1');
Route::get('indexmysearches', 'App\Http\Controllers\UserController@indexmysearches');
Route::get('indexmysearchesaved', 'App\Http\Controllers\UserController@indexmysearchesaved');
Route::get('indexmyenquiry', 'App\Http\Controllers\UserController@indexmyenquiry');
Route::get('indexmyservices', 'App\Http\Controllers\UserController@myservices');
Route::get('indexmyproperty', 'App\Http\Controllers\UserController@indexmyproperty');
Route::get('indexmysavedproperties', 'App\Http\Controllers\UserController@indexmysavedproperties');
Route::get('advertisewithus', 'App\Http\Controllers\UserController@advertisewithus');
Route::post('advertise-submit', 'App\Http\Controllers\UserController@advertise_submit');
//Enquiry form//
Route::get('Enquiry', 'App\Http\Controllers\AuthController@Enquiry');
Route::post('Enquiry-form', 'App\Http\Controllers\AuthController@Enquiry_form');
  //Enquiry form
  Route::get('dummy', 'App\Http\Controllers\AuthController@dummy');
Route::get('user-panel', 'App\Http\Controllers\UserController@user_panel'); 

	
Route::post('user-panel/user_add_property', 'App\Http\Controllers\UserController@usersubmit_property');
Route::get('addproperty', 'App\Http\Controllers\UserController@addproperty');
Route::get('addproperty1', 'App\Http\Controllers\UserController@addproperty1');
Route::get('indexmysearches', 'App\Http\Controllers\UserController@indexmysearches');
Route::get('indexmysearchesaved', 'App\Http\Controllers\UserController@indexmysearchesaved');
Route::get('indexmyenquiry', 'App\Http\Controllers\UserController@indexmyenquiry');
Route::get('indexmyservices', 'App\Http\Controllers\UserController@myservices');
Route::get('indexmyproperty', 'App\Http\Controllers\UserController@indexmyproperty');
Route::get('indexmysavedproperties', 'App\Http\Controllers\UserController@indexmysavedproperties');
Route::get('indexuserserviceform', 'App\Http\Controllers\UserController@indexuserserviceform');
Route::post('sales-submit', 'App\Http\Controllers\UserController@sales_submit');
//Route::get('/', 'App\Http\Controllers\UserController@home');

Route::get('electrical1', 'App\Http\Controllers\UserController@electrical1');
Route::post('privacy-policy', 'App\Http\Controllers\AuthController@privacy_policy');
Route::post('terms-conditions', 'App\Http\Controllers\AuthController@terms_conditions');

Route::get('single-list', 'App\Http\Controllers\UserController@single_list');
Route::post('single_list_enquiry', 'App\Http\Controllers\UserController@single_list_enquiry');
Route::post('getdata', 'App\Http\Controllers\UserController@getdata');
Route::post('reply_enquiry', 'App\Http\Controllers\UserController@reply');


// footer links// 
Route::post('faq', 'App\Http\Controllers\AuthController@faq');
Route::get('legaldocuments', 'App\Http\Controllers\AuthController@legaldocuments');
Route::get('saleagreement', 'App\Http\Controllers\AuthController@saleagreement');
Route::get('surrenderdeed', 'App\Http\Controllers\AuthController@surrenderdeed');
Route::get('mortagedeed', 'App\Http\Controllers\AuthController@mortagedeed');
Route::get('Transferdeed', 'App\Http\Controllers\AuthController@Transferdeed');
Route::get('apstampduty', 'App\Http\Controllers\AuthController@apstampduty');
Route::get('powerofattorney', 'App\Http\Controllers\AuthController@powerofattorney');
Route::get('indemnity', 'App\Http\Controllers\AuthController@indemnity');
Route::get('giftdeed', 'App\Http\Controllers\AuthController@giftdeed');
Route::get('leasedeed', 'App\Http\Controllers\AuthController@leasedeed');
Route::get('releasedeed', 'App\Http\Controllers\AuthController@releasedeed');
Route::get('certificate', 'App\Http\Controllers\AuthController@certificate');
Route::get('homefinance', 'App\Http\Controllers\AuthController@homefinance');
Route::get('insurancecompanies', 'App\Http\Controllers\AuthController@insurancecompanies');
Route::get('homeloans', 'App\Http\Controllers\AuthController@homeloans');
Route::get('homeinsurance', 'App\Http\Controllers\AuthController@homeinsurance');
Route::get('documentsforloan', 'App\Http\Controllers\AuthController@documentsforloan');
Route::get('advertise', 'App\Http\Controllers\AuthController@advertise');
Route::post('advertise-submit', 'App\Http\Controllers\AuthController@advertise_submit');
Route::get('governmentbodies', 'App\Http\Controllers\AuthController@governmentbodies');
Route::get('formproperties', 'App\Http\Controllers\AuthController@formproperties');
Route::get('salesdeed', 'App\Http\Controllers\AuthController@salesdeed');
Route::get('vastu', 'App\Http\Controllers\AuthController@vastu');
Route::get('indianvastushastra', 'App\Http\Controllers\AuthController@indianvastushastra');
Route::get('originofvastu', 'App\Http\Controllers\AuthController@originofvastu');
Route::get('vastuasscience', 'App\Http\Controllers\AuthController@vastuasscience');
Route::get('vastutips', 'App\Http\Controllers\AuthController@vastutips');
Route::get('whyvastu', 'App\Http\Controllers\AuthController@whyvastu');
Route::get('vastuebook', 'App\Http\Controllers\AuthController@vastuebook');
Route::get('vastuforhome', 'App\Http\Controllers\AuthController@vastuforhome');
Route::get('vastuforbedroom', 'App\Http\Controllers\AuthController@vastuforbedroom');
Route::get('vastuforbathroom', 'App\Http\Controllers\AuthController@vastuforbathroom');







Route::get('vastufordiningroom', 'App\Http\Controllers\AuthController@vastufordiningroom');
Route::get('vastuforchildrenroom', 'App\Http\Controllers\AuthController@vastuforchildrenroom');
Route::get('vastufordrawingroom', 'App\Http\Controllers\AuthController@vastufordrawingroom');
Route::get('vastuforcommercialbuildings', 'App\Http\Controllers\AuthController@vastuforcommercialbuildings');
Route::get('vastuforindustry', 'App\Http\Controllers\AuthController@vastuforindustry');
Route::get('vastuforoffices', 'App\Http\Controllers\AuthController@vastuforoffices');
Route::get('vastuforshops', 'App\Http\Controllers\AuthController@vastuforshops');
Route::get('vastuforplotselection', 'App\Http\Controllers\AuthController@vastuforplotselection');
Route::get('vastuforhotels', 'App\Http\Controllers\AuthController@vastuforhotels');
Route::get('vastuforhospitals', 'App\Http\Controllers\AuthController@vastuforhospitals');
Route::get('vastuforkitchen', 'App\Http\Controllers\AuthController@vastuforkitchen');




//    addbuillderform-start  //
 //Route::get('addbuillderform', 'App\Http\Controllers\UserController@addbuillderform');
//Route::post('addbuillderform', 'App\Http\Controllers\UserController@addbuillder_form');
	Route::get('addbuillderform', 'App\Http\Controllers\AdminController@addbuillderform');
	Route::post('addbuillderform', 'App\Http\Controllers\AdminController@addbuillder_form');
    Route::get('buillders_view', 'App\Http\Controllers\AdminController@buillders_view');
// addbuillderform-end//
	/* location start */
	Route::get('location-table', 'App\Http\Controllers\AdminController@location_table');
	
	
Route::get('add-location', 'App\Http\Controllers\AdminController@add_location');

Route::GET('edit-location/{id}', 'App\Http\Controllers\AdminController@edit_location');
Route::post('location-submit', 'App\Http\Controllers\AdminController@location_submit');
Route::post('location-update/{$id}', 'App\Http\Controllers\AdminController@location_update');
Route::delete('location/{id}', 'App\Http\Controllers\AdminController@delete');
Route::delete('location/{id}', 'App\Http\Controllers\AdminController@destroyd')->name('destroyd');
	           /* location  end */

