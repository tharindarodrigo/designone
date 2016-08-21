<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

use App\Http\Requests;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('control-panel.news.index', compact('news'));
    }

    public function store(Request $request)
    {
        $newsItem = new News();
        $newsItem->title = $request->get('title');
        $newsItem->date = $request->get('date');
        $newsItem->news = $request->get('news');

        //validation here

        if ($newsItem->save()) {
            $request->session()->flash('global-success', 'successfully added record!');
        }

        return $this->index();
    }

    public function edit($id)
    {
        $newsItem = News::find($id);
        $news = News::all();
        return view('control-panel.news.edit', compact('news', 'newsItem'));
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, News::$rules) ;
        $newsItem = News::find($id);
        $newsItem->title = $request->get('title');
        $newsItem->date = $request->get('date');
        $newsItem->news = $request->get('news');

        if ($newsItem->update()) {
            $request->session()->flash('global-success','Record Updated Successfully');
        }else {
            $request->session()->flash('global-danger', 'Record deleted successfully');
        }

        return redirect()->back();
    }

    public function destroy(Request $request, $id)
    {
        try {
            $newsItem = News::find($id);

        } catch (ModelNotFoundException $e) {
            $request->session()->flash('global-warning','Record Not Found');
            return redirect()->back();
        }

        if($newsItem->delete()){
            $request->session()->flash('global-success', 'Record deleted successfully');
        } else {
            $request->session()->flash('global-danger', 'Record deleted successfully');
        }

        return redirect()->back();

    }
}
