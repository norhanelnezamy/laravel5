<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="{{trans('admin.lang')}}"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>@if(!empty($title)){{$title}} @endif</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{admin_assets}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets}}/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets}}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets}}/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets}}/assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets}}/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="{{admin_assets}}/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{admin_assets}}/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{admin_assets}}/assets/plugins/select2/select2_metro.css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{admin_assets}}/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
@if (count($errors) > 0)
   <div class="alert alert-danger alert-dismissable ">
     <button class="close" data-dismiss="alert" area-hidden="true" >&times;</button>
{{--
      <h4>{{trans('admin.error')}}</h4>
--}}
       <ul>
           @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissable ">
        <button class="close" data-dismiss="alert" area-hidden="true" >&times;</button>

        <ul>
            <p>{{session()->get('error')}}</p>
        </ul>
    </div>
    @endif