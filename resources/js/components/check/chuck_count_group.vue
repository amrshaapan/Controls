<template>

<div id="page">

    <div class="row">
        <div class="col-md-12 d-print-none">
            <div class="card" style="min-height: 304px;">
                <div class="card-block">
            
                    <div class="d-print-none">

                        <input v-model="form.id" @keypress.13="GetDataStudentBySchools" type="text" />

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-xl-12 ">

            <!-- {{students.length}} -->
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <td id="tg" colspan="3">
                            <div class="row">
                                <div class="col-3 col-md-3 col-xl-3 text-right">
                                    <p class="m fonts"> محافظة شمال سيناء</p>
                                    <p class="m fonts">مديرية التربية والتعليم </p>
                                    <p class="m fonts"> لجنة النظام والمراقبة</p>

                                </div>
                                <div class="col-7 col-md-7 col-xl-7">
                                    <h4 class="text-center fonts">كشــــف مراجعة عدد الورق </h4>
                                    <h5 class="text-center fonts">إمتحان شهادة إتمام الدراسة بمرحلة التعليم اﻻساسى</h5>
                                    <div class="a">

                                    </div>
                                </div>
                                <div class="col-2 col-md-2 col-xl-2 ">
                                    <p class="text-center m fonts">الدور الثانى</p>
                                    <h5 class="text-center m line fonts">2021</h5>
                                     <!-- <p class="m fonts">ادارة: العريش</p> -->
                                   
                                    <!-- <div class="d fonts">نظامى</div> -->

                                </div>

                            </div>
                            <div class="row">

                                <div class="col-2 col-md-2 col-xl-2">
                                    <!-- <h5 class="text-left line">اسم اللجنــــة :</h5> -->
                                    <h5 class="text-left line">رقم المجموعة :</h5>
                                </div>
                                <div class="col-8 col-md-8 col-xl-8">

                                    <!-- <h5 class="text-right line">{{school.commission}}</h5> -->
                                    <h5 class="text-right line">المجموعة_{{group.group}}<span style="padding-left: 5px;float: left;"> عدد _ {{students.length}} _ورقة </span></h5>
                                </div>
                                   <div class="col-2 col-md-2 col-xl-2">
                                   <h5 class="text-center line customb">اللغة العربية</h5>
                                    <!-- <h5 class="text-center" style="margin:8px">{{school.id}}</h5> -->
                                </div>

                            </div>
                        </td>

                    </tr>

                    <tr>
                        <th class="text-center fonts" style="width:20%; font-size: 23px; border: 4px solid;">السرى </th>
                        <th class="text-center fonts" style="font-size: 23px;border: 4px solid; ">بيان الورقة</th>
                        
                        <!-- <th class="text-center fonts" style="width:20%; font-size: 23px; border: 4px solid;">الديانة</th> -->

                    </tr>
          

                </thead>

                <tbody>
                    <tr  v-for="(student , index ) in students" style="line-height: 12px; font-size: 30px;font-weight: 900;  ">
                        <th class="text-center" scope="row" style="font-size: 23px; border: 1px solid;">
                             {{student.scur_number}}
                        
                        </th>
                        <td class="text-right" style="font-family: 'sultan' !important; font-size: 25px; border: 1px solid;">
                              <!-- <span class="badge badge-secondary" >  عربى</span> -->
                      <!-- <span class="badge badge-secondary">{{student.ar}}</span> -->
                        </td>
                        <!-- <td class="text-center" style="font-size: 23px; border: 1px solid;">
                            {{student.religion.name}}
                     
                        </td> -->

                    </tr>
                
                    

                </tbody>
          

            </table>
           
        </div>
    </div>
<br />
<br />
<br />

<div style="page-break-before: always;">

</div>




        <!-- </div> -->

</div>
</template>

<script>
export default {
    data() {
        return {
            group: '',
            students: [],
            studentsF: [],
            count: '',
            form: {
                id: '',
            }
        }
    },
    mounted() {

    },


    methods: {
        GetDataStudentBySchools() {
            
            axios.post('/countGroup', this.form).then(res => {
       
            
                this.students = res.data
                this.group = res.data[0]
            
                // console.log(this.studentsF);
            }).catch(e => {
                console.log('error');
            })
        },

        open(){
            window.open('/printpage/#/print_student_by_school', "_blank");
        }
    },

}
</script>

<style lang="scss" scoped>



@font-face {
    font-family: 'sultan';

    src: url('/front-end/ArbFonts/ArbFONTS-BoutrosNewsH1-Bold.ttf') format('woff2');

}
@font-face {
    font-family: 'jordan';

    src: url('/front-end/ArbFonts/ArbFONTS-Hacen-Jordan.ttf') format('woff2');
    font-weight: 900 !important

}

    
// #page {
//     // margin: 10cm;

//     // margin-bottom: 2cm;
// }

* {
    font-family: 'sans-serif';
    color: black !important;
    font-weight: bolder;
}

.fonts {
    font-family: 'jordan', sans-serif !important;
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
    font-size: 22px !important;
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
    font-size: 22px !important;
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
.customb{
    background-color: gainsboro;
    border: 3px dashed #000000;
    border-radius: 7px;
    padding: 3px;
}
table {
    border-collapse: separate !important;
 
    border-spacing: 0px 3px !important;
}
// tr.spaceUnder>td {
//   padding-bottom: 1em !important;
// }

</style>
