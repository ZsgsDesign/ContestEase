@extends('layouts')

@section('template')

<link rel="stylesheet" href="/static/fonts/Raleway/raleway.css">

<style>
    paper-card {
        display: block;
        box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 30px;
        border-radius: 4px;
        transition: .2s ease-out .0s;
        color: #7a8e97;
        background: #fff;
        padding: 1rem;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.15);
        margin-bottom: 2rem;
    }

    paper-card:hover {
        box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 40px;
    }

    a:hover{
        text-decoration: none!important;
    }

    h5{
        margin-bottom: 1rem;
        font-weight: bold;
    }

    .cm-progressbar-container{
        margin: 1rem 0;
    }

    .cm-countdown{
        font-family: 'Montserrat';
        font-size: 3rem;
        text-align: center;
        color: rgba(0, 0, 0, 0.42);
    }
</style>

<div class="container mundb-standard-container">
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <paper-card>
                <h1>第二道题</h1>
                <span class="badge badge-info">PHP</span>
                <p class="mb-0">皮老板最近在开发新生杯系统（没错，就是这个），但是他太累了，只做了个静态首页就咕咕咕了，你能帮帮他吗？</p>
                <form>
                    <div class="form-group">
                        <label for="answer" class="bmd-label-floating">请在此作答</label>
                        <textarea class="form-control" id="answer" rows="6"></textarea>
                    </div>
                    <div style="text-align:right;">
                        <button type="submit" value="submit" class="btn btn-primary">提交</button>
                    </div>
                </form>
            </paper-card>
        </div>
        <div class="col-sm-12 col-md-4">
            <paper-card>
                <h5 style="text-align:center" id="contest_status">比赛进行中</h5>
                <div>
                        <div class="cm-progressbar-container d-none">
                            <div class="progress wemd-light-blue wemd-lighten-4">
                                <div class="progress-bar wemd-light-blue" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <p class="cm-countdown" id="countdown">02:33:33</p>
                    </div>
            </paper-card>
            <paper-card>
                <div class="container-fluid text-center">
                    <div><span class="title">题目列表</span></div>
                    <button class="btn btn-success bmd-btn-fab bmd-btn-fab-sm">
                        1
                    </button>
                    <button class="btn btn-primary bmd-btn-fab bmd-btn-fab-sm">
                        2
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        3
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        4
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        5
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        6
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        7
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        8
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        9
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        10
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        11
                    </button>
                    <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                        12
                    </button>
                </div>
            </paper-card>
            <paper-card>
                <h5>这里放公告</h5>
                <div>
                    <p>//TODO</p>
                </div>
            </paper-card>
            <paper-card>
                <h5>更多的公告</h5>
                <div>
                    <p>//TODO</p>
                </div>
            </paper-card>
        </div>
    </div>
</div>

<script>
    window.addEventListener("load",function() {
        $('loading').css({"opacity":"0","pointer-events":"none"});
    }, false);
</script>

@endsection
