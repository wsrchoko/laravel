<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller {

    /**
     * Method GET
     */
    public function index(Request $request) {
        return response()->json(null, 204);
    }

    /**
     * Method GET
     */
    public function create(Request $request) {
        return response()->json(null, 204);
    }

    /**
     * Method POST
     */
    public function store(Request $request) {
        return response()->json(null, 204);
    }

    /**
     * Method GET
     */
    public function show(Request $request) {
        return response()->json(null, 204);
    }

    /**
     * Method GET
     */
    public function edit(Request $request) {
        return response()->json(null, 204);
    }
    
    /**
     * Method PATCH
     */
    public function update(Request $request, $id) {
        return response()->json(null, 204);
    }

    /**
     * Method DELETE
     */
    public function destroy(Request $request, $id) {
        return response()->json(null, 204);
    }

}
