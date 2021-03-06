
@extends('home')

@section('styles')
    <link href="{{ url('/') }}/css/style.min.css" rel="stylesheet">
@endsection

@section('content')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="page-title mb-0 p-0">New User</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/accounts">Users</a></li>
                                    <li class="breadcrumb-item">New User</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                @if (\Session::has('success'))
                    <div class="alert alert-success">{!! \Session::get('success') !!}</div>
                @endif
                <form enctype="multipart/form-data" action="{{ route('adduser') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>New User</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="f_name">First Name</label>
                                            <input type="text" class="form-control" id="f_name" name="f_name" maxlength="225" required>
                                        </div>  
                                        <div class="form-group col">
                                            <label for="l_name">Last Name</label>
                                            <input type="text" class="form-control" id="l_name" name="l_name" maxlength="225" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="user_fb">FB Link</label>
                                            <input type="text" class="form-control" value="" id="user_fb" name="user_fb" maxlength="225">
                                        </div>
                                        <div class="form-group col">
                                            <label for="user_insta">Insta Link</label>
                                            <input type="text" class="form-control" value="" id="user_insta" name="user_insta" maxlength="225">
                                        </div> 
                                        <div class="form-group col">
                                            <label for="user_twitter">Twitter Link</label>
                                            <input type="text" class="form-control" value="" id="user_twitter" name="user_twitter" maxlength="225">
                                        </div> 
                                        <div class="form-group col">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" value="" id="email" name="email" maxlength="225" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col">
                                            <label for="user_role">User Role</label>
                                            <select name="user_role" class="form-select">
                                                <option value="admin">Admins</option>
                                                <option value="client">Clients</option>
                                                <option value="va">Virtual Assistant</option>
                                                <option value="dm">Digital Marketing</option>
                                            </select>
                                        </div>
                                        <div class="form-group col">
                                            <label for="user_department">User Department</label>
                                            <input type="text" class="form-control" id="user_department" name="user_department" maxlength="225" required>
                                        </div>
                                        <div class="form-group col">
                                            <label for="user_position">User Position</label>
                                            <input type="text" class="form-control" id="user_position" name="user_position" maxlength="225" required>
                                        </div>
                                        <div class="form-group col">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" maxlength="225" required>
                                        </div> 
                                        <div class="form-group col">
                                            <label for="password">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password" maxlength="225" required>
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-outline-primary" id="show">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" name="user_image" id="image_input" required>
                                        <label class="custom-file-label" for="image_input">User Image</label>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Save"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>

@endsection

@section('scripts')
<script src="{{ url('/') }}/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="{{ url('/') }}/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('/') }}/js/app-style-switcher.js"></script>
<script src="{{ url('/') }}/js/waves.js"></script>
<script src="{{ url('/') }}/js/sidebarmenu.js"></script>
<script src="{{ url('/') }}/js/custom.js"></script>
<script>
    $show = false;
    $("#show").click(function(){
        if(!$show){
            $("#password").attr("type", "text");
            $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
            $show = true;
        }else{
            $("#password").attr("type", "password");
            $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
            $show = false;
        }
        
    });
</script>

@endsection