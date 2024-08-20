<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\VerificationController;

Route::get('/test', function () {
    return 'This is a test route!';
});

// Guest
Route::get('/', [GuestController::class, 'home'])->name('guest.home');
Route::get('/advertisements', [GuestController::class, 'advertisements'])->name('guest.advertisement.list');
Route::get('/news', [GuestController::class, 'news'])->name('guest.news');
Route::get('/news-detail/{id}', [GuestController::class, 'showNews'])->name('guest.show.news');
Route::get('/faqs', [GuestController::class, 'faqs'])->name('guest.faqs');
Route::get('/contact', [GuestController::class, 'contact'])->name('guest.contact');

Route::get('/one-page', [GuestController::class, 'onePage']);

// User
Route::get('/user/login', [UserController::class, 'showLogin'])->name('user.show.login');
Route::post('/user/login', [UserController::class, 'storeLogin'])->name('user.store.login');
Route::get('/user/register', [UserController::class, 'showRegister'])->name('user.show.register');
Route::post('/user/register', [UserController::class, 'storeRegister'])->name('user.store.register');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// Alarm
Route::get('/user/alarms', [UserController::class, 'getAlarms'])->name('user.get.alarms');
Route::get('/user/check/alarm/{id}', [UserController::class, 'checkAlarm'])->name('user.check.alarm');
Route::get('/user/delete/alarm/{id}', [UserController::class, 'deleteAlarm'])->name('user.delete.alarm');

// Member List
Route::get('/user/members', [UserController::class, 'getMembers'])->name('user.get.members');

// Advertisement
Route::get('/user/advertisements', [UserController::class, 'getAdvertisements'])->name('user.get.advertisements');
Route::get('/user/show/advertisement', [UserController::class, 'showAdvertisement'])->name('user.show.advertisement');
Route::post('/user/store/advertisement', [UserController::class, 'storeAdvertisement'])->name('user.store.advertisement');
Route::post('/user/update/advertisement', [UserController::class, 'updateAdvertisement'])->name('user.update.advertisement');

// Announcement
Route::get('/user/announcements', [UserController::class, 'getAnnouncements'])->name('user.get.announcements');
Route::get('/user/show/announcements', [UserController::class, 'showAnnouncements'])->name('user.show.announcements');
Route::get('/user/show/announcement/{id}', [UserController::class, 'showAnnouncement'])->name('user.show.announcement');
Route::get('/user/add/announcement', [UserController::class, 'addAnnouncement'])->name('user.add.announcement');
Route::post('/user/store/announcement', [UserController::class, 'storeAnnouncement'])->name('user.store.announcement');
Route::get('/user/edit/announcement/{id}', [UserController::class, 'editAnnouncement'])->name('user.edit.announcement');
Route::post('/user/update/announcement', [UserController::class, 'updateAnnouncement'])->name('user.update.announcement');
Route::get('/user/delete/announcement/{id}', [UserController::class, 'deleteAnnouncement'])->name('user.delete.announcement');

// Message
Route::get('/user/messages', [UserController::class, 'getMessages'])->name('user.get.messages');
Route::post('/user/messages', [UserController::class, 'sendMessage'])->name('user.send.message');

// Notice
Route::get('/user/notices', [UserController::class, 'getNotices'])->name('user.get.notices');

// Plan
Route::get('user/plans', [UserController::class, 'getPlans'])->name('user.get.plans');

// Admin
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.show.login');
Route::post('/admin/login', [AdminController::class, 'storeLogin'])->name('admin.store.login');

// advertisement
Route::get('/admin/advertisements', [AdminController::class, 'getAdvertisements'])->name('admin.get.advertisements');

// news
Route::get('/admin/news', [AdminController::class, 'getNews'])->name('admin.get.news');
Route::get('/admin/add/news', [AdminController::class, 'addNews'])->name('admin.add.news');
Route::post('/admin/store/news', [AdminController::class, 'storeNews'])->name('admin.store.news');
Route::get('/admin/edit/news/{id}', [AdminController::class, 'editNews'])->name('admin.edit.news');
Route::post('/admin/update/news', [AdminController::class, 'updateNews'])->name('admin.update.news');
Route::get('/admin/delete/news/{id}', [AdminController::class, 'deleteNews'])->name('admin.delete.news');

// notice
Route::get('/admin/notices', [AdminController::class, 'getNotices'])->name('admin.get.notices');
Route::get('/admin/add/notice', [AdminController::class, 'addNotice'])->name('admin.add.notice');
Route::post('/admin/store/notice', [AdminController::class, 'storeNotice'])->name('admin.store.notice');
Route::get('/admin/edit/notice/{id}', [AdminController::class, 'editNotice'])->name('admin.edit.notice');
Route::post('/admin/update/notice', [AdminController::class, 'updateNotice'])->name('admin.update.notice');
Route::get('/admin/delete/notice/{id}', [AdminController::class, 'deleteNotice'])->name('admin.delete.notice');