<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('doit', function(){
	//do things
	exit('done!');
});

// Example routes:
// Route::get('uri',['as'=>'route','uses'=>'controller']);
// Route::post('uri',['as'=>'route','uses'=>'controller']);

// Main routes
Route::get('/',['as'=>'public.home','uses'=>'PublicController@getHome']);
Route::get('example/dashboard',['as'=>'example.dashboard','uses'=>'ExamplesController@exampleDashboard']);

/*
 |--------------------------------------------------------------------------
 | EXAMPLES, GUIDES, TUTORIALS...
 |--------------------------------------------------------------------------
 */

// Bootstrap examples
Route::get('example/tables',['as'=>'example.tables','uses'=>'ExamplesController@exampleTables']);
Route::get('example/forms',['as'=>'example.forms','uses'=>'ExamplesController@exampleForms']);
Route::get('example/buttons',['as'=>'example.buttons','uses'=>'ExamplesController@exampleButtons']);
Route::get('example/grid',['as'=>'example.grid','uses'=>'ExamplesController@exampleGrid']);
Route::get('example/icons',['as'=>'example.icons','uses'=>'ExamplesController@exampleIcons']);
Route::get('example/notifications',['as'=>'example.notifications','uses'=>'ExamplesController@exampleNotifications']);
Route::get('example/panels',['as'=>'example.panels','uses'=>'ExamplesController@examplePanels']);
Route::get('example/typography',['as'=>'example.typography','uses'=>'ExamplesController@exampleTypography']);
// Widgets
Route::get('example/code',['as'=>'example.code','uses'=>'ExamplesController@exampleCode']);
Route::get('example/flot-charts',['as'=>'example.flot','uses'=>'ExamplesController@exampleFlotCharts']);
Route::get('example/morris-charts',['as'=>'example.morris','uses'=>'ExamplesController@exampleMorrisCharts']);
Route::get('example/timeline',['as'=>'example.timeline','uses'=>'ExamplesController@exampleTimeline']);
Route::get('example/change-language',['as'=>'example.change-language','uses'=>'ExamplesController@exampleChangeLanguage']);
Route::post('example/change-language',['as'=>'post.change-language','uses'=>'LocaleController@changeLanguage']);
Route::get('example/google-maps-1',['as'=>'example.gmaps1','uses'=>'ExamplesController@exampleGoogleMaps1']);
Route::get('example/google-maps-2',['as'=>'example.gmaps2','uses'=>'ExamplesController@exampleGoogleMaps2']);
Route::get('example/google-maps-3',['as'=>'example.gmaps3','uses'=>'ExamplesController@exampleGoogleMaps3']);
Route::get('example/google-maps-4',['as'=>'example.gmaps4','uses'=>'ExamplesController@exampleGoogleMaps4']);
Route::get('example/geolocated-search',['as'=>'example.geosearch','uses'=>'ExamplesController@exampleGeolocatedSearch']);
Route::post('example/geolocated-search',['as'=>'example.geosearch.post','uses'=>'ExamplesController@postGeolocatedSearch']);
Route::get('example/toastr',['as'=>'example.toastr','uses'=>'ExamplesController@exampleToastr']);
Route::get('example/cookies-alert',['as'=>'example.cookies-alert','uses'=>'ExamplesController@exampleCookiesAlert']);

/*
 |--------------------------------------------------------------------------
 | BUDGET CALCULATOR
 |--------------------------------------------------------------------------
 */

Route::get('dashboard/calculator',['as'=>'dashboard.calculator','uses'=>'ProjectCalculatorController@getView']);
Route::get('dashboard/calculator/previewResults',['as'=>'dashboard.calculator.previewResults','uses'=>'ProjectCalculatorController@calculate']);
Route::get('dashboard/calculator/testReport',['as'=>'dashboard.calculator.testReport','uses'=>'ProjectCalculatorController@testReport']);
Route::get('dashboard/calculator/testBudget',['as'=>'dashboard.calculator.testBudget','uses'=>'ProjectCalculatorController@testBudget']);
Route::post('dashboard/calculator/saveProject',['as'=>'dashboard.calculator.saveProject','uses'=>'ProjectCalculatorController@saveProject']);
Route::get('dashboard/calculator/openReport',['as'=>'dashboard.calculator.openReport','uses'=>'ProjectCalculatorController@openReport']);
Route::get('dashboard/calculator/openBudget',['as'=>'dashboard.calculator.openBudget','uses'=>'ProjectCalculatorController@openBudget']);

