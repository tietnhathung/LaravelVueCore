<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Core\Entities\User;
use Modules\Core\Transformers\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getUsers()
    {
        $listUsers = User::paginate(20);

        return UserResource::collection($listUsers);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('core::create');
    }

}
