
  <meta charset="utf-8">
  <script type="text/javascript" src="semantic/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="semantic/semantic.min.js"></script>
  <script type="text/javascript" src="funcoes.js"></script>
  <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css.css">


<script>
menu = {};

// ready event
menu.ready = function() {

  // selector cache
  var
    $menuItem = $('.menu a.item, .menu .link.item'),
    // alias
    handler = {
      activate: function() {
        $(this)
        .addClass('active')
        .closest('.ui.menu')
        .find('.item')
        .not($(this))
        .removeClass('active');
      }
    }
  ;

  $menuItem
    .on('click', handler.activate)
  ;

};


// attach ready event
$(document).ready(menu.ready);


</script>
  <body>

  <div class="divider">.</div>

  <section id="logo">
    <center>
      <img src="imagens/logo.png" class="logoimg">
    </center>
  </section>

   <div class="divider">.</div>

  <section class="lados">.</section>


  <section id="central">
  <div class="ui secondary pointing menu">
  <a class="item active">
    HOME
  </a>
  <a class="item">
    AUTORES
  </a>
  <a class="item">
    CONTATO
  </a>
  <div class="right menu">
    <a class="ui item">
      Login
    </a>
  </div>
  </div>

  

  </body>