<?php

require_once 'DbConfig.php';

class UserManager extends DbConfig
{
    public function create(User $user){
        $uname = $user->getUname();
        $pwd = $user->getPwd();
        $connection = parent::dbConnect();
        $sql = "INSERT INTO `user` (`id`, `username`, `pwd`) VALUES (NULL, `$uname`, `$pwd`);";
        $query = $connection->prepare($sql);
        $query->execute();
    }
}
?>