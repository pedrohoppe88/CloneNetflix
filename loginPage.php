<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="CSS/style.css">
<title></title>
</head>

    <style>
    </style>

<body>
    <header class="showcase">
        

            <div class="logo">
                <img src="https://i.ibb.co/r5krrdz/logo.png">
            </div>

            <div class="container">
            <div class="showcase-content">
                <div class="formm">

                    <form method="post" action="controller/loginControllerTeste.php">
                        <h1>Login</h1>

                        <div class="row">
                            <div class="col-md-12 text-center">
                            <div class="info">
                                
                                    <div class="mb-1 mt-3">

                                    <?php
                                    

                                    if(isset($_COOKIE['email'])){
                                        echo '<input class="email" name="email" type="email" value="'.$_COOKIE['email'].'" placeholder="Email or phone number">';
                                    } else {
                                        echo '<input class="email" name="email" type="email" value="" placeholder="Email or phone number">';
                                    } 

                                    ?>

                                        <?php
                                            @$cod = $_REQUEST['cod'];
                                            if(isset($cod))
                                            {
                                                if($cod == '171') {
                                                    echo ('<span class="ErroEmail">Verifique usuário.</span>');
                                                } 
                                            }
                                        ?>
                                    <input class="email" name="password" type="password" placeholder="Password">
                                    <?php
                                    @$cod = $_REQUEST['cod'];
                                    if(isset($cod))
                                    {
                                        if($cod == '171') {
                                            echo ('<span class="ErroSenha">Verifique sua senha.</span>');
                                        }
                                    }
                    
                                    ?>
                            </div>
                        
                    </div>
                            
                    </div>

                        <div class="btn">
                            <button class="btn-primary" type="submit">Sign In</button>
                        </div>
                        </div>
                        

                        <div class="help">
                            <div>

                                <?php
                                    if(isset($_COOKIE['email'])){
                                        echo '<input class="" checked value="1" name="lembrar"  type="checkbox" id="lembrar"></input>';
                                    } else {
                                        echo '<input class="" value="1" name="lembrar" type="checkbox" id="lembrar"></input>';
                                    }
                                ?>

                                <label>Remember me</label>
                            </div>

                            <a href="">Need Help ?</a>
                        
                        </div>

                    </form>
    
                </div>
                
                <div class="signup">
                    <p>New to Netflix ?</p>
                    <a href="cadastroPage.php">Sign up now</a>
                </div>
                <div class="more">
                    <p>
                        This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a> 
                    </p>
                </div>


            </div>
            </div>

    </header>

</body>
</html>



