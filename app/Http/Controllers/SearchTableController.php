<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;

class SearchTableController extends Controller
{
    public function searchid(Request $request){

        $user =User::with('department')->where('id',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }
    public function searchname(Request $request){

        $user =User::with('department')->where('f_name',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchlname(Request $request){

        $user =User::with('department')->where('l_name',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchuname(Request $request){

        $user =User::with('department')->where('username',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchdep(Request $request){

        $user =User::with('department')->where('name',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchdepcode(Request $request){

        $user =User::with('department')->where('department_code',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchemail(Request $request){

        $user =User::with('department')->where('email',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchposition(Request $request){

        $user =User::with('department')->where('position',$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }

    public function searchrole(Request $request){

        $user =User::with('department')->where(getRoleNames()[0],$request->id)->first();
        $data = User::with('department')->latest()->get();
        $department = Department::where('id', $user["department_id"])->first();
        $out = '
        <tr>
        <td>'.$user["id"].'</td> 
        <td>'.$user["f_name"].'</td> 
        <td>'.$user["l_name"].'</td> 
        <td>'.$user["username"].'</td> 
        <td>'.$department["name"].'</td> 
        <td>'.$user["department_code"].'</td> 
        <td>'.$user["email"].'</td> 
        <td>'.$user["position"].'</td>
        <td><label class="badge badge-success">'.$user->getRoleNames()[0].'</label></td>
        <td>
            <a class="btn btn-info btn-sm" href="'.route("admin.users.show",$user->id).'">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-external-link"></use>
                </svg>
            </a>
            <a class="btn btn-primary btn-sm" href="'.route("admin.users.edit",$user->id).' ">
               <svg class="c-icon">
                    <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-pencil"></use>
                </svg>
            </a>
        </td>
        </tr>
        ';

        echo $out;

    }
}
