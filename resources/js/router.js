import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import UploadPic from "./components/UploadPictuer/UploadPic";

import review from "./components/student/index";
import subject from "./components/subject/index";
import Re_number from "./components/settings/reNumberScur";
import print_committ_first from "./components/printsReport/committ_first";
import print_committ_second from "./components/printsReport/committ_second";
import print_student_by_school from "./components/printsReport/student_by_school";
import check from "./components/check/CheckData";
import checkSubjectFail from "./components/check/CheckSubjectFail";
import checkSubjectgropuCount from "./components/check/chuck_count_group";
import addDegreeSubjectFail from "./components/check/add_degree_number_subject_faill";

import count from "./components/printsReport/count";
import committeSchools from "./components/printsReport/counCommittee";
import lableSchool from "./components/printsReport/lableScool";
import Abs_Student from "./components/abs/student_abs"
import ABS from "./components/abs/countAbs"
import total from "./components/printsReport/sitting_total"
import check_student_query from "./components/check/query_students"

import print_final from "./components/printsReport/print_final"
import print_final_school from "./components/printsReport/print_final_stander"
import showSchool_students from "./components/printsReport/print_student_school"
import count_subjects from "./components/printsReport/print_count_subject"
import countTotal from "./components/printsReport/total_count"
import CreateSittingStudents from "./components/printsReport/create_sitting_student"
import SubjectStudents from "./components/printsReport/subject_student"
import SubjectStudents_A4 from "./components/printsReport/subject_fail_A4"
import print from "./components/printsReport/print"
import print_faill_A4_2 from "./components/printReport_2/listStudent_and_faill_subject"
import print_stecker_A4_1_2 from "./components/certifications/print_stecker"


import natega_faill_2 from "./components/print_natega/natega_faill_2"
import natega_success_2 from "./components/print_natega/natega_success_2"
// print label School 

import print_label_school from "./components/stecker/label_school"



// export const EventBus = new Vue();
export default new VueRouter({
    routes: [
        { path: "/UploadPic", component: UploadPic },
        { path: "/review", component: review },
        { path: "/subject", component: subject },
        { path: "/Re_number", component: Re_number },
        { path: "/print_committ_first", component: print_committ_first },
        { path: "/print_committ_second", component: print_committ_second },
        { path: "/check", component: check },
        { path: "/checkSubjectgropuCount", component: checkSubjectgropuCount },
        { path: "/count", component: count },
        { path: "/checkSubjectFail", component: checkSubjectFail },
        { path: "/addDegreeSubjectFail", component: addDegreeSubjectFail },
        { path: "/count_committe_schools", component: committeSchools },
        { path: "/lable-school", component: lableSchool },
        { path: "/student_abs", component: Abs_Student },
        { path: "/abs", component: ABS },
        { path: "/total", component: total },
        { path: "/check_student_query", component: check_student_query },
        { path: "/print_final", component: print_final },
        { path: "/print_final_school", component: print_final_school },
        { path: "/showSchool_students", component: showSchool_students },
        { path: "/count_subjects", component: count_subjects },
        { path: "/countTotal", component: countTotal },
        { path: "/print_student_by_school", component: print_student_by_school },
        { path: "/CreateSittingStudents", component: CreateSittingStudents },
        { path: "/print_subject_student", component: SubjectStudents },
        { path: "/print", component: print },


        { path: "/SubjectStudents_A4", component: SubjectStudents_A4 },
        { path: "/print_faill_A4_2", component: print_faill_A4_2 },
        { path: "/print_stecker_A4_1_2", component: print_stecker_A4_1_2 },

        // طباعة نتيجة الراسبونالدور الثانى
        { path: "/print_natega_faill_2", component: natega_faill_2 },
        { path: "/natega_success_2", component: natega_success_2 },

        
        { path: "/print_label_school", component: print_label_school },



    ]
    //mode:'history',
    // mode: 'abstract',
});
