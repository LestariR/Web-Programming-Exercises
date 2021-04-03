<?php
function hitungDenda($tglHarusKembali, $tglKembali){

	$pecahTglHarusKembali = explode("-", $tglHarusKembali);
	$dateHarusKembali = $pecahTglHarusKembali[2];
	$monthHarusKembali = $pecahTglHarusKembali[1];
	$yearHarusKembali = $pecahTglHarusKembali[0];

	$pecahTglKembali = explode("-", $tglKembali);
	$dateKembali = $pecahTglKembali[2];
	$monthKembali = $pecahTglKembali[1];
	$yearKembali = $pecahTglKembali[0];

	$jd1 = GregorianToJD($monthHarusKembali, $dateHarusKembali, $yearHarusKembali);
	$jd2 = GregorianToJD($monthKembali, $dateKembali, $yearKembali);

	$totalHariTerlambat = $jd2 - $jd1 ;
	$totalDenda = $totalHariTerlambat * 3000;
	return $totalDenda;
}
echo "Besarnya Denda adalah : Rp " .hitungDenda("2021-01-03", "2021-01-05"). ",-";
?>