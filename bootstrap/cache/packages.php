<?php return array (
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'santigarcor/laratrust' => 
  array (
    'providers' => 
    array (
      0 => 'Laratrust\\LaratrustServiceProvider',
    ),
    'aliases' => 
    array (
      'Laratrust' => 'Laratrust\\LaratrustFacade',
    ),
  ),
);