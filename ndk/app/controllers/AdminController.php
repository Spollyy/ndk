<?php

class AdminController extends BaseController
{
    public function postLogin()
    {
        $input = Input::all();
        if (Auth::attempt(array(
                'email' => $input['email'],
                'password' => $input['password']
            )
        )
        )
            return Redirect::to('meow/main');
        return Redirect::back()->withAlert('You shall not pass');
    }
    public function getLogin()
    {
        return View::make('backend.login');
    }
    public function getLogout()
    {
        Auth::logout();
        return Redirect::back()->withAlert('Вышли');
    }

    public function getTitle()
    {
        return View::make('backend.title');
    }

    public function getProjects(){
        $p = Projects::paginate(25);
        return View::make('backend.projects.show')->with('data', $p);
    }
    public function postCreateProject(){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new Projects();
        $p->title = $input['title'];

        $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateProject(){
        return View::make('backend.projects.create');
	}
    public function getUpdateProject($id){
        $p = Projects::find($id);
        return View::make('backend.projects.update')->with('data', $p);
	}
    public function putUpdateProject($id){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = Projects::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        if (isset($input ['short']))

            if (isset($input ['full']))
                $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deleteProject($id){
        Projects::find($id)->delete();
    }

    public function getServices(){
        $p = Services::paginate(25);
        return View::make('backend.services.show')->with('data', $p);
    }
    public function postCreateService(){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new Services();
        $p->title = $input['title'];

        $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateService(){
        return View::make('backend.services.create');
	}
    public function getUpdateService($id){
        $p = Services::find($id);
        return View::make('backend.services.update')->with('data', $p);
	}
    public function putUpdateService($id){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = Services::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        if (isset($input ['short']))

            if (isset($input ['full']))
                $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deleteService($id){
        Services::find($id)->delete();
    }


    public function getNews(){
        $p = News::paginate(25);
        return View::make('backend.news.show')->with('data', $p);
    }
    public function postCreateNews(){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new News();
        $p->title = $input['title'];

        $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateNews(){
        return View::make('backend.news.create');
	}
    public function getUpdateNews($id){
        $p = News::find($id);
        return View::make('backend.news.update')->with('data', $p);
	}
    public function putUpdateNews($id){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = News::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        if (isset($input ['short']))

            if (isset($input ['full']))
                $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deleteNews($id){
        News::find($id)->delete();
    }



    public function getPages(){
        $p = Pages::paginate(25);
        return View::make('backend.page.show')->with('data', $p);
    }
    public function postCreatePage(){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new Pages();
        $p->title = $input['title'];
        $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreatePage(){
        return View::make('backend.page.create');
	}
    public function getUpdatePage($id){
        $p = Pages::find($id);
        return View::make('backend.page.update')->with('data', $p);
	}
    public function putUpdatePage($id){
        $destination = public_path('uploads');
        $input = Input::all();
        $p = Pages::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        if (isset($input ['text']))
            $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deletePage($id){
        Pages::find($id)->delete();
    }


    public function getVacancys()
    {
        $data = Vacancy::all();
        return View::make('backend.vacancy.show')->with('data',$data);
    }
    public function getCreateVacancy()
    {
        return View::make('backend.vacancy.create');
    }
    public function postCreateVacancy()
    {
        $input = Input::all();
        $v = new Vacancy();
        $v->name = $input['name'];
        $v->requirements = trim($input['requirements']);
        $v->duties = trim($input['duties']);
        $v->conditions = trim($input['conditions']);
        $v->save();
        return Redirect::back();
    }
    public function getUpdateVacancy($id)
    {
        $v = Vacancy::find($id);
        return View::make('backend.vacancy.edit')->with('data',$v);
    }
    public function putUpdateVacancy($id)
    {
        $input = Input::all();
        $v = Vacancy::find($input['id']);
        if(isset($input['name']))
            $v->name = trim($input['name']);
        if(isset($input['requirements']))
            $v->requirements = trim($input['requirements']);
        if(isset($input['duties']))
            $v->duties = trim($input['duties']);
        if(isset($input['conditions']))
            $v->conditions = trim($input['conditions']);
        $v->save();
        return Redirect::back();
    }
    public function deleteVacancy($id)
    {
        Vacancy::find($id)->delete();
        return Redirect::back();
    }

    public function getTechs()
    {
    }
    public function getCreateTech()
    {
    }
    public function postCreateTech()
    {
    }
    public function getUpdateTech($id)
    {
    }
    public function putUpdateTech()
    {
    }
    public function deleteTech($id)
    {
    }

    public function getSCats()
    {
    }
    public function getCreateSCat()
    {
    }
    public function postCreateSCat()
    {
    }
    public function getUpdateSCat($id)
    {
    }
    public function putUpdateSCat()
    {
    }
    public function deleteSCat($id)
    {
    }

    public function getTCats()
    {
    }
    public function getCreateTCat()
    {
    }
    public function postCreateTCat()
    {
    }
    public function getUpdateTCat($id)
    {
    }
    public function putUpdateTCat()
    {
    }
    public function deleteTCat($id)
    {
    }
}
