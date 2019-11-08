<?php defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Model
{

    function cart_surat_keluar()
    {
        $cart = $this->db->query("SELECT COUNT(tgl_surat) as jumlah, tgl_surat as tanggal FROM tb_surat_keluar WHERE tgl_surat  GROUP by tgl_surat");
             return $cart->result();
    }
 function cart_surat_masuk()
    {
        $cart = $this->db->query("SELECT COUNT(tgl_terima) as jumlah2, tgl_terima as tanggal2 FROM tb_surat_masuk WHERE tgl_terima  GROUP by tgl_terima");
             return $cart->result();
    }

 /*function cart_surat_keluar($date) // jika ingin menampilkan hanya bulan januari
    {
        $cart = $this->db->query("SELECT COUNT(tgl_surat) as jumlah, tgl_surat as tanggal FROM tb_surat_keluar WHERE tgl_surat LIKE '$date-%' GROUP by tgl_surat");
        return $cart->result();
    } */

//jika hanya bulan januari
/*     function cart_surat_keluar()
    {
        $cart = $this->db->query("SELECT COUNT(tgl_surat) as jumlah, tgl_Surat AS tanggal ,tgl_surat FROM tb_surat_keluar WHERE month(tgl_surat)=01
  GROUP BY tgl_surat");
        return $cart->result();
    }
*/
}