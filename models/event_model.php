<?php

include_once 'models/user.php';
include_once 'models/sessions.php';

class eventModel extends Model {
    public function __construct(){
        parent::__construct();       
    }

    public function getUser($data){
        $getUser = new Services();
        $user = new User();

        $user = $getUser->getUser($data);

        return $user;
    }

    public function getSessions($data){
        switch($data[0]->type){
            case 1:
                $sessions = $this->getAllSessions();                   
                break;
            case 2:
                $sessions = $this->getStaffSession($data);
                break;
            case 3:
                $sessions = $this->getAttendeeSession($data);
                break;
            case 4:
                break;
        }

        return $sessions;
    }

    public function getAllSessions(){
        $sessions = [];
        $query = $this->db->connect()->prepare('SELECT * FROM sessions');

        try{            
            $query->execute();

            while($row = $query->fetch()){
                $session = new Sessions();

                $session->id       = $row['id'];
                $session->area     = $row['area'];
                $session->name     = $row['name'];
                $session->link     = $row['link'];
                $session->password = $row['password'];
                
                array_push($sessions, $session);
            }

            return $sessions;
        }catch(PDOException $e){
            return null;
        }
    }

    public function getAttendeeSession($user){
        $sessions = [];
        $query = $this->db->connect()->prepare('SELECT sessions.id, sessions.name, sessions.area, sessions.link from records INNER JOIN sessions on records.email=:email AND (sessions.id=records.first_session OR sessions.id=records.second_session OR sessions.id=records.third_session)');

        try{
            $query->execute([':email' => $user[0]->email]);

            while($row = $query->fetch()){
                $session = new Sessions();

                $session->id       = $row['id'];
                $session->area     = $row['area'];
                $session->name     = $row['name'];
                $session->link     = $row['link'];
                $session->password = $row['password'];
                
                array_push($sessions, $session);
            }

            return $sessions;
        }catch(PDOException $e){
            return null;
        }
    }

    public function getStaffSession($user){
        $sessions = [];
        $query = $this->db->connect()->prepare('SELECT sessions.id, sessions.name, sessions.area, sessions.link from staff_meeting INNER JOIN sessions on staff_meeting.email=:email AND sessions.id = staff_meeting.id_session');

        try{
            $query->execute([':email' => $user[0]->email]);

            while($row = $query->fetch()){
                $session = new Sessions();

                $session->id       = $row['id'];
                $session->area     = $row['area'];
                $session->name     = $row['name'];
                $session->link     = $row['link'];
                $session->password = $row['password'];
                
                array_push($sessions, $session);
            }

            return $sessions;
        }catch(PDOException $e){
            return null;
        }
    }

    public function insert_nps($data = []){
        $query_select = $this->db->connect()->prepare('SELECT * FROM nps WHERE email = :email');
        $query_insert = $this->db->connect()->prepare('INSERT INTO `nps` (`email`, `score`, `opinion`) VALUES (:email, :score, :opinion)');
        $query_udtade = $this->db->connect()->prepare('UPDATE `nps` SET `score` = :score, `opinion` = :opinion WHERE `email` = :email');

        try{
            $query_select->execute([':email' => $data[0][0]->email]);

            if($query_select->fetch() === false ){
                $query_insert->execute([':email' => $data[0][0]->email, ':score' => $data[1], ':opinion' => $data[2]]);
                return true;
            }else{
                $query_udtade->execute([':email' => $data[0][0]->email, ':score' => $data[1], ':opinion' => $data[2]]);
                return true;
            }
        }catch(PDOException $e){
            return null;
        }
    }
}