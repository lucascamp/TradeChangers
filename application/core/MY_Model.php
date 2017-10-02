<?php

class MY_Model extends CI_Model {

    private $table;

    public function setTable($table = null) {
        $this->table = $table;
    }

    public function getTable() {
        return $this->table;
    }

    public function get($id = null) {
        if ($id != null) {
            $this->db->where('id', $id);
        }
        $get = $this->db->get($this->getTable());
        return $get;
    }

    public function create($data = []) {
        if (is_array($data)) {
            $create = $this->db->insert($this->getTable(), $data);
            if ($create) {
                return ['type' => 1, 'value' => 'Os dados foram inseridos com sucesso.'];
            } else {
                return ['type' => 2, 'value' => 'Não foi possível inserir os dados.'];
            }
        } else {
            return ['type' => 2, 'value' => 'Você não tem permissão para essa ação.'];
        }
    }

    public function update($id = null, $data = []) {
        if ($id != null && is_array($data)) {
            $update = $this->db->update($this->getTable(), $data, ['id' => $id]);
            if ($update) {
                return ['type' => 1, 'value' => 'Os dados foram alterados com sucesso.'];
            } else {
                return ['type' => 2, 'value' => 'Não foi possível alterar os dados.'];
            }
        } else {
            return ['type' => 2, 'value' => 'Você não tem permissão para essa ação.'];
        }
    }

    public function delete($id = null) {
        if ($id != null) {
            $delete = $this->db->delete($this->getTable(), ['id' => $id]);
            if ($delete) {
                return ['type' => 1, 'value' => 'Os dados foram removidos com sucesso.'];
            } else {
                return ['type' => 2, 'value' => 'Não foi possível remover os dados.'];
            }
        } else {
            return ['type' => 2, 'value' => 'Você não tem permissão para essa ação.'];
        }
    }

}
