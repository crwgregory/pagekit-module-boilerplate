<?php

/*
 * This array is the module definition.
 */
return [

  // unique module name
  'name' => 'module-name',

  'type' => 'extension',

  // main point to register custom services and access existing ones
  'main' => function (App $app) {

    // An easy was to log in Pagekit
    // https://github.com/crwgregory/pagekit-logger
    $app['getLogger'] = function(){
      return new \Nativerank\Utilities\PagekitLogger('YourModule Logger', 'yourmodule/errors.log');
    };
  },

  // Autoload namespaces from given paths
  'autoload' => [
    'YourVendor\\YourModule\\' => 'src'
  ],

  'resources' => [

    'yourmodule:' => ''

  ],

  'routes' => [
    '@analyze' => [
      'path' => '/analyze',
      'controller' => 'YourVendor\\YourModule\\Controller\\YourModuleController'
    ]
  ],

  'permissions' => [
//        'your: permission' => [
//            'title' => _('Your Permission')
//        ]
  ],

  'menu' => [
    'yourmodule' => [
      'label'  => '',
      'icon'   => '',
      'url'    => '@yourmodule',
      'priority' => 110
    ]
  ],

  // Default module configuration
  'config' => [
//        'your' => 'config'
  ],

  'events' => [
    'boot' => function($event, $app) {

    },
  ]
];