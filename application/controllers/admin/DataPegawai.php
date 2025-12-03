<?php

class DataPegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('hak_akses') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = "Data Pegawai";
		$data['pegawai'] = $this->ModelPenggajian->get_data('data_pegawai')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/pegawai/data_pegawai', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data()
	{
		$data['title'] = "Tambah Data Pegawai";
		$data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/pegawai/tambah_dataPegawai', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_data();
		} else {
			$nik			= $this->input->post('nik');
			$nama_pegawai	= $this->input->post('nama_pegawai');
			$username		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$jabatan		= $this->input->post('jabatan');
			$tanggal_masuk	= $this->input->post('tanggal_masuk');
			$status			= $this->input->post('status');
			$hak_akses		= $this->input->post('hak_akses');
			$photo = '';
			if (!empty($_FILES['photo']['name'])) {
				// Pastikan folder photo ada dan writable
				$upload_path = FCPATH . 'photo/';
				if (!is_dir($upload_path)) {
					mkdir($upload_path, 0777, true);
				}
				$config['upload_path'] 		= $upload_path;
				$config['allowed_types'] 	= 'jpg|jpeg|png|tiff';
				$config['max_size']			= 2048;
				$config['file_name']		= 'pegawai-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('photo')) {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Photo Gagal Diupload! ' . $this->upload->display_errors() . '</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('admin/DataPegawai/tambah_data');
				} else {
					$photo = $this->upload->data('file_name');
				}
			}

			$data = array(
				'nik' 			=> $nik,
				'nama_pegawai' 	=> $nama_pegawai,
				'username' 		=> $username,
				'password' 		=> $password,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' 		=> $jabatan,
				'tanggal_masuk' => $tanggal_masuk,
				'status' 		=> $status,
				'hak_akses' 	=> $hak_akses,
				'photo' 		=> $photo,
			);

			$this->ModelPenggajian->insert_data($data, 'data_pegawai');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataPegawai');
		}
	}

	public function update_data($id)
	{
		$where = array('id_pegawai' => $id);
		$data['title'] = "update Data Pegawai";
		$data['jabatan'] = $this->ModelPenggajian->get_data('data_jabatan')->result();
		$data['pegawai'] = $this->db->query("SELECT * FROM data_pegawai WHERE id_pegawai='$id'")->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/pegawai/update_dataPegawai', $data);
		$this->load->view('template_admin/footer');
	}

	public function update_data_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_data();
		} else {
			$id				= $this->input->post('id_pegawai');
			$nik			= $this->input->post('nik');
			$nama_pegawai	= $this->input->post('nama_pegawai');
			$username		= $this->input->post('username');
			$password		= md5($this->input->post('password'));
			$jenis_kelamin	= $this->input->post('jenis_kelamin');
			$jabatan		= $this->input->post('jabatan');
			$tanggal_masuk	= $this->input->post('tanggal_masuk');
			$status			= $this->input->post('status');
			$hak_akses		= $this->input->post('hak_akses');
			// Ambil foto lama dulu sebelum update
			$old_photo_query = $this->db->query("SELECT photo FROM data_pegawai WHERE id_pegawai='$id'");
			$old_photo = $old_photo_query->num_rows() > 0 ? $old_photo_query->row()->photo : '';

			$photo = '';
			if (!empty($_FILES['photo']['name'])) {
				// Pastikan folder photo ada dan writable
				$upload_path = FCPATH . 'photo/';
				if (!is_dir($upload_path)) {
					mkdir($upload_path, 0777, true);
				}
				$config['upload_path'] 		= $upload_path;
				$config['allowed_types'] 	= 'jpg|jpeg|png|tiff';
				$config['max_size']			= 2048;
				$config['file_name']		= 'pegawai-' . date('ymd') . '-' . substr(md5(rand()), 0, 10);
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('photo')) {
					$photo = $this->upload->data('file_name');
					// Hapus foto lama jika ada
					if (!empty($old_photo) && file_exists($upload_path . $old_photo)) {
						@unlink($upload_path . $old_photo);
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Photo Gagal Diupload! ' . $this->upload->display_errors() . '</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
						</div>');
					redirect('admin/DataPegawai/update_data/' . $id);
				}
			}

			$data = array(
				'nik' 			=> $nik,
				'nama_pegawai' 	=> $nama_pegawai,
				'username' 		=> $username,
				'password' 		=> $password,
				'jenis_kelamin' => $jenis_kelamin,
				'jabatan' 		=> $jabatan,
				'tanggal_masuk' => $tanggal_masuk,
				'status' 		=> $status,
				'hak_akses' 	=> $hak_akses,
			);

			// Update foto hanya jika ada foto baru
			if (!empty($photo)) {
				$data['photo'] = $photo;
			}

			$where = array(
				'id_pegawai' => $id

			);

			$this->ModelPenggajian->update_data('data_pegawai', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diupdate!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/DataPegawai');
		}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tanggal_masuk', 'Tanggal Masuk', 'required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
	}

	public function delete_data($id)
	{
		$where = array('id_pegawai' => $id);
		$this->ModelPenggajian->delete_data($where, 'data_pegawai');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data berhasil dihapus!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
		redirect('admin/DataPegawai');
	}

	public function cetak()
	{
		$data['title'] = 'Cetak Data Pegawai';
		$data['pegawai'] = $this->ModelPenggajian->get_data('data_pegawai')->result();
		$this->load->view('admin/pegawai/cetak_dataPegawai', $data);
	}
}
