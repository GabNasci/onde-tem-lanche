<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryEstablishment;
use App\Models\Establishment;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) {
        $categories = Category::all();
        $establishments = Establishment::all();

        $param = $request->input('busca'); // pizza chef
        if (isset($param)) {
            $establishments = Establishment::query()->where('nome', 'like', '%'.$param.'%')->get();
        }

        $paramCategoryId = $request->input('categoryId');
        if (isset($paramCategoryId)) {
            $category = Category::where('id', '=', $paramCategoryId)->first();
            if(isset($category)) {
                $categoriasEstabelecimentos = CategoryEstablishment::where('category_id', '=', $category->id)->get();
                $idsEstabelecimentosArray = [];
                foreach ($categoriasEstabelecimentos as $categoryEstabelecimento) {
                    $idsEstabelecimentosArray[] = $categoryEstabelecimento->establishment_id;
                }

                $establishments = Establishment::query()->whereIn('id', $idsEstabelecimentosArray)->get();


            }
        }

        foreach ($categories as $category) {
            if ($category->id == $paramCategoryId) {
                $category->icone = $category->icone_selecionado;
                $category->selecionada = true;
            } else {
                $category->selecionada = false;
            }
        }

        $paramOrdenacao = $request->input('ordenacao');
        if(isset($paramOrdenacao)) {
            $establishments = Establishment::query()
                ->whereIn('id', explode(',', $request->input('ids')))
                ->orderBy('nome', $paramOrdenacao)
                ->get();
        }

        return view('busca')->with(compact(['categories', 'establishments']));
    }



    public function mapa() {
        return view('mapa');
    }
}
