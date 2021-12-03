<?php
require_once 'connection.php';
include_once 'controllers/encrypt.php';
include_once 'models/responsible.php';
include_once 'models/auth.php';

class ResponsibleDAO
{
    public function getResponsible()
    {
        try {
            $connection = Connection::getConexao();

            $query = "select * from cantina_web.responsible";
            $sql = $connection->prepare($query);

            $sql->execute();
            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $responsibles = array();
            while ($items = $sql->fetch(PDO::FETCH_ASSOC)) {
                $responsible = new Responsible();
                $responsible->setId($items['id']);
                $responsible->setIdSchool($items['idSchool']);
                $responsible->getDocument($items['document']);
                $responsible->getTypeDocument($items['type_document']);
                $responsible->getName($items['name']);
                $responsible->getPhone($items['phone']);
                array_push($responsibles, $responsible);
            }
            return $responsibles;
        } catch (PDOException $e) {
            return array();
        }
    }

    public function setResponsible(Responsible $responsible)
    {
        try {
            $connection = Connection::getConexao();

            $query = "insert into cantina_web.responsible (idSchool, document, type_document, name, phone) values (:idSchool, :document, :type_document, :name, :phone)";
            $sql = $connection->prepare($query);

            $idSchool =  $responsible->getIdSchool();
            $document =  $responsible->getDocument();
            $typeDocument =  $responsible->getTypeDocument();
            $name =  $responsible->getName();
            $phone =  $responsible->getPhone();

            $sql->bindParam("idSchool", $idSchool);
            $sql->bindParam("document", $document);
            $sql->bindParam("type_document", $typeDocument);
            $sql->bindParam("name", $name);
            $sql->bindParam("phone", $phone);

            $sql->execute();
            $id = $connection->lastInsertId();

            $auth = new Auth();

            $auth->setEmail($responsible->getEmail());
            $auth->setPassword($responsible->getPassword());
            $auth->setPermission('responsible');
            $auth->setIdResponsible($id);

            return $auth->setAuth();
        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
}