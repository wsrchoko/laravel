<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UserAccount;
use App\Country;

class AccountController extends Controller {

    /**
     * Method GET
     */
    public function index() {
        $user = Auth::user();
        return response()->json([
            'id' => $user->id,
            'username' => $user->account->username,
            'name' => $user->name,
            'street' => $user->account->street,
            'city' => $user->account->city,
            'state' => $user->account->state, 
            'zip' => $user->account->zip,
            'country' => [
                'code' => isset($user->account->country['code']) ? $user->account->country->code : null,
                'name' => isset($user->account->country['name']) ? $user->account->country->name : null
            ],
            'email' => $user->email, 
            'phone' => $user->account->phone,
            'imageUrl' => $user->image_url,
            'role' => $user->role,
            'collapsedMenu' => $user->collapsed_menu
        ], 203);
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
        $underscore = '_';
        $value = $request->value;
        $property = strtolower( preg_replace( '/([a-z0-9])([A-Z])/', "$1$underscore$2", $request->property) );
        $propertiesUser = array('name', 'image_url', 'collapsed_menu');
        $propertiesAccount = array('username', 'street', 'city', 'phone', 'country_id');
        if( in_array($property, $propertiesUser) ) {
            $user = User::find($id);
            if($property == 'image_url') {
                $request->value->store('public/images');
                $value = 'storage/images/'.$request->value->hashName();
            }
            $user->$property = $value;
            $user->save();
        }
        if( in_array($property, $propertiesAccount) ) {
            $user = User::find($id);
            $account = $user->account;
            if($property == 'country_id') {
                $value = Country::where('code', $value)->value('id');
            }
            $account->$property = $value;
            $account->save();
        }
        return response()->json($value, 203);
    }

    /**
     * Method DELETE
     */
    public function destroy(Request $request, $id) {
        return response()->json(null, 204);
    }
    
}
