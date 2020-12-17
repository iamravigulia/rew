<?php

namespace edgewizz\rew\Controllers;
use App\Http\Controllers\Controller;
use Edgewizz\Edgecontent\Models\ProblemSetQues;
use Edgewizz\Rew\Models\RewQues;
use Illuminate\Http\Request;

class RewController extends Controller
{
    //
    public function test(){
        dd('hello rew');
    }
    public function store(Request $request){
        $Q = new RewQues();
        $Q->question = $request->paragraph;
        $Q->error = $request->error;
        $Q->correct = $request->correct;
        $Q->difficulty_level_id = $request->difficulty_level_id;
        $Q->save();
        if($request->problem_set_id && $request->format_type_id){
            $pbq = new ProblemSetQues();
            $pbq->problem_set_id = $request->problem_set_id;
            $pbq->question_id = $Q->id;
            $pbq->format_type_id = $request->format_type_id;
            $pbq->save();
        }
        return back();
    }
    public function edit($id, Request $request){
        
    }
    public function inactive($id){
        $f = RewQues::where('id', $id)->first();
        $f->active = '0';
        $f->save();
        return back();
    }
    public function active($id){
        $f = RewQues::where('id', $id)->first();
        $f->active = '1';
        $f->save();
        return back();
    }
}
