<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('title') | Admin Panel</title>
        @include('admin.layouts.dev.link')
    </head>
    <body>
        <div class="container-scroller">
            @include("admin.layouts.navbar")
            <div class="container-fluid page-body-wrapper">
                @include("admin.layouts.sidebar")
                <div class="main-panel">
                    <div class="content-wrapper">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.dev.script')
    </body>
</html>
