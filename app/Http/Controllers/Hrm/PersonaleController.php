<?php

namespace App\Http\Controllers\Hrm;

use App\Hrm\Department;
use App\Hrm\Job;
use App\Hrm\Personale;
use App\User;
use App\Http\Controllers\Controller;
use App\Operation\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Yajra\DataTables\Facades\DataTables;

class PersonaleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    public function index()
    {
        $personales = Personale::with('user')->get();
        $departements = Department::all();
        // dd( $departements);
        $jobs = Job::all();

        return view('hrm.personale.index')
        ->with('personales',$personales)
        ->with('departements',$departements)
        ->with('jobs',$jobs);
    }


    public function create()
    {
        $personale = new  Personale;
        $departements = Department::all();
        $jobs = Job::all();
        return view('hrm.personale.create')
        ->with('personale', $personale)
        ->with('departements', $departements)
        ->with('jobs', $jobs);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        // if ($request->hasFile('image')) {
        //     $input['image'] = $this->uploadPDF($request);
        // }
$user= Auth::user()->id ;
      $input.push($user) ;
        dd($input);

        // Personale::create( $input);

        return redirect()->route('personale.index')
        ->with('flash_message', 'User successfully added.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $permissions = Permission::orderBy('name')->get(); //Get all permissions
        $roles = Role::all();
        return view('users.edit')
            ->with('user', $user)
            ->with('permissions', $permissions)
            ->with('roles', $roles);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id); //Get role specified by id
        $this->validate($request, [
            'name' => 'required|max:120',
            'email' => 'required|email',
            // 'password'=>'required|min:6|confirmed'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password =  bcrypt($request->password);
        $user->save();

        $roles = $request['role']; //Retrieving the roles field//Checking if a role was selected
        $permissions = $request['permission']; //Retrieving the roles field//Checking if a role was selected



        if (isset($roles)) {
            $roll_all = role::all(); //Get all role
            foreach ($roll_all as $p) {
                $user->removeRole($p); //Remove all permissions associated with role
            }

            foreach ($roles as $role) {
                $role_r = Role::where('id', '=', $role)->firstOrFail();
                $user->assignRole($role_r); //Assigning role to user
            }
        }
        if (isset($permissions)) {

            $per_all = Permission::all(); //Get all role
            foreach ($per_all as $p) {
                $user->revokePermissionTo($p); //Remove all permissions associated with role
            }

            foreach ($permissions as $permission) {
                $permission_r = Permission::where('id', '=', $permission)->firstOrFail();
                $user->givePermissionTo($permission_r); //Assigning role to user
            }
        }

        Session::flash('success', 'User Updated successfuly');
        return redirect()->route('user');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Session::flash('success', 'User ' . $user->name . ' successfully deleted');
        return redirect()->back();
    }
}
