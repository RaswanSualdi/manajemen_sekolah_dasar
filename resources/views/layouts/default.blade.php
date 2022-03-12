<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
   
    <!-- Title Page-->
    <title>Dashboard</title>
      {{-- style --}}
   @stack('before-style')
   @include('includes.style')
   @stack('after-style')
</head>

<body class="animsition">
    <div class="page-wrapper">
        {{-- navbar --}}
      @include('includes.navbar')
      <!-- END navbar-->
         {{--SideBar --}}
        @include('includes.sidebar')
        {{--end SideBar --}}
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

</body>

</html>