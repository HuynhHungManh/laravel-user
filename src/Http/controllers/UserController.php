<?php

namespace hunghbm\userpackage\Http\controllers;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class userController extends Controller
{
    /**
     * create fake data for users
     *
     *  @return Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        $user = factory(User::class)->create($data);

        return response()->json($user);
    }

    /**
     * List all users
     *
     *  @return Response
     */
    public function index()
    {
        $users =  User::all();

        return response()->json($users);
    }

    /**
     * List all users to view
     *
     *  @return View
     */
    public function view()
    {
        $users =  User::all();

        return view('UserView::index')->with('users', $users);
    }
}
