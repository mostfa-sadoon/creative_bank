<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\User;
use Alert;
use Illuminate\Support\Facades\Notification;
use App\Notifications\acceptidea;
class IdeaController extends Controller
{
    //
     public function index()
     {
         $ideas=Idea::where('status','false')->get();
         return view('admin.idea.index',compact('ideas'));
     }
     public function accepted()
     {
      $ideas=Idea::where('status','true')->get();
      return view('admin.idea.accepted_idea',compact('ideas'));
     }
     public function getrefused()
     {
      $ideas=Idea::where('status','refused')->get();
      return view('admin.idea.refused_idea',compact('ideas'));
     }
     public function show($id)
     {
         $idea=Idea::find($id);
        // dd($idea);
         return view('admin.idea.show',compact('idea'));
     }
     public function accept($id)
     {
        $idea=Idea::find($id);
        $idea->update([
               "status"=>"true",
        ]);
         $user=User::find($idea->user->id);
         Notification::send($user, new acceptidea());
         Alert::success('success', 'the idea has been accepted');
         return redirect()->route('idea.index');
     }
     public function refused($id)
     {
        $idea = Idea::findOrFail($id);
        $idea->update([
         "status"=>"refused",
        ]);
        Alert::success('success', 'the idea has been refused and move to trach');
        return redirect()->route('idea.getrefused');
     }
     public function destroy($id)
     {
        $idea = Idea::withTrashed()->findOrFail($id);
        $idea->forceDelete();
        Alert::success('success', 'the idea has been deleted');
        return redirect()->route('idea.trash');
     }

      public function maketrash($id)
      {
      $idea = Idea::findOrFail($id);
      $idea->delete();
      return redirect()->route('idea.trash');
      }

     public function trash()
     {
         $ideas=Idea::onlyTrashed()->paginate(20);
       //  $ideas=DB::table('ideas')->whereNotNull('deleted_at')->get();
         return view('admin.idea.trash',compact('ideas'));
    }
    public function showtrashed($id)
    {
        $idea=Idea::withTrashed()->find($id);
        return view('admin.idea.trash_ideas',compact('idea'));
    }
    public function restore($id)
    {
       $idea = Idea::withTrashed()->findOrFail($id);
       $idea->update([
          'deleted_at'=>null
       ]);
       Alert::success('success', 'the news has restore successfully');
       return redirect()->route('idea.trash');
    }
    public function email()
    {
       return view('admin.email.email');
    }
}
