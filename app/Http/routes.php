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

// Example routes:
// Route::get('uri',['as'=>'route','uses'=>'controller']);
// Route::post('uri',['as'=>'route','uses'=>'controller']);

// Main routes
Route::get('/',['as'=>'public.home','uses'=>'PublicController@getHome']);
Route::get('portfolio',['as'=>'public.portfolio','uses'=>'PublicController@getPortfolio']);
Route::get('examples',['as'=>'public.examples','uses'=>'PublicController@getExamples']);
Route::get('templates',['as'=>'public.templates','uses'=>'PublicController@getTemplates']);

// Development examples
Route::get('example/basic',['as'=>'example.basic','uses'=>'ExamplesController@exampleBasic']);
Route::get('example/code',['as'=>'example.code','uses'=>'ExamplesController@exampleCode']);
Route::get('example/flot-charts',['as'=>'example.flot','uses'=>'ExamplesController@exampleFlotCharts']);
Route::get('example/morris-charts',['as'=>'example.morris','uses'=>'ExamplesController@exampleMorrisCharts']);
Route::get('example/timeline',['as'=>'example.timeline','uses'=>'ExamplesController@exampleTimeline']);
Route::get('example/tables',['as'=>'example.tables','uses'=>'ExamplesController@exampleTables']);
Route::get('example/dashboard',['as'=>'example.dashboard','uses'=>'ExamplesController@exampleDashboard']);
Route::get('example/forms',['as'=>'example.forms','uses'=>'ExamplesController@exampleForms']);
Route::get('example/buttons',['as'=>'example.buttons','uses'=>'ExamplesController@exampleButtons']);
Route::get('example/grid',['as'=>'example.grid','uses'=>'ExamplesController@exampleGrid']);
Route::get('example/icons',['as'=>'example.icons','uses'=>'ExamplesController@exampleIcons']);
Route::get('example/notifications',['as'=>'example.notifications','uses'=>'ExamplesController@exampleNotifications']);
Route::get('example/panels',['as'=>'example.panels','uses'=>'ExamplesController@examplePanels']);
Route::get('example/typography',['as'=>'example.typography','uses'=>'ExamplesController@exampleTypography']);
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
 * DASHBOARD ROUTES
 */
Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardController@getDashboard']);

// User profile management
Route::get('dashboard/profile',['as'=>'dashboard.profile','uses'=>'DashboardController@getProfile']);
Route::post('dashboard/profile/update-info',['as'=>'dashboard.profile.update.info','uses'=>'DashboardController@postProfileUpdateInfo']);
Route::post('dashboard/profile/update-password',['as'=>'dashboard.profile.update.password','uses'=>'DashboardController@postProfileUpdatePassword']);

// User settings
Route::get('dashboard/settings',['as'=>'dashboard.settings','uses'=>'DashboardController@getSettings']);

// Project calculator specific routes
Route::get('dashboard/calculator',['as'=>'dashboard.calculator','uses'=>'ProjectCalculatorController@getView']);
Route::get('dashboard/calculator/previewResults',['as'=>'dashboard.calculator.previewResults','uses'=>'ProjectCalculatorController@calculate']);
Route::get('dashboard/calculator/testReport',['as'=>'dashboard.calculator.testReport','uses'=>'ProjectCalculatorController@generateTestReport']);
Route::get('dashboard/calculator/testBudget',['as'=>'dashboard.calculator.testBudget','uses'=>'ProjectCalculatorController@generateTestBudget']);
Route::post('dashboard/calculator/saveProject',['as'=>'dashboard.calculator.saveProject','uses'=>'ProjectCalculatorController@saveProject']);
Route::get('dashboard/calculator/openReport',['as'=>'dashboard.calculator.openReport','uses'=>'ProjectCalculatorController@openReport']);
Route::get('dashboard/calculator/openBudget',['as'=>'dashboard.calculator.openBudget','uses'=>'ProjectCalculatorController@openBudget']);

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
 * Social registration/login.
 *
 * Don't forget to fill the apps ID and SECRET fields in .env.
 * To register new apps and obtain their ID/SECRET codes, visit their corresponding webs:
 * https://developers.facebook.com/apps
 * https://github.com/settings/applications/new
 * https://www.linkedin.com/developer/apps/new
 * https://apps.twitter.com/app/new
 * https://console.developers.google.com/
 * https://bitbucket.org/account/user/bitumin/oauth-consumers/new
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

