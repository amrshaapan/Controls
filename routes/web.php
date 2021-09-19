<?php


use App\Models\Studen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {


    $collection = Studen::whereBetween('sitting_number', [4101, 4200])->get();
    $collection2 = Studen::whereBetween('sitting_number', [5101, 5200])->get('sitting_number');
    $data =  $collection->split(10);
    $data2 =  $collection2->split(10);


    $footballTypes = range(1, 2);   //سرى
    // $footballTypes = range(5199, 5200);   //جلوس

    $footballTypeNames = "";



    // $scur = 9000;

    // foreach ($collection as $key => $value) {


    //     $value->scur_number = $scur++;
    //     $value->save();
    // }



    // for ($x = 1001; $x <= 1100; $x++) {  // رقم السرى

    //     $id =  $x;
    // }
    // echo $id;
    // for ($i = 4101; $i <= 4200; $i++) {

    //     echo $datad =   Studen::where('sitting_number', '=', $i)->update(['scur_number' => $x]);
    // }
    // echo "The number is: $datad <br>";


    $merged =
        array_merge($data->toArray(), $data2->toArray());


    $allData =  response()->json(['data' => $data, 'data2' => $data2]);
    // return $merged;
    // foreach ($data[0] as $key => $value) {
    //     echo $value . '</br>';
    // }

    // switch ($data) {

    //     foreach ($data[0] as $key => $value) {
    //         echo $value . '</br>';
    //         case 'value':
    //             # code...
    //             break;
    //     }

    //     default:
    //         # code...
    //         break;
    // }
    return view('welcome');
});





Auth::routes();






Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student', 'StudenController@index');
Route::post('/StoreNumber', 'StudenController@renNmber');
Route::post('/check_data', 'StudenController@DataStaudentById');
Route::post('/student_by_school', 'StudenController@DataStaudentByschool');
Route::post('/student_by_committ', 'StudenController@StudentByCommitt');
Route::get('/student_by_settings', 'StudenController@StudentBySettings');
Route::post('/check_subject_fail', 'StudenController@checkSubjectFail');
Route::post('/add_degree_subject_fail', 'StudenController@addDegreeSubjectFail');
Route::post('/save_form_add_degree_subjects', 'StudenController@SaveDegreeSubjectFail');
Route::get('/count/', 'SchoolController@count1');
Route::get('/count_committee', 'CommitteeController@countSchools');


Route::get('/queryData-abs', 'StudenController@queryData');



// طباعة الملصقات الخاصة بعملية التسليم والتسلم للمدارس واللجان

Route::post('lable-school', 'StudenController@PrintLableRecevdRoom');
Route::get('/count_subject', 'StudenController@SchoolCount');

//  نهاية طباعة الملصقات



// group
Route::get('/get_data_group', 'GroupController@index');
Route::get('/showStudent/{id}', 'StudenController@showStudent'); // test
Route::get('/showSchool', 'StudenController@query'); // test
Route::get('/showSchoolFinal', 'StudenController@queryBySchool'); // test
Route::get('/showSchool_students', 'StudenController@students'); // test
Route::get('/TotalRepat', 'StudenController@TotalRepat'); // test


// ادخال الدرحات

Route::get('/get-subject', 'SubjectController@index');
Route::post('/save-data-degree', 'StudenController@Store');
Route::post('/save-data-abs-studen', 'StudenController@StoreAbs');


Route::get('/save-data-degree-out', 'StudenController@StoreSubject_out');


Route::get('/printpage', 'StudenController@print');



// Certifications
Route::get('/printCertifications', 'StudenController@printCertifications');
Route::post('/getCert', 'StudenController@GetCertifi');
Route::post('/getCert_success_2', 'StudenController@getCert_success_2');
Route::post('/getCert_stecker', 'StudenController@getCert_stecker');


Route::get('/TopTen', 'StudenController@TopTen');


Route::post('/countGroup', 'StudenController@countGroup');


// Upload images student
Route::post('/upload_images', 'UploadController@Store');



// test Group 
Route::get('/CountGroup', 'GroupController@index');



// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
});
