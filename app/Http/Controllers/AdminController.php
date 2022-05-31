<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Anketa;
use Dflydev\DotAccessData\Data;

use function GuzzleHttp\Promise\all;

class AdminController extends Controller {

    public function showAnketa($id) {
        $contact = new Anketa;
        return view('show-one-anketa', ['data' => $contact->find($id) ]);
    }

    public function showAnketaSubmit($id, Request $req){
        
        $contact = Anketa::find($id);
        $contact->name = $req->input('name');
        $contact->telephone = $req->input('telephone');
        $contact->abonement = $req->input('abonement');
        if ($req->approved == 'on') {
            $contact->approved = 1;
            $contact->approve = "Одобрено";
        } else {
            $contact->approved = 0;
        }

        if ($req->not_approved == 'on') {
            $contact->not_approved = 1;
            $contact->approve = "Неодобрено";
        } else {
            $contact->not_approved = 0;
        }
        $contact->save();

        return redirect()->route('admin')->with('success', 'Сообщение было обновлено');
    }

    public function showAll(Request $req) {
        $anketaQuery = Anketa::query();

        if ($req->filled('date_from')) {
            $anketaQuery->where('created_at', '>=', $req->date_from);
        }

        if ($req->filled('date_to')) {
            $anketaQuery->where('created_at', '<=', $req->date_to);
        }

        if ($req->filled('name')) {
            $anketaQuery->where('name', 'LIKE', '%'.$req->name.'%');
        }

        if ($req->filled('approve')) {
            $anketaQuery->where('approve', '=', $req->approve);
        }

        
        $data = $anketaQuery->orderBy('created_at', 'desc')->paginate(4); // Разбиение заявок на страницы
        return view('admin', ['data' => $data]);
    }

    public function deleteMessage($id) {
        Anketa::find($id)->delete();
        return redirect()->route('admin')->with('success', 'Сообщение было удалено');
    }
}
