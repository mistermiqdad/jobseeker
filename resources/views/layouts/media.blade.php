<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head');
    @if(view()->exists($plugin)) @include($plugin) @endif
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    @include('includes.nav');

    @include($page);
    
    <!--Footer-->
    @include('includes.footer');
</body>
</html>
