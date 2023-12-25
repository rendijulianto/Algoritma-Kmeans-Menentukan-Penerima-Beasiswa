<?php 

function euclideanDistance($centroid, $mahasiswa)
{
    $pekerjaan_ayah = pow($centroid['pekerjaan_ayah'] - $mahasiswa['pekerjaan_ayah'], 2);
    $pekerjaan_ibu = pow($centroid['pekerjaan_ibu'] - $mahasiswa['pekerjaan_ibu'], 2);
    $penghasilan_ayah = pow($centroid['penghasilan_ayah'] - $mahasiswa['penghasilan_ayah'], 2);
    $penghasilan_ibu = pow($centroid['penghasilan_ibu'] - $mahasiswa['penghasilan_ibu'], 2);
    $jumlah_saudara = pow($centroid['jumlah_saudara'] - $mahasiswa['jumlah_saudara'], 2);
    $kondisi_anak = pow($centroid['kondisi_anak'] - $mahasiswa['kondisi_anak'], 2);

    $distance = sqrt($pekerjaan_ayah + $pekerjaan_ibu + $penghasilan_ayah + $penghasilan_ibu + $jumlah_saudara + $kondisi_anak);
    return $distance;
}

function cluster($c1, $c2, $c3) 
{
    // ambil nilai terkecil
    $min = min($c1, $c2, $c3);
    if ($min == $c1) {
        return "C1";
    } elseif ($min == $c2) {
        return "C2";
    } else {
        return "C3";
    }
}