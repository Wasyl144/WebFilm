<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('profile.show', [
            'user' => User::find($id)
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        if($id != auth()->user()->id) {
            return redirect()->route('profile.index')
                ->with('status', 'You are trying to edit wrong user')
                ->with('color', 'alert-danger');
        }

        $user = User::find(auth()->user()->id);
        $user->name = $request->post('name');
        $user->surname = $request->post('surname');
        $user->email = $request->post('email');

        if($request->post('password')){
            $user->password = \Hash::make($request->post('password'));
        }
        $user->update();

        return redirect()->route('profile.index')
            ->with('status', "Your profile has been edited")
            ->with('color', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($id != auth()->user()->id) {
            return redirect()->route('profile.index')
                ->with('status', 'You are trying to edit wrong user')
                ->with('color', 'alert-danger');
        }

        foreach(Book::where('user_id', auth()->user()->id)->get() as $book) {
            $book->delete();
        }

        User::destroy($id);

        return redirect()->route('home')
            ->with('status', 'User has been deleted')
            ->with('color', 'alert-info');
    }
}
