<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class ApplyRecord extends Eloquent {

	use SoftDeletingTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'apply_records';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();

	public function isApplicant($user_id) {
		return $this->user_id == $user_id;
	}
}
