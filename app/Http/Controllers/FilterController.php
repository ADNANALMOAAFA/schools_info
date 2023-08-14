<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Schools;
use App\Models\Offices;
use App\Models\Sys_vars;


class FilterController extends Controller
{
 
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {


         $schools = Schools::select('id','scool_name','sector','district','stage','authority','edu_office','gender','type_sch','type_edu','school_autonomy','school_sys')->get();
         $offices = Offices::select('id','name_mang','sex','dirct','pyr')->get();
         $sys_vars_schools = Sys_vars::select('id', 'name','static_id', 'type', 'status', 'desc')->where('type',1)->where('status',1)->get();
         $sys_vars_offices = Sys_vars::select('id', 'name','static_id', 'type', 'status', 'desc')->where('type',3)->where('status',1)->get();
         $sys_vars_labels1 = Sys_vars::select('desc')->where('type',5)->where('id',5001)->where('status',1)->first()->desc;
         $sys_vars_labels2 = Sys_vars::select('desc')->where('type',5)->where('id',5002)->where('status',1)->first()->desc;
         $sys_vars_labels3 = Sys_vars::select('desc')->where('type',5)->where('id',5003)->where('status',1)->first()->desc;
         $sys_vars_labels4 = Sys_vars::select('desc')->where('type',5)->where('id',5004)->where('status',1)->first()->desc;
         $sys_vars_labels5 = Sys_vars::select('desc')->where('type',5)->where('id',5005)->where('status',1)->first()->desc;
         $sys_vars_labels6 = Sys_vars::select('desc')->where('type',5)->where('id',5006)->where('status',1)->first()->desc;
         $sys_vars_labels7 = Sys_vars::select('desc')->where('type',5)->where('id',5007)->where('status',1)->first()->desc;
         $sys_vars_labels8 = Sys_vars::select('desc')->where('type',5)->where('id',5008)->where('status',1)->first()->desc;
         $sys_vars_labels9 = Sys_vars::select('desc')->where('type',5)->where('id',5009)->where('status',1)->first()->desc;
         $sys_vars_labels10 = Sys_vars::select('desc')->where('type',5)->where('id',5010)->where('status',1)->first()->desc;
         $sys_vars_labels11 = Sys_vars::select('desc')->where('type',5)->where('id',5011)->where('status',1)->first()->desc;
         $sys_vars_labels12 = Sys_vars::select('desc')->where('type',5)->where('id',5012)->where('status',1)->first()->desc;
         $sys_vars_labels13 = Sys_vars::select('desc')->where('type',5)->where('id',5013)->where('status',1)->first()->desc;
         $sys_vars_title   = Sys_vars::select('desc')->where('type',5)->where('id',5099)->where('status',1)->first()->desc;

         return view('index', compact('schools' ,'offices','sys_vars_schools','sys_vars_offices',
        
            'sys_vars_labels1',
            'sys_vars_labels2',
            'sys_vars_labels3',
            'sys_vars_labels4',
            'sys_vars_labels5',
            'sys_vars_labels6',
            'sys_vars_labels7',
            'sys_vars_labels8',
            'sys_vars_labels9',
            'sys_vars_labels10',
            'sys_vars_labels11',
            'sys_vars_labels12',
            'sys_vars_labels13',
            'sys_vars_title'
        ));
     }
 
        public function list_schools()
        {
            $schools = Schools::select('id','scool_name','sector','district','stage','authority','edu_office','gender','type_sch','type_edu','school_autonomy','school_sys')->get();
            $sys_vars_title   = Sys_vars::select('desc')->where('type',5)->where('id',5099)->where('status',1)->first()->desc;
            error_log(request("scool_name_box"));
            return view('list_schools', compact('schools','sys_vars_title'));
        }

        public function school(string $id)
        {
            $schools = Schools::select(
                'id',
                'm_number',
                'scool_name',
                'sector',
                'district',
                'num_gov',
                'stage',
                'authority',
                'edu_office',
                'gender',
                'type_sch',
                'type_edu',
                'mangers_name',
                'num_chapters',
                'num_students',
                'density',
                'teachers',
                'tec_ksa',
                'administ',
                'school_autonomy',
                'year_founded',
                'number_mang',
                'number_agent',
                'store_1',
                'store_2',
                'building_model',
                'factor_1',
                'factor_2',
                'type_autonomy',
                'basic_school',
                'school_faraway',
                'lat',
                'long',
                'school_sys'
            )->where('scool_name',$id)->get();

            $sys_vars_schools = Sys_vars::select('id', 'name','static_id', 'type', 'status', 'desc')->where('type',2)->where('status',1)->get();
            $sys_vars_title   = Sys_vars::select('desc')->where('type',5)->where('id',5099)->where('status',1)->first()->desc;
            error_log($id);
            return view('school', compact('schools','sys_vars_schools','sys_vars_title'));
        }
        
        public function list_offices()
        {
            $sys_vars_title   = Sys_vars::select('desc')->where('type',5)->where('id',5099)->where('status',1)->first()->desc;
            return view('list_offices', compact('sys_vars_title'));
        }
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         //
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
     }
 }
