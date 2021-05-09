<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Media extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->api = "http://sikk.itenas.ac.id";
        $this->load->helper(array('form', 'url', 'download'));
        $this->load->database();
        $this->load->library('upload');
        $this->load->library('curl');
    }

    public function index()
    {
        $data['count'] = $this->db->from('slide')->count_all_results();
        $data['slide'] = $this->db->get('slide')->result();
        $data['berita_kemahasiswaan'] = $this->db->where('kategori', 'Kemahasiswaan')->get('berita')->result();
        $data['berita_karir'] = $this->db->where('kategori', 'Karir & Alumni')->get('berita')->result();
        $running_text = $this->db->get('running_text')->result_array();
        $full = "";
        foreach ($running_text as $row) {
            $full = $full . " &#10209 " . $row['desk_text'];
        }
        $data['run'] = $full;
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }

    public function jadwal()
    {
        $this->load->view('calendar');
    }

    public function pengaturan()
    {
        $data['slide'] = $this->db->get('slide')->result();
        $data['berita'] = $this->db->get('berita')->result();
        $data['running_text'] = $this->db->get('running_text')->result();
        $this->load->view('pengaturan/header');
        $this->load->view('pengaturan/pengaturan', $data);
        $this->load->view('pengaturan/footer', $data);
    }

    public function loadEvent()
    {
        $url = "http://sikk.itenas.ac.id/jadwal";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url);
        echo json_encode($data);
    }

    public function addSlide()
    {
        $this->upload_slide();
        $extension = pathinfo("./assets/slide/" . $this->upload->data('file_name'), PATHINFO_EXTENSION);
        if ($extension == "mp4") {
            $jenis = "video";
        } elseif (($extension == "jpg") || $extension == "png") {
            $jenis = "image";
        }
        $data = array(
            'nama_slide' => $this->input->post('nama_slide'),
            'nama_file' => $this->upload->data('file_name'),
            'jenis' => $jenis,
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        );
        $insert = $this->db->insert('slide', $data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addBerita()
    {
        $this->upload_berita();
        $data = array(
            'judul' => $this->input->post('judul'),
            'nama_file' => $this->upload->data('file_name'),
            'kategori' => $this->input->post('kategori'),
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        );
        $insert = $this->db->insert('berita', $data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function deleteSlide($id, $file)
    {
        unlink('assets/slide/' . $file);
        $delete = $this->db->where("id_slide", $id)->delete('slide');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function deleteBerita($id, $file)
    {
        unlink('assets/berita/' . $file);
        $delete = $this->db->where("id_berita", $id)->delete('berita');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function addRunning()
    {
        $data = array(
            'desk_text' => $this->input->post('desk_text'),
            'created' => date('Y-m-d H:i:s'),
            'updated' => date('Y-m-d H:i:s')
        );
        $insert = $this->db->insert('running_text', $data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function updateRunning($id)
    {
        $data = array(
            'desk_text' => $this->input->post('desk_text'),
            'updated' => date('Y-m-d H:i:s')
        );
        $update = $this->db->where("id_text", $id)->update('running_text', $data);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function deleteRunning($id)
    {
        $delete = $this->db->where("id_text", $id)->delete('running_text');
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function upload_slide()
    {
        $filename = str_replace(" ", "_", $this->input->post('nama_slide'));
        echo $filename;
        $config['upload_path']          = './assets/slide/';
        $config['allowed_types']        = 'png|jpg|mp4';
        $config['file_name']          = $filename;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('errorUpload', True);
            echo "gagal";
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function upload_berita()
    {
        $filename = str_replace(" ", "_", $this->input->post('judul'));
        echo $filename;
        $config['upload_path']          = './assets/berita/';
        $config['allowed_types']        = 'png|jpg|jpeg';
        $config['file_name']          = $filename;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('file')) {
            $this->session->set_flashdata('errorUpload', True);
            echo "gagal";
            redirect($_SERVER['HTTP_REFERER']);
        }
    }
}
