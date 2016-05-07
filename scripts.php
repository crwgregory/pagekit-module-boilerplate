<?php

use Pagekit\Application as App;

return [

  'enable' => function($app) {

    $util = $app['db']->getUtility();

  },

  'updates' => [

  ],

  'disable' => function ($app) {

  }
];