<?php

namespace App\Http\Controllers\operation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session;

class ProfileController extends Controller
{
    public function index()
    {
        return view('users.profile')->with('user', Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {
            $image = $request->image;
            $new_image_name = time() . $image->getClientOriginalName();
            $image->move('images', $new_image_name);

            $user->profile->image = 'images/' . $new_image_name;
            $user->profile->save();
        }
        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();
        $user->profile->save();
        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
            $user->save();
        }

        Session::flash('success', 'Account profile Updated');
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
