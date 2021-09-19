<template>
<div>
    <div class="col-sm-6 d-print-none">
        <h4 class="sub-title text-right ">اختيار المجموعة</h4>
        <div class="row">
            <div class="col-sm-12">
                <div class="input-group">
                    <select v-model="form.group" @change="getResults" name="select" class="form-control form-control-primary">
                        <option :value="group.id" v-for="group in groups">{{group.group_name}}</option>

                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row" v-for="(cu,index) in students">
        <div class="col-sm-12">

            <h1 class="text-center">كشف مراجعة درجات مادة اللغة العربية</h1>
        </div>
        <div class="col-sm-12">

            <h3 class="text-center">المجموعة _ {{form.group}} المظروف _ {{index+1}}</h3>
        </div>

        <div class="col-sm-6" v-for="(col,index) in 2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center abs">الرقم السرى</td>
                        <td class="text-center">درجة المادة</td>
                        <td class="text-center">التعديل</td>
                    </tr>
                </thead>

            </table>
        </div>

        <div class="col-sm-6" v-for="student in cu">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" style="width:40%" :class="student.ar == 'غـ' ? 'abs':''">{{student.scur_number | scur}}</th>
                        <th class="text-center" style="width:36%" :class="student.ar == 'غـ' ? 'abs':''">{{student.ar |toArabic}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-6">
            توقيع مسئول الغرفة
        </div>
        <div class="col-sm-6">

            توقيع مسئول المجموعة
        </div>
    </div>

    <div class="row" v-for="(cu,index) in students">
        <div class="col-sm-12">

            <h1 class="text-center">كشف مراجعة درجات مادة اللغة اﻻنجليزية</h1>
        </div>
        <div class="col-sm-12">

            <h3 class="text-center">المجموعة _ {{form.group}} المظروف _ {{index+1}}</h3>
        </div>

        <div class="col-sm-6" v-for="(col,index) in 2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center abs">الرقم السرى</td>
                        <td class="text-center">درجة المادة</td>
                        <td class="text-center">التعديل</td>
                    </tr>
                </thead>

            </table>
        </div>

        <div class="col-sm-6" v-for="student in cu">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" style="width:40%" :class="student.en == 'غـ' ? 'abs':''">{{student.scur_number | scur}}</th>
                        <th class="text-center" style="width:36%" :class="student.en == 'غـ' ? 'abs':''">{{student.en |toArabic}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-6">
            توقيع مسئول الغرفة
        </div>
        <div class="col-sm-6">

            توقيع مسئول المجموعة
        </div>
    </div>
    <div class="row" v-for="(cu,index) in students">
        <div class="col-sm-12">

            <h1 class="text-center">كشف مراجعة درجات مادة الجبر</h1>
        </div>
        <div class="col-sm-12">

            <h3 class="text-center">المجموعة _ {{form.group}} المظروف _ {{index+1}}</h3>
        </div>

        <div class="col-sm-6" v-for="(col,index) in 2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center abs">الرقم السرى</td>
                        <td class="text-center">درجة المادة</td>
                        <td class="text-center">التعديل</td>
                    </tr>
                </thead>

            </table>
        </div>

        <div class="col-sm-6" v-for="student in cu">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" style="width:40%" :class="student.math_g == 'غـ' ? 'abs':''">{{student.scur_number | scur}}</th>
                        <th class="text-center" style="width:36%" :class="student.math_g == 'غـ' ? 'abs':''">{{student.math_g |toArabic}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-6">
            توقيع مسئول الغرفة
        </div>
        <div class="col-sm-6">

            توقيع مسئول المجموعة
        </div>
    </div>
    <div class="row" v-for="(cu,index) in students">
        <div class="col-sm-12">

            <h1 class="text-center">كشف مراجعة درجات مادة الهندسة</h1>
        </div>
        <div class="col-sm-12">

            <h3 class="text-center">المجموعة _ {{form.group}} المظروف _ {{index+1}}</h3>
        </div>

        <div class="col-sm-6" v-for="(col,index) in 2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center abs">الرقم السرى</td>
                        <td class="text-center">درجة المادة</td>
                        <td class="text-center">التعديل</td>
                    </tr>
                </thead>

            </table>
        </div>

        <div class="col-sm-6" v-for="student in cu">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" style="width:40%" :class="student.math_h == 'غـ' ? 'abs':''">{{student.scur_number | scur}}</th>
                        <th class="text-center" style="width:36%" :class="student.math_h == 'غـ' ? 'abs':''">{{student.math_h |toArabic}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-6">
            توقيع مسئول الغرفة
        </div>
        <div class="col-sm-6">

            توقيع مسئول المجموعة
        </div>
    </div>

    <div class="row" v-for="(cu,index) in students">
        <div class="col-sm-12">

            <h1 class="text-center">كشف مراجعة درجات مادة العلوم</h1>
        </div>
        <div class="col-sm-12">

            <h3 class="text-center">المجموعة _ {{form.group}} المظروف _ {{index+1}}</h3>
        </div>

        <div class="col-sm-6" v-for="(col,index) in 2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center abs">الرقم السرى</td>
                        <td class="text-center">درجة المادة</td>
                        <td class="text-center">التعديل</td>
                    </tr>
                </thead>

            </table>
        </div>

        <div class="col-sm-6" v-for="student in cu">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" style="width:40%" :class="student.sci == 'غـ' ? 'abs':''">{{student.scur_number | scur}}</th>
                        <th class="text-center" style="width:36%" :class="student.sci == 'غـ' ? 'abs':''">{{student.sci |toArabic}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-6">
            توقيع مسئول الغرفة
        </div>
        <div class="col-sm-6">

            توقيع مسئول المجموعة
        </div>
    </div>
    <div class="row" v-for="(cu,index) in students">
        <div class="col-sm-12">

            <h1 class="text-center">كشف مراجعة درجات مادة الدراسات</h1>
        </div>
        <div class="col-sm-12">

            <h3 class="text-center">المجموعة _ {{form.group}} المظروف _ {{index+1}}</h3>
        </div>

        <div class="col-sm-6" v-for="(col,index) in 2">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td class="text-center abs">الرقم السرى</td>
                        <td class="text-center">درجة المادة</td>
                        <td class="text-center">التعديل</td>
                    </tr>
                </thead>

            </table>
        </div>

        <div class="col-sm-6" v-for="student in cu">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th class="text-center" style="width:40%" :class="student.stu == 'غـ' ? 'abs':''">{{student.scur_number | scur}}</th>
                        <th class="text-center" style="width:36%" :class="student.stu == 'غـ' ? 'abs':''">{{student.stu |toArabic}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>

        </div>

        <div class="col-sm-6">
            توقيع مسئول الغرفة
        </div>
        <div class="col-sm-6">

            توقيع مسئول المجموعة
        </div>
    </div>

    <!-- <div class="col-sm-12" v-for="i in Math.ceil(students.length / 5)">

            <span v-for="item in students.slice((i - 1) * 5, i * 5)">
                {{item.sitting_number}}
            </span>

    
        </div> -->

    <!-- <div class="col-sm-12" >
        <table>
         <tr>
             <th>رقم السرى</th>
             <th>اللغة العربية</th>
          
         </tr>
           
        
                <tr  v-for="student in students">
                    <td> {{student.scur_number}}</td>
                    <td>{{student.ar}}</td>
                </tr>
      
        </table>
        </div>
    </div> -->
</div>
</template>

<script>
import { toArabic } from 'arabic-digits';
export default {
    data() {
        return {
            students: [],
            groups: [],
            form: {}
        }
    },

    mounted() {
        axios.get('/get_data_group').then(res => {
            this.groups = res.data;
        })

        Vue.filter('scur', function (value) {
            return value.slice(-3);
        });
        Vue.filter('toArabic', function (value) {
            return toArabic(value).replace(".", ",");
        })
    },
    methods: {
        getResults() {
            axios.get('/showStudent/' + this.form.group).then(res => {
                this.students = res.data
            });
        }
    },
}
</script>

<style lang="scss" scoped>
body {
    font-size: 24px !important;
}

table,
th,
td {
    border: 1px solid black !important;
    padding: 5px;
}

table {
    border-spacing: 15px !important;
}

.table {
    width: 100%;
    margin-bottom: 5px !important;
    color: #000000 !important;
}

.abs {
    color: rgb(0, 0, 0);
    background: rgb(124, 124, 124) !important;
}
</style>
