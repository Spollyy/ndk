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


    public function getProjects()
    {
        $p = Projects::paginate(25);
        return View::make('backend.projects.show')->with('data', $p);
    }
    public function postCreateProject()
    {
        $input = Input::all();
        $p = new Projects();
        $p->title = $input['title'];
        $p->full = $input['text'];
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateProject()
    {
        return View::make('backend.projects.create');
    }
    public function getUpdateProject($id)
    {
        $p = Projects::find($id);
        return View::make('backend.projects.edit')->with('data', $p);
    }
    public function putUpdateProject($id)
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = Projects::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        $p->full = $input['text'];
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deleteProject($id)
    {
        Projects::find($id)->delete();
    }


    public function getStandarts()
    {
        $p = Standarts::paginate(25);
        return View::make('backend.standarts.show')->with('data', $p);
    }
    public function postCreateStandart()
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new Standarts();
        $p->title = $input['title'];
        $p->full = $input['text'];
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateStandart()
    {
        return View::make('backend.standarts.create');
    }
    public function getUpdateStandart($id)
    {
        $p = Standarts::find($id);
        return View::make('backend.standarts.edit')->with('data', $p);
    }
    public function putUpdateStandart($id)
    {
        $input = Input::all();
        $p = Standarts::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deleteStandart($id)
    {
        Standarts::find($id)->delete();
    }


    public function getServices()
    {
        $p = Services::paginate(25);
        return View::make('backend.services.show')->with('data', $p);
    }
    public function postCreateService()
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new Services();
        $p->title = $input['title'];
        $p->full = $input['text'];
        $p->url = $input['url'];
        $p->cat_id = $input['cat_id'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateService()
    {
        $p = SCat::all();
        return View::make('backend.services.create')->with('data',$p);
    }
    public function getUpdateService($id)
    {
        $p = Services::find($id);
        $cat = SCat::all();
        return View::make('backend.services.edit')->with(['data' => $p, 'cat' => $cat]);
    }
    public function putUpdateService($id)
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = Services::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        $p->full = $input['text'];
        $p->cat_id = $input['cat_id'];
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p = SCat::all();
        $p->save();
        return Redirect::back();
    }
    public function deleteService($id)
    {
        Services::find($id)->delete();
    }


    public function getNews()
    {
        $p = News::paginate(25);
        return View::make('backend.news.show')->with('data', $p);
    }
    public function postCreateNews()
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = new News();
        $p->title = $input['title'];
        $p->full = $input['text'];
       // var_dump(Input::file());exit();
        if (isset($input ['file'])) {
            $p->image = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function getCreateNews()
    {
        return View::make('backend.news.create');
    }
    public function getUpdateNews($id)
    {
        $p = News::find($id);
        return View::make('backend.news.edit')->with('data', $p);
    }
    public function putUpdateNews($id)
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = News::find($id);
        if (isset($input ['title']))
            $p->title = $input['title'];
        if (isset($input ['short']))
            if (isset($input ['full']))
                $p->full = $input['text'];
        if (isset($input ['file'])) {
            $p->image = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        if (isset($input ['url']))
            $p->url = $input['url'];
        $p->save();
        return Redirect::back();
    }
    public function deleteNews($id)
    {
        News::find($id)->delete();
    }


    public function getPages()
    {
        $p = Pages::paginate(25);
        return View::make('backend.pages.show')->with('data', $p);
    }
    public function postCreatePage()
    {
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
    public function getCreatePage()
    {
        return View::make('backend.pages.create');
    }
    public function getUpdatePage($id)
    {
        $p = Pages::find($id);
        return View::make('backend.pages.edit')->with('data', $p);
    }
    public function putUpdatePage($id)
    {
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
    public function deletePage($id)
    {
        Pages::find($id)->delete();
    }


    public function getVacancys()
    {
        $data = Vacancy::all();
        return View::make('backend.vacancy.show')->with('data', $data);
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
        return View::make('backend.vacancy.edit')->with('data', $v);
    }
    public function putUpdateVacancy($id)
    {
        $input = Input::all();
        $v = Vacancy::find($input['id']);
        if (isset($input['name']))
            $v->name = trim($input['name']);
        if (isset($input['requirements']))
            $v->requirements = trim($input['requirements']);
        if (isset($input['duties']))
            $v->duties = trim($input['duties']);
        if (isset($input['conditions']))
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
        $p = Tech::paginate(25);
        return View::make('backend.tech.show')->with('data', $p);
    }
    public function getCreateTech()
    {
        $p = TCat::all();
        return View::make('backend.tech.create')->with('data',$p);
    }
    public function postCreateTech()
    {
        $input = Input::all();
        $p = new Tech ();
        $p->name = $input['name'];
        $p->description = $input['description'];
        $p->longtext = $input['longtext'];
        $p->url = $input['url'];
        $p->cat_id = $input['cat_id'];
        $destination = public_path('uploads');
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->save();
        return Redirect::back();
    }
    public function getUpdateTech($id)
    {
        $p = Tech::find($id);
        $cat = TCat::all();
        return View::make('backend.tech.edit')->with(['data' => $p, 'cat' => $cat]);
    }
    public function putUpdateTech($id)
    {
        $input = Input::all();
        $p = Tech::find($id);
        if (isset($input['name']))
            $p->name = $input['name'];
        if (isset($input['description']))
            $p->description = $input['description'];
        if (isset($input['longtext']))
            $p->longtext = $input['longtext'];
        if (isset($input['url']))
            $p->url = $input['url'];
        if (isset($input['cat_id']))
            $p->cat_id = $input['cat_id'];
        $destination = public_path('uploads');
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->save();
        return Redirect::back();
    }
    public function deleteTech($id)
    {
        Tech::find($id)->delete();
        return Redirect::back();
    }


    public function getSCat()
    {
        $p = SCat::paginate(25);
        return View::make('backend.categories.show')->with('data', $p);
    }
    public function getCreateSCat()
    {
        $p = SCat::all();
        return View::make('backend.categories.create')->with('data',$p);
    }
    public function postCreateSCat()
    {
        $p = new SCat ();
        $p->name = Input::get('name');
        $p->url = Input::get('url');
        $p->pcat_id = Input::get('pcat_id');
        $p->save();
        return Redirect::back();
    }
    public function getUpdateSCat($id)
    {
        $p = SCat::find($id);
        $all = SCat::all();
        return View::make('backend.categories.edit')->with(['data' => $p, 'all' => $all]);
    }
    public function putUpdateSCat($id)
    {
        $input = Input::all();
        $p = SCat::find($id);
        if (isset($input['name']))
            $p->name = Input::get('name');
        if (isset($input['url']))
            $p->url = Input::get('url');
        if (isset($input['pcat_id']))
            $p->pcat_id = Input::get('pcat_id');
        $p->save();
        return Redirect::back();
    }
    public function deleteSCat($id)
    {
        SCat::find($id)->delete();
        return Redirect::back();
    }
    

    public function getTCat()
    {
        $p = TCat::paginate(25);
        return View::make('backend.Tcategories.show')->with('data', $p);
    }
    public function getCreateTCat()
    {
        $p = TCat::all();
        return View::make('backend.Tcategories.create')->with('data',$p);
    }
    public function postCreateTCat()
    {
       // var_dump()
        $p = new TCat ();
        $destination = public_path('uploads');
        $p->name = Input::get('name');
        $p->url = Input::get('url');
        $p->pcat_id = Input::get('pcat_id');
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->save();
        return Redirect::back();
    }
    public function getUpdateTCat($id)
    {
        $p = TCat::find($id);
        $all = TCat::all();
        return View::make('backend.Tcategories.edit')->with(['data' => $p, 'all' => $all]);
    }
    public function putUpdateTCat($id)
    {
        $destination = public_path('uploads');
        $input = Input::all();
        $p = TCat::find($id);
        if (isset($input['name']))
            $p->name = Input::get('name');
        if (isset($input['url']))
            $p->url = Input::get('url');
        if (isset($input['pcat_id']))
            $p->pcat_id = Input::get('pcat_id');
        if (isset($input ['file'])) {
            $p->file = Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension();
            $input ['file']->move($destination, Input::file('file')->getFilename() . '.' . Input::file('file')->guessClientExtension());
        }
        $p->save();
        return Redirect::back();
    }
    public function deleteTCat($id)
    {
        TCat::find($id)->delete();
        return Redirect::back();
    }
    
}