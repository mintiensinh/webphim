<?php
Route::get('/test',['as' => 'test1', function(){
	echo "xin chao";
}]);
Route::get('/goitest', function(){
	return redirect()->route('test1');
});
