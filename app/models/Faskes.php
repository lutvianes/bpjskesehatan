<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Faskes extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'api_faskes';

	// Add to the "fillable" array
	// protected $fillable = array('email', 'password');

	public function layanan()
    {
        return $this->belongsToMany('Layanan', 'api_layanan_faskes');
    }
}