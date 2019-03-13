<?php 

class User
    {
        private $uname;
        private $pwd;
        
        public function setUname(String $uname):self{
            $this->uname = $uname;
            return $this;
        }

        public function setPwd(String $pwd):self{
            $this->pwd = $pwd;
            return $this;
        }

        public function getUname(String $uname){
            return $this->uname;
        }

        public function getPwd(String $pwd){
            return $this->pwd;
        }
    }
    





?>