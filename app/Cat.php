<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Registration;
use Auth;

class Cat extends Model {

    protected $fillable = [
        'name', 'race', 'color', 'birthdate',
        'eyes_color', 'origin_book', 'breeder', 'father', 'mother'
    ];

    public function registrations()
    {
        return $this->belongsToMany('App\Registration');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function owner()
    {
        return $this->user();
    }

    /**
     * scope cats belonging to user
     *
     * @param query
     * @return query
     */
    public function scopeUsersCats($query)
    {
        return $query->where('user_id', '=', Auth::user()->id);
    }
}



/*
 *
 * 			mysql> describe cats;
+-------------+------------------+------+-----+---------------------+----------------+
| Field       | Type             | Null | Key | Default             | Extra          |
+-------------+------------------+------+-----+---------------------+----------------+
| id          | int(10) unsigned | NO   | PRI | NULL                | auto_increment |
| user_id     | int(11)          | NO   |     | NULL                |                |
| name        | varchar(255)     | NO   |     | NULL                |                |
| race        | varchar(255)     | NO   |     | NULL                |                |
| color       | varchar(255)     | NO   |     | NULL                |                |
| birthdate   | date             | NO   |     | NULL                |                |
| created_at  | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| updated_at  | timestamp        | NO   |     | 0000-00-00 00:00:00 |                |
| eyes_color  | varchar(255)     | NO   |     | NULL                |                |
| origin_book | varchar(255)     | NO   |     | NULL                |                |
| breeder     | varchar(255)     | NO   |     | NULL                |                |
| father      | varchar(255)     | NO   |     | NULL                |                |
| mother      | varchar(255)     | NO   |     | NULL                |                |
+-------------+------------------+------+-----+---------------------+----------------+
13 rows in set (0.15 sec)
 *
 */
