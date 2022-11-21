<?php
require './src/User.php';
use PHPUnit\Framework\TestCase;
class UserTest extends  TestCase{

    public function testUser()
    {
        $user = new User;

        $nameTest = $user->name();
        $this->assertEquals('Mohamed', $nameTest);

       
        $nameTest = $user->name('Samy');
        $this->assertEquals('Samy', $nameTest);

        
        $emailTest = $user->email();
        $this->assertEquals('mohamed@gmail.com', $emailTest);

        $emailTest = $user->email('samy@gmail.com');
        $this->assertEquals('samy@gmail.com', $emailTest);
    }
}
