<?php
/**
* Part of ci-phpunit-test
*
* @author     Kenji Suzuki <https://github.com/kenjis>
* @license    MIT License
* @copyright  2015 Kenji Suzuki
* @link       https://github.com/kenjis/ci-phpunit-test
*/

class Login_test extends TestCase
{
    public function test()
    {
        $output = $this->request(
		'POST',
		'Login/aksi_login',
			[
				'username' => 'admin',
				'password' => 'adminsekolah'
			]
		);
	$this->assertEquals('login', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
        $this->assertRedirect('admin/home');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
    }

    public function logis_test_username_kosong()
    {
        $output = $this->request(
    	'POST',
    	'Login/aksi_login',
    		[
    			'username' => '',
    			'password' => 'adminsekolah'
    		]
    	);
    	$this->assertEquals('login', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
        $this->assertRedirect('admin/login');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
    }

    public function logis_test_password_kosong()
    {
        $output = $this->request(
    	'POST',
    	'Login/aksi_login',
    		[
    			'username' => 'admin',
    			'password' => ''
    		]
    	);
    	$this->assertEquals('login', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
        $this->assertRedirect('admin/login');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
    }

    public function logis_test_username_kosong_password_kosong()
    {
        $output = $this->request(
    	'POST',
    	'Login/aksi_login',
    		[
    			'username' => '',
    			'password' => ''
    		]
    	);
    	$this->assertEquals('login', $_SESSION['status']); //Kodingan ini buat ngecek udah login apa belom caranya ngecek sessionnya
        $this->assertRedirect('admin/login');// Kalo ini kan kalo login itu redirect ke suatu link, nah ini ngecek bener apa engga link yang dituju
    }
}
