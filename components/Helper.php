<?php
/*
 * @Author: Dicky Ermawan S., S.T., MTA 
 * @Email: wanasaja@gmail.com 
 * @Web: dickyermawan.github.io 
 * @Linkedin: linkedin.com/in/dickyermawan 
 * @Date: 2021-03-14 13:55:55 
 * @Last Modified by:   Dicky Ermawan S., S.T., MTA 
 * @Last Modified time: 2021-03-14 13:55:55 
 */


namespace app\components;

use app\models\Agama;
use app\models\DebiturDetail;
use app\models\KirimanDetail;
use app\models\Pekerjaan;
use app\models\Pendaftaran;
use app\models\Pendidikan;
use app\models\Suku;
use app\models\UnitLayanan;
use DateTime;
use Yii;

class Helper
{
    const TERDAFTAR = 0;
    const AKTIF = 1;
    const BLOKIR = 2;

    public static function radioList($index, $label, $name, $checked, $value, $model)
    {
        $id = str_replace(['[', ']'], '_', $name) . $index;
        return \yii\helpers\Html::radio(
            $name,
            $checked,
            [
                'value' => $value,
                'label' => $label,
                'id' => $id
            ]
        ) . '&nbsp;&nbsp;&nbsp;';
    }

    public static function GenerateId()
    {
        // $kode = date('ymdHis');

        // // $cek = Pendaftaran::find()
        // //     ->select(['coalesce(Max(substring(id_pendaftaran,13,4)), Cast(0 as Varchar(1))) as id'])
        // //     ->andWhere(['coalesce(substring(id_pendaftaran,1,12), Cast(1 as Varchar(1)))' => $kode])
        // //     ->asArray()
        // //     ->one();
        // $cek = Pendaftaran::find()
        //     ->select(['id_pendaftaran as id'])
        //     ->orderBy([
        //         'id_pendaftaran' => SORT_DESC,
        //     ])
        //     ->asArray()
        //     ->one();

        // $cek['id'] = substr($cek['id'], -4);

        // if ($cek) {
        //     $id = $kode . sprintf("%'.04d", ((int) $cek['id'] + 1));
        // } else {
        //     $id = $kode . '0001';
        // }

        // return $id;
    }
    static function ttdBarcode($id)
    {
        $barcode = new \Com\Tecnick\Barcode\Barcode();
        // generate a barcode
        $bobj = $barcode->getBarcodeObj(
            'QRCODE,H',                     // barcode type and additional comma-separated parameters
            $id,          // data string to encode
            -4,                             // bar width (use absolute or negative value as multiplication factor)
            -4,                             // bar height (use absolute or negative value as multiplication factor)
            'black',                        // foreground color
            array(-2, -2, -2, -2)           // padding (use absolute or negative values as multiplication factors)
        )->setBackgroundColor('white')
            ->setSize(80, 80); // background color
        return $bobj;
    }

    public static function MenghitungUmur($tanggal_lahir)
    {
        // tanggal lahir
        $tanggal = new DateTime($tanggal_lahir);

        // tanggal hari ini
        $today = new DateTime('today');

        // tahun
        $y = $today->diff($tanggal)->y;

        // bulan
        $m = $today->diff($tanggal)->m;

        // hari
        $d = $today->diff($tanggal)->d;
        return  $y . " tahun " . $m . " bulan " . $d . " hari";
    }

    // public static function getUnitLayanan()
    // {
    //     $data = UnitLayanan::find()->all();
    //     return $data;
    // }

    // static function getKirimanDetail()
    // {
    //     return KirimanDetail::find()->all();
    // }

    // static function getCaraBayar()
    // {
    //     return DebiturDetail::find()->all();
    // }

    static function tanggal_indonesia($tanggal)
    {
        if (empty($tanggal)) {
            return null;
        }

        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
    }

    static function hari_ini($hari)
    {
        $hari = $hari;

        switch ($hari) {
            case 'Sun':
                $hari_ini = "Minggu";
                break;

            case 'Mon':
                $hari_ini = "Senin";
                break;

            case 'Tue':
                $hari_ini = "Selasa";
                break;

            case 'Wed':
                $hari_ini = "Rabu";
                break;

            case 'Thu':
                $hari_ini = "Kamis";
                break;

            case 'Fri':
                $hari_ini = "Jumat";
                break;

            case 'Sat':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }

        return "<b>" . $hari_ini . "</b>";
    }

    static function getRomawi($bln)
    {
        switch ($bln) {
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }

    static function getTelegram()
    {
        $message_out = "<b>Tersimpan ✅</b>" //❤️👍
            . "\n"
            . "Kegiatan : <i>Bangke</i>"
            . "\n";
        // . "Keterangan : <i>".(isset($message_in[1])? $message_in[1]:"-")."</i>";

        $message_out = urlencode($message_out);
        file_get_contents("https://api.telegram.org/bot1829616568:AAGwwBfP9V6sNCB6cDEWo_PfhxYnB_L6HiI/sendMessage?chat_id=-444419032&parse_mode=HTML&text=" . $message_out);
    }


    static function JenisKelamin()
    {
        $jenis_kelamin = ['l' => 'Laki-Laki', 'p' => 'Perempuan'];
        return $jenis_kelamin;
    }
    static function StatusNikah()
    {
        $status_nikah = [
            't' => 'Belum Kawin', 'k' => 'Kawin', 'd' => 'Duda', 'j' => 'Janda'
        ];
        return $status_nikah;
    }

    static function JenisIdentitas()
    {
        $j = [
            '1' => 'KTP', '2' => 'SIM', '3' => 'PASPOR'
        ];
        return $j;
    }


    static function DataPekerjaan()
    {
        $data = Pekerjaan::find()->all();
        return $data;
    }

    static function DataAgama()
    {
        $data = Agama::find()->all();
        return $data;
    }

    static  function DataPendidikan()
    {
        $data = Pendidikan::find()->all();
        return $data;
    }

    static function DataSuku()
    {
        $data = Suku::find()->all();
        return $data;
    }
}
