<?php
require_once "IControlador.php";
require_once "models/school.php";

class Login implements IControlador
{
    private $school;

    public function __construct()
    {
        $this->school = new School();
    }

    public function processRequest()
    {
        try {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $user = $this->school->loginSchool($_POST['email'], $_POST['password']);
                if ($user) {
                    header('Location:canteen', true, 302);
                } else {
                    header('Location:home?is_success_login=false', true, 302);
                }
            }
        } catch (string $e) {
            header('Location:home?is_success_registration=false', true, 302);
        }
    }
}