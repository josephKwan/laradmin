<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta
* @link https://tabler.io
* Copyright 2018-2021 The Tabler Authors
* Copyright 2018-2021 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title')</title>
    <!-- CSS files -->
    <link href="/dist/css/tabler.min.css" rel="stylesheet"/>
    <!-- <link href="/dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="/dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="/dist/css/tabler-vendors.min.css" rel="stylesheet"/> -->
  </head>
  <body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex align-items-center justify-content-center">
      <div class="container-tight py-6">
        <div class="empty">
          <div class="empty-header">@yield('code')</div>
          <p class="empty-title">Oops… You just found an error page</p>
          <p class="empty-subtitle text-muted">
            @yield('message')
          </p>
          <div class="empty-action">
            <a href="/" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg>
              Take me home
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>







