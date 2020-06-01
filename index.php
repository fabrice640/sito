<!DOCTYPE html>
<html>
<head>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">




<link rel="stylesheet"href="style.css"type="text/css">
  <link rel="stylesheet"href="style2.css"type="text/css">
  <link rel="stylesheet"href="style3.css"type="text/css">
  <link rel="stylesheet"href="style4.css"stylesheet"type="text/css">
<link rel="stylesheet"href="bitnami.css"stylesheet"type="text/css">
<!-- JS, Popper.js, and jQuery -->


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="/accesso.js"></script>
<script src="/admin.js"></script>
<script src="/admin2.js"></script>
<script src="/selezione.js"></script>
<script src="/database.js"></script>
<script src="/inserisci.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  

  
    <title>SITO WEB</title>
    <base href="/">
    <meta name="Googlebot"content="index,follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/icon/ms-icon-144x144.png">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  


    <!--suppress HtmlUnknownAttribute -->
    <script src="https://www.paypalobjects.com/api/checkout.js" data-version-4 log-level="warn"></script>
  
<script src="/database.js"></script>
<script src="/table.js"></script>
   
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
				<body class="btn btn-default card-body"style="width:100%;">
   
   
   

   <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      
    </div>
  </nav>

<div style="margin-bottom:200px;"></div>

 <content>
 
 
 
   
   
	
			<div class="card-body">


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Registrati!</h1>
                  </div>
                  <form method="post"class="user"action="/inserisci.php">
                    <div class="form-group">
                      <input type="text" name="nome"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Inserisci il tuo nome">
                    </div>
                    <div class="form-group">
                      <input type="text" name="cognome"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Inserisci il tuo cognome">
                    </div>
                    <div class="form-group">
                      <input type="email" name="email"class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Inserisci il tuo indirizzo email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password"name="Inserisci la tua password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit"class="btn btn-primary btn-user btn-block">
                      Registrazione
                    </button>
                    <hr>
                  
                   
                  </form>
                  <hr>
                    

      </div>

    </div>

  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

 	

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Vuoi recuperare la tua password?</h1>
                    
                  </div>
                  <form method="post"class="user"action="">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                      Reset Password
                    </a>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="/">Crea un Account!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="/">Hai già un account?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 
 
 
 
 
 
 
 </content>



  
    
  </body>
  
 
</html>
