<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class postagens_model extends CI_Model {

    public function get($limit = 0) {
        if ($limit == 0) {
            $this->db->order_by('id', 'desc');
            $query = $this->db->get('postagens');
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return NULL;
            }
        } else {
            $this->db->order_by('id', 'desc');
            $query = $this->db->get('postagens', $limit);
            if ($query->num_rows() > 0) {
                return $query->result();
            } else {
                return NULL;
            }
        }
    }

    public function get_single($id = 0) {
        $this->db->where('id', $id);
        $query = $this->db->get('postagens', 1);

        if ($query->num_rows() == 1) {
            $row = $query->row();
            return $row;
        } else {
            return NULL;
        }
    }

    public function salvar($dados) {
        if (isset($dados['id']) && $dados['id'] > 0) {
            $this->db->where('id', $dados['id']);
            unset($dados['id']);
            $this->db->update('postagens', $dados);
            return $this->db->affected_rows();
        } else {
            $this->db->insert('postagens', $dados);
            return $this->db->insert_id();
        }
    }

    function show_post_id($id) {
        $this->db->select('*');
        $this->db->from('postagens');
        $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function atualizar($data) {
        $this->db->where('id', $data['id']);
            unset($data['id']);
            $this->db->update('postagens', $data);
            return $this->db->affected_rows();
    }

    public function excluir($id = 0) {
        $this->db->where('id', $id);
        $this->db->delete('postagens');
        return $this->db->affected_rows();
    }

}
