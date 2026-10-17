<?php
    require_once 'koneksi.php';

if (!class_exists('armadaModel')) {
    class armadaModel{
        private PDO $armadaPdo;

        public function __construct(PDO $armadaPdo){
            $this->armadaPdo = $armadaPdo;
        }

        public function getAllArmada(): array{
            $stmt = $this->armadaPdo->query("SELECT * FROM armada_operasional");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insertArmada(armadaRequestDto $dto): bool {
            $data = $dto->toArray();
            $columns = array_keys($data);
            $values = array_values($data);
            $columnString = implode(", ", $columns);
            $placeholders = implode(", ", array_fill(0, count($values),"?"));
            $sql = "INSERT INTO armada_operasional ($columnString) VALUES ($placeholders)";
            $stmt = $this->armadaPdo->prepare($sql);
            return $stmt->execute($values);
        }

        public function getArmadaPaginated(int $limit, int $offset): array {
            $stmt = $this->armadaPdo->prepare("SELECT * FROM armada_operasional LIMIT :limit OFFSET :offset");
            $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // 2. Hitung total seluruh baris data di tabel
        public function getTotalArmada(): int {
            $stmt = $this->armadaPdo->query("SELECT COUNT(*) as total FROM armada_operasional");
            $result = $stmt->fetch();
            return (int) ($result['total'] ?? 0);
        }
    }
}
?>