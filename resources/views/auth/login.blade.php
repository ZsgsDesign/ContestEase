@extends('layouts')

@section('template')

<style>
    .form-control:focus,
    .form-control:hover {
        border-bottom-width: 2px;
    }

    form .form-group:last-of-type {
        margin-bottom: 0;
    }

    .alert>p {
        margin-bottom: 0;
    }

    .card {
        margin-bottom: 20vh;
        overflow: hidden;
        display: block;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px;
        border-radius: 4px;
        transition: .2s ease-out .0s;
        color: #7a8e97;
        background: #fff;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.15);
    }

    .card .card-header {
        padding: 0;
    }

    .card .card-header>ul {
        margin: 0;
    }

    .card .card-header>ul .nav-link {
        padding: 1rem;
        border: none!important;
    }

    .card .card-header .nav-tabs .nav-link.active {
        color: #ff4081;
    }

    .nav-tabs-material .nav-tabs-indicator {
        background-color: #ff4081;
        bottom: -1px;
        display: block;
        width: 50%;
        height: .15rem;
        position: absolute;
        transition: .2s ease-out .0s;
    }

    #accountTab {
        position: relative;
    }

    .card-footer {
        border: none;
    }

    .checkbox {
        margin-top: 1rem;
    }

    form {
        margin-bottom: 0;
    }

    input {
        box-shadow: none!important;
    }

    .was-validated input[type="checkbox"].form-control:invalid+span+span {
        color: #f44336!important;
    }

    label[for="agreement"] {
        display: inline-block;
    }
</style>
<div class="container mundb-standard-container">
    <div class="row justify-content-sm-center">
        <div class="col-sm-12 col-md-8 col-lg-6">
            <div class="text-center" style="margin-top:10vh;margin-bottom:20px;">
                <h1 style="padding:20px;display:inline-block;">登录</h1>
                <p>请填写您的学号和姓名</p>
            </div>
            <div class="card">
                <div class="tab-content" id="accountTabContent">
                    <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form class="needs-validation" action="?action=login" method="post" id="login_form" novalidate>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="sid" class="bmd-label-floating">学号</label>
                                    <input type="text" name="sid" class="form-control" id="login_sid" required>
                                    <div class="invalid-feedback">请填写您的学号</div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="bmd-label-floating">姓名</label>
                                    <input type="text" name="name" class="form-control" id="login_name" required>
                                    <div class="invalid-feedback">请填写您的姓名</div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-danger">登录</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener("load",function() {
        $('loading').css({"opacity":"0","pointer-events":"none"});
        $('input:-webkit-autofill').each(function(){
            if ($(this).val().length !== "") {
                console.log($(this).siblings('label'));
                $(this).siblings('label').addClass('active');
                $(this).parent().addClass('is-filled');
            }
        });
    }, false);

</script>

@endsection