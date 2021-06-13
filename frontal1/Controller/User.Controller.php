<?php
    class User
    {
        public function Login()
        {
            $user=$_POST['nombre'];
            $pass=$_POST['pass'];

            echo $user." ingreso correctamente ".$pass;
        }
        public function Update()
        {
            echo"en update";
        }
        public function Delet()
        {
            echo"en delect";
        }
    }
?>
