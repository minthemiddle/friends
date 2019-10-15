<?php

Route::get('/', 'FriendsController@show');
Route::get('mail', 'NotificationController@send');
