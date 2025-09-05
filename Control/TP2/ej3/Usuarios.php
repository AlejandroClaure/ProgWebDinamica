<?php
/**
 * Clase Usuarios
 *
 * Maneja la lista de usuarios y permite verificar credenciales de login.
 */
class Usuarios {
    /**
     * @var array $usuarios Lista de usuarios registrados en el sistema.
     * Cada usuario es un array asociativo con 'usuario' y 'clave'.
     */
    private $usuarios;

    /**
     * Constructor de la clase Usuarios.
     *
     * Inicializa una lista fija de usuarios con sus claves.
     */
    public function __construct() {
        // Lista de usuarios del sistema
        $this->usuarios = [
            ["usuario" => "admin", "clave" => "admin1234"],
            ["usuario" => "lu", "clave" => "lu1234"],
            ["usuario" => "ale", "clave" => "ale123"],
            ["usuario" => "caro", "clave" => "caro456"],
            ["usuario" => "cyntia", "clave" => "cyntia321"]
        ];
    }

    /**
     * Verifica si las credenciales ingresadas coinciden con algún usuario registrado.
     *
     * @param string $usuarioIngresado Nombre de usuario ingresado en el login.
     * @param string $claveIngresada   Clave ingresada en el login.
     * @return bool True si las credenciales son correctas, False en caso contrario.
     */
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
