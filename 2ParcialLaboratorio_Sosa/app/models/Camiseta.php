<?php 
class Camiseta extends Model {
    
    public function getAllCamisetas() {
        $stmt = $this->db->prepare("SELECT * FROM camisetas ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCamisetaById($id) {
        $stmt = $this->db->prepare("SELECT * FROM camisetas WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        try {
            $stmt = $this->db->prepare("
                INSERT INTO camisetas (equipo, jugador, numero) 
                VALUES (:equipo, :jugador, :numero)
            ");
            $stmt->bindParam(':equipo', $data['equipo']);
            $stmt->bindParam(':jugador', $data['jugador']);
            $stmt->bindParam(':numero', $data['numero'], PDO::PARAM_INT);
            return $stmt->execute();
        } catch(Exception $e) {
            error_log("Error al crear camiseta: " . $e->getMessage());
            return false;
        }
    }

    public function update($data) {
        $sql = "
            UPDATE camisetas 
            SET equipo = :equipo, jugador = :jugador, numero = :numero 
            WHERE id = :id
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':equipo', $data['equipo']);
        $stmt->bindParam(':jugador', $data['jugador']);
        $stmt->bindParam(':numero', $data['numero'], PDO::PARAM_INT);
        $stmt->bindParam(':id', $data['id'], PDO::PARAM_INT);
        return $stmt->execute();
    }


    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM camisetas WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}
