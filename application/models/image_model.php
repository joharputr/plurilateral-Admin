<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model
{
    private $_table = "gambar";

    public $id_gambar;
    public $gambar;
    public $surat_id;
    public $nama;
    public $tgl_surat;


  public function rules()
    {
        return [
           // ['field' => 'id_gambar',
           //  'label' => 'id_gambar',
           //  'rules' => 'numeric'],

           //  ['field' => 'gambar',
           //  'label' => 'gambar',
           //  'rules' => 'required'],

               ['field' => 'surat_id',
            'label' => 'surat_id',
            'rules' => 'numeric']

            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id_gambar' => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $query = $this->db->query("SELECT * from gambar");
        $total= $query->num_rows();
        $total += 1;            
        $this->id_gambar = "$total";
        $this->tgl_surat = $post["tgl_surat"];
        $this->nama = $post["nama"];
        $this->gambar = $this->_uploadImage();
        $this->surat_id = "1";
        $this->db->insert($this->_table, $this);
        redirect('admin/disposisi');
    }


 public function update()
    {
        $post = $this->input->post();
          $this->id_gambar = $post["id"];
        $this->nama = $post["nama"];
        $this->tgl_surat = $post["tgl_surat"];
        
        
        if (!empty($_FILES["gambar"])) {
            $this->gambar = $this->_uploadImage();
        } else {
            $this->gambar = $post["old_image"];
        }
    
        $this->db->update($this->_table, $this, array('id_gambar' => $post['id']));
        redirect('admin/disposisi');
    }

    public function delete($id)
    {
        $this-> _deleteImage($id);
        return $this->db->delete($this->_table, array("id_gambar" => $id));
    }

    private function _uploadImage()
    {
    $config['upload_path']          = './upload/files/';
    $config['allowed_types']        = 'gif|jpg|png|pdf';
    $config['file_name']            = $this->id_gambar;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data('file_name');
    }
    
    else {
         return 'default.jpg';
    }
        
  
    }


    private function _deleteImage($id)
{
    $delete = $this->getById($id);
    if ($delete->gambar != "default.jpg") {
        $filename = explode(".", $delete->gambar)[0];
        return array_map('unlink', glob(FCPATH."upload/files/$filename.*"));
    }
}


    public function disposisi()
    {
        return $this->db->get('gambar');
    }
       public function tampil_disposisi()
    {
        return $this->db->get('gambar');
    }


    // public function insert_disposisi($object)
    // {
    //     $this->db->insert('gambar', $object);
    // }

    // public function edit_disposisi($id)
    // {
    //     return $this->db->get_where('gambar',array('id_gambar'=>$id));
    // }

    // public function hapus_disposisi($id)
    // {
    //     return $this->db->delete('login', array('id_gambar' => $id));
    // }  
}