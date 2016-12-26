<?php
class Movie extends AppModel 
{
	public $hasAndBelongsToMany = 'Actor';
}