<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\UserMemberController;
use App\Http\Controllers\AdminMemberController;
use App\Http\Controllers\AdminNoticeController;
use App\Http\Controllers\UserMessageController;
use App\Http\Controllers\AdminSectionController;
use App\Http\Controllers\UserMaterialController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\AdminMaterialController;
use App\Http\Controllers\AdminSubAdminController;
use App\Http\Controllers\UserAnnouncementController;
use App\Http\Controllers\AdminAnnouncementController;
use App\Http\Controllers\UserAdvertisementController;
use App\Http\Controllers\AdminAdvertisementController;

// Guest
Route::get('/', [GuestController::class, 'home'])->name('guest.home');
Route::get('/advertisements', [GuestController::class, 'advertisements'])->name('guest.advertisement.list');
Route::get('/news', [GuestController::class, 'news'])->name('guest.news');
Route::get('/news-detail/{id}', [GuestController::class, 'showNews'])->name('guest.show.news');
Route::get('/faqs', [GuestController::class, 'faqs'])->name('guest.faqs');
Route::get('/contact', [GuestController::class, 'contact'])->name('guest.contact');
Route::post('/send/contact', [GuestController::class, 'sendContact'])->name('guest.send.contact');
Route::post('/send/advertisement-contact', [GuestController::class, 'sendAdvertisementContact'])->name('guest.send.advertisement.contact');
Route::get('/privacy-policy', [GuestController::class, 'privacyPolicy'])->name('guest.privacy.policy');

Route::get('/ad/{param}', [GuestController::class, 'showOnePageAdvertisement'])->name('guest.one.page.advertisement');
Route::get('/one-page', [GuestController::class, 'onePage']);

// User
Route::get('/user/login', [UserController::class, 'showLogin'])->name('user.show.login');
Route::post('/user/login', [UserController::class, 'storeLogin'])->name('user.store.login');
Route::get('/user/register', [UserController::class, 'showRegister'])->name('user.show.register');
Route::post('/user/register', [UserController::class, 'storeRegister'])->name('user.store.register');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

