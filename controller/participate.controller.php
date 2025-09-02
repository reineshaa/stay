<?php

include_once __DIR__ . "/../model/participate.model.php";

class ParticipateController extends ParticipateModel
{
    public function getParticipates()
    {
        //call query function di model product
        return $this->findAll();
    }
    public function getParticipatesBy()
    {
        if (!isset($_GET['id'])) {
            return;
        }
        $onlyId = preg_replace('/\D/','', $_GET['id']);
        if ($onlyId !== "") {
            return $this->findOne($_GET['id']);
        }
    }
}
?>