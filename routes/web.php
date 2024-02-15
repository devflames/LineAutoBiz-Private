<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about.blade.php', function () {
    return view('about');
});

Route::get('/affiliate.blade.php', function () {
    return view('affiliate');
});

Route::get('/apply.blade.php', function () {
    return view('apply');
});

Route::get('/biz_partner.blade.php', function () {
    return view('biz_partner');
});

Route::get('/column.blade.php', function () {
    return view('column');
});

Route::get('/company.blade.php', function () {
    return view('company');
});

Route::get('/compare.blade.php', function () {
    return view('compare');
});

Route::get('/daily.blade.php', function () {
    return view('daily');
});

Route::get('/faq.blade.php', function () {
    return view('faq');
});

Route::get('/form-request.blade.php', function () {
    return view('form-request');
});

Route::get('/formmake.blade.php', function () {
    return view('formmake');
});

Route::get('/function_list.blade.php', function () {
    return view('function_list');
});

Route::get('/function.blade.php', function () {
    return view('function');
});

Route::get('/function2.blade.php', function () {
    return view('function2');
});

Route::get('/inquired.blade.php', function () {
    return view('inquired');
});

Route::get('/kiyaku_inc.blade.php', function () {
    return view('kiyaku_inc');
});

Route::get('/kiyaku.blade.php', function () {
    return view('kiyaku');
});

Route::get('/law.blade.php', function () {
    return view('law');
});

Route::get('/line.blade.php', function () {
    return view('line');
});

Route::get('/mail_header.blade.php', function () {
    return view('mail_header');
});

Route::get('/mailmaga.blade.php', function () {
    return view('mailmaga');
});

Route::get('/ms.blade.php', function () {
    return view('ms');
});

Route::get('/other.blade.php', function () {
    return view('other');
});

Route::get('/policy.blade.php', function () {
    return view('policy');
});

Route::get('/price.blade.php', function () {
    return view('price');
});

Route::get('/price20.blade.php', function () {
    return view('price20');
});

Route::get('/reason.blade.php', function () {
    return view('reason');
});

Route::get('/reason2.blade.php', function () {
    return view('reason2');
});

Route::get('/review.blade.php', function () {
    return view('review');
});

Route::get('/rmh.blade.php', function () {
    return view('rmh');
});

Route::get('/sitemap.blade.php', function () {
    return view('sitemap');
});

Route::get('/spam_repo.blade.php', function () {
    return view('spam_repo');
});

Route::get('/stepmail.blade.php', function () {
    return view('stepmail');
});

Route::get('/utilization.blade.php', function () {
    return view('utilization');
});
