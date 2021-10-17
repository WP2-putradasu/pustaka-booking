<?php
class Matakuliah extends CI_Controller{
  public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
      //menambahkan form_validation
      $this->form_validation->set_rules('kode', 'Kode', 'trim|required|min_length[3]',
      array(
                  'required'      => '%s Wajib diisi.',
                  'min_length'      => '%s terlalu pendek.'
          ));
      $this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required',
      array(
                  'required'      => '%s Wajib diisi.',
                  'min_length'      => '%s terlalu pendek.'
          )
    );
      $this->form_validation->set_rules('sks', 'SKS', 'required',
      array(
                  'required'      => '%s Wajib dipilih.'
          )
    );


      if ($this->form_validation->run() == FALSE)
                {
                      $this->load->view('view_form_matakuliah');
                }
                else
                {
                  $data = [
                      'kode' => $this->input->post('kode'),
                      'nama' => $this->input->post('nama'),
                      'sks' => $this->input->post('sks')
                  ];

                  $this->load->view('view_data_matakuliah', $data);
                }
    }

}