<?php
    $mac=$_POST['mac'];
    $ip=$_POST['ip'];
    $username=$_POST['username'];
    $linklogin=$_POST['link-login'];
    $linkorig=$_POST['link-orig'];
    $error=$_POST['error'];
    $trial=$_POST['trial'];
    $loginby=$_POST['login-by'];
    $chapid=$_POST['chap-id'];
    $chapchallenge=$_POST['chap-challenge'];
    $linkloginonly=$_POST['link-login-only'];
    $linkorigesc=$_POST['link-orig-esc'];
    $macesc=$_POST['mac-esc'];
    $identity=$_POST['identity'];
    $bytesinnice=$_POST['bytes-in-nice'];
    $bytesoutnice=$_POST['bytes-out-nice'];
    $sessiontimeleft=$_POST['session-time-left'];
    $uptime=$_POST['uptime'];
    $refreshtimeout=$_POST['refresh-timeout'];   
    $linkstatus=$_POST['link-status'];  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Badaro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body>

<div id="wrap">
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $identity; ?></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="http://hotspot.wiswaweb.com">Login</a></li>
                    <li><a href="http://hotspot.wiswaweb.com/status">Status</a></li>
                    <li><a href="http://hotspot.wiswaweb.com/logout?erase-cookie=true">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div id="bottom-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-2 mylogo">
                    <a href="http://wifi.badaro.my.id/" ref="index.html"><img src="img/agratitudesignlogo2.png" alt="logo"></a>
                </div> 
                <div class="col-xs-10 textlogo">
                    <h1>Badaro</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 col-sm-12">        
            <div class="row">
                <div class="alert alert-success">
                Anda berhasil login. Jika tidak terjadi apa-apa, klik <a href="<?php echo $linkstatus; ?>">disini</a>.
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="card hovercard">
                        <div class="cardheader">
                        </div>
                        <div class="avatar">
                        <img alt="" src="img/agratitudesignlogo.png">
                        </div>
                        <div class="info">
                        <div class="title">
                        <a href="http://badaro.my.id/">Badaro</a>
                        </div>
                        <div class="desc">supported by <a target="_blank" href="http://wifi.bdadro.my.id/" title="PT Jembatan Data Pangrango">PT. Jembatan Data Pangarango</a></div>
                        </div>
                        <div class="bottom">
                        <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-danger btn-sm" rel="publisher" href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-primary btn-sm" rel="publisher" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> 
</div>

<div id="footer">
    <div class="container">
        <p class="text-muted">Powered by <a href="http://badaro.my.id/">Badaro</a></p>
    </div>
</div>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
