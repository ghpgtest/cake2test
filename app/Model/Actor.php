<?php
class Actor extends AppModel 
{
	public $hasAndBelongsToMany = 'Movie';
}