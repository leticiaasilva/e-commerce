<?php
/* Smarty version 3.1.36, created on 2020-08-12 17:29:10
  from 'C:\xampp\htdocs\retalhosArte\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f340ac624dcf2_24629273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '475474fa7a251f49ffda780ebbce3421b881325f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\retalhosArte\\view\\carrinho.tpl',
      1 => 1597246145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f340ac624dcf2_24629273 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Cart Page</title>
    
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
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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
         

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 col-md-push-2">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

                      <tr>
                        <td><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</td>
                        <td><input class="aa-cart-quantity" type="number" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_qtd'];?>
"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_subTotal'];?>
</td>
                         <td> 
                        <form name="carrinho_dell" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO_ALTERAR']->value;?>
">
                          
                            <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">    
                            <input type="hidden" name="acao" value="del">    
                            
                            <button class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-minus"></i> </button>
                        </form>
                    </td>
                      </tr>
                      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Cupom">
                            <input class="aa-cart-view-btn" type="submit" value="Aplicar">
                          </div>
                          <input class="aa-cart-view-btn" type="submit" value="Atualizar Carrinho">
                        </td>                       
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
            <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Total</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Total</th>
                     <td><?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>
</td>
                   </tr>
                 </tbody>
               </table>
               <br>
               <div class="col-lg-9 col-md-9 col-sm-9 col-md-push-2">
               <form name="pedido_confirmar" id="pedido_confirmar" method="post" action="<?php echo $_smarty_tpl->tpl_vars['PAG_CONFIRMAR']->value;?>
">
                     <button class="aa-cart-view-btn" type="submit" >  <i class="glyphicon glyphicon-ok"></i> Confirmar Pedido </button>
                 </form>
                 </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
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
