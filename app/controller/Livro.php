<?php

    require_once '../model/Database.php';

    class Livro {
        public ?int $id_livro = null;
        public string $titulo;
        public string $isbn;
        public string $autor;
        public string $editora;
        public string $categoria;
        public string $paginas;
        public string $versao;
        public string $disponibilidade;

        public function cadastrar() {
            $db = new Database('livro');

            $res = $db->insert([
                "titulo" => $this->titulo,
                "isbn" => $this->isbn,
                "autor" => $this->autor,
                "editora" => $this->editora,
                "categoria" => $this->categoria,
                "paginas" => $this->paginas,
                "versao" => $this->versao,
                "disponibilidade" => $this->disponibilidade,
            ]);
            return $res;
        }

        public function buscar() {
            $db = new Database('livro');

            $stmt = $db->select();

            return $stmt;
        }

        public function buscar_por_id() {
            $db = new Database('livro');

            $res = $db->select_all_with_where("id_livro = '{$_SESSION["livro"]}'");

            return $res;
        }

        public function editar() {
            $db = new Database('livro');

            $res = $db->update([
                "id_livro" => $this->id_livro,
                "titulo" => $this->titulo,
                "isbn" => $this->isbn,
                "autor" => $this->autor,
                "editora" => $this->editora,
                "categoria" => $this->catagoria,
                "paginas" => $this->paginas,
                "versao" => $this->versao,
                "disponibilidade" => $this->disp,
            ]);
            return $res;
        }

        public function editar_por_id($id_livro) {
            $db = new Database('livro');

            $res = $db->select_one_with_where("id_livro = '{$id_livro}'");

            if ($res) {
                return $res;
            } else {
                return false;
            }
        }

    }