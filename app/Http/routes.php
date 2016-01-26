<?php



Route::get('/', function() {
    return View::make('welcome');
});


// temporary route for mailing list
Route::post('/', function() {
    $validator = Validator::make(\Input::all(), [
        'email' => 'max:255|email|required|unique:mailing_list',
    ]);

    if ($validator->passes()) {
        \BlogIt\MailingList::create([
            'email' => \Input::get('email')
        ]);
    } else {
        $messages = $validator->errors();
        return \View::make('welcome')->with('messages', $messages);
    }
});

Route::controller('admin/users', 'Admin\UserController');

Route::controller('login', 'Auth\LoginController');