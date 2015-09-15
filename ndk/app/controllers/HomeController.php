<?php

class HomeController extends BaseController {
    public function getVacancys () {
        $v = Vacancy::all();
        return View::make('vacancy')->with('vac',$v);
    }
}
