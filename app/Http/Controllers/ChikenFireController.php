<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Menus;
use App\Models\Services;
use Illuminate\Http\Request;

class ChikenFireController extends Controller
{
    private function response($data)
    {
        return ['status' => 200, 'data' => $data];
    }
    public function index()
    {
        return $this->response(Home::first());
    }
    public function services()
    {
        return $this->response(Services::paginate(3));
    }
    public function menus(Request $request)
    {
        $category = $request->category_id;
        if ($category != "") {
            $data = Menus::where('category_id', $category)->paginate(3);
        } else {
            $data = Menus::paginate(3);
        }
        return $this->response($data);
    }
    public function categories()
    {
        return $this->response(Categories::get());
    }
    public function contact(Request $request)
    {
        $insert = Contact::insert($request->all());
        if ($insert) {
            return $this->response('success');
        }
        return $this->response('error');
    }
}


