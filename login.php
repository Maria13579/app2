<?php

    $user=[
            ['user'=>'maria','pass'=>'123'],
            ['user'=>'lineli','pass'=>'456'],
            ['user'=>'natalia','pass'=>'789']
        ];
    $usuario=$_POST['user'];
    $password=$_POST['pass'];
    $estado=false;
    $cont=0;
        
    foreach($user as $u)
    {
        if($u['user']==$usuario && $u['pass']==$password)   
        {
            $estado=true;
            $cont++;    
        } 
    }
    
    if($estado)
    {
        header('location:ventas.php');        
    }
    else
    {
        header('location:index.php');   
    }

    $admin=[
        ['admin'=>'administrador','contra'=>'456'],
    ];
    $usuario=$_POST['admin'];
    $password=$_POST['contra'];
    $estado=false;
    $cont=0;
        
    foreach($user as $u)
    {
        if($u['admin']=='usuario'&& $u['contra']=='password')   
        {
            $estado=true;
            $cont++;    
        } 
    }
    
    if($estado)
    {
        header('location:inventario.php');        
    }
    else
    {
        header('location:index.php');   
    }
    
?>