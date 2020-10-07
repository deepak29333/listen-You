<?php

namespace App\Http\Controllers;
use App\Http\Requests\CounsellorValidation;
use App\Models\Counsellor;
use Illuminate\Http\Request;
use DB;
class CounsellorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counsellor=Counsellor::all();
        $timing=new Counsellor;
        return view('backend.counsellor.index',['counsellor'=>$counsellor,'timing'=>$timing]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $services=DB::table('services')->get();
        return view('backend.counsellor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CounsellorValidation $request)
    {
        $timeslote=[];
        foreach($request->day as $days){
            $time=[];
            for($i=0;$i<count($request->input($days."_start"));$i++){
             $dayStartTime=$request->input($days."_start")[$i];
             $dayEndTime=$request->input($days."_end")[$i];
             $time[0]=$dayStartTime;
             $time[1]=$dayEndTime;
             $timeslote[$days][$i]=$time;
            }
        }
        $timeArray	= serialize($timeslote);
        $counsellor= new Counsellor;
        $counsellor->name=$request->f_name;
        $counsellor->email=$request->email;
        $counsellor->half_hour_amt=$request->half_hour_amt;
        $counsellor->one_hour_amt=$request->one_hour_amt;
        $counsellor->timing=$timeArray;
        $counsellor->save();
        return back()->with('success',' New Counsellor Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Counsellor  $counsellor
     * @return \Illuminate\Http\Response
     */
    public function show(Counsellor $counsellor)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Counsellor  $counsellor
     * @return \Illuminate\Http\Response
     */
    public function edit($counsellor)
    {

        $counsellor=Counsellor::find(intval($counsellor));
        $days=unserialize($counsellor->timing);
        $i=0;
        $total_days=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
        $totalDays=[];
        foreach( $days as $key=>$value){
            $totalDays[$i]=$key;
            foreach (array_keys($total_days, $key, true) as $key) {
                unset($total_days[$key]);
            }
            $i++;
        }
        
        return view('backend.counsellor.edit',['counsellor'=>$counsellor,'unavailable_days'=>$total_days]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Counsellor  $counsellor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $counsellor)
    {
        // dd($request->all());
        $counsellor=Counsellor::find($counsellor);
        $timeslote=[];
        foreach($request->day as $days){
            $time=[];
            for($i=0;$i<count($request->input($days."_start"));$i++){
             $dayStartTime=$request->input($days."_start")[$i];
             $dayEndTime=$request->input($days."_end")[$i];
             $time[0]=$dayStartTime;
             $time[1]=$dayEndTime;
             $timeslote[$days][$i]=$time;
            }
        }
        $timeArray	= serialize($timeslote);
        $counsellor->name=$request->f_name;
        // $counsellor->email=$request->email;
        $counsellor->half_hour_amt=$request->half_hour_amt;
        $counsellor->one_hour_amt=$request->one_hour_amt;
        $counsellor->timing=$timeArray;
        $counsellor->save();
        return redirect('/Counsellor')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Counsellor  $counsellor
     * @return \Illuminate\Http\Response
     */
    public function destroy($counsellor)
    {
        $counsellor=Counsellor::find($counsellor);
        $counsellor->delete();
        return back()->with('success',' Deleted Successfully');
    }
}
