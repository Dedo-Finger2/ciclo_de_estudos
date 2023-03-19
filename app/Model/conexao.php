<?php
    class Conexao
    {

        static public function Conectar()
        {
            $conexao = new mysqli("localhost", "root", "", "ciclo_de_estudos");
            return $conexao;
        }
    }