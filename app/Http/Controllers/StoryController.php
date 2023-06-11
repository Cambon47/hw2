<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Session;
use App\Models\User;
use App\Models\Storie;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Report;

class StoryController extends BaseController
{
    public function home()
    {
        // Controllo accesso

        // Leggiamo username
        $user = User::find(Session::get('user_id'));
        if ($user == null)
            $username = '';
        else
            $username = $user->username;
        return view('homepage')->with('username', $username);
    }

    public function add()
    {

        if (!Session::get('user_id')) {
            return [];
        }

        $story = new Storie;

        $user = User::find(Session::get('user_id'));
        $story->utente =$user->username;
        $story->title = request('title');
        $story->testo = request('text');
        $story->n_likes = 0;
        $story->n_comments = 0;
        $story->n_segnalazioni = 0;
        $story->save();




        return $user->Stories;
        //return view('mystories');
    }


    public function lista()
    {
        // Controllo accesso
        if (!Session::get('user_id')) {
           return [];
        }

        $user = User::find(Session::get('user_id'));
        $stories = Storie::where("utente", $user->username)->get();
        return json_encode($stories);


    }

    public function mystories(){

        return view('mystories');
    }


    public function other_stories(){



        return view('otherstories');
    }

    public function other_storiesc()
    {

        $stories = Storie::orderBy("created_at", "DESC")->get();

        return json_encode($stories);
    }

    public function search($q, $tipo){
        
        $stories = Storie::where("testo","like","%$q%")->orWhere("title","like","%$q%")->orWhere("utente","like","%$q%")->
            orderBy($tipo, "DESC")->get();
        return json_encode($stories);


    }

    public function like($id){
        if (!Session::get('user_id')) {

            return view('otherstories');
        }
        $user = User::find(Session::get('user_id'));
        $like = new Like;
        $like->giver = $user->username;
        $like->id_storia = $id;

        $stories = Storie::orderBy("created_at", "DESC")->get();
        $st = Like::where("giver",$user->username )->where("id_storia",$id)->first();
        if ($st != null)
            return json_encode("");


            $like->save();
            Storie::find($id)->increment('n_likes');


        return json_encode($stories);



    }

    public function comments($id){
        if (!Session::get('user_id')) {

            return view('otherstories');
        }

        return view('comments')->with("id",$id);


    }

    public function comment_show($id){
        $storia = Storie::find($id);
        return json_encode($storia);

    }

    public function add_comment($id){

        if (!Session::get('user_id')) {
            return [];
        }
        $user = User::find(Session::get('user_id'));
        $comment = new Comment;
        $comment->giver = $user->username;
        $comment->testo = request('Commento');
        $comment->storie_id = $id;
        $comment->save();

        Storie::find($id)->increment('n_comments');
        return view('comments')->with("id",$id);

    }

    public function get_comments($id){
        $storia = Storie::find($id);
        //$comments = Comment::where('storie_id', $id)->get();
        return $storia->comment;
        //return json_encode($comments);

    }

    public function segnala($id){
        if (!Session::get('user_id')) {
            return [];
        }
        $user = User::find(Session::get('user_id'));
        $report = new Report;
        $report->utente = $user->username;
        $report->id_storia = $id;

        $st = Report::where("utente", $user->username)->where("id_storia", $id)->first();
        if ($st != null)
            return;

        $report->save();


        Storie::find($id)->increment('n_segnalazioni');
        
        Storie::where('n_segnalazioni', 5)->delete();
        
        return ;

    }




}

?>
