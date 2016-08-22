<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Layanan extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'api_layanan';

	// Add to the "fillable" array
	// protected $fillable = array('email', 'password');

	public function faskes()
    {
        return $this->belongsToMany('Faskes', 'api_layanan_faskes');
    }
}