<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\News;
use App\Models\NewsUser;
use App\Models\User;

class NewsController extends Controller
{

    public function showAuthors(User $user)
    {
        $users = DB::table('users')->get();
        return view('authors', compact('users'));
    }

    public function getArticles(News $news, NewsUser $newsUser)
    {
        $authors = User::all();
        $news = News::all();
        $newsUser = NewsUser::all();
        return view('newsMaster', compact('authors', 'news', 'newsUser'));
    }

    public function getTop(User $user1, News $news, NewsUser $newsUser)
    {
        $users = User::all();
        $news = News::all();
        $newsUser = NewsUser::all();

        $date = \Carbon\Carbon::today()->subDays(7);
        $count = NewsUser::where('created_at', '>=', $date)->get();

        $user_id = DB::table('news_users')
                   ->select('user_id', DB::raw('count(id) as total'))
                   ->where('created_at', '>=', $date)
                   ->groupBy('user_id')
                   ->orderBy('total','desc')
                   ->limit(3)
                   ->get();

        
        return view('top', compact('user_id','users', 'news', 'newsUser',));
    }

    public function article(News $news)
    {
        return view('news', compact('news'));
    }


    public function index(User $user)
    {   
        $newsUser = NewsUser::where(NewsUser::user_id, $user->id)->get();
        $news = News::all();
        
        return view('user', compact('user', 'news', 'newsUser'));
    }
    

    public function getAuthors()
    {

        $authors = User::all();

        return view('welcome', ['authors' => $authors]);
        
    }

    function save(Request $req)
    {

        $news = News::create([
            News::title => $req->title,
            News::text =>$req->text
          ]);


        foreach($req->authors as $author) 
        {
            NewsUser::create([
                NewsUser::user_id =>$author,
                NewsUser::news_id =>$news->id
              ]);

        }

        return redirect('/articles');
        

    }
}
