<?php

namespace App\Containers\Application\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class createApplication extends WebController
{
    public function dashboard(){
        return view('application::Pages.dashboard');
    }
    public function dashboard_page($page){
        if($page == "profile"){
            return view('application::Pages.User.user_profile');
        }   
        elseif($page == "notifile"){
            return view('application::Pages.User.notifile_view');
        }  
        elseif($page == "password-change"){
            return view('application::Pages.User.password_change');
        }  
        elseif($page == "add-ticket"){
            return view('application::Pages.Ticket.add-ticket');
        }  
        elseif($page == "manage-ticket"){
            return view('application::Pages.Ticket.manage-ticket');
        } 
        elseif($page == "manage-invoice"){
            return view('application::Pages.Invoice.manage-invoice');
        } 
        elseif($page == "register-account"){
            return view('application::Pages.Services.register-account');
        }
        elseif($page == "recharge"){
            return view('application::Pages.User.recharge_user');
        }
        elseif($page == "register-resource"){
            return view('application::Pages.Services.register-resource');
        }
        elseif($page == "recharge-history"){
            return view('application::Pages.User.recharge_history');
        }
        elseif($page == "manage-resource"){
              return view('application::Pages.Services.manage-resource');
        }
    	else {
    		return view('application::Pages.Error.404');
    	}
    	
    }

    public function admin_page($page){
        if($page == 'dashboard') {
            return view('application::Reseller.admin-dashboard');
        }
        elseif($page == "manage-customers"){
            return view('application::Reseller.Pages.manage_customers');
        } 
        elseif($page == "manage-invoice"){
            return view('application::Reseller.Pages.manage_invoice');
        } 
        elseif($page == "recharge-customer"){
            return view('application::Reseller.Pages.recharge_customer');
        } 
        elseif($page == "voucher-account"){
            return view('application::Reseller.Pages.manage_voucher_account');
        } 
        elseif($page == "voucher-product"){
            return view('application::Reseller.Pages.manage_voucher_product');
        }
        elseif($page == "profile"){
            return view('application::Reseller.User.user_profile');
        }   
        elseif($page == "notifile"){
            return view('application::Reseller.User.notifile_view');
        }  
        elseif($page == "password-change"){
            return view('application::Reseller.User.password_change');
        } 

        else {
            return view('application::Pages.Error.404');
        }
    }
}
