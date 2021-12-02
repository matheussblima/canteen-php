<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';

class SchoolDAO
{
    public function getSchools()
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.escola";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $schools = array();
            while ($school = $sql->fetch(PDO::FETCH_ASSOC)) {
                $schoolItem = new School();
                $schoolItem->setIdSchool($school['idEscola']);
                $schoolItem->setName($school['nome']);
                $schoolItem->setAddress($school['endereco']);
                $schoolItem->setEmail($school['email']);
                $schoolItem->setPassword($school['password']);
                array_push($schools, $schoolItem);
            }
            return $schools;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function loginSchool($email, $password)
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.escola where email = :email";
            $sql = $connection->prepare($query);

            $sql->bindParam("email", $email);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $schools = array();
            while ($school = $sql->fetch(PDO::FETCH_ASSOC)) {
                $schoolItem = new School();
                $schoolItem->setIdSchool($school['idEscola']);
                $schoolItem->setName($school['nome']);
                $schoolItem->setAddress($school['endereco']);
                $schoolItem->setEmail($school['email']);
                $schoolItem->setPassword($school['password']);
                array_push($schools, $schoolItem);
            }

            if (sizeof($schools) > 0) {
                $userFind = $schools[0];

                $passwordUser = safeDecrypt($userFind->getPassword());

                if ($passwordUser == safeEncrypt($password)) {
                    return $userFind;
                };
            }

            return null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function setSchool(School $school)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.escola (nome, endereco, email, password) values (:nome, :endereco, :email, :password)";
            $sql = $connection->prepare($query);

            $sql->bindParam("nome", $name);
            $sql->bindParam("endereco", $address);
            $sql->bindParam("email", $email);
            $sql->bindParam("password", $password);

            $name =  $school->getName();
            $address =  $school->getAddress();
            $email = $school->getEmail();
            $password =  $school->getPassword();

            $sql->execute();

            return true;
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}