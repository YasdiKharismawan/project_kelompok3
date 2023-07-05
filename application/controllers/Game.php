<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Game extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Game_model');
    }
    public function index()
    {
        $data['title'] = 'Game Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->Game_model->getAllGames();


            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('game/index', $data);
            $this->load->view('templates/footer');
        }
        
        public function tambah()
        {
            $this->form_validation->set_rules('judul', 'Judul', 'required|trim', ['required' => 'Kolom judul harus diisi!']);
            $this->form_validation->set_rules('genre', 'Genre', 'required|trim');
            $this->form_validation->set_rules('harga', 'Harga', 'required|trim',['required' => 'Kolom harga harus diisi!']);

            if($this->form_validation->run() == FALSE) {
                $data['title'] = 'Add Game Form';
                $this->load->view('templates/header', $data);
                $this->load->view('game/tambah');
                $this->load->view('templates/footer');
            } else {
                $this->Game_model->tambahDataGame();
                $this->session->set_flashdata('success_message', 'Game Added!');
                $this->session->keep_flashdata('message');
                redirect('game');
            }
            
    }

    public function hapus($id) 
    {
        $this->load->model('Game_model');
        $this->load->library('form_validation');
        $this->Game_model->hapusDataGame($id);
        $this->session->set_flashdata('success_message', 'Game Deleted!');
        $this->session->keep_flashdata('message');
        redirect('game');
        
    }

    public function detail($id) 
    {
        $data['title'] = 'Game Detail';
        $data['game'] = $this->Game_model->getGameById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('game/detail', $data);
        $this->load->view('templates/footer');
    }


    public function edit($id)
    {
        // Validasi form
        $this->form_validation->set_rules('judul', 'Judul', 'required|trim', ['required' => 'Kolom judul harus diisi!']);
        $this->form_validation->set_rules('genre', 'Genre', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim', ['required' => 'Kolom harga harus diisi!']);

        // Mengambil data game berdasarkan ID
        $data['title'] = 'Edit Game';
        $data['game'] = $this->Game_model->getGameById($id);
        $data['genre'] = ['Action-Adventure-OpenWorld', 'Indie-Farm', 'Indie-Adventure', 'Racing', 'Strategy-Turnbased', 'Horror-Survival'];

        if ($this->form_validation->run() == FALSE) {
            // Tampilkan halaman edit dengan form dan data game
            $this->load->view('templates/header', $data);
            $this->load->view('game/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $upload_image = $_FILES['cover']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '3072';
                $config['upload_path'] = './assets/img/game/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('cover')) {
                    
                    $new_cover = $this->upload->data('file_name');
                    $this->Game_model->editDataGameWithCover($id, $new_cover, $this->input->post('judul'), $this->input->post('genre'), $this->input->post('harga'), $this->input->post('detail'));
                } else {
                    echo $this->upload->display_errors();
                    return; // Menghentikan eksekusi jika terjadi kesalahan pada upload gambar
                }
            } else {
                // Update data game tanpa mengubah gambar
                $this->Game_model->editDataGame($id, $this->input->post('judul'), $this->input->post('genre'), $this->input->post('harga'), $this->input->post('detail'));
            }

            $this->session->set_flashdata('success_message', 'Game Updated!');
            $this->session->keep_flashdata('message');
            redirect('game');
        }
    }



    public function addtocart($id)
    {
        $game = $this->Game_model->find($id);
        $data = array(
            'id'      => $game->id,
            'qty'     => 1,
            'price'   => $game->harga,
            'name'    => $game->judul,
        ); 

        $this->cart->insert($data);
        redirect('user/beli_game');
    }

    public function detail_cart()
    {
        $data['title'] = 'Detail Cart';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['game'] = $this->Game_model->getAllGames();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('game/cart');
        $this->load->view('templates/footer');
    }

    public function delcart()
    {
        $this->cart->destroy();
        redirect('user/beli_game');
    }

    public function pay()
    {
        $data['title'] = 'Payment Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('game/pay');
        $this->load->view('templates/footer');
    }

    public function payproses()
    {
        $data['title'] = 'Payment Page';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $is_processed = $this->Invoice_model->index();
        if($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('game/payproses');
            $this->load->view('templates/footer');
        } else {
            echo "sorry, your order failed to process!!!";
        }
    }
    
    public function detail_game($id)
    {
        $data['game'] = $this->Game_model->detail_game($id);
        $data['title'] = 'Game Detail';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('game/game_detail', $data);
        $this->load->view('templates/footer');
    }
    





}