<?php
use App\Controller\ControllerCrud;
use App\Model\ModelCrud;
    require_once("../Model/conexao.php");
    require_once("../Controller/Controller.php");
    extract($_POST);

    $data = date('Y-m-d');

    
    if(isset($view))
    {
        header("Location: ../View/view.php");
        
    }elseif(!isset($enviado))
    {
        header("Location: ../../index.html");
    }elseif(isset($enviado))
    {
        $semana = new ControllerCrud();
        $semana->criarSemana($materia, $tempo, $data);
        header("Location: ../../index.html");
    }


    /*
    $teste = new ModelCrud();
    $teste->create("Mais um", "2", "20230225");
    $teste->save();
    */
    //var_dump(Conexao::Conectar());
