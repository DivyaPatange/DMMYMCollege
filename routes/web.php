<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});


Route::get('admin/home', 'HomeController@adminHome')->name('admin.dashboard')->middleware('is_admin');

// Route::get('internshipCertificate','Admin\CertificateController@internshipCompletionForm')->name('internship')->middleware('is_admin');
// ------------------------------internship------------------------------>

Route::get('admin/addInternship','Admin\CertificateController@addCertificate')->name('internship.add');
Route::post('admin/addIntership/store','Admin\CertificateController@offlineInternship');
Route::get('admin/internship/list','Admin\CertificateController@offlineInternshipList')->name('internship.list');
Route::get('admin/internship/certificate/{id}','Admin\CertificateController@viewCertificate')->name('internship.certificate');
Route::delete('admin/internship/delete/{id}','Admin\CertificateController@deleteOfflineCertificate')->name('deleteOfflineintern');
Route::get('editOfflineInternshipRecord/{id}','Admin\CertificateController@editOfflineIntern')->name('internship.editOffline');
Route::put('updateOfflineInternshipRecord/{id}','Admin\CertificateController@updateOfflineIntern')->name('internship.updateOffline');
Route::get('/internship-completion', 'Admin\CertificateController@getInternshipCompletion')->name('index.internship.completion');
Route::post('/internship-completion-list', 'Admin\CertificateController@getInternshipCompletionList')->name('internship.completion.list');
Route::get('/internship-certificate/{id}', 'Admin\CertificateController@internshipCertificate')->name('internship.certificate');
Route::post('/internship-completion-save', 'Admin\CertificateController@internshipCompletionSave')->name('internship.completion.save');
Route::get('/certificate-of-completion/{id}', 'Admin\CertificateController@viewCompletionCertificate')->name('view.certificate');

Route::get('/bonafide-certificate', 'Admin\BonafideController@index')->name('admin.bonafide.certificate');
Route::get('/bonafide-certificate-view', 'Admin\BonafideController@view')->name('bonafide.certificate.view');
Route::post('/save-bonafied-details', 'Admin\BonafideController@store')->name('store.bonafied.certificate');
Route::get('/print-bonafide-certificate/{id}', 'Admin\BonafideController@show')->name('view.bonafide');

Route::get('/leaving-certificate', 'Admin\LeavingController@index')->name('admin.leaving.certificate');
Route::get('/leaving-certificate-view', 'Admin\LeavingController@view')->name('leaving.certificate.view');
Route::post('/save-leaving-details', 'Admin\LeavingController@store')->name('store.leaving.certificate');
Route::get('/print-leaving-certificate/{id}', 'Admin\LeavingController@show')->name('view.leaving');
Route::get('/leaving-certificate/edit/{id}', 'Admin\LeavingController@edit')->name('edit.leaving');
Route::put('/leaving-certificate/update/{id}', 'Admin\LeavingController@update')->name('update.leaving.certificate');

Route::get('/internship-certificate', 'Admin\InternshipController@index')->name('admin.internship.certificate');
Route::get('/internship-certificate-view', 'Admin\InternshipController@view')->name('internship.certificate.view');
Route::post('/save-internship-details', 'Admin\InternshipController@store')->name('store.internship.certificate');
Route::get('/print-internship-certificate/{id}', 'Admin\InternshipController@show')->name('view.internship');