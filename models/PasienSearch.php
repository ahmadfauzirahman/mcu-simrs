<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

/**
 * PasienSearch represents the model behind the search form of `app\models\Pasien`.
 */
class PasienSearch extends Pasien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NO_PASIEN', 'NAMA', 'NAMAPANGGILAN', 'ALAMAT', 'DESA', 'RT', 'RW', 'KELURAHAN', 'KECAMATAN', 'KABUPATEN', 'KD_POS', 'NO_TELP', 'NO_HP', 'TP_LAHIR', 'TGL_LAHIR', 'NO_DEBT', 'NO_KARTU', 'ATASNAMA', 'HUBUNGAN', 'TGL_DAFTAR', 'PEKERJAAN', 'JENIS_KEL', 'PENDAKH', 'AGAMA', 'STATUS', 'NO_DAFTAR', 'KARTU', 'PENJWB', 'NAMAPEN', 'ALMPEN1', 'ALMPEN2', 'TELPPEN', 'HPPEN', 'PHOTO', 'NAMAAYAH', 'NAMAIBU', 'NAMAPASANGAN', 'HUBPEN', 'RTPEN', 'RWPEN', 'KODEPOSPEN', 'DESAPEN', 'KECPEN', 'KABPEN', 'NOIDENTITAS', 'PROPINSI', 'PROPPEN', 'CREATE_ID', 'CREATE_DATE', 'MODIFY_ID', 'MODIFY_DATE', 'STATUSWN', 'ALMKANTOR', 'KOTAKANTOR', 'PROPKANTOR', 'TELPKANTOR', 'GOLDAR', 'NAMAKANTOR', 'HOBI', 'KEBIASAAN', 'LAIN', 'NO_PASIENIBU', 'KODEPROP', 'KODEKAB', 'KODEKEC', 'KODEKEL', 'MARGA', 'PEKERJAANPEN', 'PENDAKHPEN', 'KD_AGAMA'], 'safe'],
            [['NAKTIF', 'NUMURTH', 'NUMURBL', 'NUMURHR'], 'integer'],
            [['ID'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pasien::find()->orderBy(['NO_PASIEN'=>SORT_DESC]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'TGL_LAHIR' => $this->TGL_LAHIR,
            'TGL_DAFTAR' => $this->TGL_DAFTAR,
            'CREATE_DATE' => $this->CREATE_DATE,
            'MODIFY_DATE' => $this->MODIFY_DATE,
            'NAKTIF' => $this->NAKTIF,
            'NUMURTH' => $this->NUMURTH,
            'NUMURBL' => $this->NUMURBL,
            'NUMURHR' => $this->NUMURHR,
            'ID' => $this->ID,
        ]);

        $query->andFilterWhere(['like', 'NO_PASIEN', $this->NO_PASIEN])
            ->andFilterWhere(['like', 'NAMA', $this->NAMA])
            ->andFilterWhere(['like', 'NAMAPANGGILAN', $this->NAMAPANGGILAN])
            ->andFilterWhere(['like', 'ALAMAT', $this->ALAMAT])
            ->andFilterWhere(['like', 'DESA', $this->DESA])
            ->andFilterWhere(['like', 'RT', $this->RT])
            ->andFilterWhere(['like', 'RW', $this->RW])
            ->andFilterWhere(['like', 'KELURAHAN', $this->KELURAHAN])
            ->andFilterWhere(['like', 'KECAMATAN', $this->KECAMATAN])
            ->andFilterWhere(['like', 'KABUPATEN', $this->KABUPATEN])
            ->andFilterWhere(['like', 'KD_POS', $this->KD_POS])
            ->andFilterWhere(['like', 'NO_TELP', $this->NO_TELP])
            ->andFilterWhere(['like', 'NO_HP', $this->NO_HP])
            ->andFilterWhere(['like', 'TP_LAHIR', $this->TP_LAHIR])
            ->andFilterWhere(['like', 'NO_DEBT', $this->NO_DEBT])
            ->andFilterWhere(['like', 'NO_KARTU', $this->NO_KARTU])
            ->andFilterWhere(['like', 'ATASNAMA', $this->ATASNAMA])
            ->andFilterWhere(['like', 'HUBUNGAN', $this->HUBUNGAN])
            ->andFilterWhere(['like', 'PEKERJAAN', $this->PEKERJAAN])
            ->andFilterWhere(['like', 'JENIS_KEL', $this->JENIS_KEL])
            ->andFilterWhere(['like', 'PENDAKH', $this->PENDAKH])
            ->andFilterWhere(['like', 'AGAMA', $this->AGAMA])
            ->andFilterWhere(['like', 'STATUS', $this->STATUS])
            ->andFilterWhere(['like', 'NO_DAFTAR', $this->NO_DAFTAR])
            ->andFilterWhere(['like', 'KARTU', $this->KARTU])
            ->andFilterWhere(['like', 'PENJWB', $this->PENJWB])
            ->andFilterWhere(['like', 'NAMAPEN', $this->NAMAPEN])
            ->andFilterWhere(['like', 'ALMPEN1', $this->ALMPEN1])
            ->andFilterWhere(['like', 'ALMPEN2', $this->ALMPEN2])
            ->andFilterWhere(['like', 'TELPPEN', $this->TELPPEN])
            ->andFilterWhere(['like', 'HPPEN', $this->HPPEN])
            ->andFilterWhere(['like', 'PHOTO', $this->PHOTO])
            ->andFilterWhere(['like', 'NAMAAYAH', $this->NAMAAYAH])
            ->andFilterWhere(['like', 'NAMAIBU', $this->NAMAIBU])
            ->andFilterWhere(['like', 'NAMAPASANGAN', $this->NAMAPASANGAN])
            ->andFilterWhere(['like', 'HUBPEN', $this->HUBPEN])
            ->andFilterWhere(['like', 'RTPEN', $this->RTPEN])
            ->andFilterWhere(['like', 'RWPEN', $this->RWPEN])
            ->andFilterWhere(['like', 'KODEPOSPEN', $this->KODEPOSPEN])
            ->andFilterWhere(['like', 'DESAPEN', $this->DESAPEN])
            ->andFilterWhere(['like', 'KECPEN', $this->KECPEN])
            ->andFilterWhere(['like', 'KABPEN', $this->KABPEN])
            ->andFilterWhere(['like', 'NOIDENTITAS', $this->NOIDENTITAS])
            ->andFilterWhere(['like', 'PROPINSI', $this->PROPINSI])
            ->andFilterWhere(['like', 'PROPPEN', $this->PROPPEN])
            ->andFilterWhere(['like', 'CREATE_ID', $this->CREATE_ID])
            ->andFilterWhere(['like', 'MODIFY_ID', $this->MODIFY_ID])
            ->andFilterWhere(['like', 'STATUSWN', $this->STATUSWN])
            ->andFilterWhere(['like', 'ALMKANTOR', $this->ALMKANTOR])
            ->andFilterWhere(['like', 'KOTAKANTOR', $this->KOTAKANTOR])
            ->andFilterWhere(['like', 'PROPKANTOR', $this->PROPKANTOR])
            ->andFilterWhere(['like', 'TELPKANTOR', $this->TELPKANTOR])
            ->andFilterWhere(['like', 'GOLDAR', $this->GOLDAR])
            ->andFilterWhere(['like', 'NAMAKANTOR', $this->NAMAKANTOR])
            ->andFilterWhere(['like', 'HOBI', $this->HOBI])
            ->andFilterWhere(['like', 'KEBIASAAN', $this->KEBIASAAN])
            ->andFilterWhere(['like', 'LAIN', $this->LAIN])
            ->andFilterWhere(['like', 'NO_PASIENIBU', $this->NO_PASIENIBU])
            ->andFilterWhere(['like', 'KODEPROP', $this->KODEPROP])
            ->andFilterWhere(['like', 'KODEKAB', $this->KODEKAB])
            ->andFilterWhere(['like', 'KODEKEC', $this->KODEKEC])
            ->andFilterWhere(['like', 'KODEKEL', $this->KODEKEL])
            ->andFilterWhere(['like', 'MARGA', $this->MARGA])
            ->andFilterWhere(['like', 'PEKERJAANPEN', $this->PEKERJAANPEN])
            ->andFilterWhere(['like', 'PENDAKHPEN', $this->PENDAKHPEN])
            ->andFilterWhere(['like', 'KD_AGAMA', $this->KD_AGAMA]);

        return $dataProvider;
    }
}
