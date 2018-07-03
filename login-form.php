
<html>
  <head>
    <title>Acesso ao sistema</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page ">
    <?php
      session_start();

      //include 'addfile/koneksi.php';
	  require_once 'addfile/conexao.php';
	  
      if(!empty($_SESSION['level'])){
        header("location:index.php") ;
      }

     //proses-cek-login
      if (isset($_POST['proses-login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);//md5(trim($_POST['password']));
		//echo($password);
		if ($username=="" || $password=="") {
          $error="Usuário e senha são requeridos";
		}
        else {
		  $pdo = Conexao::getInstance();
		  $login = $pdo->prepare("SELECT * FROM TBUSU WHERE C_NOME=:USERNAME");
          $login->bindParam(':USERNAME',$username,PDO::PARAM_STR, 30);
		  $login->execute();
          $data = $login->fetch(PDO::FETCH_ASSOC);
		  
          if (COUNT($data['C_NOME']) == 1 && $password == $data['C_SACESSO']) {
              $_SESSION['username'] = $data['C_NOME'];
              $_SESSION['level'] = $data['C_SETOR'];
              $_SESSION['nama'] = $data['C_ASS'];
			  $_SESSION['profissao'] = $data['C_SETOR'];
              header("location:index.php");
          }
          else {
            $error="Usuário ou senha incorreto";
	    $username = "";
	    $password = "";
		
          }
        }
      }
     ?>
    <div class="login-box">
      <div class="login-logo">
        <b>Edital Paineis</b>
      </div>
      <div class="login-box-body">
          <p class="login-box-msg">Acesso ao sistema </p>     
          <?php
            if (isset($error)) {
              echo  '<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'.$error. '</strong>
                     </div>' ;
            }
           ?>     
          <form action="login-form.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Usuário">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Senha">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <button type="submit" name="proses-login" class="btn btn-primary btn-block btn-flat"><span class="glyphicon glyphicon-log-in"></span><b> Acessar</b></button>
          </form>
      </div>
    </div>




    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
