public function profile()
{
    return $this->hasOne(Profile::class);
}

public function city()
{
    return $this->belongsTo(City::class);
}

public function country()
{
    return $this->city->country();
}protected $fillable = [
    'name',
    'email',
    'password',
    'login',
    'city_id'
];
