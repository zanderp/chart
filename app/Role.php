<?php

use Illuminate\Database\Eloquent\Model;


class Role extends Model {

protected $fillable = [
    'name'
];

/**
 * A role can have many users.
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
 */
public function users() {

    return $this->belongsToMany('App\User');
}
