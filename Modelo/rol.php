<?php
class Rol {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function obtenerRoles() {
        $query = "SELECT * FROM roles";
        $result = $this->conn->query($query);
    
        if (!$result) {
            // Imprimir el error de la base de datos si falla la consulta
            echo "Error en la consulta: " . $this->conn->error;
            return false;
        }
    
        return $result;
    }
    
    // Obtener todos los roles
    public function obtenerRoles() {
        $query = "SELECT * FROM roles";
        $result = $this->conn->query($query);
        return $result;
    }

    // Insertar un nuevo rol
    public function insertarRol($descripcion, $estado) {
        $query = "INSERT INTO roles (descripcion, estado) VALUES (?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ss", $descripcion, $estado);
        return $stmt->execute();
    }

    // Editar un rol existente
    public function editarRol($id, $descripcion, $estado) {
        $query = "UPDATE roles SET descripcion = ?, estado = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("ssi", $descripcion, $estado, $id);
        return $stmt->execute();
    }

    // Eliminar un rol
    public function eliminarRol($id) {
        $query = "DELETE FROM roles WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

}
?>
