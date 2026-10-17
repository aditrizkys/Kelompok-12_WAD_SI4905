<?php

class armadaRequestDto {
    private array $dataArmada;

    public function __construct(array $data) {
        $this->dataArmada = $data;
    }

    public function isValid(): bool {
        $validId = $this->dataArmada["id"];
        $validJenis = $this->dataArmada["jenis_kendaraan"];
        $validDokumen = $this->dataArmada["nomor_dokumen_perawatan"];
        $validSeri = $this->dataArmada["nomor_seri"];    
        
        $validCheck = isset($validId) && isset($validJenis) && isset($validDokumen) && isset($validSeri);
        return $validCheck;
    }


    public function toArray(): array {
        return $this->dataArmada;
    }
}