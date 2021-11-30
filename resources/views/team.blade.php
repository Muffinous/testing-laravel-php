<head>
    <!-- Latest minified bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/header.css') }}">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=anonymous>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/css/join.css') }}">
    
    <title>Team</title>  
</head>

<body>
  @extends('header')
   <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
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
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form onsubmit="return false;">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>                           
                            </div>
                            <input id="password" type="password" pattern="password123" placeholder="Enter your password" required="required" title="Wasn't your password &quot;password123&quot;? 🤫"/>

                            <!-- <div class="col-lg-12 loginbttm"> -->
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-12 login-btm login-button">
                                <button type="submit" for="login" class="raise">GO</button>
                            </div>
                            <!-- </div> -->
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
    </div>

</body>