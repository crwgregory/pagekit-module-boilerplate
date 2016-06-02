<?php

use Pagekit\Application as App;

/*
 * This array is the module definition.
 */
return [

  // unique module name
  'name' => 'yourmodule',

  'type' => 'extension',

  // main point to register custom services and access existing ones
  'main' => function (App $app) {
    
  },

  // Autoload namespaces from given paths
  'autoload' => [
    'YourVendor\\YourModule\\' => 'src'
  ],

  'resources' => [

    'yourmodule:' => ''

  ],

  'routes' => [
    '@yourmodule' => [
      'path' => '/yourmodule',
      'controller' => 'YourVendor\\YourModule\\Controller\\YourController'
    ]
  ],

  'permissions' => [
//        'your: permission' => [
//            'title' => _('Your Permission')
//        ]
  ],

  'menu' => [
    'yourmodule' => [
      'label'  => 'Your Module',
      'icon'   => 'app/system/assets/images/placeholder-icon.svg',
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
