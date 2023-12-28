<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/canvas/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'canvas.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JhLEhVPgo9EpzmZp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'canvas.password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'canvas.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'canvas.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'canvas.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/stats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ohAtZ8fsolv8Kdvz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/uploads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8uraEyEcUB7Vnkaz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rk69u7yLHT1b7VmP',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cLWzMHWuzXcTz0OC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/posts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v9Z804NAj8pZO80h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tO7RfPJN4SToazpz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/tags/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JUFsIsjJUQYGFVcg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a57ZdegLYROEMXlF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/topics/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JYjkxxcqNy6Q7TvY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H3Zb3WcegWWi8hF5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pLeEMZNE0in4zhWp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/search/posts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::adXnMsxW7pLxuJ4c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/search/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JBFcdsEDFuFBHVPA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/search/topics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HBmWtaZzG9r77z3D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/canvas/api/search/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mRJUYq6C01kCfU9g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/biscolab-recaptcha/validate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1c45SOTCpNIVpIBH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/languages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'languages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/languages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Qj2HJSs9wOMjOE5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OIza1BCfRiaVe4UF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UVlWmO8xQyMZYEWk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ECb0eS7dvQj5Molh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FpUK5RgDeKpHZo3c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k9BTQbVPrbN36Iok',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GmgqiqaSA5vwIF4D',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::je951hUc3AapuuhE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::s5iChEOsGFTCEyMU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cV9maTtZgNvzMFvq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/utils/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'utils.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z8DEGjOSj3yWDoA7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TeTQAcyUJML6wMCa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TqDztIBhIOjiIL2I',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/resend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.resend',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.facebook',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/facebook/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.facebook.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.google',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.google.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/twitter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.twitter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/twitter/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.twitter.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/linkedin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.linkedin',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/linkedin/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.linkedin.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/github' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.github',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/github/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.login.github.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'page.contact.do',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/popular' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.popular',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.search_categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/normalize_arabic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.normalize_arabic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/normalize_arabic_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.normalize_arabic_category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delete_duplicates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.delete_duplicates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_counts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.update_counts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_company_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.update_company_id',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comment/proof_ownership' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comments.proof_ownership',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/comment/report_incorrect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comments.report_incorrect',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.pricing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pricing/subscripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscripe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-of-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.terms-of-service',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.privacy-policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/items/reviews/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap.xml' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/listing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.listing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/post' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.post',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/tag' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.tag',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/topic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.topic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.state',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/city' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.city',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sitemap/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/setting/logo/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.setting.logo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajax/setting/favicon/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.setting.favicon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/countries/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/states/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/cities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/custom-fields' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/custom-fields/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/items/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/business/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/features/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/activities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/activities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/orders/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item-claims' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item-claims/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/items/saved/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.saved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/items/bulk/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/items/reviews/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/blogs/reviews/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/messages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/messages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/plans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/subscriptions/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/bulk/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.bulk.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/bulk/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/profile/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.profile.password.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.profile.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/testimonials/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/faqs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-medias' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-medias/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.general.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.general.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/general/smtp/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.general.smtp.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.about.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.about.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/slider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.slider.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.slider.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/terms-of-service' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.terms-service.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.terms-service.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.privacy-policy.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.page.privacy-policy.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/recaptcha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.recaptcha.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.recaptcha.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/sitemap' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.sitemap.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.sitemap.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.cache.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.cache.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/cache/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.cache.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.session.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.session.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.language.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.language.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.product.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.product.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/item' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.item.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.item.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/maintenance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.maintenance.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.maintenance.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/bank-transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/bank-transfer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/bank-transfer/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.paypal.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.paypal.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.razorpay.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.razorpay.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.stripe.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.stripe.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/payment/payumoney' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.payumoney.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.payumoney.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/advertisements/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-logins' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/social-logins/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang/sync' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.sync.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang/sync/do' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.sync.do',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang/sync/restore' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.sync.restore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/lang/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importer/csv/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importer/csv/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.data.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/importer/item/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item-leads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/item-leads/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/items' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/items/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/items/bulk/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.bulk.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/item-claims' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/item-claims/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/items/saved/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.saved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/items/reviews/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.reviews.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/comments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.comments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.password.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/item-leads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/item-leads/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getData',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-sub-categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getSubCategories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/save-location' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save-location',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'getCities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/searchajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchajax',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/c(?|a(?|nvas(?|/(?|reset\\-password/([^/]++)(*:51)|api/(?|posts/([^/]++)(?|(*:82)|/stats(*:95)|(*:102))|t(?|ags/([^/]++)(?|(*:130)|/posts(*:144)|(*:152))|opics/([^/]++)(?|(*:178)|/posts(*:192)|(*:200)))|users/([^/]++)(?|(*:227)|/posts(*:241)|(*:249))))|(?:/((?:.*)))?(*:274))|tegory/([^/]++)(?|(*:301)|/state/([^/]++)(?|(*:327)|/city/([^/]++)(*:349))))|o(?|mments/([^/]++)(?|(*:382))|untry/update/([^/]++)(*:412))|ities/([^/]++)(*:435))|/_debugbar/c(?|lockwork/([^/]++)(*:476)|ache/([^/]++)(?:/([^/]++))?(*:511))|/l(?|anguages/([^/]++)(?|/translations(?|(*:561)|/create(*:576)|(*:584))|(*:593))|isting/([^/]++)/(?|([^/]++)/([^/]++)/([^/]++)(*:647)|product/([^/]++)(*:671))|ocale/update/([^/]++)(*:701))|/a(?|pi/(?|category/([^/]++)(?|(*:741)|/state/([^/]++)(?|(*:767)|/city/([^/]++)(*:789)))|state/([^/]++)(?|(*:816)|/city/([^/]++)(*:838))|listing/([^/]++)(?|(*:866)|/product/([^/]++)(*:891)))|jax/(?|c(?|ities/([^/]++)(*:926)|ategory/image/delete/([^/]++)(*:963))|state(?|s/([^/]++)(*:990)|/image/delete/([^/]++)(*:1020))|item/(?|image/delete/([^/]++)(*:1059)|gallery/delete/([^/]++)(*:1091)|review/gallery/delete/([^/]++)(*:1130))|location/save/([^/]++)/([^/]++)(*:1171)|product/(?|image/delete/([^/]++)(*:1212)|gallery/delete/([^/]++)(*:1244))|user/image/delete/([^/]++)(*:1280))|dmin/(?|c(?|o(?|untries/([^/]++)(?|(*:1325)|/edit(*:1339)|(*:1348))|mments/([^/]++)/(?|approve(*:1384)|d(?|isapprove(*:1406)|elete(*:1420))))|ities/([^/]++)(?|(*:1449)|/edit(*:1463)|(*:1472))|ategories/([^/]++)(?|(*:1503)|/edit(*:1517)|(*:1526))|ustom\\-fields/([^/]++)(?|(*:1561)|/edit(*:1575)|(*:1584)))|s(?|tates/([^/]++)(?|(*:1616)|/edit(*:1630)|(*:1639))|ubscriptions/([^/]++)(?|(*:1673)|/edit(*:1687)|(*:1696))|ocial\\-(?|medias/([^/]++)(?|(*:1734)|/edit(*:1748)|(*:1757))|logins/([^/]++)(?|(*:1785)|/edit(*:1799)|(*:1808)))|ettings/payment/bank\\-transfer/(?|([^/]++)(?|/edit(*:1869)|(*:1878))|pending(?|(*:1898)|/([^/]++)(?|(*:1919)|/(?|approve(*:1939)|reject(*:1954))))))|i(?|tem(?|s/(?|([^/]++)(?|(*:1994)|/(?|edit(*:2011)|s(?|lug/update(*:2034)|ections/(?|index(*:2059)|store(*:2073)|([^/]++)/(?|edit(*:2098)|update(*:2113)|destroy(*:2129)|rank\\-(?|up(*:2149)|down(*:2162))|collections/(?|store(*:2192)|([^/]++)/(?|rank\\-(?|up(*:2224)|down(*:2237))|destroy(*:2254)))))|uspend(*:2273))|category/update(*:2298)|unsave(*:2313)|approve(*:2329)|disapprove(*:2348))|(*:2358))|bulk/(?|approve(*:2383)|disapprove(*:2402)|suspend(*:2418))|([^/]++)/reviews/(?|create(*:2454)|store(*:2468)|([^/]++)/edit(*:2490)|update/([^/]++)(*:2514)|destroy/([^/]++)(*:2539))|reviews/(?|([^/]++)(*:2568)|update/([^/]++)/(?|approve(*:2603)|disapprove(*:2622))|destroy/([^/]++)(*:2648))|hour(?|s/(?|update/([^/]++)(*:2685)|destroy/([^/]++)(*:2710))|\\-exceptions/(?|update/([^/]++)(*:2751)|destroy/([^/]++)(*:2776))))|\\-(?|claims/(?|([^/]++)(?|(*:2814)|/edit(*:2828)|(*:2837))|download/([^/]++)(*:2864)|([^/]++)/(?|approve(*:2892)|disapprove(*:2911)))|leads/([^/]++)(?|(*:2939)|/edit(*:2953)|(*:2962))))|mporter/(?|csv/data/([^/]++)/(?|edit(*:3010)|parse(?|\\-ajax(*:3033)|/progress\\-ajax(*:3057))|destroy(*:3074))|item/data/([^/]++)/(?|edit(*:3110)|update(*:3125)|destroy(?|(*:3144)|\\-ajax(*:3159))|import(?|(*:3178)|\\-ajax(*:3193)))))|b(?|usiness/([^/]++)(?|(*:3229)|/edit(*:3243)|(*:3252))|logs/([^/]++)(?|(*:3278)|/edit(*:3292)|(*:3301)))|f(?|eatures/([^/]++)(?|(*:3335)|/edit(*:3349)|(*:3358))|aqs/([^/]++)(?|(*:3383)|/edit(*:3397)|(*:3406)))|a(?|ctivities/([^/]++)(?|(*:3442)|/edit(*:3456)|(*:3465))|dvertisements/([^/]++)(?|(*:3500)|/edit(*:3514)|(*:3523)))|orders/([^/]++)(?|(*:3552)|/edit(*:3566)|(*:3575))|messages/([^/]++)(?|(*:3605)|/edit(*:3619)|(*:3628))|plans/([^/]++)(?|(*:3655)|/edit(*:3669)|(*:3678))|users/(?|([^/]++)(?|(*:3708)|/edit(*:3722)|(*:3731))|password/([^/]++)(?|/edit(*:3766)|(*:3775))|([^/]++)/(?|suspend(*:3804)|unsuspend(*:3822))|bulk/(?|suspend(*:3847)|unsuspend(*:3865)))|testimonials/([^/]++)(?|(*:3900)|/edit(*:3914)|(*:3923))|lang/([^/]++)(?|(*:3949)|/edit(*:3963)|(*:3972))))|/password/reset/([^/]++)(*:4008)|/email(?|/verify/([^/]++)/([^/]++)(*:4051)|s/verify/([^/]++)(*:4077))|/b(?|ranches/([^/]++)(*:4108)|log(?|/([^/]++)(*:4132)|s/([^/]++)/reviews/store(*:4165)))|/s(?|ub_categories/([^/]++)/([^/]++)(*:4212)|tate/([^/]++)(?|(*:4237)|/city/([^/]++)(*:4260))|itemap/(?|listing/([^/]++)(*:4296)|state/([^/]++)(*:4319)|city/([^/]++)(*:4341)))|/items/(?|([^/]++)/(?|email(*:4379)|save(*:4392)|unsave(*:4407)|lead/store(*:4426))|ads/update/([^/]++)(*:4455)|([^/]++)/reviews/page/store(*:4491))|/user/item(?|s/(?|([^/]++)(?|(*:4530)|/(?|edit(*:4547)|s(?|lug/update(*:4570)|ections/(?|index(*:4595)|store(*:4609)|([^/]++)/(?|edit(*:4634)|update(*:4649)|destroy(*:4665)|rank\\-(?|up(*:4685)|down(*:4698))|collections/(?|store(*:4728)|([^/]++)/(?|rank\\-(?|up(*:4760)|down(*:4773))|destroy(*:4790))))))|category/update(*:4819)|unsave(*:4834)|reviews/(?|create(*:4860)|store(*:4874)|([^/]++)/edit(*:4896)|update/([^/]++)(*:4920)|destroy/([^/]++)(*:4945)))|(*:4956))|hour(?|s/(?|update/([^/]++)(*:4993)|destroy/([^/]++)(*:5018))|\\-exceptions/(?|update/([^/]++)(*:5059)|destroy/([^/]++)(*:5084))))|\\-(?|claims/(?|([^/]++)(?|(*:5122)|/edit(*:5136)|(*:5145))|download/([^/]++)(*:5172))|leads/([^/]++)(?|(*:5199)|/edit(*:5213)|(*:5222)))))/?$}sDu',
    ),
    3 => 
    array (
      51 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'canvas.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      82 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rneYgS0AkaRFHN07',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0OKWDL7vUU2xCqHQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NnzucCq7QTSGrFKL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N9xfQdOHlJJn6fP7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BpI3ynNsEYPR8QeQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qxHf7RL7lgwvQalY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IHpBdzMjueLJOwSt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ml592mXGa6EAOUOm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p0GYFPojMjvBiJ0m',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hr8Vq3ppJjEgMPjo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pWsoNzzauqAR3Q55',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b2tMqVo2wg9phBxk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JSAIpzJlBjdEbJ1d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      241 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ozdx9hXy8jJva8Vs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      249 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KZyDOEmfJUXnyOAC',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::657pPubPQKsgPpaj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'canvas',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sub_categories',
          ),
          1 => 
          array (
            0 => 'category_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      327 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.category.state',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'state_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.category.state.city',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'state_slug',
            2 => 'city_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      382 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'comments.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'comments.update',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'comments.reply',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.country.update',
          ),
          1 => 
          array (
            0 => 'user_prefer_country_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.cities',
          ),
          1 => 
          array (
            0 => 'state_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.index',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.create',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.store',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      593 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'languages.translations.update',
          ),
          1 => 
          array (
            0 => 'language',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      647 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.item',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'sub_category_slug',
            2 => 'state_slug',
            3 => 'item_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.product',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'product_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.locale.update',
          ),
          1 => 
          array (
            0 => 'user_prefer_language',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      741 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aSSkGBldiP44RsM8',
          ),
          1 => 
          array (
            0 => 'category_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JoajFxEFLvggM3aQ',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'state_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zy1ucE3HAYlR6Heg',
          ),
          1 => 
          array (
            0 => 'category_slug',
            1 => 'state_slug',
            2 => 'city_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nkdFhLtCIK36ZupQ',
          ),
          1 => 
          array (
            0 => 'state_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mBAI2HJLCWHzKj8P',
          ),
          1 => 
          array (
            0 => 'state_slug',
            1 => 'city_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1JKijBitESmUC2to',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mx1sQipTKYCdCO14',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'product_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.city',
          ),
          1 => 
          array (
            0 => 'state_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.category.image.delete',
          ),
          1 => 
          array (
            0 => 'category_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.state',
          ),
          1 => 
          array (
            0 => 'country_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.state.image.feature',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.item.image.feature',
          ),
          1 => 
          array (
            0 => 'item_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.item.image.gallery',
          ),
          1 => 
          array (
            0 => 'item_image_gallery_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.review.image.gallery',
          ),
          1 => 
          array (
            0 => 'review_image_gallery_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ajax.location.save',
          ),
          1 => 
          array (
            0 => 'lat',
            1 => 'lng',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.product.image.feature',
          ),
          1 => 
          array (
            0 => 'product_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.product.image.gallery',
          ),
          1 => 
          array (
            0 => 'product_image_gallery_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'json.user.image.profile',
          ),
          1 => 
          array (
            0 => 'user_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.show',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.edit',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.update',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.countries.destroy',
          ),
          1 => 
          array (
            0 => 'country',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.approve',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.disapprove',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.comments.destroy',
          ),
          1 => 
          array (
            0 => 'comment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1526 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.show',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.edit',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.update',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.custom-fields.destroy',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.show',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.edit',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1639 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.update',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.states.destroy',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.show',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.edit',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.update',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.subscriptions.destroy',
          ),
          1 => 
          array (
            0 => 'subscription',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.show',
          ),
          1 => 
          array (
            0 => 'social_media',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.edit',
          ),
          1 => 
          array (
            0 => 'social_media',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.update',
          ),
          1 => 
          array (
            0 => 'social_media',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-medias.destroy',
          ),
          1 => 
          array (
            0 => 'social_media',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1785 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.show',
          ),
          1 => 
          array (
            0 => 'social_login',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1799 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.edit',
          ),
          1 => 
          array (
            0 => 'social_login',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.update',
          ),
          1 => 
          array (
            0 => 'social_login',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.social-logins.destroy',
          ),
          1 => 
          array (
            0 => 'social_login',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.edit',
          ),
          1 => 
          array (
            0 => 'setting_bank_transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1878 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.update',
          ),
          1 => 
          array (
            0 => 'setting_bank_transfer',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.destroy',
          ),
          1 => 
          array (
            0 => 'setting_bank_transfer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.pending.index',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1919 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.pending.show',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.pending.approve',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.payment.bank-transfer.pending.reject',
          ),
          1 => 
          array (
            0 => 'invoice',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.show',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2011 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.slug.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.index',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.store',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2098 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.edit',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.update',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.destroy',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.rank.up',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.rank.down',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.collections.store',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.collections.rank.up',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
            2 => 'item_section_collection',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.collections.rank.down',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
            2 => 'item_section_collection',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.sections.collections.destroy',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
            2 => 'item_section_collection',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.suspend',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item.category.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.unsave',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.approve',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.disapprove',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.destroy',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.bulk.approve',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.bulk.disapprove',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2418 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.bulk.suspend',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.create',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.store',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.edit',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.update',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'review',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.destroy',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'review',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.show',
          ),
          1 => 
          array (
            0 => 'review_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.approve',
          ),
          1 => 
          array (
            0 => 'review_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.disapprove',
          ),
          1 => 
          array (
            0 => 'review_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.reviews.delete',
          ),
          1 => 
          array (
            0 => 'review_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.hours.update',
          ),
          1 => 
          array (
            0 => 'item_hour',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2710 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.hours.destroy',
          ),
          1 => 
          array (
            0 => 'item_hour',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2751 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.hour-exceptions.update',
          ),
          1 => 
          array (
            0 => 'item_hour_exception',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.items.hour-exceptions.destroy',
          ),
          1 => 
          array (
            0 => 'item_hour_exception',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2814 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.show',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.edit',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2837 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.update',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.destroy',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2864 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.download.do',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.approve.do',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2911 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-claims.disapprove.do',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2939 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.show',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.edit',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.update',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.item-leads.destroy',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.data.edit',
          ),
          1 => 
          array (
            0 => 'import_csv_data',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.data.parse',
          ),
          1 => 
          array (
            0 => 'import_csv_data',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.data.parse.progress',
          ),
          1 => 
          array (
            0 => 'import_csv_data',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.csv.upload.data.destroy',
          ),
          1 => 
          array (
            0 => 'import_csv_data',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3110 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.edit',
          ),
          1 => 
          array (
            0 => 'import_item_data',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.update',
          ),
          1 => 
          array (
            0 => 'import_item_data',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.destroy',
          ),
          1 => 
          array (
            0 => 'import_item_data',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.destroy-ajax',
          ),
          1 => 
          array (
            0 => 'import_item_data',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.import',
          ),
          1 => 
          array (
            0 => 'import_item_data',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.importer.item.data.import-ajax',
          ),
          1 => 
          array (
            0 => 'import_item_data',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3229 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.show',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.edit',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.update',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.business.destroy',
          ),
          1 => 
          array (
            0 => 'business',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.edit',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3301 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.blogs.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.show',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.edit',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.update',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.features.destroy',
          ),
          1 => 
          array (
            0 => 'feature',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.show',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.edit',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.update',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.faqs.destroy',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.show',
          ),
          1 => 
          array (
            0 => 'activity',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.edit',
          ),
          1 => 
          array (
            0 => 'activity',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3465 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.update',
          ),
          1 => 
          array (
            0 => 'activity',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.activities.destroy',
          ),
          1 => 
          array (
            0 => 'activity',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.show',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.edit',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.update',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.advertisements.destroy',
          ),
          1 => 
          array (
            0 => 'advertisement',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.edit',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.orders.destroy',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3605 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.show',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.edit',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.update',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.messages.destroy',
          ),
          1 => 
          array (
            0 => 'message',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.show',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3669 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.edit',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.update',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.plans.destroy',
          ),
          1 => 
          array (
            0 => 'plan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3708 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3766 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.password.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.password.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.suspend',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.unsuspend',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.bulk.suspend',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.users.bulk.unsuspend',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3900 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.show',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3914 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.edit',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3923 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.update',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.testimonials.destroy',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.show',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.edit',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.update',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.lang.destroy',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4008 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4051 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'emails.verify',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.branches',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.blog',
          ),
          1 => 
          array (
            0 => 'blog_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.reviews.store',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.category',
          ),
          1 => 
          array (
            0 => 'parent_category_slug',
            1 => 'category_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.state',
          ),
          1 => 
          array (
            0 => 'state_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.city',
          ),
          1 => 
          array (
            0 => 'state_slug',
            1 => 'city_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.listing.pagination',
          ),
          1 => 
          array (
            0 => 'page_number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.state.pagination',
          ),
          1 => 
          array (
            0 => 'page_number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.sitemap.city.pagination',
          ),
          1 => 
          array (
            0 => 'page_number',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.item.email',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.item.save',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.item.unsave',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'page.item.lead.store',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.ad.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4491 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'items.reviews.pages.store',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4530 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.show',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.edit',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item.slug.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.index',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.store',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.edit',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.update',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4665 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.destroy',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.rank.up',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.rank.down',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.collections.store',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.collections.rank.up',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
            2 => 'item_section_collection',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4773 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.collections.rank.down',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
            2 => 'item_section_collection',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.sections.collections.destroy',
          ),
          1 => 
          array (
            0 => 'item',
            1 => 'item_section',
            2 => 'item_section_collection',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item.category.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4834 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.unsave',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.reviews.create',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4874 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.reviews.store',
          ),
          1 => 
          array (
            0 => 'item_slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.reviews.edit',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'review',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.reviews.update',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'review',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.reviews.destroy',
          ),
          1 => 
          array (
            0 => 'item_slug',
            1 => 'review',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.update',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.destroy',
          ),
          1 => 
          array (
            0 => 'item',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.hours.update',
          ),
          1 => 
          array (
            0 => 'item_hour',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.hours.destroy',
          ),
          1 => 
          array (
            0 => 'item_hour',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.hour-exceptions.update',
          ),
          1 => 
          array (
            0 => 'item_hour_exception',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.items.hour-exceptions.destroy',
          ),
          1 => 
          array (
            0 => 'item_hour_exception',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5122 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.show',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.edit',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5145 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.update',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.destroy',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-claims.download.do',
          ),
          1 => 
          array (
            0 => 'item_claim',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.show',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      5213 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.edit',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      5222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.update',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.item-leads.destroy',
          ),
          1 => 
          array (
            0 => 'item_lead',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'canvas.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JhLEhVPgo9EpzmZp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'generated::JhLEhVPgo9EpzmZp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'canvas.password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas.password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'canvas.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'canvas.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'canvas.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas.password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'canvas.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'Canvas\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => 'Canvas\\Http\\Controllers\\Auth',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ohAtZ8fsolv8Kdvz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\StatsController@__invoke',
        'controller' => 'Canvas\\Http\\Controllers\\StatsController',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api',
        'where' => 
        array (
        ),
        'as' => 'generated::ohAtZ8fsolv8Kdvz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8uraEyEcUB7Vnkaz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/api/uploads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UploadsController@store',
        'controller' => 'Canvas\\Http\\Controllers\\UploadsController@store',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/uploads',
        'where' => 
        array (
        ),
        'as' => 'generated::8uraEyEcUB7Vnkaz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rk69u7yLHT1b7VmP' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'canvas/api/uploads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UploadsController@destroy',
        'controller' => 'Canvas\\Http\\Controllers\\UploadsController@destroy',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/uploads',
        'where' => 
        array (
        ),
        'as' => 'generated::rk69u7yLHT1b7VmP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cLWzMHWuzXcTz0OC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\PostController@index',
        'controller' => 'Canvas\\Http\\Controllers\\PostController@index',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::cLWzMHWuzXcTz0OC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v9Z804NAj8pZO80h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/posts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\PostController@create',
        'controller' => 'Canvas\\Http\\Controllers\\PostController@create',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::v9Z804NAj8pZO80h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rneYgS0AkaRFHN07' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\PostController@show',
        'controller' => 'Canvas\\Http\\Controllers\\PostController@show',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::rneYgS0AkaRFHN07',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OKWDL7vUU2xCqHQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/posts/{id}/stats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\PostController@stats',
        'controller' => 'Canvas\\Http\\Controllers\\PostController@stats',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::0OKWDL7vUU2xCqHQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NnzucCq7QTSGrFKL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/api/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\PostController@store',
        'controller' => 'Canvas\\Http\\Controllers\\PostController@store',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::NnzucCq7QTSGrFKL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N9xfQdOHlJJn6fP7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'canvas/api/posts/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\PostController@destroy',
        'controller' => 'Canvas\\Http\\Controllers\\PostController@destroy',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/posts',
        'where' => 
        array (
        ),
        'as' => 'generated::N9xfQdOHlJJn6fP7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tO7RfPJN4SToazpz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TagController@index',
        'controller' => 'Canvas\\Http\\Controllers\\TagController@index',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::tO7RfPJN4SToazpz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JUFsIsjJUQYGFVcg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/tags/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TagController@create',
        'controller' => 'Canvas\\Http\\Controllers\\TagController@create',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::JUFsIsjJUQYGFVcg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BpI3ynNsEYPR8QeQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/tags/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TagController@show',
        'controller' => 'Canvas\\Http\\Controllers\\TagController@show',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::BpI3ynNsEYPR8QeQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qxHf7RL7lgwvQalY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/tags/{id}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TagController@posts',
        'controller' => 'Canvas\\Http\\Controllers\\TagController@posts',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::qxHf7RL7lgwvQalY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IHpBdzMjueLJOwSt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/api/tags/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TagController@store',
        'controller' => 'Canvas\\Http\\Controllers\\TagController@store',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::IHpBdzMjueLJOwSt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ml592mXGa6EAOUOm' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'canvas/api/tags/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TagController@destroy',
        'controller' => 'Canvas\\Http\\Controllers\\TagController@destroy',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/tags',
        'where' => 
        array (
        ),
        'as' => 'generated::Ml592mXGa6EAOUOm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a57ZdegLYROEMXlF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TopicController@index',
        'controller' => 'Canvas\\Http\\Controllers\\TopicController@index',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::a57ZdegLYROEMXlF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JYjkxxcqNy6Q7TvY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/topics/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TopicController@create',
        'controller' => 'Canvas\\Http\\Controllers\\TopicController@create',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::JYjkxxcqNy6Q7TvY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p0GYFPojMjvBiJ0m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/topics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TopicController@show',
        'controller' => 'Canvas\\Http\\Controllers\\TopicController@show',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::p0GYFPojMjvBiJ0m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hr8Vq3ppJjEgMPjo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/topics/{id}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TopicController@posts',
        'controller' => 'Canvas\\Http\\Controllers\\TopicController@posts',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::Hr8Vq3ppJjEgMPjo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pWsoNzzauqAR3Q55' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/api/topics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TopicController@store',
        'controller' => 'Canvas\\Http\\Controllers\\TopicController@store',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::pWsoNzzauqAR3Q55',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2tMqVo2wg9phBxk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'canvas/api/topics/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\TopicController@destroy',
        'controller' => 'Canvas\\Http\\Controllers\\TopicController@destroy',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/topics',
        'where' => 
        array (
        ),
        'as' => 'generated::b2tMqVo2wg9phBxk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H3Zb3WcegWWi8hF5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UserController@index',
        'controller' => 'Canvas\\Http\\Controllers\\UserController@index',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::H3Zb3WcegWWi8hF5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLeEMZNE0in4zhWp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UserController@create',
        'controller' => 'Canvas\\Http\\Controllers\\UserController@create',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::pLeEMZNE0in4zhWp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JSAIpzJlBjdEbJ1d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UserController@show',
        'controller' => 'Canvas\\Http\\Controllers\\UserController@show',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::JSAIpzJlBjdEbJ1d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ozdx9hXy8jJva8Vs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/users/{id}/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UserController@posts',
        'controller' => 'Canvas\\Http\\Controllers\\UserController@posts',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Ozdx9hXy8jJva8Vs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KZyDOEmfJUXnyOAC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'canvas/api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UserController@store',
        'controller' => 'Canvas\\Http\\Controllers\\UserController@store',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::KZyDOEmfJUXnyOAC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::657pPubPQKsgPpaj' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'canvas/api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Canvas\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::657pPubPQKsgPpaj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::adXnMsxW7pLxuJ4c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/search/posts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\SearchController@posts',
        'controller' => 'Canvas\\Http\\Controllers\\SearchController@posts',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/search',
        'where' => 
        array (
        ),
        'as' => 'generated::adXnMsxW7pLxuJ4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JBFcdsEDFuFBHVPA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/search/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\SearchController@tags',
        'controller' => 'Canvas\\Http\\Controllers\\SearchController@tags',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/search',
        'where' => 
        array (
        ),
        'as' => 'generated::JBFcdsEDFuFBHVPA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HBmWtaZzG9r77z3D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/search/topics',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\SearchController@topics',
        'controller' => 'Canvas\\Http\\Controllers\\SearchController@topics',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/search',
        'where' => 
        array (
        ),
        'as' => 'generated::HBmWtaZzG9r77z3D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mRJUYq6C01kCfU9g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/api/search/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
          5 => 'Canvas\\Http\\Middleware\\Admin',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\SearchController@users',
        'controller' => 'Canvas\\Http\\Controllers\\SearchController@users',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas/api/search',
        'where' => 
        array (
        ),
        'as' => 'generated::mRJUYq6C01kCfU9g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'canvas' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'canvas/{view?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
          4 => 'Canvas\\Http\\Middleware\\Authenticate',
        ),
        'domain' => NULL,
        'uses' => 'Canvas\\Http\\Controllers\\ViewController@__invoke',
        'controller' => 'Canvas\\Http\\Controllers\\ViewController',
        'namespace' => 'Canvas\\Http\\Controllers',
        'prefix' => 'canvas',
        'where' => 
        array (
        ),
        'as' => 'canvas',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1c45SOTCpNIVpIBH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biscolab-recaptcha/validate',
      'action' => 
      array (
        'uses' => 'Biscolab\\ReCaptcha\\Controllers\\ReCaptchaController@validateV3',
        'controller' => 'Biscolab\\ReCaptcha\\Controllers\\ReCaptchaController@validateV3',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::1c45SOTCpNIVpIBH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@index',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@index',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@create',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@create',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@store',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageController@store',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/{language}/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@index',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages/{language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@update',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'languages/{language}/translations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@create',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'languages.translations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'languages/{language}/translations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'admin',
          3 => 'global_variables',
        ),
        'uses' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'controller' => 'JoeDixon\\Translation\\Http\\Controllers\\LanguageTranslationController@store',
        'namespace' => 'JoeDixon\\Translation\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'languages.translations.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Qj2HJSs9wOMjOE5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::9Qj2HJSs9wOMjOE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comments',
      'action' => 
      array (
        'uses' => '\\Laravelista\\Comments\\CommentController@store',
        'controller' => '\\Laravelista\\Comments\\CommentController@store',
        'as' => 'comments.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'comments/{comment}',
      'action' => 
      array (
        'uses' => '\\Laravelista\\Comments\\CommentController@destroy',
        'controller' => '\\Laravelista\\Comments\\CommentController@destroy',
        'as' => 'comments.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'comments/{comment}',
      'action' => 
      array (
        'uses' => '\\Laravelista\\Comments\\CommentController@update',
        'controller' => '\\Laravelista\\Comments\\CommentController@update',
        'as' => 'comments.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comments.reply' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comments/{comment}',
      'action' => 
      array (
        'uses' => '\\Laravelista\\Comments\\CommentController@reply',
        'controller' => '\\Laravelista\\Comments\\CommentController@reply',
        'as' => 'comments.reply',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OIza1BCfRiaVe4UF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers\\Api',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::OIza1BCfRiaVe4UF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UVlWmO8xQyMZYEWk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\Api\\AuthController@register',
        'namespace' => 'App\\Http\\Controllers\\Api',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::UVlWmO8xQyMZYEWk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ECb0eS7dvQj5Molh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ECb0eS7dvQj5Molh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FpUK5RgDeKpHZo3c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@search',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@search',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FpUK5RgDeKpHZo3c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k9BTQbVPrbN36Iok' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@categories',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@categories',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::k9BTQbVPrbN36Iok',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GmgqiqaSA5vwIF4D' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@states',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@states',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GmgqiqaSA5vwIF4D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aSSkGBldiP44RsM8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@category',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@category',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::aSSkGBldiP44RsM8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JoajFxEFLvggM3aQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category/{category_slug}/state/{state_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@categoryByState',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@categoryByState',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JoajFxEFLvggM3aQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zy1ucE3HAYlR6Heg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/category/{category_slug}/state/{state_slug}/city/{city_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@categoryByStateCity',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@categoryByStateCity',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::zy1ucE3HAYlR6Heg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nkdFhLtCIK36ZupQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/state/{state_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@state',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@state',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nkdFhLtCIK36ZupQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mBAI2HJLCWHzKj8P' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/state/{state_slug}/city/{city_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@city',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@city',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mBAI2HJLCWHzKj8P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1JKijBitESmUC2to' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/listing/{item_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@item',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@item',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1JKijBitESmUC2to',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mx1sQipTKYCdCO14' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/listing/{item_slug}/product/{product_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@product',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@product',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mx1sQipTKYCdCO14',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::je951hUc3AapuuhE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@about',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@about',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::je951hUc3AapuuhE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s5iChEOsGFTCEyMU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@contact',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@contact',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::s5iChEOsGFTCEyMU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cV9maTtZgNvzMFvq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\PagesController@doContact',
        'controller' => 'App\\Http\\Controllers\\Api\\PagesController@doContact',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::cV9maTtZgNvzMFvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'utils.cache' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'utils/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\UtilsController@makeCache',
        'controller' => 'App\\Http\\Controllers\\UtilsController@makeCache',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'utils.cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z8DEGjOSj3yWDoA7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::z8DEGjOSj3yWDoA7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TeTQAcyUJML6wMCa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TeTQAcyUJML6wMCa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TqDztIBhIOjiIL2I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TqDztIBhIOjiIL2I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@verify',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.resend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/resend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerificationController@resend',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerificationController@resend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.resend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.facebook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToFacebook',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToFacebook',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.facebook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.facebook.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/facebook/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@handleFacebookCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@handleFacebookCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.facebook.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.google' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToGoogle',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToGoogle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.google',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.google.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@handleGoogleCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@handleGoogleCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.google.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.twitter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToTwitter',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToTwitter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.twitter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.twitter.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/twitter/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@handleTwitterCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@handleTwitterCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.twitter.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.linkedin' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToLinkedIn',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToLinkedIn',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.linkedin',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.linkedin.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/linkedin/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@handleLinkedInCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@handleLinkedInCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.linkedin.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.github' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToGitHub',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@redirectToGitHub',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.github',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.login.github.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/github/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@handleGitHubCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@handleGitHubCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auth.login.github.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\PagesController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@search',
        'controller' => 'App\\Http\\Controllers\\PagesController@search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@about',
        'controller' => 'App\\Http\\Controllers\\PagesController@about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@contact',
        'controller' => 'App\\Http\\Controllers\\PagesController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.contact.do' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@doContact',
        'controller' => 'App\\Http\\Controllers\\PagesController@doContact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.contact.do',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@categories',
        'controller' => 'App\\Http\\Controllers\\PagesController@categories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sub_categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@sub_categories',
        'controller' => 'App\\Http\\Controllers\\PagesController@sub_categories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sub_categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.popular' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'popular',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@search',
        'controller' => 'App\\Http\\Controllers\\PagesController@search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.popular',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.branches' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'branches/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@branches',
        'controller' => 'App\\Http\\Controllers\\PagesController@branches',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.branches',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sub_categories/{parent_category_slug}/{category_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@category',
        'controller' => 'App\\Http\\Controllers\\PagesController@category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.search_categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@search_categories',
        'controller' => 'App\\Http\\Controllers\\PagesController@search_categories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.search_categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.category.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{category_slug}/state/{state_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@categoryByState',
        'controller' => 'App\\Http\\Controllers\\PagesController@categoryByState',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.category.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.category.state.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{category_slug}/state/{state_slug}/city/{city_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@categoryByStateCity',
        'controller' => 'App\\Http\\Controllers\\PagesController@categoryByStateCity',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.category.state.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state/{state_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@state',
        'controller' => 'App\\Http\\Controllers\\PagesController@state',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'state/{state_slug}/city/{city_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@city',
        'controller' => 'App\\Http\\Controllers\\PagesController@city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@states',
        'controller' => 'App\\Http\\Controllers\\PagesController@states',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cities/{state_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@cities',
        'controller' => 'App\\Http\\Controllers\\PagesController@cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.normalize_arabic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'normalize_arabic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadDataController@normalize_arabic',
        'controller' => 'App\\Http\\Controllers\\UploadDataController@normalize_arabic',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.normalize_arabic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.normalize_arabic_category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'normalize_arabic_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadDataController@normalize_arabic_category',
        'controller' => 'App\\Http\\Controllers\\UploadDataController@normalize_arabic_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.normalize_arabic_category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.delete_duplicates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete_duplicates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadDataController@delete_dublicates',
        'controller' => 'App\\Http\\Controllers\\UploadDataController@delete_dublicates',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.delete_duplicates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.update_counts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update_counts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadDataController@update_counts',
        'controller' => 'App\\Http\\Controllers\\UploadDataController@update_counts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.update_counts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.update_company_id' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update_company_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\UploadDataController@update_company_id',
        'controller' => 'App\\Http\\Controllers\\UploadDataController@update_company_id',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.update_company_id',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.item' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/{category_slug}/{sub_category_slug}/{state_slug}/{item_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@item',
        'controller' => 'App\\Http\\Controllers\\PagesController@item',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.item',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listing/{item_slug}/product/{product_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@product',
        'controller' => 'App\\Http\\Controllers\\PagesController@product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comments.proof_ownership' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comment/proof_ownership',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@proof_ownership',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@proof_ownership',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'comments.proof_ownership',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'comments.report_incorrect' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'comment/report_incorrect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@report_incorrect',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@report_incorrect',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'comments.report_incorrect',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.item.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/{item_slug}/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@emailItem',
        'controller' => 'App\\Http\\Controllers\\PagesController@emailItem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.item.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.item.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/{item_slug}/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@saveItem',
        'controller' => 'App\\Http\\Controllers\\PagesController@saveItem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.item.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.item.unsave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/{item_slug}/unsave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@unSaveItem',
        'controller' => 'App\\Http\\Controllers\\PagesController@unSaveItem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.item.unsave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.item.lead.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/{item_slug}/lead/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@storeItemLead',
        'controller' => 'App\\Http\\Controllers\\PagesController@storeItemLead',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.item.lead.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.pricing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@pricing',
        'controller' => 'App\\Http\\Controllers\\PagesController@pricing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.pricing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscripe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pricing/subscripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@subscripe',
        'controller' => 'App\\Http\\Controllers\\PagesController@subscripe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'emails.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'emails/verify/{order_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@verifyEmail',
        'controller' => 'App\\Http\\Controllers\\PagesController@verifyEmail',
        'as' => 'emails.verify',
        'namespace' => NULL,
        'prefix' => '/emails',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.terms-of-service' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-of-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@termsOfService',
        'controller' => 'App\\Http\\Controllers\\PagesController@termsOfService',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.terms-of-service',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.privacy-policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\PagesController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.privacy-policy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@blogs',
        'controller' => 'App\\Http\\Controllers\\PagesController@blogs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{blog_slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@blog',
        'controller' => 'App\\Http\\Controllers\\PagesController@blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.reviews.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blogs/{slug}/reviews/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@itemReviewsStore',
        'controller' => 'App\\Http\\Controllers\\PagesController@itemReviewsStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.reviews.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'items/reviews/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsIndex',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'items.reviews.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.ad.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/ads/update/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemAdUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemAdUpdate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'items.ad.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.locale.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/update/{user_prefer_language}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@updateLocale',
        'controller' => 'App\\Http\\Controllers\\PagesController@updateLocale',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.locale.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.country.update' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'country/update/{user_prefer_country_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@updateCountry',
        'controller' => 'App\\Http\\Controllers\\PagesController@updateCountry',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.country.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap.xml',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@index',
        'controller' => 'App\\Http\\Controllers\\SitemapController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@page',
        'controller' => 'App\\Http\\Controllers\\SitemapController@page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@category',
        'controller' => 'App\\Http\\Controllers\\SitemapController@category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.listing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/listing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@listing',
        'controller' => 'App\\Http\\Controllers\\SitemapController@listing',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.listing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.listing.pagination' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/listing/{page_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@listingPagination',
        'controller' => 'App\\Http\\Controllers\\SitemapController@listingPagination',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.listing.pagination',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.post' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/post',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@post',
        'controller' => 'App\\Http\\Controllers\\SitemapController@post',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.post',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.tag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/tag',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@tag',
        'controller' => 'App\\Http\\Controllers\\SitemapController@tag',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.tag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.topic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/topic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@topic',
        'controller' => 'App\\Http\\Controllers\\SitemapController@topic',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.topic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@state',
        'controller' => 'App\\Http\\Controllers\\SitemapController@state',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.state.pagination' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/state/{page_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@statePagination',
        'controller' => 'App\\Http\\Controllers\\SitemapController@statePagination',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.state.pagination',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/city',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@city',
        'controller' => 'App\\Http\\Controllers\\SitemapController@city',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.city.pagination' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/city/{page_number}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@cityPagination',
        'controller' => 'App\\Http\\Controllers\\SitemapController@cityPagination',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.city.pagination',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'page.sitemap.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sitemap/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\SitemapController@blog',
        'controller' => 'App\\Http\\Controllers\\SitemapController@blog',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'page.sitemap.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'items.reviews.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'items/{item_slug}/reviews/page/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@review',
        'controller' => 'App\\Http\\Controllers\\PagesController@review',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'items.reviews.pages.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.city' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/cities/{state_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonGetCitiesByState',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonGetCitiesByState',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.city',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.state' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajax/states/{country_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonGetStatesByCountry',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonGetStatesByCountry',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.state',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.state.image.feature' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/state/image/delete/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteStateFeatureImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteStateFeatureImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.state.image.feature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.item.image.feature' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/item/image/delete/{item_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteItemFeatureImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteItemFeatureImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.item.image.feature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.item.image.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/item/gallery/delete/{item_image_gallery_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteItemImageGallery',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteItemImageGallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.item.image.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.review.image.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/item/review/gallery/delete/{review_image_gallery_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteReviewImageGallery',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteReviewImageGallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.review.image.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ajax.location.save' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/location/save/{lat}/{lng}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@ajaxLocationSave',
        'controller' => 'App\\Http\\Controllers\\PagesController@ajaxLocationSave',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'ajax.location.save',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.product.image.feature' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/product/image/delete/{product_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteProductFeatureImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteProductFeatureImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.product.image.feature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.product.image.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/product/gallery/delete/{product_image_gallery_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteProductImageGallery',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteProductImageGallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.product.image.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.user.image.profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/user/image/delete/{user_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteUserProfileImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteUserProfileImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.user.image.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.setting.logo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/setting/logo/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteSettingLogoImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteSettingLogoImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.setting.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.setting.favicon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/setting/favicon/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteSettingFaviconImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteSettingFaviconImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.setting.favicon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'json.category.image.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajax/category/image/delete/{category_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@jsonDeleteCategoryImage',
        'controller' => 'App\\Http\\Controllers\\PagesController@jsonDeleteCategoryImage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'json.category.image.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PagesController@index',
        'as' => 'admin.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/countries/{country}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.countries.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/countries/{country}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.countries.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CountryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CountryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/states/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/states/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/states/{state}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/states/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.states.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/states/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.states.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\StateController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\StateController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.cities.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CityController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CityController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.categories.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoryController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-fields/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/custom-fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/custom-fields/{custom_field}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.custom-fields.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.custom-fields.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomFieldController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/{item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.items.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.business.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/business/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.business.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@store',
        'as' => 'admin.business.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'verified',
          1 => 'auth',
          2 => 'admin',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/business/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.business.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/business/{business}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.business.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/business/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.business.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.business.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/business/{business}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.business.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BusinessController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BusinessController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/features/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/features/{feature}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.features.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/features/{feature}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.features.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\FeatureController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FeatureController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.blogs.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/activities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activities/{activity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/activities/{activity}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/activities/{activity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.activities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/activities/{activity}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.activities.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ActivityLogController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/orders/{order}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.orders.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.orders.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.slug.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/slug/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSlug',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSlug',
        'as' => 'admin.item.slug.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/{item}/sections/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@indexItemSections',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@indexItemSections',
        'as' => 'admin.items.sections.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/{item}/sections/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSection',
        'as' => 'admin.items.sections.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@editItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@editItemSection',
        'as' => 'admin.items.sections.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSection',
        'as' => 'admin.items.sections.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSection',
        'as' => 'admin.items.sections.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.rank.up' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/rank-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSection',
        'as' => 'admin.items.sections.rank.up',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.rank.down' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/rank-down',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSection',
        'as' => 'admin.items.sections.rank.down',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.collections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/collections/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSectionCollections',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSectionCollections',
        'as' => 'admin.items.sections.collections.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.collections.rank.up' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSectionCollection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSectionCollection',
        'as' => 'admin.items.sections.collections.rank.up',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.collections.rank.down' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-down',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSectionCollection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSectionCollection',
        'as' => 'admin.items.sections.collections.rank.down',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.sections.collections.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/{item}/sections/{item_section}/collections/{item_section_collection}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSectionCollection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSectionCollection',
        'as' => 'admin.items.sections.collections.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-claims',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-claims/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item-claims',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-claims/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-claims/{item_claim}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/item-claims/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/item-claims/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-claims.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.download.do' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item-claims/download/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@downloadItemClaimDoc',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@downloadItemClaimDoc',
        'as' => 'admin.item-claims.download.do',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.approve.do' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item-claims/{item_claim}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@approveItemClaim',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@approveItemClaim',
        'as' => 'admin.item-claims.approve.do',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-claims.disapprove.do' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item-claims/{item_claim}/disapprove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@disapproveItemClaim',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@disapproveItemClaim',
        'as' => 'admin.item-claims.disapprove.do',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/category/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemCategory',
        'as' => 'admin.item.category.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.saved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/saved/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@savedItems',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@savedItems',
        'as' => 'admin.items.saved',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.unsave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/{item_slug}/unsave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@unSaveItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@unSaveItem',
        'as' => 'admin.items.unsave',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.approve' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@approveItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@approveItem',
        'as' => 'admin.items.approve',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.disapprove' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/disapprove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@disApproveItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@disApproveItem',
        'as' => 'admin.items.disapprove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.suspend' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item}/suspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@suspendItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@suspendItem',
        'as' => 'admin.items.suspend',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.bulk.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/bulk/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkApproveItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkApproveItem',
        'as' => 'admin.items.bulk.approve',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.bulk.disapprove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/bulk/disapprove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkDisapproveItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkDisapproveItem',
        'as' => 'admin.items.bulk.disapprove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.bulk.suspend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/bulk/suspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkSuspendItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkSuspendItem',
        'as' => 'admin.items.bulk.suspend',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/bulk/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkDeleteItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkDeleteItem',
        'as' => 'admin.items.bulk.delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/{item_slug}/reviews/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsCreate',
        'as' => 'admin.items.reviews.create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/items/{item_slug}/reviews/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsStore',
        'as' => 'admin.items.reviews.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/{item_slug}/reviews/{review}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsEdit',
        'as' => 'admin.items.reviews.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/{item_slug}/reviews/update/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsUpdate',
        'as' => 'admin.items.reviews.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/{item_slug}/reviews/destroy/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDestroy',
        'as' => 'admin.items.reviews.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/reviews/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsIndex',
        'as' => 'admin.items.reviews.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/items/reviews/{review_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsShow',
        'as' => 'admin.items.reviews.show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.approve' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/reviews/update/{review_id}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsApprove',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsApprove',
        'as' => 'admin.items.reviews.approve',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.disapprove' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/reviews/update/{review_id}/disapprove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDisapprove',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDisapprove',
        'as' => 'admin.items.reviews.disapprove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.reviews.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/reviews/destroy/{review_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDelete',
        'as' => 'admin.items.reviews.delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.blogs.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/blogs/reviews/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BlogController@blogReviewsIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\BlogController@blogReviewsIndex',
        'as' => 'admin.blogs.reviews.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.hours.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/hours/update/{item_hour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHour',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHour',
        'as' => 'admin.items.hours.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.hours.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/hours/destroy/{item_hour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHour',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHour',
        'as' => 'admin.items.hours.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.hour-exceptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/items/hour-exceptions/update/{item_hour_exception}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHourException',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHourException',
        'as' => 'admin.items.hour-exceptions.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.items.hour-exceptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/items/hour-exceptions/destroy/{item_hour_exception}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHourException',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHourException',
        'as' => 'admin.items.hour-exceptions.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/messages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/messages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/messages/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/messages/{message}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/messages/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.messages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/messages/{message}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.messages.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\MessageController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\MessageController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/{plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/plans/{plan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/plans/{plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.plans.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/plans/{plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.plans.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\PlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\PlanController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriptions/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/subscriptions/{subscription}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.subscriptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/subscriptions/{subscription}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.subscriptions.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SubscriptionController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.users.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.password.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/password/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editUserPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editUserPassword',
        'as' => 'admin.users.password.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/password/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateUserPassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateUserPassword',
        'as' => 'admin.users.password.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.suspend' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}/suspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@suspendUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@suspendUser',
        'as' => 'admin.users.suspend',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.unsuspend' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}/unsuspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@unsuspendUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@unsuspendUser',
        'as' => 'admin.users.unsuspend',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.bulk.verify' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/bulk/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@bulkVerifyUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@bulkVerifyUser',
        'as' => 'admin.users.bulk.verify',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.bulk.suspend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/bulk/suspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@bulkSuspendUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@bulkSuspendUser',
        'as' => 'admin.users.bulk.suspend',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.bulk.unsuspend' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/bulk/unsuspend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@bulkUnsuspendUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@bulkUnsuspendUser',
        'as' => 'admin.users.bulk.unsuspend',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/bulk/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@bulkDeleteUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@bulkDeleteUser',
        'as' => 'admin.users.bulk.delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editProfile',
        'as' => 'admin.users.profile.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfile',
        'as' => 'admin.users.profile.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.profile.password.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/profile/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editProfilePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editProfilePassword',
        'as' => 'admin.users.profile.password.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.users.profile.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/profile/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfilePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfilePassword',
        'as' => 'admin.users.profile.password.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonials/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/testimonials/{testimonial}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.testimonials.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.testimonials.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\TestimonialController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\TestimonialController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faqs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/faqs/{faq}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.faqs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.faqs.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\FaqController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FaqController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-medias',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-medias/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-medias',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-medias/{social_media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-medias/{social_media}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/social-medias/{social_media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-medias.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/social-medias/{social_media}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-medias.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialMediaController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.general.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editGeneralSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editGeneralSetting',
        'as' => 'admin.settings.general.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.general.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateGeneralSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateGeneralSetting',
        'as' => 'admin.settings.general.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.general.smtp.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/general/smtp/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@testSmtpSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@testSmtpSetting',
        'as' => 'admin.settings.general.smtp.test',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.about.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editAboutPageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editAboutPageSetting',
        'as' => 'admin.settings.page.about.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.about.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateAboutPageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateAboutPageSetting',
        'as' => 'admin.settings.page.about.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.slider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editSliderPageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editSliderPageSetting',
        'as' => 'admin.settings.page.slider.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.slider.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/slider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateSliderPageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateSliderPageSetting',
        'as' => 'admin.settings.page.slider.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.terms-service.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/terms-of-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editTermsOfServicePageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editTermsOfServicePageSetting',
        'as' => 'admin.settings.page.terms-service.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.terms-service.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/terms-of-service',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateTermsOfServicePageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateTermsOfServicePageSetting',
        'as' => 'admin.settings.page.terms-service.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.privacy-policy.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editPrivacyPolicyPageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editPrivacyPolicyPageSetting',
        'as' => 'admin.settings.page.privacy-policy.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.page.privacy-policy.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updatePrivacyPolicyPageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updatePrivacyPolicyPageSetting',
        'as' => 'admin.settings.page.privacy-policy.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.recaptcha.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/recaptcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editRecaptchaSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editRecaptchaSetting',
        'as' => 'admin.settings.recaptcha.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.recaptcha.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/recaptcha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateRecaptchaSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateRecaptchaSetting',
        'as' => 'admin.settings.recaptcha.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.sitemap.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editSitemapSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editSitemapSetting',
        'as' => 'admin.settings.sitemap.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.sitemap.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/sitemap',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateSitemapSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateSitemapSetting',
        'as' => 'admin.settings.sitemap.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.cache.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editCacheSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editCacheSetting',
        'as' => 'admin.settings.cache.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.cache.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateCacheSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateCacheSetting',
        'as' => 'admin.settings.cache.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.cache.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/cache/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@deleteCacheSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@deleteCacheSetting',
        'as' => 'admin.settings.cache.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.session.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editSessionSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editSessionSetting',
        'as' => 'admin.settings.session.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.session.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateSessionSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateSessionSetting',
        'as' => 'admin.settings.session.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.language.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editLanguageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editLanguageSetting',
        'as' => 'admin.settings.language.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.language.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateLanguageSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateLanguageSetting',
        'as' => 'admin.settings.language.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.product.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editProductSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editProductSetting',
        'as' => 'admin.settings.product.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.product.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateProductSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateProductSetting',
        'as' => 'admin.settings.product.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.item.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editItemSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editItemSetting',
        'as' => 'admin.settings.item.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.item.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/item',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateItemSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateItemSetting',
        'as' => 'admin.settings.item.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.maintenance.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editMaintenanceSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editMaintenanceSetting',
        'as' => 'admin.settings.maintenance.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.maintenance.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/maintenance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateMaintenanceSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateMaintenanceSetting',
        'as' => 'admin.settings.maintenance.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/bank-transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@indexBankTransferPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@indexBankTransferPaymentSetting',
        'as' => 'admin.settings.payment.bank-transfer.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@createBankTransferPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@createBankTransferPaymentSetting',
        'as' => 'admin.settings.payment.bank-transfer.create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@storeBankTransferPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@storeBankTransferPaymentSetting',
        'as' => 'admin.settings.payment.bank-transfer.store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/{setting_bank_transfer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editBankTransferPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editBankTransferPaymentSetting',
        'as' => 'admin.settings.payment.bank-transfer.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/{setting_bank_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateBankTransferPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateBankTransferPaymentSetting',
        'as' => 'admin.settings.payment.bank-transfer.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/{setting_bank_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@destroyBankTransferPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@destroyBankTransferPaymentSetting',
        'as' => 'admin.settings.payment.bank-transfer.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.pending.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@indexPendingBankTransferPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@indexPendingBankTransferPayment',
        'as' => 'admin.settings.payment.bank-transfer.pending.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.pending.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/pending/{invoice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@showPendingBankTransferPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@showPendingBankTransferPayment',
        'as' => 'admin.settings.payment.bank-transfer.pending.show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.pending.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/pending/{invoice}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@approveBankTransferPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@approveBankTransferPayment',
        'as' => 'admin.settings.payment.bank-transfer.pending.approve',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.bank-transfer.pending.reject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/bank-transfer/pending/{invoice}/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@rejectBankTransferPayment',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@rejectBankTransferPayment',
        'as' => 'admin.settings.payment.bank-transfer.pending.reject',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.paypal.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editPayPalPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editPayPalPaymentSetting',
        'as' => 'admin.settings.payment.paypal.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.paypal.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updatePayPalPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updatePayPalPaymentSetting',
        'as' => 'admin.settings.payment.paypal.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.razorpay.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editRazorpayPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editRazorpayPaymentSetting',
        'as' => 'admin.settings.payment.razorpay.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.razorpay.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateRazorpayPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateRazorpayPaymentSetting',
        'as' => 'admin.settings.payment.razorpay.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.stripe.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editStripePaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editStripePaymentSetting',
        'as' => 'admin.settings.payment.stripe.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.stripe.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updateStripePaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updateStripePaymentSetting',
        'as' => 'admin.settings.payment.stripe.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.payumoney.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/payment/payumoney',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@editPayumoneyPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@editPayumoneyPaymentSetting',
        'as' => 'admin.settings.payment.payumoney.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.payment.payumoney.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/payment/payumoney',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SettingController@updatePayumoneyPaymentSetting',
        'controller' => 'App\\Http\\Controllers\\Admin\\SettingController@updatePayumoneyPaymentSetting',
        'as' => 'admin.settings.payment.payumoney.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@index',
        'as' => 'admin.comments.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.approve' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/comments/{comment}/approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@approve',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@approve',
        'as' => 'admin.comments.approve',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.disapprove' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/comments/{comment}/disapprove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@disapprove',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@disapprove',
        'as' => 'admin.comments.disapprove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.comments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/comments/{comment}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@destroy',
        'as' => 'admin.comments.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisements/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/advertisements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisements/{advertisement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/advertisements/{advertisement}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/advertisements/{advertisement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.advertisements.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/advertisements/{advertisement}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.advertisements.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdvertisementController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-logins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-logins/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/social-logins',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-logins/{social_login}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/social-logins/{social_login}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/social-logins/{social_login}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.social-logins.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/social-logins/{social_login}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.social-logins.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\SocialLoginController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.sync.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang/sync',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@syncIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@syncIndex',
        'as' => 'admin.lang.sync.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.sync.do' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/sync/do',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@syncDo',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@syncDo',
        'as' => 'admin.lang.sync.do',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.sync.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang/sync/restore',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@syncRestore',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@syncRestore',
        'as' => 'admin.lang.sync.restore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/lang/{lang}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.lang.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/lang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.lang.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\LangController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\LangController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/importer/csv/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@showUpload',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@showUpload',
        'as' => 'admin.importer.csv.upload.show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importer/csv/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@uploadFolder',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@uploadFolder',
        'as' => 'admin.importer.csv.upload.process',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.data.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/importer/csv/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@indexCsvData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@indexCsvData',
        'as' => 'admin.importer.csv.upload.data.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.data.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/importer/csv/data/{import_csv_data}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@editCsvData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@editCsvData',
        'as' => 'admin.importer.csv.upload.data.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.data.parse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importer/csv/data/{import_csv_data}/parse-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxParseCsvData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxParseCsvData',
        'as' => 'admin.importer.csv.upload.data.parse',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.data.parse.progress' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importer/csv/data/{import_csv_data}/parse/progress-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxParseProgressCsvData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxParseProgressCsvData',
        'as' => 'admin.importer.csv.upload.data.parse.progress',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.csv.upload.data.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/importer/csv/data/{import_csv_data}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@destroyCsvData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@destroyCsvData',
        'as' => 'admin.importer.csv.upload.data.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/importer/item/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@indexItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@indexItemData',
        'as' => 'admin.importer.item.data.index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/importer/item/data/{import_item_data}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@editItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@editItemData',
        'as' => 'admin.importer.item.data.edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/importer/item/data/{import_item_data}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@updateItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@updateItemData',
        'as' => 'admin.importer.item.data.update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/importer/item/data/{import_item_data}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@destroyItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@destroyItemData',
        'as' => 'admin.importer.item.data.destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.destroy-ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importer/item/data/{import_item_data}/destroy-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxDestroyItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxDestroyItemData',
        'as' => 'admin.importer.item.data.destroy-ajax',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importer/item/data/{import_item_data}/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@importItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@importItemData',
        'as' => 'admin.importer.item.data.import',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.importer.item.data.import-ajax' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/importer/item/data/{import_item_data}/import-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxImportItemData',
        'controller' => 'App\\Http\\Controllers\\Admin\\ImporterController@ajaxImportItemData',
        'as' => 'admin.importer.item.data.import-ajax',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-leads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@index',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-leads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@create',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/item-leads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@store',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-leads/{item_lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@show',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/item-leads/{item_lead}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@edit',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'admin/item-leads/{item_lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@update',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.item-leads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/item-leads/{item_lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'admin',
        ),
        'as' => 'admin.item-leads.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@destroy',
        'namespace' => NULL,
        'prefix' => 'admin/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\PagesController@index',
        'as' => 'user.index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@index',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@create',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/items',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@store',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@show',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/{item}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@edit',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@update',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/items/{item}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.items.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroy',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.bulk.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/items/bulk/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkDeleteItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@bulkDeleteItem',
        'as' => 'user.items.bulk.delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item.slug.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/slug/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSlug',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSlug',
        'as' => 'user.item.slug.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/{item}/sections/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@indexItemSections',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@indexItemSections',
        'as' => 'user.items.sections.index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/items/{item}/sections/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSection',
        'as' => 'user.items.sections.store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@editItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@editItemSection',
        'as' => 'user.items.sections.edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemSection',
        'as' => 'user.items.sections.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSection',
        'as' => 'user.items.sections.destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.rank.up' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/rank-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSection',
        'as' => 'user.items.sections.rank.up',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.rank.down' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/rank-down',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSection',
        'as' => 'user.items.sections.rank.down',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.collections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/collections/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSectionCollections',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@storeItemSectionCollections',
        'as' => 'user.items.sections.collections.store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.collections.rank.up' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSectionCollection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankUpItemSectionCollection',
        'as' => 'user.items.sections.collections.rank.up',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.collections.rank.down' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/collections/{item_section_collection}/rank-down',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSectionCollection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@rankDownItemSectionCollection',
        'as' => 'user.items.sections.collections.rank.down',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.sections.collections.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/items/{item}/sections/{item_section}/collections/{item_section_collection}/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSectionCollection',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemSectionCollection',
        'as' => 'user.items.sections.collections.destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-claims',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@index',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-claims/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@create',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/item-claims',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@store',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-claims/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@show',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-claims/{item_claim}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@edit',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user/item-claims/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@update',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/item-claims/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-claims.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@destroy',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-claims.download.do' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/item-claims/download/{item_claim}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@downloadItemClaimDoc',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemClaimController@downloadItemClaimDoc',
        'as' => 'user.item-claims.download.do',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item.category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item}/category/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemCategory',
        'as' => 'user.item.category.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.saved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/saved/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@savedItems',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@savedItems',
        'as' => 'user.items.saved',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.unsave' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/items/{item_slug}/unsave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@unSaveItem',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@unSaveItem',
        'as' => 'user.items.unsave',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.reviews.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/{item_slug}/reviews/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsCreate',
        'as' => 'user.items.reviews.create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.reviews.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/items/{item_slug}/reviews/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsStore',
        'as' => 'user.items.reviews.store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.reviews.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/{item_slug}/reviews/{review}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsEdit',
        'as' => 'user.items.reviews.edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.reviews.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/{item_slug}/reviews/update/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsUpdate',
        'as' => 'user.items.reviews.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.reviews.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/items/{item_slug}/reviews/destroy/{review}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDestroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsDestroy',
        'as' => 'user.items.reviews.destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.reviews.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/items/reviews/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsIndex',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@itemReviewsIndex',
        'as' => 'user.items.reviews.index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.hours.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/hours/update/{item_hour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHour',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHour',
        'as' => 'user.items.hours.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.hours.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/items/hours/destroy/{item_hour}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHour',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHour',
        'as' => 'user.items.hours.destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.hour-exceptions.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/items/hour-exceptions/update/{item_hour_exception}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHourException',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@updateItemHourException',
        'as' => 'user.items.hour-exceptions.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.items.hour-exceptions.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/items/hour-exceptions/destroy/{item_hour_exception}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHourException',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemController@destroyItemHourException',
        'as' => 'user.items.hour-exceptions.destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.comments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/comments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CommentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CommentController@index',
        'as' => 'user.comments.index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editProfile',
        'as' => 'user.profile.edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfile',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfile',
        'as' => 'user.profile.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.password.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@editProfilePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@editProfilePassword',
        'as' => 'user.profile.password.edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfilePassword',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateProfilePassword',
        'as' => 'user.profile.password.update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-leads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.index',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@index',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-leads/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.create',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@create',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/item-leads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.store',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@store',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-leads/{item_lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.show',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@show',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/item-leads/{item_lead}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.edit',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@edit',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user/item-leads/{item_lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.update',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@update',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.item-leads.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/item-leads/{item_lead}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
          3 => 'verified',
          4 => 'auth',
          5 => 'user',
        ),
        'as' => 'user.item-leads.destroy',
        'uses' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\ItemLeadController@destroy',
        'namespace' => NULL,
        'prefix' => 'user/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getData' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@getData',
        'controller' => 'App\\Http\\Controllers\\PagesController@getData',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getData',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getSubCategories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-sub-categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@getSubCategories',
        'controller' => 'App\\Http\\Controllers\\PagesController@getSubCategories',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getSubCategories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save-location' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'save-location',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@saveLocation',
        'controller' => 'App\\Http\\Controllers\\PagesController@saveLocation',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'save-location',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'getCities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@getCities',
        'controller' => 'App\\Http\\Controllers\\PagesController@getCities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'getCities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchajax' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'searchajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'global_variables',
          2 => 'maintenance',
        ),
        'uses' => 'App\\Http\\Controllers\\PagesController@searchajax',
        'controller' => 'App\\Http\\Controllers\\PagesController@searchajax',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'searchajax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
