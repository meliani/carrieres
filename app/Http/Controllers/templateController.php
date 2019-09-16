

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Exports\StagesExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use Maatwebsite\Excel\Concerns\FromView;

class ControllerTemplate extends Controller
{
    public function __construct()
    {
        $this->middleware(['Teacher']);
        $this->middleware('auth');
    }

    /** ------ playing with files -------- */
function playingWithFiles(){
    $file = $request->file('photo');
    //File Name
    $file->getClientOriginalName();

    //Display File Extension
    $file->getClientOriginalExtension();

    //Display File Real Path
    $file->getRealPath();

    
    $file->getSize();//Display File Size

    
    $file->getMimeType(); //Display File Mime Type

    //Move Uploaded File
    $destinationPath = 'uploads';
    $file->move($destinationPath,$file->getClientOriginalName());

    route('route name');
}
    public function __invoke($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
    

    public function isNormal()
    {
        return $article->type === Article::TYPE_NORMAL;
    }

    function returnBackWithMEssage(){
    return back()->with('message', __('app.article_added'));
    }
    /**
     ******************** Eager loading with sorting ************************
     */

    
        $user->load(['cars' => function($query)
    {
        $query->orderBy('colour_id', 'asc');
    }]);
    If you want to order by colour name, do this:

    $user->load(['cars' => function($query)
    {
        $query->select('cars.*')->join('colours', 'cars.colour_id', '=', 'colours.id')->orderBy('colours.colour', 'asc');
    }]);

    /** ---------------------------------------------------------- */
    /**
     * Annother solution for eager loading sorting
     */
    Order::with('company')->get()->sortBy('company.name');
