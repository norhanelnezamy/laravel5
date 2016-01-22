<div class="page-content">

    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">

                <!-- END BEGIN STYLE CUSTOMIZER -->
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Dashboard <small>statistics and more</small>
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{url(ADMIN)}}">Home</a>
                        @if(!empty($title))   <i class="icon-angle-right"></i>@endif
                    </li>
                    @if(!empty($title))
                    <li>
                        <a href="{{URL::current()}}">{{$title}} </a>
                        {{--<i class="icon-angle-right"></i>--}}

                    </li>
                    @endif

                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
