<?php
Route::group(['prefix'=>'admin-panel', 'namespace'=>'AdminPanel'], function(){
    Route::redirect('/', '/admin-panel/login');
    Route::match(['get', 'post'],'/login', 'UserController@login')->name('AdminPanel.login');
    Route::get('/index', 'IndexController@index')->name('AdminPanel.index');

    Route::group(['prefix'=>'settings'], function(){
        Route::match(['get', 'post'],'/', 'SettingsController@index')->name('AdminPanel.settings');
    });
    Route::group(['prefix'=>'users'], function(){
        Route::match(['get', 'post'], '/', 'UserController@index')->name('AdminPanel.users');
        Route::get('/new', 'UserController@form')->name('AdminPanel.users.new');
        Route::get('/edit/{id}', 'UserController@form')->name('AdminPanel.users.edit');
        Route::post('/save/{id?}', 'UserController@save')->name('AdminPanel.users.save');
        Route::get('/delete/{id}', 'UserController@delete')->name('AdminPanel.users.delete');
    });
    Route::group(['prefix'=>'teams'], function(){
        Route::match(['get', 'post'], '/', 'TeamsController@index')->name('AdminPanel.teams');
        Route::get('/users', 'TeamsController@user_form')->name('AdminPanel.teams.users');
        Route::get('/users/{team_id}', 'TeamsController@user_form')->name('AdminPanel.teams.users');
        Route::get('/new', 'TeamsController@form')->name('AdminPanel.teams.new');
        Route::get('/edit/{id}', 'TeamsController@form')->name('AdminPanel.teams.edit');
        Route::post('/save/{id?}', 'TeamsController@save')->name('AdminPanel.teams.save');
        Route::get('/delete/{id}', 'TeamsController@delete')->name('AdminPanel.teams.delete');
    });

    Route::group(['prefix'=>'tournaments'], function(){
        Route::match(['get', 'post'], '/', 'TournamentsController@index')->name('AdminPanel.tournaments');
        Route::get('/teams', 'TournamentsController@tour_form')->name('AdminPanel.tournaments.teams');
        Route::get('/teams/{tournaments_id}', 'TournamentsController@tour_form')->name('AdminPanel.tournaments.teams');
        Route::get('/new', 'TournamentsController@form')->name('AdminPanel.tournaments.new');
        Route::get('/edit/{id}', 'TournamentsController@form')->name('AdminPanel.tournaments.edit');
        Route::post('/save/{id?}', 'TournamentsController@save')->name('AdminPanel.tournaments.save');
        Route::get('/delete/{id}', 'TournamentsController@delete')->name('AdminPanel.tournaments.delete');
    });


    Route::group(['prefix'=>'championships'], function(){
        Route::match(['get', 'post'], '/', 'ChampionshipsController@index')->name('AdminPanel.championships');
        Route::get('/teams', 'ChampionshipsController@champ_form')->name('AdminPanel.championships.teams');
        Route::get('/teams/{championships_id}', 'ChampionshipsController@champ_form')->name('AdminPanel.championships.teams');
        Route::get('/new', 'ChampionshipsController@form')->name('AdminPanel.championships.new');
        Route::get('/edit/{id}', 'ChampionshipsController@form')->name('AdminPanel.championships.edit');
        Route::post('/save/{id?}', 'ChampionshipsController@save')->name('AdminPanel.championships.save');
        Route::get('/delete/{id}', 'ChampionshipsController@delete')->name('AdminPanel.championships.delete');
    });

    Route::group(['prefix'=>'News'], function(){
        Route::match(['get', 'post'], '/', 'NewsController@index')->name('AdminPanel.news');
        Route::get('/new', 'NewsController@form')->name('AdminPanel.news.new');
        Route::get('/edit/{id}', 'NewsController@form')->name('AdminPanel.news.edit');
        Route::post('/save/{id?}', 'NewsController@save')->name('AdminPanel.news.save');
        Route::get('/delete/{id}', 'NewsController@delete')->name('AdminPanel.news.delete');
    });

    Route::group(['prefix'=>'Gallery'], function(){
        Route::match(['get', 'post'], '/', 'GalleryController@index')->name('AdminPanel.gallery');
        Route::get('/new', 'GalleryController@form')->name('AdminPanel.gallery.new');
        Route::get('/edit/{id}', 'GalleryController@form')->name('AdminPanel.gallery.edit');
        Route::post('/save/{id?}', 'GalleryController@save')->name('AdminPanel.gallery.save');
        Route::get('/delete/{id}', 'GalleryController@delete')->name('AdminPanel.gallery.delete');
    });

    Route::group(['prefix'=>'games'], function(){
        Route::match(['get', 'post'], '/', 'GamesController@index')->name('AdminPanel.games');
        Route::get('/new', 'GamesController@form')->name('AdminPanel.games.new');
        Route::get('/edit/{id}', 'GamesController@form')->name('AdminPanel.games.edit');
        Route::post('/save/{id?}', 'GamesController@save')->name('AdminPanel.games.save');
        Route::get('/delete/{id}', 'GamesController@delete')->name('AdminPanel.games.delete');
    });
});


Route::get('/', 'IndexController@index')->name('anasehife');
Route::get('/tours', 'TournamentsController@index')->name('tours');

Route::get('/teams', 'TeamsController@index')->name('teams');
//Route::get('/teams/{id}/{team_slug}', 'GamersController@index')->name('komandalar');

Route::get('/team/{id}/gamers/{team_slug}', 'GamerController@show')->name('gamers');
Route::get('/gamer/{id}/{slug}', 'GamerController@get')->name('gamer');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@post')->name('contacts');

Route::get('/news', 'NewsController@index')->name('news');
Route::get('/gallery', 'GalleryController@index')->name('gallery');

Route::get('/championship', 'ChampionshipController@index')->name('championship');

Route::group(['prefix'=>'user_registration'], function(){
    Route::get('/', 'UserRegistrationController@create')->name('user_reg');
    Route::post('/register', 'UserRegistrationController@store')->name("user.store");

    Route::post('/login', 'UserRegistrationController@store');
    Route::get('/logout', 'UserRegistrationController@destroy');
});

    Route::get('/command_registration', 'CommandRegistrationController@index')->name('command_reg');
//    Route::post('/command_registration', 'CommandRegistrationController@command_registration');


Route::resource('/example', 'ExampleController');