/*
 |--------------------------------------------------------------------------
 | DASHBOARD ROUTES
 |--------------------------------------------------------------------------
 */

Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardController@getDashboard']);
// User profile management
Route::get('dashboard/profile',['as'=>'dashboard.profile','uses'=>'DashboardController@getProfile']);
Route::post('dashboard/profile/update-info',['as'=>'dashboard.profile.update.info','uses'=>'DashboardController@postProfileUpdateInfo']);
Route::post('dashboard/profile/update-password',['as'=>'dashboard.profile.update.password','uses'=>'DashboardController@postProfileUpdatePassword']);
// Dashboard settings
Route::get('dashboard/settings',['as'=>'dashboard.settings','uses'=>'DashboardController@getSettings']);
// Login/logout routes
Route::get('auth/login',['as'=>'auth.getLogin','uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login',['as'=>'auth.postLogin','uses'=>'Auth\AuthController@postLogin']);
Route::get('auth/logout',['as'=>'auth.getLogout','uses'=>'Auth\AuthController@getLogout']);
// Registration routes. Different registration methods can be set in config/auth.php
Route::get('auth/register',['as'=>'auth.getRegister','uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register',['as'=>'auth.postRegister','uses'=>'Auth\AuthController@postRegister']);
Route::get('auth/verify/{confirmationCode}',['as'=>'auth.verifyEmail','uses'=>'Auth\AuthController@verifyEmail']);
// Reset password routes
Route::get('auth/email',['as'=>'auth.getEmail','uses'=>'Auth\AuthController@getEmail']);
Route::post('auth/email',['as'=>'auth.postEmail','uses'=>'Auth\AuthController@postEmail']);
Route::get('auth/reset/{token}',['as'=>'auth.getReset','uses'=>'Auth\AuthController@getReset']);
Route::post('auth/reset',['as'=>'auth.postReset','uses'=>'Auth\AuthController@postReset']);
//Route override to change locale from the administrator package (backend admin interface)
Route::get('switch_locale/{locale}',['as'=>'admin_switch_locale','uses'=>'LocaleController@switchLocale']);

/*
 |--------------------------------------------------------------------------
 | SOCIAL LOGIN
 |--------------------------------------------------------------------------
 |
 | Don't forget to fill the apps ID and SECRET fields in .env.
 | To register new apps and obtain their ID/SECRET codes, visit their corresponding webs:
 | https://developers.facebook.com/apps
 | https://github.com/settings/applications/new
 | https://www.linkedin.com/developer/apps/new
 | https://apps.twitter.com/app/new
 | https://console.developers.google.com/
 | https://bitbucket.org/account/user/bitumin/oauth-consumers/new
 */

Route::get('auth/facebook',['as'=>'facebook.provider','uses'=>'Auth\AuthController@facebookRedirectToProvider']);
Route::get('auth/facebook/callback',['as'=>'facebook.callback','uses'=>'Auth\AuthController@facebookHandleProviderCallback']);
Route::get('auth/twitter',['as'=>'twitter.provider','uses'=>'Auth\AuthController@twitterRedirectToProvider']);
Route::get('auth/twitter/callback',['as'=>'twitter.callback','uses'=>'Auth\AuthController@twitterHandleProviderCallback']);
Route::get('auth/google',['as'=>'google.provider','uses'=>'Auth\AuthController@googleRedirectToProvider']);
Route::get('auth/google/callback',['as'=>'google.callback','uses'=>'Auth\AuthController@googleHandleProviderCallback']);
Route::get('auth/linkedin',['as'=>'linkedin.provider','uses'=>'Auth\AuthController@linkedinRedirectToProvider']);
Route::get('auth/linkedin/callback',['as'=>'linkedin.callback','uses'=>'Auth\AuthController@linkedinHandleProviderCallback']);
Route::get('auth/github',['as'=>'github.provider','uses'=>'Auth\AuthController@githubRedirectToProvider']);
Route::get('auth/github/callback',['as'=>'github.callback','uses'=>'Auth\AuthController@githubHandleProviderCallback']);
Route::get('auth/bitbucket',['as'=>'bitbucket.provider','uses'=>'Auth\AuthController@bitbucketRedirectToProvider']);
Route::get('auth/bitbucket/callback',['as'=>'bitbucket.callback','uses'=>'Auth\AuthController@bitbucketHandleProviderCallback']);


/*
 |--------------------------------------------------------------------------
 | TEMPLATES (MOSTLY BOOTSTRAP BASED TEMPLATES)
 |--------------------------------------------------------------------------
 */

Route::get('template/actualizar-tpv/',['as'=>'template.actualizartpv.index','uses'=>'ExamplesController@getTemplateActualizarTpvIndex']);
Route::get('template/grey-fest/',['as'=>'template.grey-fest.index','uses'=>'ExamplesController@getTemplateGreyFestIndex']);
Route::get('template/creative/',['as'=>'template.creative.index','uses'=>'ExamplesController@getTemplateSbCreativeIndex']);
Route::get('template/clean-blog/',['as'=>'template.clean-blog.index','uses'=>'ExamplesController@getTemplateCleanBlogIndex']);
Route::get('template/clean-blog/post',['as'=>'template.clean-blog.post','uses'=>'ExamplesController@getTemplateCleanBlogPost']);
Route::get('template/clean-blog/about',['as'=>'template.clean-blog.about','uses'=>'ExamplesController@getTemplateCleanBlogAbout']);
Route::get('template/clean-blog/contact',['as'=>'template.clean-blog.contact','uses'=>'ExamplesController@getTemplateCleanBlogContact']);
Route::get('template/agency/',['as'=>'template.agency.index','uses'=>'ExamplesController@getTemplateAgencyIndex']);
Route::get('template/freelancer/',['as'=>'template.freelancer.index','uses'=>'ExamplesController@getTemplateFreelancerIndex']);
Route::get('template/shop/',['as'=>'template.shop.index','uses'=>'ExamplesController@getTemplateShopIndex']);
Route::get('template/shop/item',['as'=>'template.shop.item','uses'=>'ExamplesController@getTemplateShopItem']);
Route::get('template/business-casual/',['as'=>'template.business-casual.index','uses'=>'ExamplesController@getTemplateBusinessCasualIndex']);
Route::get('template/business-casual/about',['as'=>'template.business-casual.about','uses'=>'ExamplesController@getTemplateBusinessCasualAbout']);
Route::get('template/business-casual/blog',['as'=>'template.business-casual.blog','uses'=>'ExamplesController@getTemplateBusinessCasualBlog']);
Route::get('template/business-casual/contact',['as'=>'template.business-casual.contact','uses'=>'ExamplesController@getTemplateBusinessCasualContact']);
Route::get('template/stylish-portfolio/',['as'=>'template.stylish-portfolio.index','uses'=>'ExamplesController@getTemplateStylishPortfolioIndex']);
Route::get('template/design/',['as'=>'template.design.index','uses'=>'ExamplesController@getTemplateDesignIndex']);
Route::get('template/architect/',['as'=>'template.architect.index','uses'=>'ExamplesController@getTemplateArchitectIndex']);
Route::get('template/architect/projects',['as'=>'template.architect.projects','uses'=>'ExamplesController@getTemplateArchitectProjects']);
Route::get('template/architect/detail',['as'=>'template.architect.detail','uses'=>'ExamplesController@getTemplateArchitectDetail']);
Route::get('template/architect/media',['as'=>'template.architect.media','uses'=>'ExamplesController@getTemplateArchitectMedia']);
Route::get('template/architect/about',['as'=>'template.architect.about','uses'=>'ExamplesController@getTemplateArchitectAbout']);
Route::get('template/architect/contact',['as'=>'template.architect.contact','uses'=>'ExamplesController@getTemplateArchitectContact']);
Route::get('template/studio/',['as'=>'template.studio.index','uses'=>'ExamplesController@getTemplateStudioIndex']);
Route::get('template/resume/',['as'=>'template.resume.index','uses'=>'ExamplesController@getTemplateResumeIndex']);
Route::get('template/resume/blog',['as'=>'template.resume.blog','uses'=>'ExamplesController@getTemplateResumeBlog']);
Route::get('template/resume/blogdetail',['as'=>'template.resume.blogdetail','uses'=>'ExamplesController@getTemplateResumeBlogdetail']);
Route::get('template/sprint/',['as'=>'template.sprint.index','uses'=>'ExamplesController@getTemplateSprintIndex']);
Route::get('template/piple/',['as'=>'template.piple.index','uses'=>'ExamplesController@getTemplatePipleIndex']);
Route::get('template/piple/post',['as'=>'template.piple.post','uses'=>'ExamplesController@getTemplatePiplePost']);
Route::get('template/lucy/',['as'=>'template.lucy.index','uses'=>'ExamplesController@getTemplateLucyIndex']);
Route::get('template/john/',['as'=>'template.john.index','uses'=>'ExamplesController@getTemplateJohnIndex']);
Route::get('template/comingsoon/',['as'=>'template.comingsoon.index','uses'=>'ExamplesController@getTemplateComingsoonIndex']);
Route::get('template/kitchen/',['as'=>'template.kitchen.index','uses'=>'ExamplesController@getTemplateKitchenIndex']);
Route::get('template/cloud/',['as'=>'template.cloud.index','uses'=>'ExamplesController@getTemplateCloudIndex']);
Route::get('template/cloud/blog',['as'=>'template.cloud.blog','uses'=>'ExamplesController@getTemplateCloudBlog']);

/*
 |--------------------------------------------------------------------------
 | BLOG ROUTES
 |--------------------------------------------------------------------------
 */

/* Front end routes */

Route::get('blog', ['as'=>'blog.index','uses'=>'BlogController@indexBlog']);
Route::get('blog/{slug}', ['as'=>'blog.show','uses'=>'BlogController@showBlog']);
Route::post('blog/{slug}', ['as'=>'blog.confirmPass','uses'=>'BlogController@showBlog']);
Route::get('blog/archive/{year}/{month}', ['as'=>'blog.archive','uses'=>'BlogController@archiveBlog']);
Route::get('blog/category/{category}', ['as'=>'blog.category','uses'=>'BlogController@categoryBlog']);
Route::get('blog/protected/verify/{slug}', ['as'=>'blog.askPassword','uses'=>'BlogController@askPassword']);
Route::post('blog/comments', ['as'=>'comments.store','uses'=>'BlogController@storeComments']);

/* Back end routes */

// Dashboard
Route::get('dashboard/blog', ['as'=>'blog.admin.dashboard','uses'=>'BlogAdminController@indexDashboard']);

Route::group(['middleware' => 'App\Http\Middleware\HasAdminRole'], function() {
// User
	Route::get('dashboard/blog/users', ['as'=>'blog.admin.users.index','uses'=>'BlogAdminController@indexUser']);
	Route::get('dashboard/blog/users/create', ['as'=>'blog.admin.users.create','uses'=>'BlogAdminController@createUser']);
	Route::post('dashboard/blog/users', ['as'=>'blog.admin.users.store','uses'=>'BlogAdminController@storeUser']);
//	Route::get('dashboard/blog/users/{slug}', ['as'=>'blog.admin.users.show','uses'=>'BlogAdminController@showUser']);
	Route::get('dashboard/blog/users/{slug}/edit', ['as'=>'blog.admin.users.edit','uses'=>'BlogAdminController@editUser']);
	Route::put('dashboard/blog/users/{slug}', ['as'=>'blog.admin.users.update','uses'=>'BlogAdminController@updateUser']);
	Route::delete('dashboard/blog/users/{slug}', ['as'=>'blog.admin.users.destroy','uses'=>'BlogAdminController@destroyUser']);
	Route::get('dashboard/blog/users/overview/{trashed?}', ['as'=>'blog.admin.users.overview','uses'=>'BlogAdminController@indexUser']);
	Route::get('dashboard/blog/users/{slug}/restore', ['as'=>'blog.admin.users.restore','uses'=>'BlogAdminController@restoreUser']);

// Categories
	Route::get('dashboard/blog/categories', ['as'=>'blog.admin.categories.index','uses'=>'BlogAdminController@indexCategory']);
	Route::get('dashboard/blog/categories/create', ['as'=>'blog.admin.categories.create','uses'=>'BlogAdminController@createCategory']);
	Route::post('dashboard/blog/categories', ['as'=>'blog.admin.categories.store','uses'=>'BlogAdminController@storeCategory']);
//	Route::get('dashboard/blog/categories/{slug}', ['as'=>'blog.admin.categories.show','uses'=>'BlogAdminController@showCategory']);
	Route::get('dashboard/blog/categories/{slug}/edit', ['as'=>'blog.admin.categories.edit','uses'=>'BlogAdminController@editCategory']);
	Route::put('dashboard/blog/categories/{slug}', ['as'=>'blog.admin.categories.update','uses'=>'BlogAdminController@updateCategory']);
	Route::delete('dashboard/blog/categories/{slug}', ['as'=>'blog.admin.categories.destroy','uses'=>'BlogAdminController@destroyCategory']);
	Route::get('dashboard/blog/categories/overview/{trashed?}', ['as'=>'blog.admin.categories.overview','uses'=>'BlogAdminController@indexCategory']);
	Route::get('dashboard/blog/categories/{slug}/restore', ['as'=>'blog.admin.categories.restore','uses'=>'BlogAdminController@restoreCategory']);
});

// Posts
Route::get('dashboard/blog/posts', ['as'=>'blog.admin.posts.index','uses'=>'BlogAdminController@indexPost']);
Route::get('dashboard/blog/posts/create', ['as'=>'blog.admin.posts.create','uses'=>'BlogAdminController@createPost']);
Route::get('dashboard/blog/posts/{slug}', ['as'=>'blog.admin.posts.show','uses'=>'BlogAdminController@showPost']);
Route::get('dashboard/blog/posts/{slug}/edit', ['as'=>'blog.admin.posts.edit','uses'=>'BlogAdminController@editPost']);
Route::delete('dashboard/blog/posts/{slug}', ['as'=>'blog.admin.posts.destroy','uses'=>'BlogAdminController@destroyPost']);
Route::post('dashboard/blog/posts', ['as'=>'blog.admin.posts.store','uses'=>'BlogAdminController@storePost']);
Route::post('dashboard/blog/posts/image/upload', ['as'=>'blog.admin.posts.uploadImage','uses'=>'BlogAdminController@uploadImage']);
Route::get('dashboard/blog/posts/overview/{trashed?}', ['as'=>'blog.admin.posts.overview','uses'=>'BlogAdminController@indexPost']);
Route::get('dashboard/blog/posts/action/cancel/{slug?}', ['as'=>'blog.admin.posts.cancel','uses'=>'BlogAdminController@cancelPost']);
Route::get('dashboard/blog/posts/{slug}/restore', ['as'=>'blog.admin.posts.restore','uses'=>'BlogAdminController@restorePost']);

Route::group(['middleware' => 'App\Http\Middleware\HasAdminOrAuthorRole'], function() {
// Tags
	Route::get('dashboard/blog/tags', ['as'=>'blog.admin.tags.index','uses'=>'BlogAdminController@indexTag']);
	Route::get('dashboard/blog/tags/create', ['as'=>'blog.admin.tags.create','uses'=>'BlogAdminController@createTag']);
//	Route::get('dashboard/blog/tags/{slug}', ['as'=>'blog.admin.tags.show','uses'=>'BlogAdminController@showTag']);
	Route::get('dashboard/blog/tags/{slug}/edit', ['as'=>'blog.admin.tags.edit','uses'=>'BlogAdminController@editTag']);
	Route::put('dashboard/blog/tags/{slug}', ['as'=>'blog.admin.tags.update','uses'=>'BlogAdminController@updateTag']);
	Route::delete('dashboard/blog/tags/{slug}', ['as'=>'blog.admin.tags.destroy','uses'=>'BlogAdminController@destroyTag']);
	Route::post('dashboard/blog/tags', ['as'=>'blog.admin.tags.store','uses'=>'BlogAdminController@storeOrUpdateTag']);
	Route::get('dashboard/blog/tags/overview/{trashed?}', ['as'=>'blog.admin.tags.overview','uses'=>'BlogAdminController@indexTag']);
	Route::get('dashboard/blog/tags/{slug}/restore', ['as'=>'blog.admin.tags.restore','uses'=>'BlogAdminController@restoreTag']);

// Comments
	Route::get('dashboard/blog/comments/{revised?}', ['as'=>'blog.admin.comments.index','uses'=>'BlogController@indexComments']);
	Route::get('dashboard/blog/comments/changestatus/{slug}/{revised}', ['as'=>'blog.admin.comments.changeStatus','uses'=>'BlogController@changeStatus']);
});

// Profiles
//Route::get('dashboard/blog/profile', ['as'=>'blog.admin.profile.index','uses'=>'BlogAdminController@indexProfile']);
//Route::get('dashboard/blog/profile/create', ['as'=>'blog.admin.profile.create','uses'=>'BlogAdminController@createProfile']);
//Route::post('dashboard/blog/profile', ['as'=>'blog.admin.profile.store','uses'=>'BlogAdminController@storeProfile']);
//Route::get('dashboard/blog/profile/{slug}', ['as'=>'blog.admin.profile.show','uses'=>'BlogAdminController@showProfile']);
Route::get('dashboard/blog/profile/{slug}/edit', ['as'=>'blog.admin.profile.edit','uses'=>'BlogAdminController@editProfile']);
Route::put('dashboard/blog/profile/{slug}', ['as'=>'blog.admin.profile.update','uses'=>'BlogAdminController@updateProfile']);
//Route::delete('dashboard/blog/profile/{slug}', ['as'=>'blog.admin.profile.destroy','uses'=>'BlogAdminController@destroyProfile']);

// API
Route::get('dashboard/blog/api/sort/{table}/{column}/{order}/{trashed?}', ['as'=>'blog.admin.api.sort','uses'=>'BlogAdminController@sort']);
Route::post('dashboard/blog/api/autosave', ['as'=>'blog.admin.api.autosave','uses'=>'BlogAdminController@autoSave']);
Route::get('dashboard/blog/api/tags/{slug}', ['as'=>'blog.admin.api.tags','uses'=>'BlogAdminController@getTag']);
