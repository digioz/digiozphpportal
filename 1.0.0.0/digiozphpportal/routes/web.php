<?php

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

Route::get('/', 'HomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/index', 'HomeController@index')->name('home');
Route::get('/home/about', 'HomeController@about')->name('about');
Route::get('/home/contact', 'HomeController@contact')->name('contact');
Route::get('/home/announcements', 'HomeController@announcements')->name('announcements');

Route::get('/page/{url}', 'PagesController@index')->name('page');

Route::group(['middleware' => 'auth.admin', 'prefix' => 'admin'], function() {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('announcementmanager', 'Admin\AnnouncementsManagerController');
    Route::resource('chatmanager', 'Admin\ChatManagerController');
    Route::resource('commentconfigmanager', 'Admin\CommentConfigManagerController');
    Route::resource('commentmanager', 'Admin\CommentManagerController');
    Route::resource('commentpostsmanager', 'Admin\CommentPostsManagerController');
    Route::resource('configurationmanager', 'Admin\ConfigurationManagerController');
    Route::resource('databaseutilities', 'Admin\DatabaseUtilitiesController');
    Route::resource('filemanager', 'Admin\FileManagerController');
    Route::resource('linkcategorymanager', 'Admin\LinkCategoryManagerController');
    Route::resource('linkmanager', 'Admin\LinkManagerController');
    Route::resource('logmanager', 'Admin\LogController');
    Route::resource('mailinglistcampaignmanager', 'Admin\MailingListCampaignManagerController');
    Route::resource('mailinglistimagemanager', 'Admin\MailingListImageManagerController');
    Route::resource('mailinglistmanager', 'Admin\MailingListManagerController');
    Route::resource('mailinglistsubscribermanager', 'Admin\MailingListSubscriberManagerController');
    Route::resource('menumanager', 'Admin\MenuManagerController');
    Route::resource('modulemanager', 'Admin\ModuleManagerController');
    Route::resource('ordermanager', 'Admin\OrderManagerController');
    Route::resource('pagemanager', 'Admin\PageManagerController');
    Route::resource('picturealbummanager', 'Admin\PictureAlbumManagerController');
    Route::resource('picturemanager', 'Admin\PictureManagerController');
    Route::resource('pluginmanager', 'Admin\PluginManagerController');
    Route::resource('pollmanager', 'Admin\PollManagerController');
    Route::resource('productcategorymanager', 'Admin\ProductCategoryManagerController');
    Route::resource('productmanager', 'Admin\ProductManagerController');
    Route::resource('slideshowmanager', 'Admin\SlideShowManagerController');
    Route::resource('statisticsmanager', 'Admin\StatisticsManagerController');
    Route::resource('usermanager', 'Admin\UserManagerController');
    Route::resource('userrolemanager', 'Admin\UserRoleManagerController');
    Route::resource('videoalbummanager', 'Admin\VideoAlbumManagerController');
    Route::resource('videomanager', 'Admin\VideoManagerController');
});

Route::resource('chat','ChatController');
Route::resource('comments','CommentsController');
Route::resource('links','LinksController');
Route::resource('mailinglist','MailingListController');
Route::resource('pictures','PicturesController');
Route::resource('polls','PollsController');
Route::resource('pollcharts','PollChartsController');
Route::resource('privatemessages','PrivateMessagesController');
Route::get('profile/changepassword', 'ProfileController@changepassword')->name('changepassword');
Route::post('profile/changepasswordprocess', 'ProfileController@changepasswordprocess')->name('changepasswordprocess');
Route::resource('profile','ProfileController');
Route::resource('searchpages','SearchPagesController');
Route::resource('store','StoreController');
Route::resource('twitter','TwitterController');
Route::resource('videos','VideosController');