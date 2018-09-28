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
//use Tintnaingwin\EmailChecker\EmailCheckerServiceProvider;
Route::get('/', function () {
    return view('welcome');
});


Route::get('mail',function(){

//    $emails = array('jeff_bonds@hotmail.com','bbproduce@hotmail.com','marvinwm@peoplepc.com','bcoleman@engelrealty.com','hostmaster@financial-planning-online.com','gcc86@hotmail.com','ellash@aol.com','martin@placeproperties.com','mryates@hsv.k12.al.us','dgorham@n2ninc.com','earlspaint-body@mindspring.com','fboughner@florenceal.org','jbrown@all.org','mtwatley@yahoo.com','debs517@aol.com','bluesguy44@aol.com','glenn@paristechworks.com','jsmith@coosahs.net','jmalone@bcbe.org','lharbison@addisonfab.com','kristin@resistacap.com','riveroflife@narrowgate.net','tarrad@msn.com','brendiareeves@aol.com');
//    foreach ($emails as $email){
//        $re = EmailChecker::check($email);
//        if ($re == true){
//            echo $email.' is valid email<br>';
//        }
//    }

    $re = EmailChecker::check('jeff_bonds@hotmail.com');
        if ($re == true){
            echo $re.' is valid email<br>';
        }
});