<template>
<div>

    <div class="row">
        <div class="col-sm-12 d-print-none">
            <div class="card" style="min-height: 304px;">
                <div class="card-block">
           
                    <div class="d-print-none">
                        <div class="col-sm-6">

                        <input v-model="form.id" @keypress.13=" GetDataStudentBySchools" type="text" class="form-control"/>
                        </div>

                        <!-- <button @click=" GetDataStudentBySchools"> ok !</button> -->
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" v-for="(studentSchools,index)  in students[1]" style="page-break-after: always;">

        <div class="col-sm-12">

            <!-- {{students.length}} -->
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <td id="tg" colspan="3">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <p class="m fonts"> محافظة شمال سيناء</p>
                                    <p class="m fonts">مديرية التربية والتعليم </p>
                                    <p class="m fonts"> لجنة النظام والمراقبة</p>

                                </div>
                                <div class="col-sm-7">
                                    <h4 class="text-center fonts">كشــــف مناداة</h4>
                                    <h5 class="text-center fonts">إمتحان شهادة إتمام الدراسة بمرحلة التعليم اﻻساسى</h5>
                                    <div class="a">

                                    </div>
                                </div>
                                <div class="col-sm-2 ">
                                    <p class="text-center m fonts">الفصل الدراسى الثانى</p>
                                    <h5 class="text-center m line fonts">2021</h5>

                                    <!-- <div class="d fonts">نظامى</div> -->

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-2">
                                    <h5 class="text-left line">اسم اللجنــــة :</h5>
                                    <h5 class="text-left line">اسم المدرسة :</h5>
                                </div>
                                <div class="col-sm-8">

                                    <!-- <h5 class="text-right line">{{school.commission}}</h5> -->
                                    <h5 class="text-right line">{{studentSchools[0].committee.committee_name}} <span style="padding-left: 5px;float: left;">{{studentSchools[0].committee.id}}</span></h5>
                                    <h5 class="text-right line">{{studentSchools[0].school_name}} <span style="float: left;">{{index}}</span></h5>
                                </div>
                                <div class="col-sm-2">
                                    <h5 class="text-center line customb">نظامى</h5>
                                    <!-- <h5 class="text-left line">اسم اللجنــــة :</h5> -->
                                    <!-- <h5 class="text-center" style="margin:8px">{{school.id}}</h5> -->
                                </div>

                            </div>
                        </td>

                    </tr>

                    <tr>
                        <th class="text-center fonts" style="width:20%; font-size: 23px; border: 4px solid;">رقم الجلوس</th>
                        <th class="text-center fonts" style="font-size: 23px;border: 4px solid; ">اﻻسم</th>
                        <th class="text-center fonts" style="width:20%; font-size: 23px; border: 4px solid;">الديانة</th>

                    </tr>

                </thead>

                <tbody>
                    <tr v-for="studentSchool  in studentSchools" style="line-height: 12px; font-size: 30px;font-weight: 900; ">
                        <th class="text-center" scope="row" style="font-size: 23px; border: 1px solid;">
                            <!-- {{index +1}} -->
                            {{studentSchool.sitting_number}}
                            <!-- <h5>{{student.sitting_number}}</h5> -->
                        </th>
                        <td class="text-right" style="font-family: 'sultan' !important; font-size: 25px; border: 1px solid;">
                            {{studentSchool.student_name}} <span style="float: left;" v-if="studentSchool.marg_code">دمج : {{studentSchool.merge.name}}</span>
                            <!-- <h5>{{student.student_name}}</h5> -->
                        </td>
                        <td class="text-center" style="font-size: 23px; border: 1px solid;">
                            {{studentSchool.religion.name}}

                        </td>

                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <td>التوقيع</td>
                        <td>رئيس الكنترول</td>
                    </tr>
                </tfoot>

            </table>

        </div>
    </div>
    <!-- <div class="row">

            <div class="col-md-6 offset-md-3 text-center" id="borderDemo" >مع مراعاة ان اﻻسماء المظللة  طلاب دمج</div>
            </div> -->
    <br />
    <br />
    <br />

    <div style="page-break-before: always;"></div>

    <div class="row" v-for="(student,index)  in students[2]" style="page-break-after: always;">

        <div class="col-sm-12 ">

            <!-- {{students.length}} -->
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <td id="tg" colspan="3">
                            <div class="row">
                                <div class="col-sm-3 text-right">
                                    <p class="m fonts"> محافظة شمال سيناء</p>
                                    <p class="m fonts">مديرية التربية والتعليم </p>
                                    <p class="m fonts"> لجنة النظام والمراقبة</p>

                                </div>
                                <div class="col-sm-7">
                                    <h4 class="text-center fonts">كشــــف مناداة</h4>
                                    <h5 class="text-center fonts">إمتحان شهادة إتمام الدراسة بمرحلة التعليم اﻻساسى</h5>
                                    <div class="a">

                                    </div>
                                </div>
                                <div class="col-sm-2 ">
                                    <p class="text-center m fonts">الفصل الدراسى الثانى</p>
                                    <h5 class="text-center m line fonts">2021</h5>

                                    <!-- <div class="d fonts">نظامى</div> -->

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-sm-2">
                                    <h5 class="text-left line">اسم اللجنــــة :</h5>
                                    <h5 class="text-left line">اسم المدرسة :</h5>
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="text-right line">{{student[0].committee.committee_name}} <span style="padding-left: 5px;float: left;">{{student[0].committee.id}}</span></h5>
                                    <h5 class="text-right line">{{student[0].school_name}} <span style="float: left;">{{index}}</span></h5>
                                    <!-- <h5 class="text-right line">{{school.school_name}}</h5> -->
                                    <!-- <h5 class="text-right line">{{school.school_name}}</h5> -->
                                </div>
                                <div class="col-sm-2">

                                    <h5 class="text-center line customb">منازل</h5>
                                </div>

                            </div>
                        </td>

                    </tr>

                    <tr>
                        <th class="text-center fonts" style="width:20%; font-size: 23px; border: 4px solid;">رقم الجلوس</th>
                        <th class="text-center fonts" style="font-size: 23px;border: 4px solid; ">اﻻسم</th>
                        <th class="text-center fonts" style="width:20%; font-size: 23px; border: 4px solid;">الديانة</th>

                    </tr>

                </thead>

                <tbody>

                    <!-- {{student}} -->
                    <tr v-for="studentone  in student" style="line-height: 12px; font-size: 30px;font-weight: 900; ">
                        <th class="text-center" scope="row" style="font-size: 23px; border: 1px solid;">
                            {{studentone.sitting_number}}
                        </th>
                        <td class="text-right" style="font-family: 'sultan' !important; font-size: 25px; border: 1px solid;">
                            {{studentone.student_name}}

                        </td>
                        <td class="text-center" style="font-size: 23px; border: 1px solid;">
                            {{studentone.religion.name}}

                        </td>

                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <td>التوقيع</td>
                        <td>رئيس الكنترول</td>
                    </tr>
                </tfoot>

            </table>

            <div style="page-break-after: always;"></div>
        </div>

    </div>

    <!-- </div> -->

