<?php
/* Smarty version 3.1.36, created on 2020-08-07 14:14:01
  from 'C:\xampp\htdocs\retalhosArte\view\produtosinfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2d45895f4d93_82888677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b6596d05b261ea85492f0d633d1ce0251da3111' => 
    array (
      0 => 'C:\\xampp\\htdocs\\retalhosArte\\view\\produtosinfo.tpl',
      1 => 1596792400,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2d45895f4d93_82888677 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Product</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js  IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

  </head>
  <body> 
  <!-- product category -->
  <section id="aa-product-details">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
              
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">                              
                  <div class="aa-product-view-slider">                                
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="img/view-slider/large/polo-shirt-1.png" class="simpleLens-lens-image"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" class="simpleLens-big-image"></a></div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- Modal view content -->
        
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">
                    <h3><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 </h3>
                    <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>

                    <div class="aa-price-block">
                      <span class="aa-product-view-price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</span>
                      <p class="aa-product-avilability"><span><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ativo'] == 1 ? 'Disponivel' : 'Indisponivel';?>
</span></p>
                    </div>
                    <br><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>

                    <div class="aa-prod-quantity">
                      <form action="">
                        <select id="" name="">
                          <option selected="1" value="0">1</option>
                          <option value="1">2</option>
                          <option value="2">3</option>
                          <option value="3">4</option>
                          <option value="4">5</option>
                          <option value="5">6</option>
                        </select>
                      </form>
                    </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Adicionar ao Carrinho</a>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


    
  <!-- jQuery library -->
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <?php echo '<script'; ?>
 src="js/bootstrap.js"><?php echo '</script'; ?>
>  
  <!-- SmartMenus jQuery plugin -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.smartmenus.js"><?php echo '</script'; ?>
>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"><?php echo '</script'; ?>
>  
  <!-- To Slider JS -->
  <?php echo '<script'; ?>
 src="js/sequence.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/sequence-theme.modern-slide-in.js"><?php echo '</script'; ?>
>  
  <!-- Product view slider -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.simpleGallery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.simpleLens.js"><?php echo '</script'; ?>
>
  <!-- slick slider -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/slick.js"><?php echo '</script'; ?>
>
  <!-- Price picker slider -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/nouislider.js"><?php echo '</script'; ?>
>
  <!-- Custom js -->
  <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
> 

  </body>
</html><?php }
}
