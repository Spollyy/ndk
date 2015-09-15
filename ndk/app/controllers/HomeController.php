<?php

class HomeController extends BaseController {
    public function getVacancys () {
        $v = Vacancy::all();
        return View::make('vacancy')->with('vac',$v);
    }

    public function getNews() {
        $n = News::paginate(20);
        $scat = SCat::all();
        return View::make('news')->with(['newss' => $n, 'scat' => $scat]);
    }
    public function getPost($url) {
        $n = News::where('url', '=', $url)->first();
        $scat = SCat::all();
        return View::make('post')->with(['data' => $n, 'scat' => $scat]);
    }
}
