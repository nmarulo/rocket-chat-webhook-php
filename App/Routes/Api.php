<?php

/**
 * SilverEngine  - PHP MVC framework
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine/Framework
 */

namespace App\Routes;

use Silver\Core\Route;

Route::group(['prefix' => 'api'], function() {
    // Route for Api/basic controller.
    Route::post('/basic', 'Api/Basic@index', 'api/basic', 'rocket_chat');
});
