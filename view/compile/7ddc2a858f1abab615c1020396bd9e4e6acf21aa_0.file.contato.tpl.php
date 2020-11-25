<?php
/* Smarty version 3.1.36, created on 2020-08-05 20:13:40
  from 'C:\xampp\htdocs\retalhosArte\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f2af6d4e59370_45642969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ddc2a858f1abab615c1020396bd9e4e6acf21aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\retalhosArte\\view\\contato.tpl',
      1 => 1596650773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f2af6d4e59370_45642969 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<?php echo '<script'; ?>
 src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Oswald:700|Patua+One|Roboto+Condensed:700" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<section id="contact" class="content-section text-center">
        <div class="contact-section">
            <div class="container">
              <h2>Fale Conosco</h2>
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <form class="form-horizontal" action ="envio">
                    <div class="form-group">
                      <label for="exampleInputName2">Nome</label>
                      <input type="text" class="form-control" name = "nome" id="exampleInputName2" placeholder="Jane Doe">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail2">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                    </div>
                    <div class="form-group ">
                      <label for="exampleInputText">Mensagem</label>
                     <textarea  class="form-control" name ="mensagem" placeholder="Description"></textarea> 
                    </div>
                    <button type="submit" class="btn btn-default">Enviar Mensagem</button>
                  </form>

                  <hr>
                    <h3>Nossas Redes Sociais</h3>
                  <ul class="list-inline banner-social-buttons">
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-instagram"> <span class="network-name">Twitter</span></i></a></li>
                    <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook"> <span class="network-name">Facebook</span></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </section><?php }
}
