<?php 
	/*
 * Date:11-08-2016
 * Login Form , entry to the application
 * Author : Litto chacko
 * Email:littochackomp@gmail.com
 *Blog:http://phpdudes.blogspot.com
*/
	require_once("easyCRUD.class.php");

	class Person  Extends Crud {
		
			# Your Table name 
			protected $table = 'persons';
			
			# Primary Key of the Table
			protected $pk	 = 'id';


			
	}

?>