// User-specific routes
Route::group(['middleware' => ['user']], function () {
    Route::get('/user/logout', [UserController::class, 'logout'])->name('user.logout');
    Route::get('/user/change/password', [UserController::class, 'changePassword'])->name('user.change.password');
    Route::post('/user/update/password', [UserController::class, 'updatePassword'])->name('user.update.password');

    // Profile
    Route::get('/user/show/profile', [UserController::class, 'showProfile'])->name('user.show.profile');
    Route::post('/user/update/profile', [UserController::class, 'updateProfile'])->name('user.update.profile');
    Route::post('/user/update/company', [UserController::class, 'updateCompany'])->name('user.update.company');

    // Alarm
    Route::get('/user/alarms', [UserController::class, 'getAlarms'])->name('user.get.alarms');
    Route::get('/user/check/alarm/{id}', [UserController::class, 'checkAlarm'])->name('user.check.alarm');
    Route::get('/user/delete/alarm/{id}', [UserController::class, 'deleteAlarm'])->name('user.delete.alarm');

    // Member List
    Route::get('/user/members', [UserMemberController::class, 'getMembers'])->name('user.get.members');
    Route::get('/user/show/member-detail/{id}', [UserMemberController::class, 'showMemberDetail'])->name('user.show.member.detail');

    Route::group(['middleware' => ['user:1']], function() {
        // Advertisement
        Route::get('/user/advertisements', [UserAdvertisementController::class, 'getAdvertisements'])->name('user.get.advertisements');
        Route::get('/user/add/advertisement', [UserAdvertisementController::class, 'addAdvertisement'])->name('user.add.advertisement');
        // Route::get('/user/show/advertisement', [UserAdvertisementController::class, 'showAdvertisement'])->name('user.show.advertisement');
        Route::post('/user/store/advertisement', [UserAdvertisementController::class, 'storeAdvertisement'])->name('user.store.advertisement');
        Route::get('/user/edit/advertisement/{id}', [UserAdvertisementController::class, 'editAdvertisement'])->name('user.edit.advertisement');
        Route::post('/user/update/advertisement', [UserAdvertisementController::class, 'updateAdvertisement'])->name('user.update.advertisement');
        Route::post('/user/update/advertisement-status', [UserAdvertisementController::class, 'updateAdvertisementStatus'])->name('user.update.advertisement.status');
        Route::post('/user/update/menu-bar-status', [UserAdvertisementController::class, 'updateMenuBarStatus'])->name('user.update.menu.bar.status');
        Route::get('/user/delete/advertisement/{id}', [UserAdvertisementController::class, 'deleteAdvertisement'])->name('user.delete.advertisement');
        // Section
        Route::get('/user/show/sections/{id}', [UserAdvertisementController::class, 'showSections'])->name('user.show.sections');
        Route::get('/user/add/section/{id}', [UserAdvertisementController::class, 'addSection'])->name('user.add.section');
        Route::post('/user/store/section', [UserAdvertisementController::class, 'storeSection'])->name('user.store.section');
        Route::get('/user/edit/section/{id}', [UserAdvertisementController::class, 'editSection'])->name('user.edit.section');
        Route::post('/user/update/section', [UserAdvertisementController::class, 'updateSection'])->name('user.update.section');
        Route::post('/user/update/section-status', [UserAdvertisementController::class, 'updateSectionStatus'])->name('user.update.section.status');
        Route::post('/user/section/order-up/{id}', [UserAdvertisementController::class, 'orderUpSection'])->name('user.section.order-up');
        Route::post('/user/section/order-down/{id}', [UserAdvertisementController::class, 'orderDownSection'])->name('user.section.order-down');
        Route::get('/user/delete/section/{id}', [UserAdvertisementController::class, 'deleteSection'])->name('user.delete.section');
        Route::get('/user/preview/section/{id}', [UserAdvertisementController::class, 'previewSection'])->name('user.preview.section');

        // Block
        Route::get('/user/show/section/{id}/blocks', [UserAdvertisementController::class, 'showSectionBlocks'])->name('user.show.section.blocks');
        // Header Block
        Route::get('/user/add/section/{id}/header-block', [UserAdvertisementController::class, 'addHeaderBlock'])->name('user.add.header.block');
        Route::post('/user/store/section/header-block', [UserAdvertisementController::class, 'storeHeaderBlock'])->name('user.store.header.block');
        Route::get('/user/edit/section/header-block/{id}', [UserAdvertisementController::class, 'editHeaderBlock'])->name('user.edit.header.block');
        Route::post('/user/update/section/header-block', [UserAdvertisementController::class, 'updateHeaderBlock'])->name('user.update.header.block');
        Route::get('/user/delete/section/header-block/{id}', [UserAdvertisementController::class, 'deleteHeaderBlock'])->name('user.delete.header.block');
        Route::post('/user/update/section/header-block-status', [UserAdvertisementController::class, 'updateHeaderBlockStatus'])->name('user.update.section.header.block.status');
        // Footer Block
        Route::get('/user/add/section/{id}/footer-block', [UserAdvertisementController::class, 'addFooterBlock'])->name('user.add.footer.block');
        Route::post('/user/store/section/footer-block', [UserAdvertisementController::class, 'storeFooterBlock'])->name('user.store.footer.block');
        Route::get('/user/edit/section/footer-block/{id}', [UserAdvertisementController::class, 'editFooterBlock'])->name('user.edit.footer.block');
        Route::post('/user/update/section/footer-block', [UserAdvertisementController::class, 'updateFooterBlock'])->name('user.update.footer.block');
        Route::get('/user/delete/section/footer-block/{id}', [UserAdvertisementController::class, 'deleteFooterBlock'])->name('user.delete.footer.block');
        Route::post('/user/update/section/footer-block-status', [UserAdvertisementController::class, 'updateFooterBlockStatus'])->name('user.update.section.footer.block.status');
        // List Block
        Route::get('/user/add/section/{id}/list-block', [UserAdvertisementController::class, 'addListBlock'])->name('user.add.list.block');
        Route::post('/user/store/section/list-block', [UserAdvertisementController::class, 'storeListBlock'])->name('user.store.list.block');
        Route::get('/user/edit/section/list-block/{id}', [UserAdvertisementController::class, 'editListBlock'])->name('user.edit.list.block');
        Route::post('/user/update/section/list-block', [UserAdvertisementController::class, 'updateListBlock'])->name('user.update.list.block');
        Route::get('/user/delete/section/list-block/{id}', [UserAdvertisementController::class, 'deleteListBlock'])->name('user.delete.list.block');
        Route::post('/user/update/section/list-block-status', [UserAdvertisementController::class, 'updateListBlockStatus'])->name('user.update.section.list.block.status');
        // Box Block
        Route::get('/user/add/section/{id}/box-block', [UserAdvertisementController::class, 'addBoxBlock'])->name('user.add.box.block');
        Route::post('/user/store/section/box-block', [UserAdvertisementController::class, 'storeBoxBlock'])->name('user.store.box.block');
        Route::get('/user/edit/section/box-block/{id}', [UserAdvertisementController::class, 'editBoxBlock'])->name('user.edit.box.block');
        Route::post('/user/update/section/box-block', [UserAdvertisementController::class, 'updateBoxBlock'])->name('user.update.box.block');
        Route::get('/user/delete/section/box-block/{id}', [UserAdvertisementController::class, 'deleteBoxBlock'])->name('user.delete.box.block');
        Route::post('/user/update/section/box-block-status', [UserAdvertisementController::class, 'updateBoxBlockStatus'])->name('user.update.section.box.block.status');
        // Accordion Block
        Route::get('/user/add/section/{id}/accordion-block', [UserAdvertisementController::class, 'addAccordionBlock'])->name('user.add.accordion.block');
        Route::post('/user/store/section/accordion-block', [UserAdvertisementController::class, 'storeAccordionBlock'])->name('user.store.accordion.block');
        Route::get('/user/edit/section/accordion-block/{id}', [UserAdvertisementController::class, 'editAccordionBlock'])->name('user.edit.accordion.block');
        Route::post('/user/update/section/accordion-block', [UserAdvertisementController::class, 'updateAccordionBlock'])->name('user.update.accordion.block');
        Route::get('/user/delete/section/accordion-block/{id}', [UserAdvertisementController::class, 'deleteAccordionBlock'])->name('user.delete.accordion.block');
        Route::post('/user/update/section/accordion-block-status', [UserAdvertisementController::class, 'updateAccordionBlockStatus'])->name('user.update.section.accordion.block.status');

        // Sub Block
        Route::get('/user/show/{type}/block/{id}/sub-blocks', [UserAdvertisementController::class, 'showBlockSubBlocks'])->name('user.show.block.sub.blocks');
        // Sub Box Block
        Route::get('/user/add/box-block/{id}/sub-box-block', [UserAdvertisementController::class, 'addSubBoxBlock'])->name('user.add.sub.box.block');
        Route::post('/user/store/box-block/sub-box-block', [UserAdvertisementController::class, 'storeSubBoxBlock'])->name('user.store.sub.box.block');
        Route::get('/user/edit/box-block/sub-box-block/{id}', [UserAdvertisementController::class, 'editSubBoxBlock'])->name('user.edit.sub.box.block');
        Route::post('/user/update/box-block/sub-box-block', [UserAdvertisementController::class, 'updateSubBoxBlock'])->name('user.update.sub.box.block');
        Route::get('/user/delete/box-block/sub-box-block/{id}', [UserAdvertisementController::class, 'deleteSubBoxBlock'])->name('user.delete.sub.box.block');
        Route::post('/user/update/box-block/sub-box-block-status', [UserAdvertisementController::class, 'updateSubBoxBlockStatus'])->name('user.update.box.block.sub.box.block.status');
        // Sub Accordion Block
        Route::get('/user/add/accordion-block/{id}/sub-accordion-block', [UserAdvertisementController::class, 'addSubAccordionBlock'])->name('user.add.sub.accordion.block');
        Route::post('/user/store/accordion-block/sub-accordion-block', [UserAdvertisementController::class, 'storeSubAccordionBlock'])->name('user.store.sub.accordion.block');
        Route::get('/user/edit/accordion-block/sub-accordion-block/{id}', [UserAdvertisementController::class, 'editSubAccordionBlock'])->name('user.edit.sub.accordion.block');
        Route::post('/user/update/accordion-block/sub-accordion-block', [UserAdvertisementController::class, 'updateSubAccordionBlock'])->name('user.update.sub.accordion.block');
        Route::get('/user/delete/accordion-block/sub-accordion-block/{id}', [UserAdvertisementController::class, 'deleteSubAccordionBlock'])->name('user.delete.sub.accordion.block');
        Route::post('/user/update/accordion-block/sub-accordion-block-status', [UserAdvertisementController::class, 'updateSubAccordionBlockStatus'])->name('user.update.accordion.block.sub.accordion.block.status');
    });

    // Material
    Route::get('/user/materials', [UserMaterialController::class, 'getMaterials'])->name('user.get.materials');
    Route::get('/user/material-icons', [UserMaterialController::class, 'getMaterialIcons'])->name('user.get.material.icons');

    // Announcement
    Route::get('/user/announcements', [UserAnnouncementController::class, 'getAnnouncements'])->name('user.get.announcements');
    Route::get('/user/show/announcements', [UserAnnouncementController::class, 'showAnnouncements'])->name('user.show.announcements');
    Route::get('/user/show/announcement/{id}', [UserAnnouncementController::class, 'showAnnouncement'])->name('user.show.announcement');
    Route::get('/user/add/announcement', [UserAnnouncementController::class, 'addAnnouncement'])->name('user.add.announcement');
    Route::post('/user/store/announcement', [UserAnnouncementController::class, 'storeAnnouncement'])->name('user.store.announcement');
    Route::get('/user/edit/announcement/{id}', [UserAnnouncementController::class, 'editAnnouncement'])->name('user.edit.announcement');
    Route::post('/user/update/announcement', [UserAnnouncementController::class, 'updateAnnouncement'])->name('user.update.announcement');
    Route::get('/user/delete/announcement/{id}', [UserAnnouncementController::class, 'deleteAnnouncement'])->name('user.delete.announcement');
    Route::get('/user/request/announcement/{id}', [UserAnnouncementController::class, 'requestAnnouncement'])->name('user.request.announcement');
    Route::get('/user/show/announcement/{id}/participants', [UserAnnouncementController::class, 'showAnnouncementParticipants'])->name('user.show.announcement.participants');
    Route::get('/user/update/participant/{id}/status/{status}/{reason}', [UserAnnouncementController::class, 'updateParticipantStatus'])->name('user.update.participant.status');


    // Message
    Route::get('/user/messages', [UserMessageController::class, 'getMessages'])->name('user.get.messages');
    Route::get('user/start/{id}/message', [UserMessageController::class, 'startMessage'])->name('user.start.message');
    Route::post('/user/send/message', [UserMessageController::class, 'sendMessage'])->name('user.send.message');
    Route::post('/user/{id}/seen/message', [UserMessageController::class, 'seenMessage'])->name('user.seen.message');
    Route::get('/user/received/message', [UserMessageController::class, 'receivedMessage'])->name('user.received.message');

    // Notice
    Route::get('/user/notices', [UserController::class, 'getNotices'])->name('user.get.notices');

    // Plan
    Route::get('user/plans', [UserController::class, 'getPlans'])->name('user.get.plans');
    Route::get('/user/purchase/plan/{id}', [UserController::class, 'purchasePlan'])->name('user.purchase.plan');
    Route::post('/user/bank-transfer-payment', [UserController::class, 'bankTransferPayment'])->name('user.bank.transfer.payment');
    Route::post('/user/complete-payment', [UserController::class, 'completePayment'])->name('user.complete.payment');
});

