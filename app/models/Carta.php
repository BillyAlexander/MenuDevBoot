<?php

class Carta extends \Eloquent {
	protected $fillable = [];
	protected $table = 'carta';
	protected $primaryKey = 'MenuId';

	public function submenus() {
		return $this->hasMany('Submenu', 'MenuId');
	}

	public function users(){
        return $this->belongsToMany('User', 'usermenu', 'MenuId', 'UserId');
    }
}