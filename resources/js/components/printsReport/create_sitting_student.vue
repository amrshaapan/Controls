<template>
<div class="container">
<table>
    <tr v-for="student in students">


    <div class="row boxborderrow " style="margin-bottom : 26px"  >
        <div class="col-2 boxborder text-center ">
            <p class="font">رقم الجلوس</p>
            <div class="boxsetting">

            <p class="fontsetting">{{student.sitting_number}}</p>
            </div>
        </div>
        <div class="col-8 text-center">
            <p>محافظة شمال سيناء</p>
            <p>مديرية التربية والتعليم</p>
            <p>لجنة النظام والمراقبة لأمتحان الشهادة الإعدادية للعام الدراسى 2020 - 2021م</p>
            <div class="box">بطاقة إخطار برقم جلوس طالب - الدور الثانى</div>

        </div>
        <div class="col-2 boxborder text-center">
            <p>رئيس لجنة </p>
            <p>النظام و المراقبة</p>
            <p style="font-size: 13px !important;">أ/عادل يحيي محمد</p>
        </div>
 
        <div class="col-12 b">
     


            <table class="table table-borderless fonts">
                <tbody>
                    <tr>
                        <td class="text-center" style="width:15%">اسم الطالب</td>
                        <td class="text-right " style="width:52%">
                            <div class="br text-right pr-2" style="font-size: 22px;">{{student.student_name}}</div>
                        </td>
                        <td class="text-left" style="width:14%">حالة قيد الطالب</td>
                        <td class="text-center">
                            <div class="br " style="font-size: 22px;">{{student.system_id == 1 ? 'نظامى' : 'منازل'}}</div>
                        </td>

                    </tr>
                    <tr >
                        <td class="text-center" style="width:15%">المدرسة</td>
                        <td  class="text-right">
                            <div class="br pr-2" style="font-size: 22px;">{{student.school_name}}</div>
                        </td>
                             <td class="text-left" style="width:14%">اﻻدارة التعليمية</td>
                        <td class="text-center">
                            <div class="br " style="font-size: 22px;">{{student.mange.mange_name}}</div>
                        </td>
                        
                    </tr>
                    <tr style="height: 1px;">
                        <td colspan="3" ></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="width:15%">اللجنــــــة</td>
                        <td  class="text-right">
                            <div class="br text-right pr-2" style="font-size: 22px;">{{student.committee.committee_name}}</div>
                        </td>
                        
                   
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 b">
         
            <table class="table table-bordered fonts text-center">
                <thead>
                    <tr>
                        <th>الثلاثاء <p class="text-center">2021/8/10</p></th>
                        <th>الاربعاء <p class="text-center">2021/8/11</p></th>
                        <th>السبت <p class="text-center">2021/8/14</p></th>
                        <th>الاحد <p class="text-center">2021/8/15</p></th>
                        <th>الاثنين <p class="text-center">2021/8/16</p></th>
                       <th>الثلاثاء <p class="text-center">2021/8/17</p></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td :class="student.ar <= 39 ? 'back':'' || student.ar === 'غـ' ? 'back' : ''"> {{ student.ar <= 39 ? 'عربى':'' || student.ar === 'غـ' ? 'عربى' : ''}}</td>
                        <td :class="student.total_math <= 29 ? 'back':'' "> {{ student.total_math <= 29 ? 'جبر':'' || student.total_math === 'غـ' ? 'جبر' : ''}} </td>
                        <td :class="student.en <= 29 ? 'back':'' || student.en === 'غـ' ? 'back' : ''">{{ student.en <= 29 ? 'انجليزى':'' || student.en === 'غـ' ? 'انجليزى' : ''}}</td> 
                        <td :class="student.total_math <= 29 ? 'back':''"> {{ student.total_math <= 29 ? 'هندسة':'' || student.total_math === 'غـ' ? 'هندسة' : ''}}</td>
                        <td :class="student.sci <= 19 ? 'back':'' || student.sci === 'غـ' ? 'back' : ''"> {{ student.sci <= 19 ? 'علوم':'' || student.sci === 'غـ' ? 'علوم' : ''}}</td>
                        <td :class="student.stu <= 19 ? 'back':'' || student.stu === 'غـ' ? 'back' : '' "> {{ student.stu <= 19 ? 'دراسات':'' || student.stu === 'غـ' ? 'دراسات' : ''}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 text-center fonts" id="borderDemo">
            الطالب له حق دخول الدور الثانى فى المواد المظلل عليها فقط
        </div>

    </div>

    <hr style="margin-bottom : 25px">
    </tr>
</table>
</div>
</template>

<script>
export default {
    data() {
        return {
            students: [],
        }
    },
    mounted() {
        this.GetDataStudent();
    },
    methods: {
        GetDataStudent() {
            axios.get('/student_by_settings').then(res => {
                this.students = res.data.students;

            }).catch(e => {
                console.log('error');
            })
        }
    },

}
</script>

<style lang="scss" scoped>
// @page {
//     // margin: .5cm;
//     margin-left: 1cm !important;
//     margin-right: 1cm !important;
//     // margin-bottom: 2cm;
// }

p {
    margin-top: 0 !important;
    margin-bottom: 0rem !important;
    font-weight: 900 !important;
    font-size: 16px !important;
    font-family: 'Tajawal', sans-serif !important;
}

.box {
    -webkit-box-shadow: 3px 3px 0px 4px rgba(0, 0, 0, 0.89) !important;
    box-shadow: 3px 3px 0px 4px rgba(0, 0, 0, 0.89) !important;
    font-family: 'Tajawal', sans-serif !important;
    font-weight: 900 !important;
    font-size: 25px;
}

.boxborder {
    border: 1px solid #000000;
    padding: 17px;
}

.boxborderrow {
    border: 1px solid #000000;
    padding: 5px;
}

.font {
    font-size: 22px !important;
}

.b {
    padding-right: 0px !important;
    padding-left: 0px !important;
    margin-top: 10px;
}

.br {

    border: 1px solid;
}

.table td,
.table th {
    padding: 1px !important;
    vertical-align: top !important;
    border-top: unset !important;
}

.fonts {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 18px !important;
    color: #000000 !important;
}

#borderDemo {
    border: 3px dotted #000000;
    background-color: #bdbdbd;
}

.back {
    background-color: #888888 !important;
}

.boxsetting{
     border: 3px dotted #000000;
    
      
    
}
.fontsetting{
  font-family: 'sultan', sans-serif !important;
  font-size: 35px !important;
}

hr {

    border: 0;
    border-top: 2px dashed !important; 
}
</style>
