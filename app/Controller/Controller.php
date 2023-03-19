<?php
    namespace App\Controller
    {
        use App\Model\ModelCrud;
        require_once("../Model/Model.php");
        class ControllerCrud
        {

            public function criarSemana($materia, $horas_estudadas, $data)
            {
                if(isset($materia, $horas_estudadas, $data))
                {
                    $semana = new ModelCrud();
                    $semana->create($materia, $horas_estudadas, $data);
                    $semana->save();
                }
            }

            public function deletarSemana()
            {

            }

            public function atualizarSemana()
            {

            }

            public function listarSemana()
            {

            }

            public function listarSemanas()
            {

            }

        }
    }