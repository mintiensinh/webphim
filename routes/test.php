<?php

Route::get('/test',['as' => 'test1', function(){
	echo "xin chao";
}]);
Route::get('/goitest', function(){
	return redirect()->route('test1');
});
Route::get('response', function () {
	$file="./images/min/2017-01-13_b_2_stealth-wallpaper-1440x900.jpg";
   return response()->file($file);
});
//view()->share('key', $value);
//view('name', $data)->render();