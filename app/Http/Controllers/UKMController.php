<<<<<<< HEAD
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UKM;

class UKMController extends Controller
{
    public function index()
    {
        $ukms = UKM::all();
        return view('ukm', compact('ukms'));
    }
=======
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UKM;

class UKMController extends Controller
{
    public function index()
    {
        $ukms = UKM::all();
        return view('ukm', compact('ukms'));
    }
>>>>>>> a148e2d54188b024776fd58f323a6b3508647fb5
} 