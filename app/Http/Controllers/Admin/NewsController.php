<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatestNews;
use Illuminate\Support\Facades\Validator; 

class NewsController extends Controller
{
    //Function for all news
    public function all_news() {
        //Get news
        $all_news = LatestNews::OrderBy('ID', 'DESC')->get();
        return view('admin.latest-news.all-news', compact('all_news'));
    }

    //Function for add news
    public function add_news() {
        return view('admin.latest-news.create-news');
    }

    //Function for submit news
    public function submit_news(Request $request) {
        //Validate input fields
        $request->validate([
            'title' => 'required',
            'date'  => 'required',
        ]);
        //Check if document is exit or not
        $document = "";
        if($request->hasFile('document')) {
            $file = $request->file('document');
            $extension = $file->getClientOriginalExtension();
            $document = time() . '.' . $extension;
            $file->move(public_path('uploads/news'), $document);
        }
        //Create news
        $is_create_news = LatestNews::create([
            'title' => $request->title,
            'date' => $request->date,
            'document' => $document,
            'status' => 'Active',
        ]);
        //Check if news created or not
        if($is_create_news) {
            return redirect()->route('admin.news')->with('success', 'News created successfully.');
        } else {
            return back()->with('unsuccess', 'Opps something went wrong!');
        }
    }

    //Function for edit news
    public function edit_news($id) {
        //Get news detail
        $news_detail = LatestNews::find($id);
        return view('admin.latest-news.edit-news', compact('news_detail'));
    }

    //Function for single news page
    public function single_news($id) {
        //Get single detail
        $news_detail = LatestNews::find($id);
        return view('admin.latest-news.single-news-detail', compact('news_detail'));
    }

    //Function for update news
    public function update_news(Request $request, $id) {
        //Validate input fields
        $request->validate([
            'title' => 'required',
            'date'  => 'required',
        ]);
        //Update news
        $is_update_news = LatestNews::where('id', $id)->update([
            'title' => $request->title,
            'date' => $request->date,
            'status' => 'Active',
        ]);
        //Check if news updated or not
        if($is_update_news) {
            return redirect()->route('admin.news')->with('success', 'News updated successfully.');
        } else {
            return back()->with('unsuccess', 'Opps something went wrong!');
        }
    }

    //Function for delete news
    public function destroy(Request $request) {
        //Get ajax request for news id
        $news_id = $request->news_id;
        //Delete news
        $is_delete_news = LatestNews::where('id', $news_id)->delete();
        //Check if news deleted or not
        if ($is_delete_news) {
             return redirect()->route('admin.news')->with('success', 'News deleted successfully.');
        } else {
            return back()->with('unsuccess', 'Opps something went wrong!');
        }
    }
}