// (Mostly)Bootstrap based templates
Route::get('template/creative/index',['as'=>'template.creative.index','uses'=>'ExamplesController@getTemplateCreativeIndex']);
Route::get('template/clean-blog/index',['as'=>'template.clean-blog.index','uses'=>'ExamplesController@getTemplateCleanBlogIndex']);
Route::get('template/clean-blog/post',['as'=>'template.clean-blog.post','uses'=>'ExamplesController@getTemplateCleanBlogPost']);
Route::get('template/clean-blog/about',['as'=>'template.clean-blog.about','uses'=>'ExamplesController@getTemplateCleanBlogAbout']);
Route::get('template/clean-blog/contact',['as'=>'template.clean-blog.contact','uses'=>'ExamplesController@getTemplateCleanBlogContact']);
Route::get('template/agency/index',['as'=>'template.agency.index','uses'=>'ExamplesController@getTemplateAgencyIndex']);
Route::get('template/freelancer/index',['as'=>'template.freelancer.index','uses'=>'ExamplesController@getTemplateFreelancerIndex']);
Route::get('template/shop/index',['as'=>'template.shop.index','uses'=>'ExamplesController@getTemplateShopIndex']);
Route::get('template/shop/item',['as'=>'template.shop.item','uses'=>'ExamplesController@getTemplateShopItem']);
Route::get('template/business-casual/index',['as'=>'template.business-casual.index','uses'=>'ExamplesController@getTemplateBusinessCasualIndex']);
Route::get('template/business-casual/about',['as'=>'template.business-casual.about','uses'=>'ExamplesController@getTemplateBusinessCasualAbout']);
Route::get('template/business-casual/blog',['as'=>'template.business-casual.blog','uses'=>'ExamplesController@getTemplateBusinessCasualBlog']);
Route::get('template/business-casual/contact',['as'=>'template.business-casual.contact','uses'=>'ExamplesController@getTemplateBusinessCasualContact']);
Route::get('template/stylish-portfolio/index',['as'=>'template.stylish-portfolio.index','uses'=>'ExamplesController@getTemplateStylishPortfolioIndex']);
Route::get('template/design/index',['as'=>'template.design.index','uses'=>'ExamplesController@getTemplateDesignIndex']);
Route::get('template/architect/index',['as'=>'template.architect.index','uses'=>'ExamplesController@getTemplateArchitectIndex']);
Route::get('template/architect/projects',['as'=>'template.architect.projects','uses'=>'ExamplesController@getTemplateArchitectProjects']);
Route::get('template/architect/detail',['as'=>'template.architect.detail','uses'=>'ExamplesController@getTemplateArchitectDetail']);
Route::get('template/architect/media',['as'=>'template.architect.media','uses'=>'ExamplesController@getTemplateArchitectMedia']);
Route::get('template/architect/about',['as'=>'template.architect.about','uses'=>'ExamplesController@getTemplateArchitectAbout']);
Route::get('template/architect/contact',['as'=>'template.architect.contact','uses'=>'ExamplesController@getTemplateArchitectContact']);
Route::get('template/studio/index',['as'=>'template.studio.index','uses'=>'ExamplesController@getTemplateStudioIndex']);
Route::get('template/resume/index',['as'=>'template.resume.index','uses'=>'ExamplesController@getTemplateResumeIndex']);
Route::get('template/resume/blog',['as'=>'template.resume.blog','uses'=>'ExamplesController@getTemplateResumeBlog']);
Route::get('template/resume/blogdetail',['as'=>'template.resume.blogdetail','uses'=>'ExamplesController@getTemplateResumeBlogdetail']);
