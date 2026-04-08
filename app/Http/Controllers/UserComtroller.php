<?php
	namespace App\Http\Controllers;
	class UserComtroller extends Controller
	{
		public function show()
		{
			return 'Успешно';
		}
		public function all()
		{
			return 'Успешно';
		}
        public function user($name)
		{
			return '6z'.$name;
		}
        public function surname($name, $surname)
		{
			return '7z'.$name.$surname;
		}
        public function city($username)
		{
			$users = [
		'user1' => 'city1',
		'user2' => 'city2',
		'user3' => 'city3',
		'user4' => 'city4',
		'user5' => 'city5',
	];
    return $users[$username];
		}

		public function hello()
		{
			return view('post.hello');
		}
		
		public function dva()
		{
			return view('post.dva', [
				'name' => 'kostya',
				'surname' => 'verem'
			]);
		}
		public function tri()
		{
			return view('post.tri', ['var1' => '10', 'var2' => '312']);
		}
	}
ВЫФВФ