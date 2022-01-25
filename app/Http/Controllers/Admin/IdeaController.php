<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Idea;
use Alert;
class IdeaController extends Controller
{
    //
     public function index()
     {
         $ideas=Idea::where('status','false')->get();
         return view('admin.idea.index',compact('ideas'));
     }
     public function show($id)
     {
         $idea=Idea::find($id);
         return view('admin.idea.show',compact('idea'));
     }
     public function accept($id)
     {
        $idea=Idea::find($id);
        $idea->update([
               "status"=>"true",
        ]);
        Alert::success('success', 'the idea has been accepted');
        return redirect()->route('idea.index');
     }
     public function refused($id)
     {
        $idea = Idea::findOrFail($id);
        $idea->delete();
        Alert::success('success', 'the idea has been refused and move to trach');
        return redirect()->route('idea.index');
     }
     public function destroy($id)
     {
        $idea = Idea::withTrashed()->findOrFail($id);
        $idea->forceDelete();
        Alert::success('success', 'the idea has been deleted');
        return redirect()->route('idea.index');
     }
     public function trash()
     {
         $ideas=DB::table('ideas')->whereNotNull('deleted_at')->get();    
         return view('admin.idea.trash',compact('ideas'));
    }
}
