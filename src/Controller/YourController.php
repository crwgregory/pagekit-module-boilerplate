<?php

namespace YourVendor\YourModule\Controller;

class YourController
{
  /**
   * @Route("/")
   * @Method("GET")
   */
  function indexAction()
  {
    return [
      '$view' => [
        'title' => __('Pagekit Module Boilerplate'),
        'name' => 'yourmodule:views/index.php'
      ],
      '$data' => [
        'yourdata' => 'Hello'
      ]
    ];
  }
}