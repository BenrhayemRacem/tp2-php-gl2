<?php


class adminBD extends DBfunctions
{
    public function getAdmin($login , $mdp)
    {
        $request = $this->bd->prepare("select * from $this->tableName where login = ? and mdp= ?");
         $request->execute([$login, $mdp]);
         $admin = $request->fetch(5) ;
     return $admin;

    }



}