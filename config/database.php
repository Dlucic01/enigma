<?php
// database class 
class DBConn
{

	/**
	 *
	 *@user = mysql user
	 *@password = mysql password
	 *@dbc = mysql:host="Your hostname;dbname="Your database";charset=UTF8;
	 *
	 */

private $user = 'exof';
private $password = 'Mumija12';

private $dbc = "mysql:host=localhost;dbname=enigma;charset=UTF8";



	
	/**
	 * method for connectin to the database
	 */
	public function connect()
	{
		$conn = new PDO($this->dbc, $this->user, $this->password);
  		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	}
	
}
