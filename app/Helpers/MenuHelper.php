<?php

namespace App\Helpers;

class MenuHelper{

    public static function GetAccountMenu(){
        $routeName = \Route::currentRouteName();
        $routes = array(
            "admin.personal.account",
            "admin.personal.profile",
            "admin.personal.password"
        );
        $active = in_array($routeName, $routes) ? "active" : "";
        return '
            <li class="treeview '.$active.'">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>User Account</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="'.($routeName == 'admin.personal.account' ? "active" : "").'"><a href="'.route('admin.personal.account').'" ><i class="fa fa-circle-o"></i> My Account</a></li>
                    <li class="'.($routeName == 'admin.personal.profile' ? "active" : "").'"><a href="'.route('admin.personal.profile').'"><i class="fa fa-circle-o"></i> My Profile</a></li>
                    <li class="'.($routeName == 'admin.personal.password' ? "active" : "").'"><a href="'.route('admin.personal.password').'"><i class="fa fa-circle-o"></i> Change Password</a></li>
                </ul>
            </li>
        ';
    }

}
