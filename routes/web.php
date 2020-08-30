<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin','AdminController@index')->name('admin');
Route::get('login','LoginController@index')->name('login');
Route::post('login/check','LoginController@Check');
Route::get('logout','LoginController@logout');
// User contorller 
Route::get('users','UserController@index')->name('users');
Route::get('users/add','UserController@create')->name('add.users');
Route::post('users/store','UserController@store');
Route::get('users/edit/{id}','UserController@edit');
Route::post('users/update/{id}','UserController@update');
Route::get('users/delete/{id}','UserController@delete');
Route::get('users/activity','UserController@activity')->name('users.activity');
// Department Controller 
Route::get('department','DepartmentController@index')->name('department');
Route::get('department/add','DepartmentController@create')->name('add.department');
Route::post('department/store','DepartmentController@store');
Route::get('department/edit/{id}','DepartmentController@edit');
Route::post('department/update/{id}','DepartmentController@update');
Route::get('department/delete/{id}','DepartmentController@delete');
// Doctor Controller 
Route::get('doctor','DoctorController@index')->name('doctor');
Route::get('doctor/add','DoctorController@create')->name('add.doctor');
Route::post('doctor/store','DoctorController@store');
Route::get('doctor/edit/{id}','DoctorController@edit');
Route::post('doctor/update/{id}','DoctorController@update');
Route::get('doctor/delete/{id}','DoctorController@delete');
// category controller 
Route::resource('category','CategoryController');
// bed type Controller 
Route::get('bedtype','BedtypeController@index')->name('bedtype');
Route::get('bedtype/add','BedtypeController@create')->name('add.bedtype');
Route::post('bedtype/store','BedtypeController@store');
Route::get('bedtype/edit/{id}','BedtypeController@edit');
Route::post('bedtype/update/{id}','BedtypeController@update');
Route::get('bedtype/delete/{id}','BedtypeController@delete');
// ward controller 
Route::get('ward','WardController@index')->name('ward');
Route::get('ward/add','WardController@create')->name('add.ward');
Route::post('ward/store','WardController@store');
Route::get('ward/edit/{id}','WardController@edit');
Route::post('ward/update/{id}','WardController@update');
Route::get('ward/delete/{id}','WardController@delete');
// bed Controller 
Route::get('bed','BedController@index')->name('bed');
Route::get('bed/add','BedController@create')->name('add.bed');
Route::post('bed/store','BedController@store');
Route::get('bed/edit/{id}','BedController@edit');
Route::post('bed/update/{id}','BedController@update');
Route::post('bed/delete/{id}','BedController@delete');
// Test Controller 
Route::get('test','TestContorller@index')->name('test');
Route::get('test/add','TestContorller@create')->name('add.test');
Route::post('test/store','TestContorller@store');
Route::get('test/edit/{id}','TestContorller@edit');
Route::post('test/update/{id}','TestContorller@update');
Route::get('test/delete/{id}','TestContorller@delete');
// patient controller 
Route::get('patient','PatientController@index')->name('patient');
Route::get('patient/indoor','PatientController@indoor')->name('indoor.patient');
Route::get('patient/outdoor','PatientController@outdoor')->name('outdoor.patient');
Route::get('patient/add','PatientController@create')->name('add.patient');
Route::post('patient/store','PatientController@store');
Route::get('patient/edit/{id}','PatientController@edit');
Route::post('patient/update/{id}','PatientController@update');
Route::get('patient/delete/{id}','PatientController@delete');
// patient test controller 
Route::get('patntest','PatientTestController@index')->name('patient.test');
Route::get('patntest/add','PatientTestController@create')->name('add.patient.test');
Route::post('patntest/store','PatientTestController@store');
Route::get('patntest/view/{id}','PatientTestController@view');
Route::get('patntest/print/{id}','PatientTestController@PrintTest');
// Route::get('patntest/report/{id}','PatientTestController@Report')->name('patient.test.report');

// pescription controller 
Route::get('pescription','PescriptionController@index')->name('pescription');
Route::get('pescription/add','PescriptionController@create')->name('add.pescription');
Route::post('pescription/store','PescriptionController@store');
Route::get('pescription/view/{id}','PescriptionController@view')->name('view.pescription');
// PescriptionDetailsController
Route::get('pescription/details/{id}','PescriptionDetailsController@CreateDetails')->name('pescription.details');
Route::post('pescription/details/store/{id}','PescriptionDetailsController@StoreDetails');
Route::get('pescription/details/view/{id}','PescriptionDetailsController@DetailsView')->name('pescription.details.view');

// patient admission controller 
Route::get('admission','PatientadmissionController@index')->name('admission');
Route::get('admission/add','PatientadmissionController@create')->name('add.admission');
Route::post('admission/store','PatientadmissionController@store');
// invoiec 
Route::get('doctor/bill/{id}','PescriptionController@DoctorBill')->name('doctor.vill');

// Payment Controller 
Route::get('payment','PaymentController@index')->name('payment');
Route::get('payment/process/{id}','PaymentController@process');
Route::get('invoice/all','PaymentController@AllInvoice')->name('all.invoice');
Route::get('payment/view/{id}','PaymentController@view');

// staff controller 
Route::get('staff','StaffController@index')->name('staff');
Route::get('staff/add','StaffController@create')->name('add.staff');
Route::post('staff/store','StaffController@store');
Route::get('staff/edit/{id}','StaffController@edit');
Route::post('staff/update/{id}','StaffController@update');
Route::get('staff/delete/{id}','StaffController@delete');
// attendanceconfig
Route::get('attendance/config','ConfigAttendanceController@index')->name('attendconfig');
Route::get('attendance/config/add','ConfigAttendanceController@create')->name('add.attendconfig');
Route::post('attendance/config/store','ConfigAttendanceController@store');
Route::get('attendconfig/edit/{id}','ConfigAttendanceController@edit');
Route::post('attendconfig/update/{id}','ConfigAttendanceController@update');
Route::get('attendconfig/delete/{id}','ConfigAttendanceController@delete');

// Route::post('attendance/config/admin','ConfigAttendanceController@admin');
// AttendanceController 
Route::get('attendance','AttendanceController@index')->name('attendance');
Route::get('attendance/add','AttendanceController@create')->name('add.attendance');
Route::post('attendance/store','AttendanceController@store');
Route::get('attendance/view/{id}','AttendanceController@view');

// Tc  Controller 
Route::get('test/tcdc','TcdcController@index')->name('patient.test.tcdc');
Route::get('test/tcdc/create/{id}','TcdcController@create');
Route::post('test/tcdc/store','TcdcController@store');
Route::get('test/tcdc/view/{id}','TcdcController@view');
// F r Controller 
Route::get('test/fr','FrController@index')->name('patient.test.fr');
Route::get('test/fr/create/{id}','FrController@create');
Route::post('test/fr/store','FrController@store');
Route::get('test/fr/view/{id}','FrController@view');
// HB Controller 
Route::get('test/hb','HbController@index')->name('patient.test.hb');
Route::get('test/hb/create/{id}','HbController@create');
Route::post('test/hb/store','HbController@store');
Route::get('test/hb/view/{id}','HbController@view');
// ESR Controller 
Route::get('test/esr','EsrController@index')->name('patient.test.esr');
Route::get('test/esr/create/{id}','EsrController@create');
Route::post('test/esr/store','EsrController@store');
Route::get('test/esr/view/{id}','EsrController@view');