<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Child;
use Illuminate\Support\Facades\Auth;

class ChildController extends Controller
{
    public function register(Request $request,Child $child)
    {
        $input = $request->all();
        for ($i=0; $i < 3; $i++) {
            if($input['family_name'][$i]!==null){
                $children['user_id'    ] = Auth::user()->id;
                $children['family_name'] = $input['family_name'][$i];
                $children['first_name' ] = $input['first_name' ][$i];
                $children['class'      ] = $input['class'      ][$i];
                $children['group'      ] = $input['group'      ][$i];
                $child->fill($children)->save();
            } 
        }
        redirect(route('main'));
    }
}