// Admin
Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.show.login');
Route::post('/admin/login', [AdminController::class, 'storeLogin'])->name('admin.store.login');

// Admin-specific routes
Route::group(['middleware' => ['admin']], function () {
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/change/password', [AdminController::class, 'changePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'updatePassword'])->name('admin.update.password');
    
    // home
    Route::get('/admin/home', [AdminHomeController::class, 'getHome'])->name('admin.get.home');
    // header
    Route::get('/admin/add/header', [AdminHomeController::class, 'addHeader'])->name('admin.add.header');
    Route::post('/admin/store/header', [AdminHomeController::class, 'storeHeader'])->name('admin.store.header');
    Route::get('/admin/edit/headers', [AdminHomeController::class, 'editHeaders'])->name('admin.edit.headers');
    Route::get('/admin/edit/header/{id}', [AdminHomeController::class, 'editHeader'])->name('admin.edit.header');
    Route::post('/admin/update/header', [AdminHomeController::class, 'updateHeader'])->name('admin.update.header');
    Route::get('/admin/delete/header/{id}', [AdminHomeController::class, 'deleteHeader'])->name('admin.delete.header');
    // footer
    Route::get('/admin/edit/footers', [AdminHomeController::class, 'editFooters'])->name('admin.edit.footers');
    Route::get('/admin/add/footer', [AdminHomeController::class, 'addFooter'])->name('admin.add.footer');
    Route::post('/admin/store/footer', [AdminHomeController::class, 'storeFooter'])->name('admin.store.footer');
    Route::get('/admin/edit/footer/{id}', [AdminHomeController::class, 'editFooter'])->name('admin.edit.footer');
    Route::post('/admin/update/footer', [AdminHomeController::class, 'updateFooter'])->name('admin.update.footer');
    Route::get('/admin/delete/footer/{id}', [AdminHomeController::class, 'deleteFooter'])->name('admin.delete.footer');
    // sections
    // Route::get('/admin/add/top-section', [AdminHomeController::class, 'addTopSection'])->name('admin.add.top.section');
    // Route::post('/admin/store/top-section', [AdminHomeController::class, 'storeTopSection'])->name('admin.store.top.section');
    // Route::get('/admin/edit/top-sections', [AdminHomeController::class, 'editTopSections'])->name('admin.edit.top.sections');
    // Route::get('/admin/edit/top-section/{id}', [AdminHomeController::class, 'editTopSection'])->name('admin.edit.top.section');
    // Route::post('/admin/update/top-section', [AdminHomeController::class, 'updateTopSection'])->name('admin.update.top.section');
    // Route::get('/admin/delete/top-section/{id}', [AdminHomeController::class, 'deleteTopSection'])->name('admin.delete.top.section');
    // Route::post('/admin/top-section/order-up/{id}', [AdminHomeController::class, 'orderUpTopSection'])->name('admin.top.section.order-up');
    // Route::post('/admin/top-section/order-down/{id}', [AdminHomeController::class, 'orderDownTopSection'])->name('admin.top.section.order-down');
    // blocks
    // Route::get('/admin/add/top-section/{id}/top-block', [AdminHomeController::class, 'addTopBlock'])->name('admin.add.top.section.top.block');
    // Route::post('/admin/store/top-section/top-block', [AdminHomeController::class, 'storeTopBlock'])->name('admin.store.top.section.top.block');
    // Route::get('/admin/edit/top-section/{id}/top-blocks', [AdminHomeController::class, 'editTopBlocks'])->name('admin.edit.top.section.top.blocks');
    // Route::get('/admin/edit/top-section/{sid}/top-block/{id}', [AdminHomeController::class, 'editTopBlock'])->name('admin.edit.top.section.top.block');
    // Route::post('/admin/update/top-section/top-block', [AdminHomeController::class, 'updateTopBlock'])->name('admin.update.top.section.top.block');
    // Route::get('/admin/delete/top-section/{sid}/top-block/{id}', [AdminHomeController::class, 'deleteTopBlock'])->name('admin.delete.top.section.top.block');
    
    // members
    Route::get('/admin/members', [AdminMemberController::class, 'getMembers'])->name('admin.get.members');
    Route::get('/admin/show/member/{id}/detail', [AdminMemberController::class, 'showMemberDetail'])->name('admin.show.member.detail');
    Route::post('/admin/update/member-status', [AdminMemberController::class, 'updateMemberStatus'])->name('admin.update.member.status');
    Route::get('/admin/check/member/{id}/messages', [AdminMemberController::class, 'checkMemberMessage'])->name('admin.check.member.message');
    Route::get('/admin/approve/bank-transfer/{id}', [AdminMemberController::class, 'approveBankTransfer'])->name('admin.approve.bank.transfer');
    Route::get('/admin/reject/bank-transfer/{id}', [AdminMemberController::class, 'rejectBankTransfer'])->name('admin.reject.bank.transfer');
    
    // advertisements
    Route::get('/admin/advertisements', [AdminAdvertisementController::class, 'getAdvertisements'])->name('admin.get.advertisements');
    
    // materials
    Route::get('/admin/materials', [AdminMaterialController::class, 'getMaterials'])->name('admin.get.materials');
    Route::get('/admin/add/material', [AdminMaterialController::class, 'addMaterial'])->name('admin.add.material');
    Route::post('/admin/store/material', [AdminMaterialController::class, 'storeMaterial'])->name('admin.store.material');
    Route::get('/admin/edit/material/{id}', [AdminMaterialController::class, 'editMaterial'])->name('admin.edit.material');
    Route::post('/admin/update/material', [AdminMaterialController::class, 'updateMaterial'])->name('admin.update.material');
    Route::get('/admin/material/delete/{id}', [AdminMaterialController::class, 'deleteMaterial'])->name('admin.delete.material');
    Route::post('/admin/update/material-status', [AdminMaterialController::class, 'updateMaterialStatus'])->name('admin.update.material.status');
    Route::get('/admin/material-icons', [AdminMaterialController::class, 'getMaterialIcons'])->name('admin.get.material.icons');
    
    // sections
    Route::get('/admin/sections', [AdminSectionController::class, 'getSections'])->name('admin.get.sections');
    Route::get('/admin/add/section', [AdminSectionController::class, 'addSection'])->name('admin.add.section');
    Route::post('/admin/store/section', [AdminSectionController::class, 'storeSection'])->name('admin.store.section');
    Route::get('/admin/preview/section/{id}', [AdminSectionController::class, 'previewSection'])->name('admin.preview.section');
    Route::get('/admin/edit/section/{id}', [AdminSectionController::class, 'editSection'])->name('admin.edit.section');
    Route::post('/admin/update/section', [AdminSectionController::class, 'updateSection'])->name('admin.update.section');
    Route::get('/admin/delete/section', [AdminSectionController::class, 'deleteSection'])->name('admin.delete.section');
    Route::post('/admin/update/section-status', [AdminSectionController::class, 'updateSectionStatus'])->name('admin.update.section.status');
    
    // announcements
    Route::get('/admin/announcements', [AdminAnnouncementController::class, 'getAnnouncements'])->name('admin.get.announcements');
    Route::get('/admin/show/announcement/{id}', [AdminAnnouncementController::class, 'showAnnouncement'])->name('admin.show.announcement');
    Route::get('/admin/show/announcement/{id}/participants', [AdminAnnouncementController::class, 'showAnnouncementParticipants'])->name('admin.show.announcement.participants');
    Route::get('/admin/delete/announcement/{id}', [AdminAnnouncementController::class, 'deleteAnnouncement'])->name('admin.delete.announcement');
    
    // news
    Route::get('/admin/news', [AdminNewsController::class, 'getNews'])->name('admin.get.news');
    Route::get('/admin/add/news', [AdminNewsController::class, 'addNews'])->name('admin.add.news');
    Route::post('/admin/store/news', [AdminNewsController::class, 'storeNews'])->name('admin.store.news');
    Route::get('/admin/edit/news/{id}', [AdminNewsController::class, 'editNews'])->name('admin.edit.news');
    Route::post('/admin/update/news', [AdminNewsController::class, 'updateNews'])->name('admin.update.news');
    Route::get('/admin/delete/news/{id}', [AdminNewsController::class, 'deleteNews'])->name('admin.delete.news');
    
    // notice
    Route::get('/admin/notices', [AdminNoticeController::class, 'getNotices'])->name('admin.get.notices');
    Route::get('/admin/add/notice', [AdminNoticeController::class, 'addNotice'])->name('admin.add.notice');
    Route::post('/admin/store/notice', [AdminNoticeController::class, 'storeNotice'])->name('admin.store.notice');
    Route::get('/admin/edit/notice/{id}', [AdminNoticeController::class, 'editNotice'])->name('admin.edit.notice');
    Route::post('/admin/update/notice', [AdminNoticeController::class, 'updateNotice'])->name('admin.update.notice');
    Route::get('/admin/delete/notice/{id}', [AdminNoticeController::class, 'deleteNotice'])->name('admin.delete.notice');
    
    // sub admins
    Route::get('/admin/sub-admins', [AdminSubAdminController::class, 'getSubAdmins'])->name('admin.get.sub.admins');
    Route::get('/admin/add/sub-admin', [AdminSubAdminController::class, 'addSubAdmin'])->name('admin.add.sub.admin');
    Route::post('/admin/store/sub-admin', [AdminSubAdminController::class, 'storeSubAdmin'])->name('admin.store.sub.admin');
    Route::get('/admin/edit/sub-admin/{id}', [AdminSubAdminController::class, 'editSubAdmin'])->name('admin.edit.sub.admin');
    Route::post('/admin/update/sub-admin', [AdminSubAdminController::class, 'updateSubAdmin'])->name('admin.update.sub.admin');
    Route::get('/admin/delete/sub-admin/{id}', [AdminSubAdminController::class, 'deleteSubAdmin'])->name('admin.delete.sub.admin');
    Route::post('/admin/update/sub-admin-status', [AdminSubAdminController::class, 'updateSubAdminStatus'])->name('admin.update.sub.admin.status');
    // bank accounts
    Route::get('/admin/bank-accounts', [AdminController::class, 'getBankAccounts'])->name('admin.get.bank.accounts');
    Route::get('/admin/add/bank-account', [AdminController::class, 'addBankAccount'])->name('admin.add.bank.account');
    Route::post('/admin/store/bank-account', [AdminController::class, 'storeBankAccount'])->name('admin.store.bank.account');
    Route::get('/admin/edit/bank-account/{id}', [AdminController::class, 'editBankAccount'])->name('admin.edit.bank.account');
    Route::post('/admin/update/bank-account', [AdminController::class, 'updateBankAccount'])->name('admin.update.bank.account');
    Route::get('/admin/delete/bank-account/{id}', [AdminController::class, 'deleteBankAccount'])->name('admin.delete.bank.account');
    Route::post('/admin/update/bank-account-status', [AdminController::class, 'updateBankAccountStatus'])->name('admin.update.bank.account.status');
});