<head>
    <!-- Latest minified bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/header.css') }}">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=anonymous>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/test.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/join.css') }}">

    <title>Team</title>  
</head>

<body>
@extends('header')

<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <form method="post" action="{{ url('/index2')}}">
                <div class="col-lg-12 login-title">
                        Hello
                </div>
            
                <div class="form-group" style="margin-bottom: 0px;">
                    <label id="username" class="form-control-label">USERNAME</label>
                </div>
                <input type="text" class="form-control" style="margin-bottom: 0px;">

                <div class="form-group">
                    <label for="password" class="form-control-label">PASSWORD</label>
                </div>
                <input id="password" type="password" placeholder="Enter your password" required="required"/>
                
                <input id="login" type="checkbox"/>
                <div class="col-lg-12 login-btm">
                    <button type="submit" class="raise" style="float: right;">GO</button>
                </div>
                <div class="padlock">
                    <div class="padlock__hook">
                    <div class="padlock__hook-body"></div>
                    <div class="padlock__hook-body"></div>
                    </div>
                    <div class="padlock__body">
                    <div class="padlock__face">
                        <div class="padlock__eye padlock__eye--left"></div>
                        <div class="padlock__eye padlock__eye--right"></div>
                        <div class="padlock__mouth padlock__mouth--one"></div>
                        <div class="padlock__mouth padlock__mouth--two"></div>
                        <div class="padlock__mouth padlock__mouth--three"></div>
                    </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>