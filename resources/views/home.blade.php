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
            <h1>{{$problem -> title}}</h1>
            <span class="badge badge-info">{{$problem -> tag}}</span>
                <p class="mb-0">{{$problem -> description}}</p>
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
                        <p class="cm-countdown" id="countdown">00:00:00</p>
                    </div>
            </paper-card>
            <paper-card>
                <div class="container-fluid text-center">
                    <div><span class="title">题目列表</span></div>
                    @foreach ($problems as $p)
                    <a href="/{{$p -> pid}}">
                        <button class="btn btn-info bmd-btn-fab bmd-btn-fab-sm">
                            {{$p -> pid}}
                        </button>
                    </a>
                    @endforeach
                </div>
            </paper-card>
            @foreach ($notice as $n)
            <paper-card>
                <div>
                    {{$n -> name}} - {{$n -> post_date_parsed}}
                </div>
                <div>
                    <h5>{{$n -> title}}</h5>
                    <p>{{$n -> content}}</p>
                </div>
            </paper-card>
            @endforeach
        </div>
    </div>
</div>

<script>
    var remaining_time = {{$remaining_time}};
    updateCountDown();

    var countDownTimer = setInterval(function(){
        remaining_time--;
        if(remaining_time<=0){
            remaining_time=0;
            clearInterval(countDownTimer);
            $("#contest_status").text("比赛结束");
        }
        updateCountDown();
    }, 1000);

    function updateCountDown(){
        remaining_hour = parseInt(remaining_time/3600);
        remaining_min  = parseInt((remaining_time-remaining_hour*3600)/60);
        remaining_sec  = parseInt((remaining_time-remaining_hour*3600-remaining_min*60));
        remaining_hour = (remaining_hour<10?'0':'')+remaining_hour;
        remaining_min  = (remaining_min<10?'0':'')+remaining_min;
        remaining_sec  = (remaining_sec<10?'0':'')+remaining_sec;
        document.getElementById("countdown").innerText=remaining_hour+":"+remaining_min+":"+remaining_sec;
    }

    window.addEventListener("load",function() {
        $('loading').css({"opacity":"0","pointer-events":"none"});
    }, false);
</script>

@endsection
