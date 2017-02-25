<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<?php
			require_once "./php/includes/variables-get.php";
			require_once "./php/encabezados-seo/titulos-seo.php";
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.1.1/normalize.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css"/>
	<style>div,header,section,article,aside,button,nav,ul,ol,li,h1,h2,h3,h4,h5,h6{margin:0;padding:0}.logo{width:60px;height:60px}.loading{width:80px;height:80px}body,a:visited,a:link,a:hover{color:#004015}a{text-decoration:none}h1{font-family:'Lato',sans-serif}article,figcaption,figure,footer,header,hgroup,nav,section,sidebar{border:0;margin:0;padding:0;color:#004015;display:block}@font-face{font-family:'QuickSandBold';src:url("./assets/fuentes/qsb/quicksandbold.eot#") format('eot'),url("./assets/fuentes/qsb/quicksandbold.woff") format('woff'),url("./assets/fuentes/qsb/quicksandbold.ttf") format('truetype'),url("./assets/fuentes/qsb/quicksandbold.svg#svgFontName") format('svg')}@font-face{font-family:'IcoMoon-Free';src:url("./assets/fuentes/IcoMoon-Free/IcoMoon-Free.eot");src:url("./assets/fuentes/IcoMoon-Free/IcoMoon-Free.eot?#iefix") format("embedded-opentype"),url("./assets/fuentes/IcoMoon-Free/IcoMoon-Free.woff") format("woff"),url("./assets/fuentes/IcoMoon-Free/IcoMoon-Free.ttf") format('truetype'),url("./assets/fuentes/IcoMoon-Free/IcoMoon-Free.svg#icomoon") format("svg");font-weight:normal;font-style:normal}.icon2{display:inline-block;font-size:32px;font-family:'IcoMoon-Free' !important;text-decoration:none;text-rendering:auto;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.icon-previous2:before{content:"\ea23"}.icon-next2:before{content:"\ea24"}html,body{margin:0 auto;height:100%}body{color:#000;font-size:12pt;font-family:'Roboto',sans-serif;background-image:url("./img/banner.jpg")}header,section,footer{background-color:rgba(255,255,255,0.8);width:90%;margin:0 auto}header{height:10%;margin-bottom:1em;vertical-align:bottom;-webkit-box-shadow:.1em .1em .1em #fff;box-shadow:.1em .1em .1em #fff;border-radius:.25em;}header caja1{height:100%;width:50%;}header caja1 #idimg{height:100%;}header caja1 #idimg img{height:100%}header caja1 #textologo{vertical-align:middle;padding-left:15px;font-size:2.2em;font-family:'Roboto Slab',serif;text-shadow:.05em .05em #fff}header caja1 #botonmenu a svg{width:0;height:0}header caja1 div img{height:100%;vertical-align:middle;padding:0;margin:0;border:0}header nav{float:right;width:50%;height:100%;vertical-align:bottom;vertical-align:text-bottom;position:relative;}header nav div{text-transform:capitalize;position:absolute;width:100%;bottom:0;right:0;vertical-align:bottom;height:2em;padding-bottom:0;margin-bottom:0;}header nav div ul{margin-before:0;margin-after:0;padding-start:0;}header nav div ul li{font-size:1em;margin:0 auto;list-style:none;display:inline-block;vertical-align:top;height:2em;width:8em;-webkit-transition:border-radius 0.5s;-moz-transition:border-radius 0.5s;-o-transition:border-radius 0.5s;-ms-transition:border-radius 0.5s;transition:border-radius 0.5s;}header nav div ul li a{font-family:'Lato',sans-serif;text-align:center;padding-top:.3em;margin-top:.3em;height:100%;display:block;text-decoration:none;}header nav div ul li a:hover{padding-top:.2em;margin-top:.2em;color:#8c9b57;text-shadow:.05em .05em #ddd;font-size:1.1em}header nav div ul li:hover{border-radius:.5em;background:url("./img/boton4.png") top repeat-x,#ededed;-webkit-background-size:contain,cover;-moz-background-size:contain,cover;background-size:contain,cover;text-shadow:.05em .05em #d6ced6;height:3em}header caja1 #idimg,header caja1 #textologo,header caja1 #botonmenu{display:inline-block}header caja1,header nav{display:inline-block;padding:0;margin:0;border:0}#separador{clear:both;height:.55em;background-color:#ededed;bottom:0;margin-top:.3em;padding-top:.3em}section{clear:both;margin-bottom:1em;height:70%;-webkit-box-shadow:.1em .1em .3em #fff;box-shadow:.1em .1em .3em #fff;border-radius:.25em;}section article{display:inline-block;background-color:#fff;width:80%;height:100%}section sidebar{font-family:'Lato',sans-serif;padding-top:10px;text-align:center;height:100%;width:20%;float:left;overflow:auto;}section sidebar #btnProductosMenu{cursor:default;}section sidebar #btnProductosMenu caja{margin-top:37px}section sidebar a caja{margin-left:auto;margin-right:auto;width:80%;display:block;text-align:center;background-color:#004015;text-transform:uppercase;font-weight:bold;height:2.2em;color:#fff;-webkit-box-shadow:.25em .25em .15em #888;box-shadow:.25em .25em .15em #888;border-radius:.25em;}section sidebar a caja div{padding-top:.5em;margin-top:.5em;color:#fff}section sidebar ul li{text-transform:uppercase;padding-top:.2em;margin-top:.2em;list-style:none;}section sidebar ul li a{display:block;background-color:#fff;-webkit-box-shadow:.25em .25em .15em #888;box-shadow:.25em .25em .15em #888;height:1.5em;margin-left:auto;margin-right:auto;width:80%;border-radius:.25em;-webkit-transition:width 1s, height 1s;-moz-transition:width 1s, height 1s;-o-transition:width 1s, height 1s;-ms-transition:width 1s, height 1s;transition:width 1s, height 1s;padding-top:.2em;margin-top:.2em;text-decoration:none;text-align:center;vertical-align:middle;}section sidebar ul li a:hover{background:#dbfffb;background:-webkit-linear-gradient(top, #dbfffb 0%, #fff 57%, #fff 100%);background:-moz-linear-gradient(top, #dbfffb 0%, #fff 57%, #fff 100%);background:-o-linear-gradient(top, #dbfffb 0%, #fff 57%, #fff 100%);background:-ms-linear-gradient(top, #dbfffb 0%, #fff 57%, #fff 100%);background:linear-gradient(to bottom, #dbfffb 0%, #fff 57%, #fff 100%);filter:alpha(opacity=50);width:90%;height:1.6em;color:#80ceb9;text-shadow:.05em .05em #ddd}footer{clear:both;height:12%;-webkit-box-shadow:.1em .1em .3em #fff;box-shadow:.1em .1em .3em #fff;border-radius:.25em}address{text-align:center;padding-top:.5em;border-top:thin dotted;font-family:'QuickSandBold',verdana,sans-serif;font-size:1em}article{height:100%;position:relative}.celda{margin-left:10px;margin-top:10px;padding-left:10px;padding-top:10px;vertical-align:top;display:inline-block}div.nom,div.desc{text-align:center;width:110px}div.nom{font-weight:bold;text-transform:uppercase}div.desc{text-transform:capitalize;font-size:10px}div.img{text-align:center;}div.img img{width:110px;height:110px}div.flexslider{width:100%}#desplazamiento{bottom:0;width:96%;height:2.2em;text-align:center;float:bottom;position:absolute;}#desplazamiento div a span{-webkit-align-self:center;align-self:center;-ms-flex-item-align:center;padding:0 5px;width:30px;}#desplazamiento div a span:hover{background-color:#ededed}#desplazamiento div pag{width:120px;-webkit-align-self:center;align-self:center;-ms-flex-item-align:center;}#barrainferior{display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center}ul.slides li img{height:10em}#empresa{height:100%;}#empresa #mapa{width:50%;height:100%;position:relative;display:inline-block;border-bottom-left-radius:2em;border-top-left-radius:2em;border:.15em solid #ddd}#empresa #derecho{display:inline-block;position:absolute;width:50%;height:100%;}#empresa #derecho * h1{font-size:1.17em;margin-top:2em;text-align:center;text-shadow:.05em .05em #fff}#empresa #derecho * p{margin-top:1em;margin-left:2em;margin-right:2em;text-align:justify;color:#000}#empresa #derecho #acerca{margin-top:.05em;margin-bottom:.05em;border-top-right-radius:2em}#empresa #derecho #valores{border-bottom-right-radius:2em}#empresa #derecho #acerca,#empresa #derecho #valores{width:99%;height:49.2%;margin-left:.04em;background-color:#fff;border:.15em solid #ddd}#contacto{display:block;text-align:left;height:100%;}#contacto h1{display:block;text-align:left;padding-left:1em;padding-top:.5em;font-size:16pt}#contacto h2{padding-top:.5em;padding-bottom:.5em;font-size:12pt}#contacto label{display:inline-block;width:5em}#contacto span{padding-left:1em}#datos,#formulario{margin:0 auto;margin-top:.3em;background-color:#fff;width:98%;border:.2em solid #ddd;border-radius:.5em}#datos{height:65%}#formulario{height:30%}#contacto label,#contacto h2{margin-left:40px;color:#000}.titulo1{padding:1rem;font-size:18pt}.contenido{padding:0 1rem 1rem 1rem}@media (max-width:480px){.icon{display:inline-block;width:1em;height:1em;fill:currentColor}header,section,footer{height:auto}article{margin-top:230px;height:auto;margin-left:30px;margin-bottom:70px;z-index:0}header{position:fixed;z-index:1;left:0;right:0;}header caja1{width:100%;height:100%;}header caja1 #idimg,header caja1 #textologo,header caja1 #botonmenu{display:inline-block;text-align:center}header caja1 #textologo{height:100%;width:auto;padding-left:0}header caja1 #idimg{margin:0 auto;width:100%;}header caja1 #idimg img{width:64px;height:64px}header caja1 #botonmenu{width:100%;height:100%;min-width:50px;min-height:50px;vertical-align:bottom;text-align:right;padding-right:5px;}header caja1 #botonmenu a svg{width:40px;height:40px}header nav,header #separador{position:absolute;top:-1000px;left:-1000px;height:0;width:0;z-index:-1;}header nav.open{position:fixed;top:auto;left:auto;right:20px;z-index:999;width:50vw;height:auto;padding:0;margin:0;background-color:rgba(255,255,255,0.7)}header nav div{text-transform:capitalize;position:relative;width:100%;height:100%;border-style:solid;border-color:#b9d1c4;border-width:1px;border-radius:10px;}header nav div ul li{display:block;width:100%;height:2em;}header nav div ul li a{width:100%;display:block;padding-top:2.5px;margin-top:0;color:#8c9b57;font-size:1.1em;height:2em;}header nav div ul li a:hover{width:100%;padding-top:2.5px;margin-top:0}header nav div ul li:hover{width:100%;background:url("./img/boton5.png") top repeat-y,#ededed;-webkit-background-size:contain,cover;-moz-background-size:contain,cover;background-size:contain,cover;height:2em}header #separador{clear:both;height:0;bottom:0;width:0}section sidebar{position:fixed;top:200px;left:0;height:50vh;}section sidebar.open{z-index:90;overflow:visible}section sidebar #btnProductosMenu{cursor:pointer;}section sidebar #btnProductosMenu caja{margin-top:0}section sidebar ul{margin-left:20px;padding-top:1.2em;margin-top:1.2em;position:absolute;top:-1000px;left:-1000px;height:0;width:0;z-index:-1;}section sidebar ul.open{position:absolute;float:left;top:auto;left:auto;height:auto;width:45vh;background-color:rgba(255,255,255,0.7);padding-bottom:30px;border-top-right-radius:10px;border-bottom-right-radius:10px}section sidebar a caja{margin-left:auto;margin-right:auto;position:absolute;display:block;top:50px;left:0;text-align:center;background-color:#004015;text-transform:uppercase;font-weight:bold;width:30px;height:200px;color:#fff;-webkit-box-shadow:.25em .25em .15em #888;box-shadow:.25em .25em .15em #888;border-radius:.25em;}section sidebar a caja div{width:1.1em;word-wrap:break-word;text-align:center;vertical-align:middle;padding-top:5px;margin-top:5px;padding-left:2px;margin-left:2px;color:#fff}#flecha{width:0;height:0;border-left:10px solid #004015;border-top:10px solid transparent;border-bottom:10px solid transparent;position:absolute;display:block;top:140px;left:30px}#contacto{height:auto;}#contacto h1{font-size:12pt;padding-bottom:10px}#contacto h2{font-size:9pt;padding-bottom:0}#contacto span{font-size:8pt}#contacto label{font-size:10pt}#emailC{text-indent:100%;white-space:nowrap;overflow:hidden;display:block;position:absolute;top:-50px}#emailS{margin-top:0;padding-top:0;margin-left:30px}#direccionC{text-indent:100%;overflow:hidden;display:block}#contacto,#datos,#direccionS{display:block;text-align:center;background-color:#e8e8e8;font-size:10pt;padding-top:5px;padding-bottom:5px}#empresa{padding-top:5px;height:auto;}#empresa #mapa{position:relative;height:50vh;width:100%;border-radius:2em;margin-bottom:0;padding-bottom:0}#empresa #derecho{display:block;position:relative;float:none;width:100%;height:auto;margin-bottom:5px;padding-bottom:5px;}#empresa #derecho #acerca,#empresa #derecho #valores{width:99%;height:auto;border:.15em solid #ddd;border-radius:2em;padding-top:10px;padding-bottom:10px;margin:0}#empresa #derecho #acerca{margin-top:2.5px}#empresa #derecho #valores{margin-top:5px;margin-bottom:30px}#empresa #derecho #acerca h1,#empresa #derecho #valores h1{margin:0;font-size:10pt}#empresa #derecho #acerca p,#empresa #derecho #valores p{margin-top:10px;font-size:8pt}.celda{width:13%;height:40%;display:inline-block;margin:0 auto}div.nom,div.desc{width:80%}div.nom{font-size:12pt}div.desc{font-size:8pt;text-transform:lowercase}div.img img{width:80px;height:80px;margin-right:15px}#desplazamiento{position:fixed;float:none;bottom:50px;left:35px;background-color:rgba(255,255,255,0.8);height:25px;width:80%;}#desplazamiento #barrainferior{width:100%;height:25px;display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;text-align:center}#desplazamiento div a span{width:25px;height:100%;padding:0;font-size:25px}#desplazamiento div pag{line-height:25px;font-size:10pt;width:100px;padding:0}footer{position:fixed;bottom:0;right:0;width:100vw;font-size:8pt}}@media (max-width:480px){.titulo1{padding:1rem;font-size:12pt;text-align:center}.contenido{font-size:10pt;padding:0 1rem 1rem 1rem}}@media (min-width:481px) and (max-width:800px){header{z-index:999;position:fixed;top:0;left:0;right:0;display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:vertical;-moz-box-orient:vertical;-o-box-orient:vertical;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:start;-moz-box-pack:start;-o-box-pack:start;-ms-flex-pack:start;-webkit-justify-content:flex-start;justify-content:flex-start;height:auto;}header caja1{display:block;width:100%;height:auto;margin-bottom:5px;-webkit-align-self:center;align-self:center;-ms-flex-item-align:center;text-align:center;}header caja1 #textologo{display:inline-block;width:75%}header caja1 #idimg{width:60px;height:60px;text-align:right;display:inline-block}header #barraNav{display:block;margin-top:5px;width:100%;height:25px;}header #barraNav div ul{display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:end;-moz-box-pack:end;-o-box-pack:end;-ms-flex-pack:end;-webkit-justify-content:flex-end;justify-content:flex-end;}header #barraNav div ul li{margin:0}header #separador{padding-top:0;margin-top:0}section{margin-top:120px;height:auto;}section #sideMenu{position:fixed;top:180px;left:0;font-size:10pt;width:160px;z-index:999}section article{margin-left:120px;padding:10px;margin-right:10px;width:83%;display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-lines:multiple;-moz-box-lines:multiple;-o-box-lines:multiple;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-box-pack:start;-moz-box-pack:start;-o-box-pack:start;-ms-flex-pack:start;-webkit-justify-content:flex-start;justify-content:flex-start;}section article #empresa{padding-top:5px;display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:vertical;-moz-box-orient:vertical;-o-box-orient:vertical;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;width:100%;}section article #empresa #derecho,section article #empresa #mapa{width:100%;height:100%;border-radius:2em}section article #empresa #mapa{width:60vw;height:60vw}section article #empresa #derecho{display:block;position:relative;float:none;width:100%;height:auto;margin-bottom:30px;padding-bottom:5px;}section article #empresa #derecho #acerca,section article #empresa #derecho #valores{width:60vw;height:auto;border:.15em solid #ddd;border-radius:2em;padding-top:2.5px;padding-bottom:2.5px;margin:0}section article #empresa #derecho #acerca{margin-top:5px}section article #empresa #derecho #valores{margin-top:5px;margin-bottom:5px}section article #empresa #derecho #acerca h1,section article #empresa #derecho #valores h1{margin-top:5px;font-size:12pt}section article #empresa #derecho #acerca p,section article #empresa #derecho #valores p{margin-top:10px;padding-bottom:5px;font-size:8pt}section article #desplazamiento{position:fixed;float:none;bottom:54px;right:0;background-color:rgba(255,255,255,0.8);height:30px;width:80%;}section article #desplazamiento #barrainferior{width:100%;height:30px;display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-orient:horizontal;-moz-box-orient:horizontal;-o-box-orient:horizontal;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-moz-box-pack:center;-o-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;text-align:center}section article #desplazamiento div a span{width:30px;height:100%;padding:0;font-size:30px}section article #desplazamiento div pag{line-height:30px;font-size:12pt;width:120px;padding:0}section article .celda{display:block;width:100px;}section article .celda .desc,section article .celda .nom{width:90px}section article .celda .img{width:90px;}section article .celda .img img{width:90px;height:90px}section article #contacto{width:64vw;height:90%;}section article #contacto #datos{height:90%;padding-bottom:25px;}section article #contacto #datos h1{margin-bottom:20px;font-size:16pt}section article #contacto #datos h2{font-size:14pt}section article #contacto #datos label{font-size:11pt}section article #contacto #datos span{font-size:11pt}section article #contacto #datos #direccionC{display:none}section article #contacto #datos #direccionS{display:block;margin:20px 0 10px 25px}footer{position:fixed;bottom:0;right:0;width:100vw;font-size:10pt;height:auto}}@media (min-width:801px) and (max-width:1220px){header caja1{position:absolute;top:0;left:5.4vw;width:100%;height:auto;}header caja1 #textologo{padding-left:0;font-size:18pt}header caja1 #idimg{width:60px;height:60px;text-align:right;display:inline-block}header #barraNav{width:55%}section #sideMenu{font-size:10pt;width:20%}section article{width:79%;}section article .celda{display:inline-block;width:10vw;margin:0;margin-top:10px;margin-left:10px;padding:0 0 10px 0;}section article .celda .desc,section article .celda .nom{width:10vw}section article .celda .img{width:10vw;height:10vw;}section article .celda .img img{width:10vw;height:10vw}section article #empresa{padding:20px 10px;height:85%;}section article #empresa #derecho{width:47%;height:80.5%;}section article #empresa #derecho #acerca h1,section article #empresa #derecho #valores h1{font-size:12pt}section article #empresa #derecho #acerca p,section article #empresa #derecho #valores p{font-size:10pt}section article #empresa #derecho #acerca{padding-bottom:5.8%}section article #contacto{height:90%;}section article #contacto #datos{height:100%}footer{font-size:12pt;padding-top:5px;}footer address{margin-top:5px}}@media (min-width:1366px){header{max-width:1366px;max-height:76.8px}section{max-width:1366px;max-height:537.6px}footer{max-width:1366px;max-height:92.16px}.img-cont-home{max-width:190px;max-height:190px}.caption-img-home{max-width:190px}#buscador-home{border-spacing:5px}}#buscador-home:hover{-webkit-box-shadow:10px 10px 42px 10px #004015;-moz-box-shadow:10px 10px 42px 10px #004015;-webkit-box-shadow:10px 10px 42px 10px #004015;box-shadow:10px 10px 42px 10px #004015}.titulo-home{margin-top:5px;font-size:14pt;padding:10px;text-align:center;text-shadow:3px 2px 2px rgba(150,150,150,0.95);line-height:15pt}.hero-home,.copy-home-cta{font-size:10pt;padding:0 5px 5px 5px;text-align:justify;letter-spacing:1px;line-height:12pt}.features{display:-webkit-box;display:-moz-box;display:-webkit-flex;display:-ms-flexbox;display:box;display:flex;-webkit-box-pack:distribute;-moz-box-pack:distribute;-o-box-pack:distribute;-ms-flex-pack:distribute;-webkit-justify-content:space-around;justify-content:space-around}.feature{width:55px;height:55px}.caption-img-home{display:none}.img-cont-home{width:45px;height:45px;background-color:#8c9b57;padding:5px;border-radius:5px}.img{width:100%;height:100%;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;background-size:cover}.feature0{background-image:url("img/productos.jpg")}.feature1{background-image:url("img/categorias.jpg")}.feature2{background-image:url("img/contacto.jpg")}.feature3{background-image:url("img/mapa.jpg")}.circulo{width:90px;height:90px;border-radius:50%;background-color:#8c9b57;opacity:.65;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=65)";filter:alpha(opacity=65);position:fixed;bottom:60px;right:12px;z-index:2}.circulo.enfasis{opacity:1;-ms-filter:none;filter:none;z-index:2}.lupa{position:absolute;top:0;right:0;left:0;bottom:0;margin:auto;-webkit-background-size:contain;-moz-background-size:contain;background-size:contain;z-index:2}.buscador{border:10px solid #8c9b57;border-right:25px solid #8c9b57;height:40px;position:fixed;bottom:70px;right:40px;width:0;background:#fff;opacity:0;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";filter:alpha(opacity=0);border-radius:5px;padding:5px;font-family:Roboto;z-index:2;-webkit-transition:all 1s ease;-moz-transition:all 1s ease;-o-transition:all 1s ease;-ms-transition:all 1s ease;transition:all 1s ease;padding-left:10px}.buscador.mostrar{padding-left:10px;right:70px;width:60vw;opacity:1;-ms-filter:none;filter:none;z-index:2}header.solapar{z-index:0}@media (min-width:481px){.titulo-home{margin-top:20px;padding-right:40px;width:80%;font-size:16pt;letter-spacing:.5px}.hero-home,.copy-home-cta{padding-right:40px;width:80%;font-size:12pt}.features{width:80%}.feature{width:65px;height:85px}#buscador-home{width:80%;height:40px;border-radius:5px;margin-left:5px;background-color:#8c9b57;display:table;border-collapse:separate;border-spacing:5px}.buscador{display:table-cell;position:static;width:100%;opacity:1;-ms-filter:none;filter:none;border:none;padding:0;padding-left:10px}.circulo{display:table-cell;position:static;border-radius:5px;background-color:#8c9b57;height:40px;width:40px;opacity:1;-ms-filter:none;filter:none}.lupa{width:40px;height:40px;position:static;vertical-align:middle;padding-left:10px}.img-cont-home{width:55px;height:55px;border-bottom-left-radius:0;border-bottom-right-radius:0}.caption-img-home{width:65px;display:block;font-size:10pt;background-color:#ededed}.normal{display:none}.pClave{display:block;width:65px;text-align:center;text-transform:capitalize}}@media (min-width:641px){.feature{width:13vw;padding:5px;height:auto}.img-cont-home{width:13vw;height:13vw;margin-left:-5px}.caption-img-home{width:13vw;padding:0 5px 0 5px;display:block;font-size:12pt;margin-left:-5px}.pClave{width:13vw}.titulo-home{padding-top:0}}@media (min-width:801px) and (max-width:1200px){.hero-home,.copy-home-cta,.features,#buscador-home,.titulo-home{width:95%;margin-left:15px;margin-right:15px}.hero-home,.copy-home-cta{margin-top:2px;margin-bottom:2px}.feature{width:100px}.img-cont-home{width:100px;height:100px}.caption-img-home{display:table;width:100px;font-size:10pt;height:6vw;text-align:center}.text-conten{display:table-cell;vertical-align:middle}.pClave{display:inline;text-transform:none}.normal{display:inline}.circulo{width:30px;height:30px}#buscador-home{border-spacing:5px}}@media (min-width:1201px) and (max-width:1365px){.features{width:68%;display:-webkit-inline-box;display:-moz-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-box;display:inline-flex;-webkit-box-pack:start;-moz-box-pack:start;-o-box-pack:start;-ms-flex-pack:start;-webkit-justify-content:flex-start;justify-content:flex-start;margin-left:15px;margin-right:15px}.hero-home,.copy-home-cta,.titulo-home{width:95%;margin-left:15px;margin-right:15px}.hero-home,.copy-home-cta{margin-top:2px;margin-bottom:2px}.feature{width:100%;padding:5px;margin:5px}.img-cont-home{width:120px;height:120px}.caption-img-home{display:table;width:120px;font-size:10pt;height:6vw;text-align:center}.text-conten{display:table-cell;vertical-align:middle}.pClave{display:inline;text-transform:none}.normal{display:inline}.circulo{width:30px;height:30px}#buscador-home{border-spacing:5px;margin-left:15px;margin-right:15px}.copy-home-cta{display:inline-block;width:24%;padding:0}}@media (min-width:1201px) and (max-width:1365px){header caja1{position:absolute;top:0;left:5.4vw;width:100%;height:auto;}header caja1 #textologo{padding-left:0;font-size:18pt}header caja1 #idimg{width:60px;height:60px;text-align:right;display:inline-block}header #barraNav{width:55%}section #sideMenu{font-size:10pt;width:20%}section article{width:79%;}section article .celda{display:inline-block;width:100px;margin:0;margin-top:10px;margin-left:10px;padding:0 0 10px 0;}section article .celda .desc,section article .celda .nom{width:100px}section article .celda .img{width:100px;height:100px;}section article .celda .img img{width:100px;height:100px}section article #empresa{padding:20px 10px;height:85%;}section article #empresa #derecho{width:47%;height:80.5%;}section article #empresa #derecho #acerca h1,section article #empresa #derecho #valores h1{font-size:12pt}section article #empresa #derecho #acerca p,section article #empresa #derecho #valores p{font-size:10pt}section article #empresa #derecho #acerca{padding-bottom:5.8%}section article #contacto{height:90%;}section article #contacto #datos{height:100%}footer{font-size:12pt;padding-top:5px;}footer address{margin-top:5px}}</style>
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js></script>
	<!--[endif]-->
	<!--comentario tonto -->
	<?php require_once "./php/encabezados-seo/canonicalizacion.php"; ?>
</head>
<body>
	<header id="header">
		<caja1>
			<div id="idimg">
				<img src="./img/logo.png" alt="logo de la empresa Madelimp" class='logo'>
			</div>
			<div id="textologo">
				Inversiones Madelimp SAC
			</div>
			<div id="botonmenu">
				<a href="#" id="btnMenu">
					<svg class="icon icon-menu"><use xlink:href="#icon-menu"></use>
				    <defs>
							<symbol id="icon-menu" viewBox="0 0 16 16">
							<title>menu</title>
							<path class="path1" d="M1 3h14v3h-14zM1 7h14v3h-14zM1 11h14v3h-14z"></path>
							</symbol>
				    </defs>
				  </svg>
				</a>
			</div>
		</caja1>
		<nav id="barraNav">
			<div><ul>
				<li><a id="btnMenui1" href="inicio">Inicio</a></li>
				<li><a id="btnMenui2" href="contacto">Contacto</a></li>
				<li><a id="btnMenui3" href="empresa">Empresa</a></li>
			</ul></div>
		</nav>
		<div id="separador"></div>
	</header>
	<section>
		<sidebar id="sideMenu">
			<a href="#" id="btnProductosMenu"><caja><div>Productos</div></caja><div id="flecha"></div></a>
			<ul id="categoriasSide">
				<?php include './php/includes/llenaCategoria.php'; ?>
			</ul>
		</sidebar>
		<article>
				<?php $comando = isset($_GET["comando"])?$_GET["comando"]:"inicio"; include './php/includes/procesa_contenido.php'; ?>								
		</article>
	</section>
	<footer>
		<address>
				Sector 2 Mz. &quot;F&quot; Lte. 10 Grupo 20 - Villa El Salvador<br/>
				Telf.&#58; 287-5837 &#47; Cel.: 987949271 &#47; Next.&#58; 136&#42;0367<br/>
				e-mail&#58; julio.ventas&#64;madelimp.com
		</address>
	</footer>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.4/hammer.min.js"></script>
		<script>!function e(t,n,o){function a(i,s){if(!n[i]){if(!t[i]){var l="function"==typeof require&&require;if(!s&&l)return l(i,!0);if(r)return r(i,!0);var c=new Error("Cannot find module '"+i+"'");throw c.code="MODULE_NOT_FOUND",c}var u=n[i]={exports:{}};t[i][0].call(u.exports,function(e){var n=t[i][1][e];return a(n?n:e)},u,u.exports,e,t,n,o)}return n[i].exports}for(var r="function"==typeof require&&require,i=0;i<o.length;i++)a(o[i]);return a}({1:[function(e,t,n){!function(e,o){"function"==typeof define&&define.amd?define(function(){return o(e)}):"object"==typeof n?t.exports=o:e.echo=o(e)}(this,function(e){"use strict";var t,n,o,a,r,i={},s=function(){},l=function(e){return null===e.offsetParent},c=function(e,t){if(l(e))return!1;var n=e.getBoundingClientRect();return n.right>=t.l&&n.bottom>=t.t&&n.left<=t.r&&n.top<=t.b},u=function(){(a||!n)&&(clearTimeout(n),n=setTimeout(function(){i.render(),n=null},o))};return i.init=function(n){n=n||{};var l=n.offset||0,c=n.offsetVertical||l,d=n.offsetHorizontal||l,f=function(e,t){return parseInt(e||t,10)};t={t:f(n.offsetTop,c),b:f(n.offsetBottom,c),l:f(n.offsetLeft,d),r:f(n.offsetRight,d)},o=f(n.throttle,250),a=n.debounce!==!1,r=!!n.unload,s=n.callback||s,i.render(),document.addEventListener?(e.addEventListener("scroll",u,!1),e.addEventListener("load",u,!1)):(e.attachEvent("onscroll",u),e.attachEvent("onload",u))},i.render=function(){for(var n,o,a=document.querySelectorAll("img[data-echo], [data-echo-background]"),l=a.length,u={l:0-t.l,t:0-t.t,b:(e.innerHeight||document.documentElement.clientHeight)+t.b,r:(e.innerWidth||document.documentElement.clientWidth)+t.r},d=0;l>d;d++)o=a[d],c(o,u)?(r&&o.setAttribute("data-echo-placeholder",o.src),null!==o.getAttribute("data-echo-background")?o.style.backgroundImage="url("+o.getAttribute("data-echo-background")+")":o.src=o.getAttribute("data-echo"),r||(o.removeAttribute("data-echo"),o.removeAttribute("data-echo-background")),s(o,"load")):r&&(n=o.getAttribute("data-echo-placeholder"))&&(null!==o.getAttribute("data-echo-background")?o.style.backgroundImage="url("+n+")":o.src=n,o.removeAttribute("data-echo-placeholder"),s(o,"unload"));l||i.detach()},i.detach=function(){document.removeEventListener?e.removeEventListener("scroll",u):e.detachEvent("onscroll",u),clearTimeout(n)},i})},{}],2:[function(e,t,n){!function(e,n){var o=n(e,e.document);e.lazySizes=o,"object"==typeof t&&t.exports&&(t.exports=o)}(window,function(e,t){"use strict";if(t.getElementsByClassName){var n,o=t.documentElement,a=e.HTMLPictureElement&&"sizes"in t.createElement("img"),r="addEventListener",i="getAttribute",s=e[r],l=e.setTimeout,c=e.requestAnimationFrame||l,u=/^picture$/i,d=["load","error","lazyincluded","_lazyloaded"],f={},m=Array.prototype.forEach,g=function(e,t){return f[t]||(f[t]=new RegExp("(\\s|^)"+t+"(\\s|$)")),f[t].test(e[i]("class")||"")&&f[t]},v=function(e,t){g(e,t)||e.setAttribute("class",(e[i]("class")||"").trim()+" "+t)},h=function(e,t){var n;(n=g(e,t))&&e.setAttribute("class",(e[i]("class")||"").replace(n," "))},p=function(e,t,n){var o=n?r:"removeEventListener";n&&p(e,t),d.forEach(function(n){e[o](n,t)})},b=function(e,n,o,a,r){var i=t.createEvent("CustomEvent");return i.initCustomEvent(n,!a,!r,o||{}),e.dispatchEvent(i),i},y=function(t,o){var r;!a&&(r=e.picturefill||n.pf)?r({reevaluate:!0,elements:[t]}):o&&o.src&&(t.src=o.src)},z=function(e,t){return(getComputedStyle(e,null)||{})[t]},E=function(e,t,o){for(o=o||e.offsetWidth;o<n.minSize&&t&&!e._lazysizesWidth;)o=t.offsetWidth,t=t.parentNode;return o},C=function(t){var n,o=0,a=e.Date,r=function(){n=!1,o=a.now(),t()},i=function(){l(r)},s=function(){c(i)};return function(){if(!n){var e=125-(a.now()-o);n=!0,6>e&&(e=6),l(s,e)}}},A=function(){var a,d,f,E,A,B,L,M,N,x,I,H,k,_,W,T=/^img$/i,S=/^iframe$/i,R="onscroll"in e&&!/glebot/.test(navigator.userAgent),j=0,D=0,O=0,q=0,P=function(e){O--,e&&e.target&&p(e.target,P),(!e||0>O||!e.target)&&(O=0)},F=function(e,n){var a,r=e,i="hidden"==z(t.body,"visibility")||"hidden"!=z(e,"visibility");for(N-=n,H+=n,x-=n,I+=n;i&&(r=r.offsetParent)&&r!=t.body&&r!=o;)i=(z(r,"opacity")||1)>0,i&&"visible"!=z(r,"overflow")&&(a=r.getBoundingClientRect(),i=I>a.left&&x<a.right&&H>a.top-1&&N<a.bottom+1);return i},$=function(){var e,t,r,s,l,c,u,m,g;if((A=n.loadMode)&&8>O&&(e=a.length)){t=0,q++,null==_&&("expand"in n||(n.expand=o.clientHeight>600?o.clientWidth>600?550:410:359),k=n.expand,_=k*n.expFactor),_>D&&1>O&&q>3&&A>2?(D=_,q=0):D=A>1&&q>2&&6>O?k:j;for(;e>t;t++)if(a[t]&&!a[t]._lazyRace)if(R)if((m=a[t][i]("data-expand"))&&(c=1*m)||(c=D),g!==c&&(L=innerWidth+c*W,M=innerHeight+c,u=-1*c,g=c),r=a[t].getBoundingClientRect(),(H=r.bottom)>=u&&(N=r.top)<=M&&(I=r.right)>=u*W&&(x=r.left)<=L&&(H||I||x||N)&&(f&&3>O&&!m&&(3>A||4>q)||F(a[t],c))){if(X(a[t]),l=!0,O>9)break}else!l&&f&&!s&&4>O&&4>q&&A>2&&(d[0]||n.preloadAfterLoad)&&(d[0]||!m&&(H||I||x||N||"auto"!=a[t][i](n.sizesAttr)))&&(s=d[0]||a[t]);else X(a[t]);s&&!l&&X(s)}},U=C($),V=function(e){v(e.target,n.loadedClass),h(e.target,n.loadingClass),p(e.target,G)},G=function(e){e={target:e.target},c(function(){V(e)})},J=function(e,t){try{e.contentWindow.location.replace(t)}catch(n){e.src=t}},K=function(e){var t,o,a=e[i](n.srcsetAttr);(t=n.customMedia[e[i]("data-media")||e[i]("media")])&&e.setAttribute("media",t),a&&e.setAttribute("srcset",a),t&&(o=e.parentNode,o.insertBefore(e.cloneNode(),e),o.removeChild(e))},Q=function(){var e,t=[],n=function(){for(;t.length;)t.shift()();e=!1},o=function(o){t.push(o),e||(e=!0,c(n))};return{add:o,run:n}}(),X=function(e){var t,o,a,r,s,d,z,C=T.test(e.nodeName),A=C&&(e[i](n.sizesAttr)||e[i]("sizes")),B="auto"==A;(!B&&f||!C||!e.src&&!e.srcset||e.complete||g(e,n.errorClass))&&(B&&(z=e.offsetWidth),e._lazyRace=!0,O++,n.rC&&(z=n.rC(e,z)||z),Q.add(function(){(s=b(e,"lazybeforeunveil")).defaultPrevented||(A&&(B?(w.updateElem(e,!0,z),v(e,n.autosizesClass)):e.setAttribute("sizes",A)),o=e[i](n.srcsetAttr),t=e[i](n.srcAttr),C&&(a=e.parentNode,r=a&&u.test(a.nodeName||"")),d=s.detail.firesLoad||"src"in e&&(o||t||r),s={target:e},d&&(p(e,P,!0),clearTimeout(E),E=l(P,2500),v(e,n.loadingClass),p(e,G,!0)),r&&m.call(a.getElementsByTagName("source"),K),o?e.setAttribute("srcset",o):t&&!r&&(S.test(e.nodeName)?J(e,t):e.src=t),(o||r)&&y(e,{src:t})),c(function(){e._lazyRace&&delete e._lazyRace,h(e,n.lazyClass),(!d||e.complete)&&(d?P(s):O--,V(s))})}))},Y=function(){if(!f){if(Date.now()-B<999)return void l(Y,999);var e,o=function(){n.loadMode=3,U()};f=!0,n.loadMode=3,t.hidden?($(),Q.run()):U(),s("scroll",function(){3==n.loadMode&&(n.loadMode=2),clearTimeout(e),e=l(o,99)},!0)}};return{_:function(){B=Date.now(),a=t.getElementsByClassName(n.lazyClass),d=t.getElementsByClassName(n.lazyClass+" "+n.preloadClass),W=n.hFac,s("scroll",U,!0),s("resize",U,!0),e.MutationObserver?new MutationObserver(U).observe(o,{childList:!0,subtree:!0,attributes:!0}):(o[r]("DOMNodeInserted",U,!0),o[r]("DOMAttrModified",U,!0),setInterval(U,999)),s("hashchange",U,!0),["focus","mouseover","click","load","transitionend","animationend","webkitAnimationEnd"].forEach(function(e){t[r](e,U,!0)}),/d$|^c/.test(t.readyState)?Y():(s("load",Y),t[r]("DOMContentLoaded",U),l(Y,2e4)),U(a.length>0)},checkElems:U,unveil:X}}(),w=function(){var e,o=function(e,t,n){var o,a,r,i,s=e.parentNode;if(s&&(n=E(e,s,n),i=b(e,"lazybeforesizes",{width:n,dataAttr:!!t}),!i.defaultPrevented&&(n=i.detail.width,n&&n!==e._lazysizesWidth))){if(e._lazysizesWidth=n,n+="px",e.setAttribute("sizes",n),u.test(s.nodeName||""))for(o=s.getElementsByTagName("source"),a=0,r=o.length;r>a;a++)o[a].setAttribute("sizes",n);i.detail.dataAttr||y(e,i.detail)}},a=function(){var t,n=e.length;if(n)for(t=0;n>t;t++)o(e[t])},r=C(a);return{_:function(){e=t.getElementsByClassName(n.autosizesClass),s("resize",r)},checkElems:r,updateElem:o}}(),B=function(){B.i||(B.i=!0,w._(),A._())};return function(){var t,o={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.7,hFac:.8,loadMode:2};n=e.lazySizesConfig||e.lazysizesConfig||{};for(t in o)t in n||(n[t]=o[t]);e.lazySizesConfig=n,l(function(){n.init&&B()})}(),{cfg:n,autoSizer:w,loader:A,init:B,uP:y,aC:v,rC:h,hC:g,fire:b,gW:E}}})},{}],3:[function(e,t,n){t.exports={menuNavegador:function(){var e=document.getElementById("barraNav"),t=document.getElementById("btnMenu"),n=document.getElementById("btnMenui1"),o=document.getElementById("btnMenui2"),a=document.getElementById("btnMenui3"),r=(new Hammer(e),new Hammer(t));new Hammer(n),new Hammer(o),new Hammer(a);r.on("tap",function(t){console.log(t),e.classList.toggle("open")})},sideBarMenu:function(){var e=document.getElementById("sideMenu"),t=document.getElementById("categoriasSide"),n=document.getElementById("btnProductosMenu"),o=document.getElementById("lisCat"),a=(new Hammer(e),new Hammer(t)),r=(new Hammer(o),new Hammer(n));r.on("tap",function(n){console.log(n),t.classList.toggle("open"),e.classList.toggle("open")}),r.on("swiperight",function(n){console.log(n),t.classList.toggle("open"),e.classList.toggle("open")}),a.on("swipeleft",function(n){console.log(n),t.classList.toggle("open"),e.classList.toggle("open")})},buscar:function(){function e(){var e=i.value;i.value="",window.location="busqueda-"+e}var t=document.getElementById("buscar"),n=document.getElementById("buscador-input"),o=new Hammer(t),a=document.getElementById("header"),r=window.matchMedia("(max-width: 480px)"),i=document.getElementById("buscador-input");i.addEventListener("keypress",function(t){var n=t.keyCode;13==n&&e()}),o.on("tap",function(o){if(console.log(o),r.matches){n.classList.toggle("mostrar"),a.classList.toggle("solapar"),t.classList.toggle("enfasis");var i=t.getAttribute("class");"circulo"==i&&e()}else e()})}}},{}],4:[function(e,t,n){var o=(e("./lib/echo.min.js"),e("./lib/lazysizes.min.js"),e("./lib/responsive.js"));o.menuNavegador(),o.sideBarMenu(),o.buscar()},{"./lib/echo.min.js":1,"./lib/lazysizes.min.js":2,"./lib/responsive.js":3}]},{},[4]);</script>
</body>
</html>
