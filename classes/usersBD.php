<?php


class usersBD extends DBfunctions
{
    public function getAllUsers() {
        $request = $this->bd->prepare("select * from $this->tableName") ;
        $request->execute();
        $usersList=$request->fetchAll(PDO::FETCH_OBJ) ;
        return $usersList ;
    }
    public function trouver($cin) {
        $request = $this->bd->prepare("select * from $this->tableName where cin=?") ;
        $request->execute([$cin]);
        $response= $request->fetch() ;
        return $response ;

    }
    public function ajouterPersonne($cin , $firstname , $name , $section , $path_img) {
        $request = $this->bd->prepare("INSERT INTO $this->tableName VALUES (?,?,?,?,?)");
        $request->execute([$cin , $firstname , $name , $section , $path_img]) ;
    }
    public function supprimerPersonne($cin) {
        $request=$this->bd->prepare("delete from $this->tableName where cin=?") ;
        $request->execute([$cin]) ;
    }

}