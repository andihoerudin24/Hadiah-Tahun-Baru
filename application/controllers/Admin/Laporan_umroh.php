<?php

class Laporan_umroh extends CI_Controller {

    function index() {
        $pdf = new FPDF("L", "cm", "A4");
        $pdf->SetMargins(2, 1, 1);
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times', 'B', 11);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5, 0.5, 'PT AIF TOUR', 0, 'L');
        $pdf->SetX(4);
        $pdf->MultiCell(19.5, 0.5, 'Telpon : 0038XXXXXXX', 0, 'L');
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetX(4);
        $pdf->MultiCell(19.5, 0.5, 'JL. CItereup 05', 0, 'L');
        $pdf->SetX(4);
        $pdf->MultiCell(19.5, 0.5, 'website : www.aiftour.com email : aiftour@gmail.com', 0, 'L');
        $pdf->Line(1, 3.1, 28.5, 3.1);
        $pdf->SetLineWidth(0.1);
        $pdf->Line(1, 3.2, 28.5, 3.2);
        $pdf->SetLineWidth(0);
        $pdf->ln(1);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(25.5, 0.7, "Laporan Data Jamaah Umroh", 0, 10, 'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(5, 0.7, "Di cetak pada : " . date("D-d/m/Y"), 0, 0, 'C');
        $pdf->ln(1);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
        $pdf->Cell(7, 0.8, 'Nama ', 1, 0, 'C');
        $pdf->Cell(7, 0.8, 'Alamat ', 1, 0, 'C');
        $pdf->Cell(3, 0.8, 'Email', 1, 0, 'C');
        $pdf->Cell(4, 0.8, 'Nama Paket Umroh', 1, 0, 'C');
        $pdf->Cell(4.5, 0.8, 'No telpon', 1, 1, 'C');
        $pdf->SetFont('Arial', '', 10);
        $no = 1;
        $this->db->select('*');
        $this->db->from('paket');
        $this->db->join('daftar_umroh', 'daftar_umroh.id_paket_umroh=paket.id_paket');
        $query = $this->db->get()->result();
        foreach ($query as $lihat) {
            $pdf->Cell(1, 0.8, $no, 1, 0, 'C');
            $pdf->Cell(7, 0.8, $lihat->nama, 1, 0, 'C');
            $pdf->Cell(7, 0.8, $lihat->alamat, 1, 0, 'C');
            $pdf->Cell(3, 0.8, $lihat->email, 1, 0, 'C');
            $pdf->Cell(4, 0.8, $lihat->nama_paket, 1, 0, 'C');
            $pdf->Cell(4.5, 0.8, $lihat->no_telpon, 1, 1, 'C');

            $no++;
        }
        $pdf->Output("laporan_buku.pdf", "I");
    }

}

?>