<?php
// app/Controllers/AdminController.php

class AdminController
{
    public function dashboard()
    {
        // Aquí puedes definir la lógica para la página de inicio
        // Por ejemplo, puedes cargar una vista
        require_once __DIR__ . '/../Views/admin/dashboard.php';
    }
}
