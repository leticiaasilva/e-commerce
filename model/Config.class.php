<?php
Class Config{

    //INFORMACOES BASICAS DO SITE
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "retalhosArte";
    const SITE_NOME = "Retalhos Arte";
    const SITE_EMAIL_ADM = "putslet@gmail.com";
    const BD_LIMITE_POR_PAG = 9;

    //INFORMACOES DO BANCO DE DADOS
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA = "",
          BD_BANCO = "retalhosarte",
          BD_PREFIX = "";


    // INFORMACOES PARA PHP MAILLER
     const EMAIL_HOST = "smtp.gmail.com";
     const EMAIL_USER = "putslet@gmail.com";
     const EMAIL_NOME = "Retalhos Arte";
     const EMAIL_SENHA = "lele1004";
     const EMAIL_PORT = 587;
     const EMAIL_SMTPAUTH = true;
     const EMAIL_SMTPSECURE = "tls";
     const EMAIL_COPIA = "putslet@gmai.com";



}

?>