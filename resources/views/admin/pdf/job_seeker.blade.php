<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>1/4</title>
	<style type="text/css">
		p {
			font-size: 12px;
		}

		.logo {
			margin-top: 10px;
			width : 250px;
			height: auto;
		}

		.header-title {
			font-size: 14px;
			font-weight: bold;
		}

		.row {
			width: 100%;
			position: static;
			padding: 2px 20px;
			margin: 2px 2px 2px 2px;
			clear: both;
		}

		.col {
			float: left;
			padding: 3px;
		}

		.c6 {
			width: 6%;
		}

		.c10 {
			width: 10%;
		}

		.c18 {
			width: 18%;
		}

		.c20 {
			width: 20%;
		}

		.c21 {
			width: 21%
		}

		.c25 {
			width: 25%;
		}

		.c33 {
			width: 33%;
		}

		.c40 {
			width: 40%;
		}

		.c45 {
			width: 45%;
		}

		.c50 {
			width: 50%;
		}

		.c75 {
			width: 75%;
		}

		.c100 {
			width: 100%;
		}

		.header-sub-tittle {
			margin-top: 0px;
			text-align: center;
		}

		.header-tittle {
			margin-bottom: 0px;
			text-align: center;
		}

		.sub-tittle {
			margin-top: 2px;
   			margin-bottom: 2px;
			font-size: 16px;
			padding: 2px 2px 2px 2px;
			font-weight: bold;
		}

		.description {
			font-size: 10px;
			margin-top: 2px;
   			margin-bottom: 2px;
		}

		.descriptionpadding {
			font-size: 10px;
			margin-top: 2px;
   			margin-bottom: 2px;
   			padding-left: 15px;
		}

		.photo-profile {
			width: 3cm;
			height: 4cm;
			border: 1px solid #000000;
		}

		.bordered {
			border-collapse: collapse;
		}

		.bordered tr td {
			border: 1px solid #000000;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col c50">
			<img class="logo" src="{{ public_path('admin/images/logo/logo.png') }}">
		</div>
		<div class="col c45">
			<p class="header-title">PT. AISIN INDONESIA AUTOMOTIVE</p>
			<p>Jalan Harapan VIII Kawasan Industri KIIC Lot LL No 9-10, Karawang Jawa Barat</p>
		</div>
	</div>
	<div class="row">
		<div class="col c75">
			<h3 class="header-tittle">FORMULIR LAMARAN KERJA</h3>
			<p class="header-sub-tittle">FRM-HRD-S1-003-01</p>
			<br>
			<p class="sub-tittle">ISILAH DENGAN HURUF CETAK</p>
		</div>
		<div class="col c20">
			<img class="photo-profile" src="{{ public_path('admin/images/avatar/avatar.jpg') }}">
		</div>
	</div>
	<div class="row">
		<div class="col c100">
			<p class="sub-tittle c50">A. IDENTITAS</p>
			<div class="c100">
				<table class="c100 description">
					<tr>
						<td class="c25">Nama Lengkap *)</td>
						<td class="c25">:</td>
						<td class="c25">Agama</td>
						<td class="c25">:</td>
					</tr>
					<tr>
						<td>Tempat & Tgl lahir</td>
						<td>:</td>
						<td>Jenis Kelamin</td>
						<td>:</td>
					</tr>
					<tr>
						<td>SIM Yang dimiliki</td>
						<td>:</td>
						<td>Golongan Darah</td>
						<td>:</td>
					</tr>
					<tr>
						<td>No SIM Yang dimiliki</td>
						<td>:</td>
						<td>Tinggi Badan</td>
						<td>:</td>
					</tr>
					<tr>
						<td>Nomor KTP</td>
						<td>:</td>
						<td>Berat Badan</td>
						<td>:</td>
					</tr>
					<tr>
						<td>Nomor Handphone</td>
						<td>:</td>
						<td>Ukuran Baju</td>
						<td>:</td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td>:</td>
						<td>Ukuran Celana Panjang</td>
						<td>:</td>
					</tr>
					<tr>
						<td>Alamat Tetap</td>
						<td>:</td>
						<td>Ukuran Sepatu</td>
						<td>:</td>
					</tr>
					<tr>
						<td colspan="4">-</td>
					</tr>
					<tr>
						<td>Telepon Alamat Tetap</td>
						<td>:</td>
					</tr>
					<tr>
						<td>Alamat Kontrakan</td>
						<td>:</td>
					</tr>
					<tr>
						<td colspan="4">-</td>
					</tr>
					<tr>
						<td>Telepon Kontrakan</td>
						<td>:</td>
					</tr>
				</table>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col c100">
			<p class="sub-tittle c50">B. PENDIDIKAN</p>
			<p class="description"><b>1. Pendidikan Formal</b></p>
			<div class="c100">
				<table class="c100 description bordered">
					<tr>
						<td></td>
						<td>Nama Sekolah</td>
						<td>Fakultas</td>
						<td>Jurusan</td>
						<td>Prog Studi</td>
						<td>Tempat</td>
						<td> ..s/d.. </td>
						<td>NEM / IPK</td>
					</tr>
					<tr>
						<td>SMU</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Dipl</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>S1</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>S2</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<br>
			<p class="description">a) Uraikan dengan singkat, mengapa anda memilih jurusan tersebut di Peruruan Tinggi ?</p>
			<p> isi </p>
			<p class="description">b) Sebutkan Karya Ilmiah yang pernah anda buat (Skripsi, Artikel, KArya Tulis, dll)</p>
			<p> isi </p>
			<br>
			<p class="description"><b>2. Pendidikan Non Formal</b></p>
			<div class="c100">
				<table class="c100 description bordered">
					<tr>
						<td class="c6">No</td>
						<td class="c21">Nama Kursus / Training</td>
						<td class="c21">Tempat</td>
						<td class="c21"> .. s/d ..</td>
						<td class="c21">Keterangan</td>
					</tr>
					<tr>
						<td>1</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>3</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>4</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>
			<br>
			<p class="description"><b>3. Bahasa Asing yang Dikuasai</b></p>
			<div class="c100">
				<table class="c100 description bordered">
					<tr>
						<td rowspan="2" class="c6">No</td>
						<td rowspan="2" class="c21">Bahasa</td>
						<td colspan="2" class="c21">Berbicara</td>
						<td colspan="2" class="c21">Tulisan</td>
						<td colspan="2" class="c21">Tata bahasa</td>
					</tr>
					<tr>
						<td>Baik</td>
						<td>Kurang</td>
						<td>Baik</td>
						<td>Kurang</td>
						<td>Baik</td>
						<td>Kurang</td>
					</tr>
					<tr>
						<td>1</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>2</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>3</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>4</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col c100">
			<p class="sub-tittle c50">C. LINGKUNGAN KELUARGA</p>
			<div class="c100">
				<p class="description"><b>1. Status Pernikahan</b></p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c33">*Data Sesuai KTP</td>
							<td class="c33">*Data Actual</td>
							<td class="c33">*Keterangan Tanggal</td>
						</tr>
						<tr>
							<td>
								() Single/Tunangan <br>
								() Menikah <br>
								() Bercerai
							</td>
							<td>
								() Single/Tunangan <br>
								() Menikah <br>
								() Bercerai
							</td>
							<td>

							</td>
						</tr>
					</table>
				</div>
				<br>
				<p class="description"><b>2. Susunan Keluarga (Istri/Suami dan Anak-anak)</b></p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c10"></td>
							<td class="c18">Nama</td>
							<td class="c18">L/P</td>
							<td class="c18">Tempat/Tgl Lahir</td>
							<td class="c18">Pendidikan</td>
							<td class="c18">Pekerjaan</td>
						</tr>
						<tr>
							<td>Istri / Suami</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>

				<br>
				<p class="description"><b>3. Susunan Keluarga (Ayah, Ibu, Saudara Kandung, termasuk Anda</b></p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c10"></td>
							<td class="c18">Nama</td>
							<td class="c18">L/P</td>
							<td class="c18">Tempat/Tgl Lahir</td>
							<td class="c18">Pendidikan</td>
							<td class="c18">Pekerjaan</td>
						</tr>
						<tr>
							<td>Ayah</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Ibu</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 4</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 5</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 6</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>Anak 7</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="col c100">
			<p class="sub-tittle c50">D. RIWAYAT PEKERJAAN</p>
			<div class="c100">
				<p class="description"><b>1. Pengalaman Kerja</b></p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c20">Nama Perusahaan</td>
							<td class="c20">Jabatan</td>
							<td class="c10">Gaji</td>
							<td class="c10">..s/d..</td>
							<td>Alasan Pindah</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>4</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<br>
				<p class="description">2. Berikan gambaran singkat mengenai jabatan-jabatan diatas :</p>
				<p> isi </p>
				<p class="description"><b>3. Sebutkan siapa saja yang pernah menjadi atasan anda, dan jumlah bawahan saat itu</b></p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c25">Nama</td>
							<td class="c25">Jabatan</td>
							<td class="c25">Perusahaan</td>
							<td>Jumlah bawahan anda</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>

				<br>
				<p class="description">4. Masalah penting apa saja yang pernah anda hadapi, dan bagaimana mengatasinya ?</p>
				<p> isi </p>
				<br>
				<p class="description">5. Ceritakan pandangan / kesan anda terhadap perusahaan diatas :</p>
				<p> isi </p>
				<br>
				<p class="description">6. Pernahkah anda melakukan pembaharuan/perubahan di perusahaan tersebut ?</p>
				<p> isi </p>
				<br>
				<p class="description">7. Siapakah yang mendorong anda hingga samapai pada taraf kemajuan seperti sekarang ?</p>
				<p> isi </p>
				<br>
				<p class="description">8. Bagaimana bila anda menghadapi persoalan dalam pekerjaan dan harus mengambil keputusan ?</p>
				<p> isi </p>

			</div>
		</div>
	</div>
	<div class="row">
		<div class="c100">
			<p class="sub-tittle c50">E. MINAT DAN KONSEP PRIBADI</p>
			<div class="c100">
				<p class="description">1. Uraikan apa yang menjadi cita-cita anda ?</p>
				<p> isi </p>
				<br>
				<p class="description">2. Apa yang mendorong anda ingin bekerja ?</p>
				<p> isi </p>
				<br>
				<p class="description">3. Mengapa anda ingin bekerja di perusahaan kami ?</p>
				<p> isi </p>
				<br>
				<p class="description">4. Sebutkan gaji yang anda inginkan ?</p>
				<p> isi </p>
				<br>
				<p class="description">5. Sebutkan fasilitas lainnya yang anda harapkan ?</p>
				<p> isi </p>
				<br>
				<p class="description">6. Kapan anda dapat mulai bekerja ?</p>
				<p> isi </p>
				<br>
				<p class="description">7. Pilih jenis pekerjaan yang sesuai dengan prioritas minat Anda ( 3 jenis )</p>
				<p> isi </p>
				<br>
				<div>
					<p class="description">8. Lingkungan kerja :  </p>
					<div class="descriptionpadding">
						<p class="description"> a) Lingkungan kerja yang disenangi : </p>
						<p class="description"> Sebutkan : </p>
						<br>
						<p class="description"> b) Lingkungan kerja yang tidak disenangi : </p>
						<p class="description"> Sebutkan : </p>
						<br>
					</div>

				</div>
				<p class="description">9. Bersediakah anda ditempatkan diluar daerah ?</p>
				<p> isi </p>
				<br>
				<p class="description">10. Sebutkan tipe orang yang anda senangi ?</p>
				<p> isi </p>
				<br>
				<p class="description">11. Terhadap hal apa anda sulit mengambil keputusan ?</p>
				<p> isi </p>
				<br>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="c100">
			<p class="sub-tittle c50">F. AKTIVITAS SOSIAL</p>
			<div class="c100">
				<p class="description">1. Adakah kenalan anda di perusahaan kami ?</p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c25">Nama</td>
							<td class="c25">Perusahaan</td>
							<td class="c25">Jabatan</td>
							<td class="c10">No Telepon</td>
							<td>Hubungan</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<br>
				<p class="description">2. Sebutkan referensi anda di luar perusahaan kami :</p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c25">Nama</td>
							<td class="c25">Perusahaan</td>
							<td class="c25">Jabatan</td>
							<td class="c10">No Telepon</td>
							<td>Hubungan</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<p class="description">3. Hobby / Kegemaran anda :</p>
				<p> isi </p>
				<br>
				<p class="description">4. Bagaimana cara anda mengisi waktu luang ?</p>
				<p> isi </p>
				<br>
				<p class="description">5. Organisasi yang pernah anda ikuti :</p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c25">Nama Organisasi</td>
							<td class="c25">Tempat</td>
							<td class="c25">Jabatan</td>
							<td>..s/d..</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>

		</div>
		<div class="c100">
			<p class="sub-tittle c50">G. LAIN-LAIN</p>
			<div class="c100">
				<p class="description">1. Pernahkah anda mengikuti psikotest sebelumnya ?</p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c25">Waktu</td>
							<td class="c25">Penyelenggara</td>
							<td class="c25">Tempat</td>
							<td>Tujuan</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<br>
				<p class="description">2. Apakah saat ini sedang mengikuti proses rekruitment di perusahaan lain? Jika Ya, Silahkan isi tabel berikut ini.</p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td rowspan="2" class="c6">No</td>
							<td colspan="2" class="c18">penyelenggara</td>
							<td colspan="6" class="c50">Proses</td>
							<td rowspan="2" class="c10">Waktu & tempat</td>
							<td rowspan="2" class="c10">Posisi</td>
							<td rowspan="2">Status</td>
						</tr>
						<tr>
							<td>Astra Group</td>
							<td>Non Astra Group</td>
							<td>Administrasi</td>
							<td>Psikotes</td>
							<td>Interview HRD</td>
							<td>Interview User</td>
							<td>MCU</td>
							<td>Lain-lain</td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>3</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<br>
				<p class="description">3. Apa yang menjadi Kekuatan / Kelebihan Sifat ( Strong point ) anda ?</p>
				<p> isi </p>
				<br>
				<p class="description">4. Apa yang menjadi Kelemahan / kekurangan  Sifat ( Weak point ) anda ?</p>
				<p> isi </p>
				<br>
				<p class="description">5. Apakah anda menggunakan kacamata ?</p>
				<p> isi </p>
				<p class="descriptionpadding">*) Jika ya tuliskan besaran minus/silinder/plus</p>
				<p class="descriptionpadding"> isi </p>
				<br>
				<p class="description">6. Pernahkah anda menderita penyakit yang lama sembuh (ex. TBC, Typhus, Hepatitis dll) ?</p>
				<div>
					<table class="c100 description bordered">
						<tr>
							<td class="c6">No</td>
							<td class="c25">Nama Penyakit</td>
							<td class="c18">..s/d..</td>
							<td>Akibatnya</td>
						</tr>
						<tr>
							<td>1</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td>2</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
				<br>
				<p class="description">Diisi dengan sesungguhnya. Apabila dikemudian hari ternyata ada hal-hal yang bertentangan, maka saya bersedia</p>
				<p class="description">dituntut sesuai dengan hukuman yang berlaku dan lamaran ini dapat dibatalkan</p>
				<br><br>
				<p class="description" style="text-align: right;">Tanggal</p>




			</div>
		</div>
	</div>
</body>
</html>