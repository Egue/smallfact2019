<!--Metas -->
 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    .login-popup-heading>h4 {
    color: #258b47;
    font-size: 18px;
    line-height: 30px;
}
.new_reg_popup, .new_login_popup {
    border-radius: 2px;
    min-height: 332px;
    width: 500px;
    margin: 0px auto;
}
.login-popup-btn {
    background: #258b47;
    border: none;
    border-radius: 25px;
    color: #fff;
    display: block;
    font-size: 18px;
    height: 38px;
    line-height: 28px;
    margin: 20px auto 5px;
    width: 150px;
    -webkit-transition: all 700ms ease;
    -moz-transition: all 700ms ease;
    -ms-transition: all 700ms ease;
    -o-transition: all 700ms ease;
}
a{
     color: #258b47;
     font-size: 18px;
}
</style>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
<div class="login-popup-wrap new_login_popup"> 
                        <div class="login-popup-heading text-center">
                            <h4><i class="fa fa-lock" aria-hidden="true"></i> Login </h4>                        
                        </div>
                                                <!--<form accept-charset="utf-8" method="post" action="">-->
                        <form id="loginMember" role="form" action="" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="user_id" placeholder="Usuario" name="user">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" placeholder="contraseña" name="password">
                            </div>
                            <button type="submit" class="btn btn-default login-popup-btn" name="submit" value="1">Login</button>
                        </form>
                        
                        
                    </div>
                    
    <?php
require_once "src/Controllers/LoginController.php";
$login = new LoginController;
$login -> loginin();

if (isset($_GET["action"])) {
    
    if ($_GET["action"] == "loginerror") {
        echo "Error login";
    }   
}
?>