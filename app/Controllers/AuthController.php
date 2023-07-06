<?php
require_once '../app/Models/UserModel.php';

class AuthController
{
    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Obtener el usuario de la base de datos por su nombre de usuario
            $userModel = new UserModel();
            $user = $userModel->getUserByUsername($username);

            // Verificar si el usuario existe y las credenciales son válidas
            if ($user && password_verify($password, $user['password'])) {
                // Credenciales válidas, iniciar sesión
                // Aquí puedes establecer una sesión o utilizar algún sistema de autenticación
                // dependiendo de tus necesidades.

                // Por ejemplo, guardar el username del usuario en una sesión:
                session_start();
                $_SESSION['username'] = $user['username'];

                // Redirigir al usuario a la página de inicio después del inicio de sesión exitoso
                echo "entro". $_SESSION['username'];
                header('Location: /dashboard');
                exit();
            } else {
                // Credenciales inválidas, mostrar un mensaje de error o redirigir a la página de inicio de sesión con un mensaje
            }
        }

        // Si no se envió el formulario de inicio de sesión, cargar la vista de inicio de sesión
        require_once '../app/views/auth/login.php';
    }

    public function logout()
    {
        // Terminar la sesión (puedes utilizar session_destroy() u otro método)
        // Logout: cerrar la sesión y eliminar la cookie de sesión
        session_start();
        session_destroy();

        // Eliminar la cookie de sesión estableciendo su tiempo de expiración en el pasado
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(), '', time() - 3600, '/');
        }

        // Redirigir al usuario a la página de inicio de sesión u otra página después del logout
        header("Location: /login");
        exit;
    }
}

