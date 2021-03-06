<!doctype html>
<html>

<head>

  <meta charset="utf-8">

  <title>MODUSversus</title>
  
  <link rel="stylesheet" type="text/css" href="../views/bootstrap-3.3.5/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="../views/bootstrap-3.3.5/dist/css/bootstrap-theme.min.css"/>
  
  <link rel="stylesheet/less" href="../views/css/style.less"/>
  <link rel="stylesheet" href="../views/css/normalize.css"/>

  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="../views/js/jquery-1.11.2.min.js" type="text/javascript"></script>
  <script src="../views/js/scripts.js" type="text/javascript"></script>
  <script src="../views/js/less.js" type="text/javascript"></script>
  <script type="text/javascript">
      $(document).ready( function() {
          $("#form_clientes").validate({
              rules: {
                  name: {
                      required: true, minlength: 2
                  },
                  email: {
                      required: true, email: true
                  },
                  site:{
                      required: true, minlength: 2

                  },
                  inquiry: {
                      required: true, minlength: 2
                  },
              },
                messages: {
                  nome: {
                      required: "Digite o seu nome", minLength: "O seu nome deve conter, no mínimo, 2 caracteres"
                  },
                  email: {
                      required: "Digite o seu e-mail para contato", email: "Digite um e-mail válido"
                  },
                  site: {
                      required: "Digite a sua mensagem", minLength: "A sua mensagem deve conter, no mínimo, 2 caracteres"
                  },
                  inquiry:{
                      required: "Digite a sua mensagem", minLength: "A sua mensagem deve conter, no mínimo, 2 caracteres"

                  }
              }
          });
      });
</script>
  </script>
  <script src='../views/js/jquery.validate.js' type="text/javascript"></script>
  <script type="text/javascript" src="../views/bootstrap-3.3.5/dist/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="container-fluid" style="padding:10px">
         
          <div class="navbar-header">
            <a class="navbar-brand" href="#"><b>MODUS</b>versus</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="text-transform:uppercase">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Services</a></li>
              <li class="dropdown">
                <a href=" #" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Porfolio <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Teste1</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Teste2</a></li>
                </ul>
              </li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Features</a></li>
              <li><button type="button" class="btn btn-default navbar-btn">CONTACTS</button></li>
              <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
            </ul>
          </div>
        
        </div>
      </div>
    </nav>

  <div class="well" style="margin-top:-20px">
    <span>CONTACT US</span>
    <p>Home/Contact us</p></div>

  <div class="container" style="padding-bottom:150px">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.5599591262458!2d-48.84504318525656!3d-26.308361674604683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94deb04dbd1b4a39%3A0x7d9d1ebf9b4e1e06!2sHumantech+Gest%C3%A3o+do+Conhecimento!5e0!3m2!1spt-BR!2sbr!4v1442619430748" width="100%" height="300px" frameborder="0" style="border:0; position:relative" allowfullscreen></iframe>
  
    <div class="well content">
      <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
    </div>

    <div class="float">
      <form method="POST" action="" class='form_clientes' id='form_clientes' onSubmit="return validar(this);">
        <table>
          <div class="form-group">
            <tr>
              <td><input type="text" class="form-control" name='name' id="name" placeholder="Name"></td>
              <td>Name</td>
            </tr>
            <tr>
                <td><input type="email" class="form-control" name='email' id='email' placeholder="Email"></td>
                <td><p >E-mail</p></td>
            </tr>
            <tr>
              <td><input type="url" class="form-control" name='site' id='site' placeholder="Web Site"></td>
              <td><p>Web Site</p></td>
            </tr>
            <tr>
              <td colspan="2"><textarea class="form-control" name='inquiry' id='inquiry' nums="65" rows="10"></textarea></td>
            </tr>
          </div>
        </table>
        <button type="submit" class="btn btn-danger" class='enviar'>Enviar</button>
      </form>
    </div>

    <div class="float">
      <address>
        <h1>Address</h1>
        <span class="glyphicon glyphicon-map-marker">Rua São Paulo, 31 - Bucarein,Joinville</span><br/>
        <span class="glyphicon glyphicon-earphone">(47) 3028-3113</span><br/>
        <span class="glyphicon glyphicon-envelope"> humantech@humantech.com.br </span>
      </address>
    </div>
</div>
  
    <footer style="margin-bottom:-30px;">
    <div class="footer1">
          <nav class="navbar navbar-default" >
                <div class="container">
                  <div class="container-fluid float" style="padding:10px">
                    <div class="navbar-header float" style="width:350px">
                      <a class="navbar-brand" href="#"><b>MODUS</b>versus</a><br/><br/><br/>
                      <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p><br/>
                      <p>Phone: <i>047 3028 3133</i></p><br/>
                      <p>E-mail: <i>humantech@humantech.com.br</i></p>
                    </div>
                    
                    <div class="float right">
                      <h2>Company</h2>
                      <ul>
                        <li>> About</li>
                        <li>> FAQ</li>
                        <li>> Contact</li>
                        <li>> Terms</li>
                        <li>> Privacity</li>
                        <li>> Testimonies</li>
                      </ul>
                    </div>
                <div class="float right community">
                  <h2>Community</h2>
                  <ul> 
                    <li>> Blog</li>
                    <li>> Forum</li>
                    <li>> Support</li>
                    <li>> Newsletter</li>
                  </ul>
                </div>
                <div class="float right">
                  <h2><a style="font-style:italic; text-decoration:none; color:white">from the </a><a style="font-weight: bold; text-decoration:none; color:white">BLOG</a></h2><br/>
                <figure>
                  <img src="../views/images/image_symbol.png" class="img-thumbnail"/>
                  <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</figcaption>
                </figure>
                <br/>
                <figure>
                  <img src="../views/images/image_symbol.png" class="img-thumbnail"/>
                  <figcaption>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</figcaption>
                </figure>
        </div>
                </div>
                </div>
      </nav>
      </div>
        <nav class="navbar navbar-default up">
          <div class="container">
            <p> 2013 ModusVersus </p>
                <span>
                <div class="social">
                    <img src="../views/images/facebook.png" class="social"/>
                    <img src="../views/images/google+.png" class="social"/>
                    <img src="../views/images/twitter.png" class="social"/>
                    <img src="../views/images/feed.png" class="social"/>
                </div>
                </span>
            </div>
        </nav>
</footer>

</body>
</html>