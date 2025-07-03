<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.verify-email');
    }
=======
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    public function index(Request $request)
    {
        return view('auth.verify-email');
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 