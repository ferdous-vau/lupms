<?php



Route::group(['middleware' => 'auth'],function(){
    //dashboard//
    Route::get('/', 'AdminController@dashboard');
    //profile//
    Route::get('/profile', 'Profile\ProfileController@profile');
    Route::post('/profile/update', 'Profile\ProfileController@profile_update');

    Route::group(['middleware' => 'admin'],function(){

        //form_switch//
        Route::get('switch-on/{id}','Admin\SwitchController@on');
        Route::get('switch-off/{id}','Admin\SwitchController@off');
        //third-year-project//
        Route::get('/third-year-project', 'Admin\Third_Year_propoalController@third_project');
        Route::get('/third-year-project/{id}', 'Admin\Third_Year_propoalController@delete');
        Route::get('/delete-all-third-proj', 'Admin\DeleteAllController@third_project_delete_all');
        //final-year-project//
        Route::get('/final-year-project', 'Admin\Final_Year_propoalController@final_project');
        Route::get('/final-year-project/{id}', 'Admin\Final_Year_propoalController@delete');
        Route::get('/delete-all-final-proj', 'Admin\DeleteAllController@final_project_delete_all');
        //supervisor//
        Route::get('/add-supervisor', 'Admin\SupervisorController@add');
        Route::post('/add-supervisor', 'Admin\SupervisorController@store');
        Route::get('/supervisor-list', 'Admin\SupervisorController@list');
        Route::get('/delete-supervisor/{id}', 'Admin\SupervisorController@delete');
        Route::get('/supervisor-edit/{id}', 'Admin\SupervisorController@edit');
        Route::post('/update-supervisor', 'Admin\SupervisorController@update');
        //students//
        Route::get('/delete-student/{id}', 'Admin\StudentController@delete');
        //third-year-students//
        Route::get('/third-year-students', 'Admin\StudentController@third_student');
        Route::get('/delete-all-third-std', 'Admin\DeleteAllStdController@third_student_delete_all');
        //final-year-students//
        Route::get('/final-year-students', 'Admin\StudentController@final_student');
        Route::get('/delete-all-final-std', 'Admin\DeleteAllStdController@final_student_delete_all');
        //view-proposal//
        Route::get('/view-project/{id}', 'Admin\Final_Year_propoalController@view_project');
        //assign//
        Route::post('/supervisor-assign', 'Admin\Third_Year_propoalController@supervisor_assign');
        Route::post('/schedule-assign', 'Admin\Third_Year_propoalController@schedule');

    });

    Route::group(['middleware' => 'supervisor'],function(){

        Route::get('/supervisor-third-year-project', 'Supervisor\supervisorController@third_project');
        Route::get('/supervisor-final-year-project', 'Supervisor\supervisorController@final_project');
        Route::get('/supervisor-view-project/{id}', 'Supervisor\supervisorController@view_project');

    });

});




//student panel//
Route::get('/student-form','Admin\StudentController@student');

Route::get('/view-proposal', 'AdminController@view_proposal');



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error', 'AdminController@error');


Route::post('/proposal', 'ProposalController@store');
Route::get('/submitted', 'AdminController@after_submit');



















