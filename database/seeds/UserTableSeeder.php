<?php
use App\User;
use App\Operation\Profile;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name'=>'Yetimesht Tadesse',
            'email'=>'yetimnew@gmail.com',
            'password'=>bcrypt('password'),
            'active' => 1,
            'admin' => 1,
        ]);
        // $user->assignRole('admin');
        //  $permissions = Permission::all();

        // if ($permissions->count() > 0) {

        //     foreach ($permissions as $permission) {
        //     $user->givePermissionTo($permission); //Assigning role to user
        //     }
        // }

        Profile::create([
            'user_id' => $user->id,
            'image'=>'uploads/avatar.jpg',
            'about'=> 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff',
        ]);


    }
}
