<style type="text/css">
ul#navigation {
    position: fixed;
    margin: 0px;
    padding: 0px;
    top: 10px;
    left: 0px;
    list-style: none;
    z-index:9999;
}
ul#navigation li {
    width: 100px;
}
ul#navigation li a {
    display: block;
    margin-left: -2px;
    width: 100px;
    height: 70px;    
    background-color:#CFCFCF;
    background-repeat:no-repeat;
    background-position:center center;
    border:1px solid #AFAFAF;
    -moz-border-radius:0px 10px 10px 0px;
    -webkit-border-bottom-right-radius: 10px;
    -webkit-border-top-right-radius: 10px;
    -khtml-border-bottom-right-radius: 10px;
    -khtml-border-top-right-radius: 10px;
    /*-moz-box-shadow: 0px 4px 3px #000;
    -webkit-box-shadow: 0px 4px 3px #000;
    */
    opacity: 0.6;
    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=60);
}
ul#navigation .home a{
    background-image: url(src/Views/file/images/home.png);
}
ul#navigation .about a      {
    background-image: url(src/Views/file/images/id_card.png);
}
ul#navigation .search a      {
    background-image: url(src/Views/file/images/search.png);
}
ul#navigation .users a      {
    background-image: url(src/Views/file/images/users.png);
    background-size: 64px 64px;
}
ul#navigation .logout a   {
    background-image: url(src/Views/file/images/logout.png);
    background-size: 64px 64px;
}
ul#navigation .notes a     {
    background-image: url(src/Views/file/images/notes.png);
    background-size: 64px 64px;
}
ul#navigation .settings a    {
    background-image: url(src/Views/file/images/settings.png);
    background-size: 64px 64px;
}


</style>

<ul id="navigation">
 <li class="home"><a title="Inicio" href="index.php?action=_appmain"></a></li>
 <li class="search"><a title="Cuentas" href="index.php?action=grid_Cuentas"></a></li>
 <li class="about"><a title="Nuevo Cliente" href="index.php?action=ClientesForm"></a></li> 
 <?php
  if($_SESSION["iduser"] == 3){
 echo "<li class='users'><a title='Usuarios' href='index.php?action=UsuariosForm'></a></li>";

 }
  ?>
  <li class="notes"><a title="Notas" href="index.php?action=grid_Notas"></a></li>
  <li class="settings"><a title="Configuración" href="index.php?action=settings"></a></li>
<li class="logout"><a title="Cerrar Sesion" href="index.php?action=logout"></a></li>



 
</ul>
