<?php
class User extends AppModel 
{
	public $hasOne = 'Profile';
	
	public $hasMany = 'Comment';
}