
<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Virtual extends Eloquent
{
	use UserTrait, RemindableTrait;
 // Album __belongs_to__ Artist
	protected $table = 'virtuals';
	/*public function user()
	{
	return $this->belongsTo('User');
	}*/
	 public function getReminderUser()
  {
    return $this->virtual;
  }

}