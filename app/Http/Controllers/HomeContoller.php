<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    public function index()

    {
        return View('layouts.index');
    }

    public function alerts()
    {
       return View('layouts.alerts');
    }

    public function buttons()
    {
       return view('layouts.buttons');
    }

    public function dropdowns()
    {
       return View('layouts.dropdowns');
    }

    public function modals()
    {
       return View('layouts.modals');
    }

    public function popovers()
    {
       return View('layouts.popovers');
    }

    public function progressbar ()
    {
       return View('layouts.progress-bar');
    }
    
    public function formbasics ()
    {
       return View('layouts.form-basics');
    }

    public function formadvanceds ()
    {
       return View('layouts.form-advanceds');
    }

    public function simpletables ()
    {
       return View('layouts.simple-tables');
    }


   public function datatables ()
   {
   return View('layouts.datatables');
   }

   public function login ()
   {
   return View('layouts.login');
   }

   public function register ()
   {
   return View('layouts.register');
   }

   public function page404 ()
   {
   return View('layouts.page404');
   }

   public function blank ()
   {
   return View('layouts.blank');
   }
 
   public function charts ()
   {
   return View('layouts.charts');
   }

   public function uicolors ()
   {
   return View('layouts.ui-colors');
   }
}
