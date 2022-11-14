<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="usuario" placeholder="ingrese usuario"
           <?=isset($_POST["usuario"])?"value = '".$_POST["usuario"]."'":"";?>
    ><br>
    <input type="password" name="password" placeholder="ingrese contraseña"
        <?=isset($_POST["password"])?"value = '".$_POST["password"]."'":"";?>>
    <br>    
    <input type="tipo" name="tipo" placeholder="ingrese el tipo"
    <?=isset($_POST["tipo"])?"value = '".$_POST["tipo"]."'":"";?>><br> 
    <input type="submit" value="Login">
</form>

<?php
if(!empty($_POST)){
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $tipo = trim($_POST["tipo"]);

    if($usuario == ""){
        echo "ingrese ususario<br>";
    }

    if(strlen($password)==0){
        echo "ingrese contraseña<br>";
    }
    
    if(strlen($tipo)== ""){
        echo "ingrese tipo<br>";
    }

    if(strlen($password)<6){
        echo "su contraseña debe tener al menos 6 caracteres<br>";
    }


    include_once "controladores/usuarioControlador.php";
        $usuarioControlador = new usuarioControlador();
        $usuarioControlador->login($usuario, $password);#esto estamos trayendo desde el controlador
}

