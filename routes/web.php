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

