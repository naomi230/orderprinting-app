<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListViewController extends Controller
{
    

    public function viewedlist(){
        return view('customerAdminview');
    }

   // public function showOrders(User $user)
//{
 //   $orders = $user->orders()->get();
    
 //   return view('customerAdminview', compact('user', 'orders'));
//}


/*public function showOrders(Customer $customer)
{
    $orders = $customer->orders()->get();
    
    return view('customers.orders', compact('customer', 'orders'));
}*/

}
