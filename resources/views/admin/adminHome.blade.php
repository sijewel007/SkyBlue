<!DOCTYPE html>
<html lang="en">
    <!-- head Start -->
        @include('admin.partials.head')
    <!-- head End -->
     
    <body>
        <div class="container-scroller">

            <!-- partial:partials/_sidebar.html Start-->
                @include('admin.partials.sidebar')
            <!-- partial/_sidebar.html End -->

            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html Start-->
                    @include('admin.partials.navbar')
                <!-- partial/_navbar.html End -->

                <!-- main-panel Start -->
                    <div class="main-panel">
                        <!-- Body Start -->
                            @include('admin.partials.body')
                        <!-- Body End -->
                        
                        <!-- partial:partials/_footer.html Start -->
                            @include('admin.partials.footer')
                        <!-- partial:partials/_footer.html End -->
                    </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
            <!-- container-scroller -->
        
            <!-- partial:partials/_Scripts Start -->
                @include('admin.partials.scripts')
            <!-- partial:partials/_Scripts End -->
    </body>
</html>