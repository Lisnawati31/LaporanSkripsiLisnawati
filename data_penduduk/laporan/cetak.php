<?php 

	require_once '../function/koneksi.php';
	require_once 'pdf.php';

	$cetak = isset($_POST['cetak']) ? $_POST['cetak'] : '';
	$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
	$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
	$bulan = substr($bulan, 0,2);
	$tanggal_entry = "$bulan/$tahun";

	$query = '';
	if($cetak == 'Penduduk'){
		$query = mysqli_query($koneksi, "SELECT * FROM penduduk WHERE SUBSTRING(tanggal_entry, 4, 9) = '$tanggal_entry'");
		$pdf = 
		'<style>
		 	@page { 
		 		margin: 20px; 
		 	}
		 	table {
			  width: 100%;
			  border-collapse: collapse;
			  font-size: 12px;
			}
		 </style>

		 <h3 align="center">Laporan '.$cetak.'</h3>
		 <p align="center">'.substr($_POST['bulan'], 2).' '.$_POST['tahun'].'</p>
		 <br/><br/>
		';

		$pdf .=  
		'<table border="1" cellpadding="5" cellspacing="0">
			<tr align="center" bgcolor="skyblue">
				<th>NO</th>
				<th>NO KK</th>
	            <th>NIK</th>
	            <th>NAMA LENGKAP</th>
	            <th>ALAMAT</th>
	            <th>JENIS KELAMIN</th>
	            <th>AGAMA</th>
	            <th>STATUS PERKAWINAN</th>
	            <th>PEKERJAAN</th>
	            <th>TGL ENTRY</th>
		';

		$pdf .= '</tr>'; 

		$no = 1;
		while($data = mysqli_fetch_assoc($query)){
			$pdf .= 
			'<tr align="center">
				<td>'.$no.'</td>
				<td>'.$data['no_kk'].'</td>
				<td>'.$data['nik'].'</td>
			    <td>'.$data['nama'].'</td>
			    <td>'.$data['alamat'].'</td>
			    <td>'.$data['jenis_kelamin'].'</td>
			    <td>'.$data['agama'].'</td>
			    <td>'.$data['status_perkawinan'].'</td>
			    <td>'.$data['pekerjaan'].'</td>
			    <td>'.$data['tanggal_entry'].'</td>
			';

			$pdf .= '</tr>';

			$no++;
		}

		$pdf .= '</table>';

		$filename = 'Laporan-'.$cetak.'.pdf';
		$print = new Pdf();
		$print->set_paper('legal', 'landscape');
		$print->loadHtml($pdf);
		$print->render();
		$print->stream($filename, array("Attachment" => false));
		exit(0); 
	}
	elseif($cetak == 'Kelahiran'){
		$query = mysqli_query($koneksi, "SELECT * FROM kelahiran WHERE SUBSTRING(tanggal_entry, 4, 9) = '$tanggal_entry'");
		$pdf = 
		'<style>
		 	@page { 
		 		margin: 20px; 
		 	}
		 	table {
			  width: 100%;
			  border-collapse: collapse;
			  font-size: 12px;
			}
		 </style>

		 <h3 align="center">Laporan '.$cetak.'</h3>
		 <p align="center">'.substr($_POST['bulan'], 2).' '.$_POST['tahun'].'</p>
		 <br/><br/>
		';

		$pdf .=  
		'<table border="1" cellpadding="5" cellspacing="0">
			<tr align="center" bgcolor="skyblue">
				<th>NO</th>
				<th>NO KK</th>
	            <th>NIK</th>
	            <th>NAMA</th>
	            <th>TEMPAT TGL LAHIR</th>
	            <th>JENIS KELAMIN</th>
	            <th>AGAMA</th>
	            <th>STATUS KELUARGA</th>
	            <th>AYAH</th>
	            <th>IBU</th>
	            <th>TGL ENTRY</th>
		';

		$pdf .= '</tr>'; 

		$no = 1;
		while($data = mysqli_fetch_assoc($query)){
			$pdf .= 
			'<tr align="center">
				<td>'.$no.'</td>
				<td>'.$data['no_kk'].'</td>
				<td>'.$data['nik'].'</td>
			    <td>'.$data['nama'].'</td>
			    <td>'.$data['tempat_lahir'].', '.date('d M Y', strtotime($data['tanggal_lahir'])).'</td>
			    <td>'.$data['jenis_kelamin'].'</td>
			    <td>'.$data['agama'].'</td>
			    <td>'.$data['status_keluarga'].'</td>
			    <td>'.$data['ayah'].'</td>
			    <td>'.$data['ibu'].'</td>
			    <td>'.$data['tanggal_entry'].'</td>
			';

			$pdf .= '</tr>';

			$no++;
		}

		$pdf .= '</table>';

		$filename = 'Laporan-'.$cetak.'.pdf';
		$print = new Pdf();
		$print->set_paper('legal', 'landscape');
		$print->loadHtml($pdf);
		$print->render();
		$print->stream($filename, array("Attachment" => false));
		exit(0); 
	}
	elseif($cetak == 'Kematian'){
		$query = mysqli_query($koneksi, "SELECT * FROM kematian WHERE SUBSTRING(tanggal_entry, 4, 9) = '$tanggal_entry'");
		$pdf = 
		'<style>
		 	@page { 
		 		margin: 20px; 
		 	}
		 	table {
			  width: 100%;
			  border-collapse: collapse;
			  font-size: 12px;
			}
		 </style>

		 <h3 align="center">Laporan '.$cetak.'</h3>
		 <p align="center">'.substr($_POST['bulan'], 2).' '.$_POST['tahun'].'</p>
		 <br/><br/>
		';

		$pdf .=  
		'<table border="1" cellpadding="5" cellspacing="0">
			<tr align="center" bgcolor="skyblue">
				<th>NO</th>
				<th>NO KK</th>
	            <th>NIK</th>
	            <th>NAMA</th>
	            <th>TEMPAT TGL LAHIR</th>
	            <th>JENIS KELAMIN</th>
	            <th>AGAMA</th>
	            <th>STATUS KELUARGA</th>
	            <th>AYAH</th>
	            <th>IBU</th>
	            <th>TGL KEMATIAN</th>
	            <th>TGL ENTRY</th>
		';

		$pdf .= '</tr>'; 

		$no = 1;
		while($data = mysqli_fetch_assoc($query)){
			$pdf .= 
			'<tr align="center">
				<td>'.$no.'</td>
				<td>'.$data['no_kk'].'</td>
				<td>'.$data['nik'].'</td>
			    <td>'.$data['nama'].'</td>
			    <td>'.$data['tempat_lahir'].', '.date('d M Y', strtotime($data['tanggal_lahir'])).'</td>
			    <td>'.$data['jenis_kelamin'].'</td>
			    <td>'.$data['agama'].'</td>
			    <td>'.$data['status_keluarga'].'</td>
			    <td>'.$data['nama_ayah'].'</td>
			    <td>'.$data['nama_ibu'].'</td>
			    <td>'.$data['tanggal_kematian'].'</td>
			    <td>'.$data['tanggal_entry'].'</td>
			';

			$pdf .= '</tr>';

			$no++;
		}

		$pdf .= '</table>';

		$filename = 'Laporan-'.$cetak.'.pdf';
		$print = new Pdf();
		$print->set_paper('legal', 'landscape');
		$print->loadHtml($pdf);
		$print->render();
		$print->stream($filename, array("Attachment" => false));
		exit(0); 
	}
	elseif($cetak == 'Pindahan'){
		$query = mysqli_query($koneksi, "SELECT * FROM pindahan WHERE SUBSTRING(tanggal_entry, 4, 9) = '$tanggal_entry'");
		$pdf = 
		'<style>
		 	@page { 
		 		margin: 20px; 
		 	}
		 	table {
			  width: 100%;
			  border-collapse: collapse;
			  font-size: 12px;
			}
		 </style>

		 <h3 align="center">Laporan '.$cetak.'</h3>
		 <p align="center">'.substr($_POST['bulan'], 2).' '.$_POST['tahun'].'</p>
		 <br/><br/>
		';

		$pdf .=  
		'<table border="1" cellpadding="5" cellspacing="0">
			<tr align="center" bgcolor="skyblue">
				<th>NO</th>
				<th>NO KK</th>
	            <th>NIK</th>
	            <th>NAMA</th>
	            <th>TUJUAN</th>
	            <th>JENIS KELAMIN</th>
	            <th>AGAMA</th>
	            <th>STATUS PERKAWINAN</th>
	            <th>TGL ENTRY</th>
		';

		$pdf .= '</tr>'; 

		$no = 1;
		while($data = mysqli_fetch_assoc($query)){
			$pdf .= 
			'<tr align="center">
				<td>'.$no.'</td>
				<td>'.$data['no_kk'].'</td>
				<td>'.$data['nik'].'</td>
			    <td>'.$data['nama'].'</td>
			    <td>'.$data['tujuan'].'</td>
			    <td>'.$data['jenis_kelamin'].'</td>
			    <td>'.$data['agama'].'</td>
			    <td>'.$data['status_perkawinan'].'</td>
			    <td>'.$data['tanggal_entry'].'</td>
			';

			$pdf .= '</tr>';

			$no++;
		}

		$pdf .= '</table>';

		$filename = 'Laporan-'.$cetak.'.pdf';
		$print = new Pdf();
		$print->set_paper('legal', 'landscape');
		$print->loadHtml($pdf);
		$print->render();
		$print->stream($filename, array("Attachment" => false));
		exit(0); 
	}
	elseif($cetak == 'Pendatang'){
		$query = mysqli_query($koneksi, "SELECT * FROM pendatang WHERE SUBSTRING(tanggal_entry, 4, 9) = '$tanggal_entry'");
		$pdf = 
		'<style>
		 	@page { 
		 		margin: 20px; 
		 	}
		 	table {
			  width: 100%;
			  border-collapse: collapse;
			  font-size: 12px;
			}
		 </style>

		 <h3 align="center">Laporan '.$cetak.'</h3>
		 <p align="center">'.substr($_POST['bulan'], 2).' '.$_POST['tahun'].'</p>
		 <br/><br/>
		';

		$pdf .=  
		'<table border="1" cellpadding="5" cellspacing="0">
			<tr align="center" bgcolor="skyblue">
				<th>NO</th>
				<th>NO KK</th>
	            <th>NIK</th>
	            <th>NAMA</th>
	            <th>ASAL</th>
	            <th>TUJUAN</th>
	            <th>JENIS KELAMIN</th>
	            <th>AGAMA</th>
	            <th>TGL ENTRY</th>
		';

		$pdf .= '</tr>'; 

		$no = 1;
		while($data = mysqli_fetch_assoc($query)){
			$pdf .= 
			'<tr align="center">
				<td>'.$no.'</td>
				<td>'.$data['no_kk'].'</td>
				<td>'.$data['nik'].'</td>
			    <td>'.$data['nama'].'</td>
			    <td>'.$data['asal'].'</td>
			    <td>'.$data['alamat_tujuan'].'</td>
			    <td>'.$data['jenis_kelamin'].'</td>
			    <td>'.$data['agama'].'</td>
			    <td>'.$data['tanggal_entry'].'</td>
			';

			$pdf .= '</tr>';

			$no++;
		}

		$pdf .= '</table>';
		$filename = 'Laporan-'.$cetak.'.pdf';
		$print = new Pdf();
		$print->set_paper('legal', 'landscape');
		$print->loadHtml($pdf);
		$print->render();
		$print->stream($filename, array("Attachment" => false));
		exit(0); 
	}

	
	
	
 ?>