</div>
</template>

<script>
export default {
    data() {
        return {
            school: '',
            students: [],
            form: {
                id: '',
            }
        }
    },
    mounted() {

    },

    methods: {
        GetDataStudentBySchools() {
            axios.post('/student_by_committ', this.form).then(res => {
                this.students = res.data.students;
                this.school = res.data.getSchooland_commiss[0];
            }).catch(e => {
                console.log('error');
            })
        },

        open() {
            window.open('/printpage/#/print_student_by_school', "_blank");
        }
    },

}
</script>

<style lang="scss" scoped>
// @media print {
//     .article {
//         page-break-after: always !important;
//     }
// }

// @font-face {
//     font-family: 'sultan';
//     // src: url('/front-end/sultan/sultan-medium.TTF') format('ttf'),
//     src: url('/front-end/ArbFonts/ArbFONTS-BoutrosNewsH1-Bold.ttf') format('woff2'),
//         /* Internet Explorer */
//         //  url('/front-end/sultan/sultan boold.ttf') format('ttf'), /* Super Modern Browsers */
//         //  url('./fonts/SFAtarianSystem.ttf') format('woff'), /* Pretty Modern Browsers */
//         //  url('./fonts/SFAtarianSystem.ttf')  format('truetype'), /* Safari, Android, iOS */
//         //  url('./fonts/SFAtarianSystem.ttf') format('svg'); /* Legacy iOS */
// }

@page {
    // margin: 1.2cm;
    // margin-bottom: 2cm;
}

* {
    font-family: 'sans-serif';
    color: black !important;
    font-weight: bolder;
}

.fonts {
    font-family: 'Tajawal', sans-serif !important;
    font-size: 18px;
}

.fonts1 {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 21px !important;
}

.d {
    padding: 6px;
    text-align: center;
    background-color: rgb(143, 143, 143);
    width: 128px;
    margin-right: 40px;
}

.s {
    padding-right: 59px;
    padding-top: 19px;
}

.a {
    padding-top: 4px;
}

p {
    margin-top: 0 !important;
    margin-bottom: 0rem !important;
    font-weight: 900 !important;
}

.h5,
h5 {
    font-size: 23px !important;
    font-weight: bolder !important;

}

.h4,
h4 {
    font-size: 37px !important;
    font-weight: 900 !important;
}

.line {
    text-decoration: underline;
    font-weight: bolder !important;
    font-size: 23px !important;
    font-family: 'sultan' !important;
    margin-top: 8px;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(255, 255, 255);
    color: white;
    text-align: center;
}

// table, th, td {
//   border: 1px solid black !important;
//   font-family: 'sultan'!important;
//   font-size: 20px;

// }
.customb {
    background-color: gainsboro;
    border: 3px dashed #000000;
    border-radius: 7px;
    padding: 3px;
}

table {
    border-collapse: separate !important;

    border-spacing: 0px 3px !important;
}

#borderDemo {
    border: 3px dashed #000000;
    border-radius: 0px 8px 0px 8px;
    background-color: #929292;
}

.abs {

    background: rgb(124, 124, 124) !important;
}
</style>
