<?php
    namespace App\Model
    {
    use Conexao;
        require_once("conexao.php");
        class ModelCrud
        {
            private $materia;
            private $horas_estudadas;
            private $data;
            private $conexao;

            public function create($materia, $horas_estudadas, $data)
            {
                $this->materia = $materia;
                $this->horas_estudadas = $horas_estudadas;
                $this->data = $data;
                $this->conexao = Conexao::Conectar();
                //var_dump(Conexao::Conectar());
            }
            public function save()
            {
                $sql = $this->conexao->prepare("INSERT INTO estudo (materia, horas_estudadas, data) VALUES(?,?,?)");
                $sql->bind_param("sss", $this->materia, $this->horas_estudadas, $this->data);
                $sql->execute();
            }
            public function update($id)
            {
                $sql = $this->conexao->query("UPDATE estudo SET materia='$this->materia', horas_estudadas='$this->horas_estudadas', data='$this->data' WHERE id=$id");
            }
            public function delete($id)
            {
                $sql = $this->conexao->query("DELETE FROM estudo WHERE id=$id");
            }
            public function selectOne()
            {

            }
            public function selectAll()
            {

            }

        }
    }
