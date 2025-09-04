<?php
class Usuarios {
    private $usuarios;

    public function __construct() {
        // Lista de usuarios del sistema
        $this->usuarios = [
            ["usuario" => "admin", "clave" => "admin1234"],
            ["usuario" => "juan",  "clave" => "juan2023"],
            ["usuario" => "maria", "clave" => "maria456"],
            ["usuario" => "Lu", "clave" => "lu1234"],
            ["usuario" => "Ale", "clave" => "ale2023"],
            ["usuario" => "Caro", "clave" => "caro456"],
            ["usuario" => "Cyntia", "clave" => "cyntia456"]
        ];
    }

    // Método para verificar login usando la bandera $salir
    public function verificarLogin($usuarioIngresado, $claveIngresada) {
        $loginExitoso = false;
        $salir = false;

        foreach ($this->usuarios as $user) {
            if (!$salir && $user['usuario'] === $usuarioIngresado && $user['clave'] === $claveIngresada) {
                $loginExitoso = true;
                $salir = true;
            }
        }

        return $loginExitoso;
    }
}
?>
