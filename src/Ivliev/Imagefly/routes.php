<?php
Route::get('/imagefly/{params}/{imagepath}','Ivliev\Imagefly\ImageflyController@index')->where('imagepath', '.+');