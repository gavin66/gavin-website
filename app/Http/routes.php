<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','EntryController@index');
Route::get('article',function(){return view('article');});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'ajax' => 'Ajax\AjaxController'
]);


//Route::post('summernote/file',function(){
//	if(\Request::file('file')){
//		if (\Request::file('file')->isValid()){
//			$destinationPath='./uploads/summernote/'.date('Y-m').'/';
//			$filename=uniqid().'.'.\Request::file('file')->guessClientExtension();
//			\Request::file('file')->move($destinationPath,$filename);
//			//水印处理 使用了laravel image包 intervention/image
//			if(\Cache::get('config')['web_water_switch']){
//				$img = \Image::make($destinationPath.$filename);
//				$img->insert('.'.\Cache::get('config')['web_water_img'], 'bottom-right', 10, 10)->save($destinationPath.$filename);
//			}
//			//返回图片地址
//			echo substr($destinationPath.$filename, 1);
//		}else{
//			echo '错误，请重试!';
//		}
//	}
//});