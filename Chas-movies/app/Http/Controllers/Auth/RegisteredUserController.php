<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Show;
use App\Models\Film;
use App\Models\Comment;
use App\Models\Watchlist;
use League\CommonMark\Extension\Table\Table;
use App\Models\Genre;



class RegisteredUserController extends Controller
{

    public function createMovie(Request $request)
    {
        $listing = new Film;
        $listing->title = $request->title;
        $listing->genre = $request->genre;
        $listing->director = $request->director;
        $listing->maincast = $request->maincast;
        $listing->imgurl = $request->imgurl;
        $listing->showormovie = $request->showormovie;
        $listing->trailer = $request->trailer;
        $listing->save();
        return redirect()->route('movie')->with('status', 'New post added successfully!');
    }



    public function createShow(Request $request)
    {
        $listing = new Film();
        $listing->title = $request->title;
        $listing->genre = $request->genre;
        $listing->director = $request->director;
        $listing->maincast = $request->maincast;
        $listing->seasons = $request->seasons;
        $listing->episodes = $request->episodes;
        $listing->imgurl = $request->imgurl;
        $listing->showormovie = $request->showormovie;
        $listing->trailer = $request->trailer;
        $listing->save();
        return redirect()->route('show')->with('status', 'New post added successfully!');
    }

    /**
     * Display all Movies.
     */
    public function readAllMovies()
    {
        $films = Film::where('showormovie', 0)
            ->where('showormovie', '!=', 1)
            ->get();
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        return view('movie', ['films' => $films, "user_id" => $user_id]);
    }

    /**
     * Display all Shows.
     */
    public function readAllShows()
    {
        $shows = Film::where('showormovie', 1)
            ->where('showormovie', '!=', 0)
            ->get();
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        return view('show', ['shows' => $shows, "user_id" => $user_id]);
    }

    /**
     * Show specific one.
     */
    public function showMovie($id)
    {
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $data = Film::find($id);
        return view('updatemovie', ['data' => $data, 'user_id' => $user_id]);
    }

    public function showShow($id)
    {
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $data = Film::find($id);
        return view('updateshow', ['data' => $data, 'user_id' => $user_id]);
    }

    public function showUser($id)
    {
        $data = User::find($id);
        return view('updateuser', ['data' => $data]);
    }
    /**
     * Update functionality.
     */
    public function updateMovie(Request $request)
    {
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $data = Film::find($request->id);
        $data->title = $request->title;
        $data->genre = $request->genre;
        $data->director = $request->director;
        $data->maincast = $request->maincast;
        $data->imgurl = $request->imgurl;
        $data->trailer = $request->trailer;
        $data->save();
        return redirect()->route('movie', ['user_id' => $user_id]);
    }

    public function updateShow(Request $request)
    {
        $data = Film::find($request->id);
        $data->title = $request->title;
        $data->genre = $request->genre;
        $data->director = $request->director;
        $data->maincast = $request->maincast;
        $data->seasons = $request->seasons;
        $data->episodes = $request->episodes;
        $data->imgurl = $request->imgurl;
        $data->trailer = $request->trailer;
        $data->save();
        return redirect()->route('show');
    }


    /**
     * Delete stuff.
     */

    public function deleteMovies($id)
    {
        $films = Film::find($id);
        $films->delete();
        return redirect()->route('movie')->with('status', 'Movie deleted successfully!');
    }


    public function deleteShows($id)
    {
        $shows = Film::find($id);
        $shows->delete();
        return redirect()->route('show')->with('status', 'Show deleted successfully!');
    }




    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('dashboard')->with('status', 'User deleted successfully!');
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back();
    }

    // public function createWatchlist()
    // {
    //     $films = Film::all();
    //     $shows = Film::all();
    //     $watchlists = Watchlist::get();
    //     return view('watchlist', ['shows' => $shows, 'films' => $films, 'watchlists' => $watchlists]);
    // }

    public function displayGenre(Request $request)
    {
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $films = Film::where('showormovie', 0)
            ->where('showormovie', '!=', 1)
            ->get();
        $shows = Film::where('showormovie', 1)
            ->where('showormovie', '!=', 0)
            ->get();
        $genre = $request->get("id");
        return view('kategori', ['user_id' => $user_id, 'films' => $films, 'shows' => $shows, 'genre' => $genre]);
    }

    /**
     * update stuff.
     */
    public function makeAdmin($id)
    {
        $user = User::find($id);
        $user->role = 0;
        $user->save();
        return redirect()->route('dashboard')->with('status', 'User deleted successfully!');
    }

    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 1,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }


    public function filmView($id)
    {

        $films = Film::find($id);
        $comments = $films->comments;
        $comment = null;
        if (Auth::check()) {
            $comment = Auth::user()->id;
        }
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        return view('film-view', ['user_id' => $user_id, 'films' => $films, 'id' => $id, 'comments' => $comments]);
    }

    public function readAllWatchlist($id)
    {

        $users = Watchlist::find($id);
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $films = Film::whereHas('watchlist', function ($query) use ($user_id) {
            $query->where('user_id', $user_id);
        })->with('watchlist')->get()->unique(); //samma för shows???
        return view('watchlist', ['id' => $id, 'films' => $films, 'users' => $users, "user_id" => $user_id]);
    }

    public function storeWatchlist(Request $request)
    {
        $listing = new Watchlist;
        //$listing->show_id = $request->showId; //Jag spånar lite (viktoria)
        $listing->film_id = $request->filmId;
        $listing->user_id = Auth::user()->id;
        $listing->save();
        $message = 'Media successfully added to your watchlist!';
        $request->session()->flash('status', $message);
        return redirect()->route('film-view', ['id' => $request->filmId]);
    }

    public function destroyWatchlist($id)
    { //  Fixa route till watchlist/{id}?

        $listing = Watchlist::where('id', $id);
        $listing->delete();
        return to_route('watchlist')->with('status', 'Movie deleted successfully!');
        // comment
    }

    public function getDeletePost($post_id)
    {
        $post = Comment::where('id', $post_id)->firstOrFail();
        $post->delete();
        return redirect()->route('dashboard')->with(['message' => 'Successfully deleted!!']);
    }



    public function add_comment(Request $request, $id)
    {
        if (Auth::id()) {
            $comment = new comment;
            $comment->user_id = Auth::user()->id;
            $comment->name = Auth::user()->name;
            $comment->comment = $request->comment;
            $comment->film_id = $id; // KOPPLAR COMMENT MED MOVIE
            $comment->save();

            return redirect()->back();
        } else {
            return redirect('login');
        }
    }




    public function home(Request $request)
    {
        $films = Film::where('showormovie', 0)
            ->where('showormovie', '!=', 1)
            ->take(4)
            ->get();
        $shows = Film::where('showormovie', 1)
            ->where('showormovie', '!=', 0)
            ->take(4)
            ->get();
        return view('home', ['films' => $films, 'shows' => $shows]);
    }
}
