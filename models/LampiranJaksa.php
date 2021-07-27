<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mcu.lampiran_jaksa".
 *
 * @property int $kode
 * @property string $nama_pasien
 * @property string|null $nomor_ujian
 * @property string|null $kepala_kejakti Kepala Kejaksaan Tinggi
 * @property string|null $dokter_pemeriksa
 * @property string|null $no_mr
 * @property string|null $no_daftar
 * @property string|null $ket
 * @property string|null $a1_kelainan_fisik
 * @property string|null $d_rontgen
 * @property string|null $a2_kelainan_mata
 * @property string|null $a2_kelainan_telinga
 * @property string|null $a3_paru_paru
 * @property string|null $a3_jantung
 * @property string|null $a6_superior_interior
 * @property string|null $c_pemeriksaan_ekg
 * @property string|null $b1_hb
 * @property string|null $b1_led
 * @property string|null $b1_lekosit
 * @property string|null $b1_hitung_jenis
 * @property string|null $b1_hbs_ag
 * @property string|null $b1_gula_darah_puasa
 * @property string|null $b1_gula_darah_pp
 * @property string|null $b1_gula_darah_kolestrol
 * @property string|null $b1_sgot
 * @property string|null $b1_sgpt
 * @property string|null $b1_uerum_creatinin
 * @property string|null $b1_asam_urat
 * @property string|null $b1_billirubin_total
 * @property string|null $b1_billirubin_direk
 * @property string|null $b1_billirubin_indirek
 * @property string|null $b2_proptein
 * @property string|null $b2_urin_reduksi
 * @property string|null $b2_urin_billirubin
 * @property string|null $b2_urin_sedimen
 * @property string|null $b2_urin_sedimen_lekosit
 * @property string|null $b2_urin_sedimen_erythrosit
 * @property string|null $b2_urin_sedimen_kristal
 * @property string|null $b2_urin_sedimen_silinder
 * @property string|null $tgl_created
 */
class LampiranJaksa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mcu.lampiran_jaksa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien'], 'required'],
            [['b1_hitung_jenis', 'b1_hbs_ag', 'b1_gula_darah_puasa', 'b1_gula_darah_pp', 'b1_gula_darah_kolestrol', 'b1_sgot', 'b1_sgpt', 'b1_uerum_creatinin', 'b1_asam_urat', 'b1_billirubin_total', 'b1_billirubin_direk', 'b1_billirubin_indirek', 'b2_proptein', 'b2_urin_reduksi', 'b2_urin_billirubin', 'b2_urin_sedimen', 'b2_urin_sedimen_lekosit', 'b2_urin_sedimen_erythrosit', 'b2_urin_sedimen_kristal', 'b2_urin_sedimen_silinder'], 'string'],
            [['tgl_created'], 'safe'],
            [['nama_pasien', 'nomor_ujian', 'kepala_kejakti', 'dokter_pemeriksa', 'ket', 'a1_kelainan_fisik', 'd_rontgen', 'a2_kelainan_mata', 'a2_kelainan_telinga', 'a3_paru_paru', 'a3_jantung', 'a6_superior_interior', 'c_pemeriksaan_ekg', 'b1_hb', 'b1_led', 'b1_lekosit'], 'string', 'max' => 255],
            [['no_mr', 'no_daftar'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode' => 'Kode',
            'nama_pasien' => 'Nama Pasien',
            'nomor_ujian' => 'Nomor Ujian',
            'kepala_kejakti' => 'Kepala Kejakti',
            'dokter_pemeriksa' => 'Dokter Pemeriksa',
            'no_mr' => 'No Mr',
            'no_daftar' => 'No Daftar',
            'ket' => 'Ket',
            'a1_kelainan_fisik' => 'A1 Kelainan Fisik',
            'd_rontgen' => 'D Rontgen',
            'a2_kelainan_mata' => 'A2 Kelainan Mata',
            'a2_kelainan_telinga' => 'A2 Kelainan Telinga',
            'a3_paru_paru' => 'A3 Paru Paru',
            'a3_jantung' => 'A3 Jantung',
            'a6_superior_interior' => 'A6 Superior Interior',
            'c_pemeriksaan_ekg' => 'C Pemeriksaan Ekg',
            'b1_hb' => 'B1 Hb',
            'b1_led' => 'B1 Led',
            'b1_lekosit' => 'B1 Lekosit',
            'b1_hitung_jenis' => 'B1 Hitung Jenis',
            'b1_hbs_ag' => 'B1 Hbs Ag',
            'b1_gula_darah_puasa' => 'B1 Gula Darah Puasa',
            'b1_gula_darah_pp' => 'B1 Gula Darah Pp',
            'b1_gula_darah_kolestrol' => 'B1 Gula Darah Kolestrol',
            'b1_sgot' => 'B1 Sgot',
            'b1_sgpt' => 'B1 Sgpt',
            'b1_uerum_creatinin' => 'B1 Uerum Creatinin',
            'b1_asam_urat' => 'B1 Asam Urat',
            'b1_billirubin_total' => 'B1 Billirubin Total',
            'b1_billirubin_direk' => 'B1 Billirubin Direk',
            'b1_billirubin_indirek' => 'B1 Billirubin Indirek',
            'b2_proptein' => 'B2 Proptein',
            'b2_urin_reduksi' => 'B2 Urin Reduksi',
            'b2_urin_billirubin' => 'B2 Urin Billirubin',
            'b2_urin_sedimen' => 'B2 Urin Sedimen',
            'b2_urin_sedimen_lekosit' => 'B2 Urin Sedimen Lekosit',
            'b2_urin_sedimen_erythrosit' => 'B2 Urin Sedimen Erythrosit',
            'b2_urin_sedimen_kristal' => 'B2 Urin Sedimen Kristal',
            'b2_urin_sedimen_silinder' => 'B2 Urin Sedimen Silinder',
            'tgl_created' => 'Tgl Created',
        ];
    }
}
