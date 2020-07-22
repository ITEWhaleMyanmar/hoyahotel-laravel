<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Post\BulkDestroyPost;
use App\Http\Requests\Admin\Post\DestroyPost;
use App\Http\Requests\Admin\Post\IndexPost;
use App\Http\Requests\Admin\Post\StorePost;
use App\Http\Requests\Admin\Post\UpdatePost;
use App\Models\Post;
use App\Models\ContactU;
use App\Models\Dining;
use App\Models\Facility;
use App\Models\Special;
use App\Models\ThingsToDo;
use App\Models\Room;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class SpecialOfferController extends Controller
{
 
    public function special_offer()
    {
        $special_offer = Post::with('media')->get();
        return response()->json($special_offer);
    }
    public function room()
    {
        $room = Room::with('media')->get();
        return response()->json($room);
    }
    public function dining()
    {
        $dining = Dining::with('media')->get();
        return response()->json($dining);
    }
    public function facility()
    {
        $facility = Facility::with('media')->get();
        return response()->json($facility);
    }
    public function special()
    {
        $special = Special::with('media')->get();
        return response()->json($special);
    }
    public function contactus()
    {
        $contactus = ContactU::get();
        return response()->json($contactus);
    }
    public function thingstodo()
    {
        $thingstodo = ThingsToDo::with('media')->get();
        return response()->json($thingstodo);
    }
}
