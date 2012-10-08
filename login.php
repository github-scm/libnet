<?php
include ('includes/header.inc.php');
?>
<div id="cuerpo"> <img src="images/banner_sab.jpg" border="0" title="Sistema de AutomatizaciÃ³n Bibliotecaria SAB" />
  <div id="fondo_login">
    <div id="contenedor_form">
      <form id="autenticar_usuario" name="autenticar_usuario" onsubmit="javascript:comprobar_login(document.getElementById('usuario').value,document.getElementById('passwd').value); return false">
        <ul>
          <li id="foli1">
            <h4>Iniciar Sesi&oacute;n </h4>
          </li>
          <li id="foli2" class="">
            <label>Usuario</label>
            <div>
              <input type="text" name="usuario" id="usuario" class="field text medium" tabindex="1"/>
            </div>
          </li>
          <li id="foli3" class="">
            <label>Contrase&ntilde;a</label>
            <div>
              <input type="password" name="passwd" id="passwd" class="field text medium" tabindex="2"/>
            </div>
          </li>
          <li id="foli4">
            <input name="submit" type="submit" class="btTxt submit" tabindex="3" value="Ingresar" />
          </li>
        </ul>
      </form>
      <p><a href="">¿Olvido su contrase&ntilde;a?</a></p>
      <div class="img_login"> <img src="img/jpg/login.jpg" border="0" /> </div>
      <div id="capa"> </div>
    </div>
  </div>
</div>
<?php
include ('includes/footer.inc.php');
?>
