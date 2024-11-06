<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Saudi Car Hub</title>
    <!-- ==== Favicon ==== -->
    <link rel="icon" type="image/png" href="assets/images/logo-sm.svg" />
    <!-- ==== All Css Links ==== -->
    @include('frontend.partial.style')
</head>

<body>

    <!-- header :: start -->

    @include('frontend.partial.header')
    @yield('content')

    <!-- Testimonial area :: start  -->

    <!-- Testimonial area :: end  -->

    <!-- footer :: start  -->
    @include('frontend.partial.footer')
    <!-- footer :: end  -->



    @include('frontend.partial.js')
</body>

</html>
