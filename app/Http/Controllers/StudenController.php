<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\School;
use App\Models\Studen;
use App\Models\Committee;
use App\Models\Group;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Break_;
use Illuminate\Support\Facades\DB;

class StudenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function DataStaudentById(Request $request)
    {
        $start = $request->start;

        $get_data = Studen::where('sitting_number', $start)->get();
        return response()->json($get_data, 200);
    }


    public function index(Request $request)
    {
        // $subjects = Subject::where('status', 1)->pluck('code');
        // return collect($subjects)->all();
        $group = $request->id;
        // dd($request->id);
        $subject = $request->subject;

        $first = Studen::where('group', $group)->orderBy('scur_number', 'asc')->first('scur_number');
        $last = Studen::where('group', $group)->orderBy('scur_number', 'desc')->first('scur_number');

        $collection = Studen::where('group', $group)->whereBetween('scur_number', [$first->scur_number, $last->scur_number])->where('status', 1)->get('scur_number');
        // dd($collection);
        // $collection_abs = Studen::whereBetween('scur_number', [$first->scur_number, $last->scur_number])->whereNull('ar')->orderBy('scur_number', 'asc')->get('scur_number');
        // $collection_ab = Studen::whereBetween('scur_number', [$first->scur_number, $last->scur_number])->orderBy('scur_number', 'asc')->get(['scur_number', 'status', 'ar', 'en']);
        $collection_abs = Studen::where('group', $group)->where('note', 0)->orderBy('scur_number', 'asc')->select(['scur_number', 'ar', 'en', 'math_g', 'math_h', 'stu', 'sci', 'status', 'total', 'total_math'])->paginate(50);
        $collection_abs_sum = $collection_abs->sum('total');
        return response()->json(['sum' => $collection_abs_sum, 'first' => $first, 'last' => $last, 'collection' => $collection, 'collection_abs' => $collection_abs], 200);
    }

    public function Store(Request $request)
    {


        $subject = $request->group['subject'];

        $scur_number = $request->subject;



        for ($i = 0; $i < count($scur_number); $i++) {

            $collection = Studen::where('scur_number', $scur_number[$i]['scur_number'])->where('note', 0)->get()[0];

            $collection->$subject = $scur_number[$i][$subject];
            $collection->total = intval($scur_number[$i]['total']);
            $collection->total_math = intval($scur_number[$i]['total_math']);
            dd($collection);
            // $collection->save();
        }




        // $scur_number->$subject = $request->degree;
        // $scur_number->user_id = Auth::user()->id;
        // $scur_number->save();
    }


    public function renNmber(Request $request)
    {
        // return $request->all();

        $control = $request->number;

        // dd($control);
        $group = $request->group['group'];
        $sub_group = $request->group['sub_group'];

        $scur = $request->group['secur_number'];
        foreach ($control as $key => $value) {
            switch ($key + 1) {
                case 1:

                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 2:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;

                case 3:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 4:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 5:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 6:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 7:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 8:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 9:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 10:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 11:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 12:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 13:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 14:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 15:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 16:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 17:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 18:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 19:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
                case 20:
                    $collection = Studen::whereBetween('sitting_number', [(int)$value['start'], (int)$value['end']])->where('note', 0)->orderBy('sitting_number', 'asc')->get();
                    foreach ($collection as $key => $value) {
                        $value->scur_number = $scur++;
                        $value->group = $group;
                        $value->sub_group = $sub_group;
                        $value->save();
                    }
                    break;
            }
        }
    }

    public function print()
    {
        return view('print');
    }
    public function printCertifications()
    {
        return view('printCertifications');
    }

    public function DataStaudentByschool(Request $request)
    {

        $getSchooland_commiss = School::where('id', $request->id)->get()[0];
        $students = Studen::where('school_id', $request->id)->with('Religion')->where('note', 0)->where('abs_2', 0)->orderBy('student_name', 'asc')->get()->groupBy(['system_id', 'gender_id']);


        return response()->json(['getSchooland_commiss' => $getSchooland_commiss, 'students' => $students], 200);
    }
    public function StudentByCommitt(Request $request)
    {

        $getSchooland_commiss = School::where('committee_id', $request->id)->get();

        $students = Studen::whereBetween('committee_id', [11, 11])->with(['Religion', 'Committee', 'Merge'])->where('note', 0)->orderBy('student_name', 'asc')->get()->groupBy(['system_id', 'school_number', 'gender_id']);


        return response()->json(['getSchooland_commiss' => $getSchooland_commiss, 'students' => $students], 200);
    }


    public function StudentBySettings()
    {
        $students = Studen::where('school_id', 5)->where('note', 0)->with(['Mange', 'Committee'])->orderBy('student_name', 'asc')->get();
        return response()->json(['students' => $students], 200);
    }


    /**
     * استعلام لمراجعة تسليم الظرف بارقام الجلوس للغرفة ةطباعة ابيان به للصقة على الظرف موضه
     * بع اسم المدرسى
     * بداية ونهاية رقم الجلوس
     * نظامى / منازل/ تلاحيقٍ
     *
     */

    public function PrintLableRecevdRoom(Request $request)
    {


        // $school_name = Committee::where('id', $request->start)->with(['Studen', 'School'])->get();

        // return $school_name;

        $school_name = Studen::where('school_id', $request->start)->with('School')->first();
        $check_system = Studen::where('school_id', $request->start)->get();

        if (!$check_system->contains('system_id', 2)) {

            $lable_sitting_first = Studen::where('school_id', $request->start)->orderBy('sitting_number', 'asc')->where('system_id', 1)->select('sitting_number as first')->first();
            $last = Studen::where('school_id', $request->start)->orderBy('sitting_number', 'desc')->where('system_id', 1)->select('sitting_number as last')->first();

            return response()->json(['lable_sitting_first' => $lable_sitting_first, 'lable_sitting_last' => $last, 'school_name' => $school_name], 200);
        } else {
            $system_2_array = Studen::where('school_id', $request->start)->where('system_id', 2)->pluck('sitting_number');
            $lable_sitting_first = Studen::where('school_id', $request->start)->where('system_id', 1)->orderBy('sitting_number', 'asc')->select('sitting_number as first')->first();
            $last = Studen::where('school_id', $request->start)->orderBy('sitting_number', 'desc')->where('system_id', 1)->select('sitting_number as last')->first();

            return response()->json(['lable_sitting_first' => $lable_sitting_first, 'lable_sitting_last' => $last, 'school_name' => $school_name, 'system' => $system_2_array],  200);
        }
    }

    public function queryData(Request $request)
    {

        $count = Studen::where('abs_2', 1)->where('note', 0)->orderBy('scur_number', 'asc')->get()->groupBy('group');

        return response()->json($count, 200);
    }


    public function StoreAbs(Request $request)
    {
        $subject = $request->subject;

        $findSittingNumber = Studen::where('sci', '<=', 19)->where('sitting_number', $request->sitting_number)->where('note', 0)->get()[0];

        if ($findSittingNumber) {
            $findSittingNumber->$subject = -1;
            $findSittingNumber->abs_2 = 1;

            $findSittingNumber->save();
            return response()->json($findSittingNumber, 200);
        } else {
            return 'No';
        }
    }

    // public function StoreSubject_out(Request $request)
    // {
    //     // $subject = $request->subject;

    //     $findSittingNumber = Studen::where('sitting_number', 4401)->get()[0];
    //     $findSittingNumber->n1 = round(35, 39);


    //     // $findSittingNumber->save();

    //     return response()->json($findSittingNumber, 200);
    // }

    public function showStudent($id)
    {
        $dataStudent = Studen::where('group', $id)->orderBy('scur_number', 'asc')->get(['scur_number', 'ar', 'en', 'math_g', 'math_h', 'sci', 'stu'])->chunk(50);
        return response()->json($dataStudent, 200);
    }


    // النتيجة الرقمية
    public function query()
    {
        $query = Studen::where('abs_2', 0)->where('mange_id', 4)->with('Mange')->get(['sitting_number', 'total', 'mange_id', 'school_id', 'system_id',  'school_name'])->groupBy(['school_id', 'system_id']);
        return response()->json(['all' => $query], 200);
    }
    public function queryBySchool()
    {
        $query = Studen::where('mange_id', 4)->where('abs_2', 0)->with('Mange')->orderBy('sitting_number', 'asc')->get(['sitting_number', 'total', 'mange_id', 'school_id', 'system_id',  'school_name'])->groupBy(['school_id', 'system_id']);
        return response()->json(['all' => $query], 200);
    }
    // النتيجة الرقمية نهاية

    public function students()
    {
        $query = Studen::where('school_id', 43)->where('note', 1)->get(['sitting_number', 'total', 'mange_id', 'school_id', 'student_name',  'school_name']);

        return response()->json($query, 200);
    }


    public function SchoolCount()
    {
        return School::get();
    }
    public function TotalRepat()
    {
        // $totalCount = Studen::where('note', 1)->where('total', '>=', 140)->get(['total', 'mange_id', 'gender_id'])->groupBy(['total', 'mange_id', 'gender_id']);

        // $sources = Studen::where('note', 1)->where('total', '>=', 140)->groupBy(['total', 'mange_id', 'gender_id']);

        // $output = null;
        // foreach ($sources as $key => $source) {
        //     foreach ($source as $item) {
        //         //get each item in the group
        //     }
        //     $output[$key] = $source->count();
        // }
        // return $output;


        $totalCount = DB::table('Studens')->where('total', '>=', 140)
            ->select(['total', 'mange_id', 'gender_id'], DB::raw('count(*) as totals'))
            ->groupBy(['total', 'mange_id', 'gender_id'])
            ->get();

        return response()->json($totalCount, 200);
    }


    public function checkSubjectFail(Request $request)
    {
        $get_data = Studen::where('sitting_number', $request->start)->where('fail_subject', 1)->get()[0];

        // $get_data->fail_subject = 1;
        // $get_data->save();
        return response()->json($get_data, 200);
    }

    public function addDegreeSubjectFail(Request $request)
    {
        $get_data = Studen::where('sitting_number', $request->start)->where('fail_subject', 1)->get()[0];

        // $get_data->fail_subject = 1;
        // $get_data->save();
        return response()->json($get_data, 200);
    }
    public function SaveDegreeSubjectFail(Request $request)
    {
        // dd($request->all());
        $get_data = Studen::where('sitting_number', $request->sitting_number)->where('fail_subject', 1)->get()[0];

        $get_data->success_faill_subjects = 1;
        // $get_data->note = 1;
        $get_data->ar = $request->ar;
        $get_data->en = $request->en;
        $get_data->math_g = $request->math_g;
        $get_data->math_h = $request->math_h;
        $get_data->total_math = $request->total_math;
        $get_data->stu = $request->stu;
        $get_data->sci = $request->sci;
        $get_data->total = $request->total;
        $get_data->totalarr = $request->totalarr;

        $get_data->save();
        return response()->json(['get_data' => $get_data, 'mes' => 'تم تعديل درجات الطالب'], 200);
    }



    // طباعة كشوف الناجين والراسبون 
    public function GetCertifi(Request $request)
    {

        // $name = Studen::where('school_id', $request->id)->where('abs_2', 1)->orderBy('scur_number', 'asc')->with('Mange')->get()->groupBy('school_id');
        $name = Studen::where('abs_2', 1)->orderBy('scur_number', 'asc')->with('Mange')->get()->groupBy('school_id');
        return response()->json($name, 200);
    }
    public function getCert_success_2(Request $request)
    {

        // $name = Studen::where('school_id', $request->id)->where('abs_2', 1)->orderBy('scur_number', 'asc')->with('Mange')->get()->groupBy('school_id');
        $name = Studen::where('abs_2', 0)->orderBy('scur_number', 'asc')->with('Mange')->get()->groupBy('school_id');
        return response()->json($name, 200);
    }
    // نهاية طباعة كشوف الناجين والراسبون 

    public function getCert_stecker(Request $request)
    {

        $name = Studen::where('sitting_number', $request->id)->where('abs_2', 0)->get();
        return response()->json($name, 200);
    }


    public function TopTen(Request $request)
    {
        // $name = Studen::where('school_id', 1)->orderBy('total', 'desc')->where('note', 1)->take(10)->get();
        $name1 = Studen::where('abs_2', 0)->where('gender_id', 1)->orderBy('total', 'asc')
            ->selectRaw('total  AS total, count(*) AS count, gender_id AS gender_id, count(*) AS gender')
            ->groupBy('total')->get(['total', 'gender_id']);

        $name2 = Studen::where('abs_2', 0)->where('gender_id', 2)->orderBy('total', 'asc')
            ->selectRaw('total  AS total, count(*) AS count, gender_id AS gender_id, count(*) AS gender')
            ->groupBy('total')->get(['total', 'gender_id']);

        $name = $name1->merge($name2)->all();
        return response()->json($name, 200);
    }


    public function countGroup(Request $request)
    {
        $name = Studen::where('group', $request->id)->whereBetween('ar', [-1, 39])->orderBy('scur_number', 'asc')->where('note', 0)->get();


        return response()->json($name, 200);
    }
}
