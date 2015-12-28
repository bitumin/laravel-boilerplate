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

// Blog (public) routes
Route::resource('blog', 'Blog\BlogController', ['only' => ['index', 'show']]);
Route::post('blog/{slug}', ['as'=>'blog.confirmPass','uses'=>'Blog\BlogController@show']);
Route::get('blog/archive/{year}/{month}', ['as'=>'blog.archive','uses'=>'Blog\BlogController@archive']);
Route::get('blog/category/{category}', ['as'=>'blog.category','uses'=>'Blog\BlogController@category']);
Route::get('blog/protected/verify/{hash}', ['as'=>'blog.askPassword','uses'=>'Blog\BlogController@askPassword']);
Route::post('comments', ['as'=>'comments.store','uses'=>'Blog\CommentsController@store']);

// Dashboard routes

// Home
Route::get('admin', ['as'=>'admin.dashboard','uses'=>'Blog\DashboardController@index']);

// User
Route::group(['middleware' => 'App\Http\Middleware\Blog\HasAdminRole'], function() {
	Route::resource('users', 'Blog\UserController', ['as'=>'admin']);
	Route::get('users/overview/{trashed?}', ['as'=>'admin.users.overview','uses'=>'Blog\UserController@index']);
	Route::get('users/{hash}/restore', ['as'=>'admin.users.restore','uses'=>'Blog\UserController@restore']);
});

// Categories
Route::group(['middleware' => 'App\Http\Middleware\Blog\HasAdminRole'], function() {
	Route::resource('categories', 'Blog\CategoriesController', ['as'=>'admin']);
	Route::get('categories/overview/{trashed?}', ['as'=>'admin.categories.overview','uses'=>'Blog\CategoriesController@index']);
	Route::get('categories/{hash}/restore', ['as'=>'admin.categories.restore','uses'=>'Blog\CategoriesController@restore']);
});

// Posts
Route::resource('posts', 'Blog\PostsController', ['except'=>['store', 'update'], 'as'=>'admin']);
Route::post('posts', ['as'=>'admin.posts.store','uses'=>'Blog\PostsController@store']);
Route::post('posts/image/upload', ['as'=>'admin.posts.uploadImage','uses'=>'Blog\PostsController@uploadImage']);
Route::get('posts/overview/{trashed?}', ['as'=>'admin.posts.overview','uses'=>'Blog\PostsController@index']);
Route::get('posts/action/cancel/{hash?}', ['as'=>'admin.posts.cancel','uses'=>'Blog\PostsController@cancel']);
Route::get('posts/{hash}/restore', ['as'=>'admin.posts.restore','uses'=>'Blog\PostsController@restore']);

// Tags
Route::group(['middleware' => 'App\Http\Middleware\Blog\HasAdminOrAuthorRole'], function() {
	Route::resource('tags', 'Blog\TagsController', ['except' => 'store', 'as'=>'admin']);
	Route::post('tags', ['as'=>'admin.tags.store','uses'=>'Blog\TagsController@storeOrUpdate']);
	Route::get('tags/overview/{trashed?}', ['as'=>'admin.tags.overview','uses'=>'Blog\TagsController@index']);
	Route::get('tags/{hash}/restore', ['as'=>'admin.tags.restore','uses'=>'Blog\TagsController@restore']);
	Route::get('comments/{revised?}', ['as'=>'admin.comments.index','uses'=>'Blog\CommentsController@index']);
	Route::get('comments/changestatus/{hash}/{revised}', ['as'=>'admin.comments.changeStatus','uses'=>'Blog\CommentsController@changeStatus']);
});

// Profiles
Route::resource('profile', 'Blog\ProfileController', ['as'=>'admin']);

// API
Route::get('api/sort/{table}/{column}/{order}/{trashed?}', ['as'=>'admin.api.sort','uses'=>'Blog\ApiController@sort']);
Route::get('api/slug/checkIfSlugIsUnique/{slug}', ['as'=>'admin.api.slug.checkIfUnique','uses'=>'Blog\ApiController@checkIfSlugIsUnique']);
Route::post('api/autosave', ['as'=>'admin.api.autosave','uses'=>'Blog\ApiController@autoSave']);
Route::get('api/tags/{hash}', ['as'=>'admin.api.tags','uses'=>'Blog\ApiController@getTag']);
