<template>
<div>
  <form >
    <div class="card" >
        <div class="card-block">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <p class="txt-highlight text-center m-t-20">لمراجعة بيانات الطالب والتأكد من سلامة البيانات برجاء كتابة الرقم القومى او كود الطالب اولا
                    </p>
                </div>
            </div>

            <div class="row seacrh-header">
                <div class="col-lg-4 offset-lg-4 offset-sm-3 col-sm-6 offset-sm-1  ">
                    <div class="input-group input-group-button input-group-primary">
                        <input type="text" class="form-control" placeholder="الرقم القومى الخاص بالطالب">
                        <!-- <button class="btn btn-primary input-group-addon" id="basic-addon1">بحث</button>
                         <button type="button" onclick="printJS({ printable: 'printJS-form', type: 'html', header: 'PrintJS - Form Element Selection' })">
    Print Form
 </button> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
  </form>
    <div class="page-body" id="printJS-form">
        <div class="row">
            <div class="col-sm-12">
                <!-- Product edit card start -->
                <div class="card">
                    <div class="card-header">
                        <h5>مراجعة بيانات الطالب</h5>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="product-edit">
                                    <ul class="nav nav-tabs nav-justified md-tabs " role="tablist" >
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home7" role="tab" aria-selected="true">
                                                بيانات شخصية
                                                <div class="f-20">
                                                    <i class="icofont icofont-edit"></i>
                                                </div>
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#profile7" role="tab" aria-selected="false">
                                                بيانات مدرسية
                                                <div class="f-20">
                                                    <i class="icofont icofont-document-search"></i>
                                                </div>
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages7" role="tab" aria-selected="false">
                                                تنبيهات
                                                <div class="f-20">
                                                    <i class="icofont icofont-notification"></i>

                                                </div>
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#messages8" role="tab" aria-selected="false">
                                                معلومات خاصة
                                                <div class="f-20">
                                                    <i class="icofont icofont-comment"></i>
                                                </div>
                                            </a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home7" role="tabpanel">
                                            <form class="md-float-material card-block">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icofont icofont-ui-user"></i></span></div>
                                                            <input type="text" class="form-control" placeholder="اﻻسم بالكامل">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icofont icofont-man-in-glasses"></i></span></div>
                                                            <input v-model="no_id" type="text" class="form-control" placeholder="الرقم القومى">
                                                            <button class="btn btn-primary input-group-addon" @click.prevent="Calc(no_id)">تحديث</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <div class="col-sm-4 ">
                                                                <select v-model="dateday" name="select" class="form-control ">
                                                                    <option value="opt1">Day</option>
                                                                    <option value="01">01</option>
                                                                    <option value="02">02</option>
                                                                    <option value="03">03</option>
                                                                    <option value="04">04</option>
                                                                    <option value="05">05</option>
                                                                    <option value="06">06</option>
                                                                    <option value="07">07</option>
                                                                    <option value="08">08</option>
                                                                    <option value="09">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                    <option value="13">13</option>
                                                                    <option value="14">14</option>
                                                                    <option value="15">15</option>
                                                                    <option value="16">16</option>
                                                                    <option value="17">17</option>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                </select>
                                                            </div>

                                                            <div class="col-sm-4 ">
                                                                <select v-model="dateMonth" name="select" class="form-control ">
                                                                    <option value="01">يناير</option>
                                                                    <option value="02">فبراير</option>
                                                                    <option value="03">مارس</option>
                                                                    <option value="04">ابريل</option>
                                                                    <option value="05">مايو</option>
                                                                    <option value="06">يونية</option>
                                                                    <option value="07">يوليو</option>
                                                                    <option value="08">اغسطس</option>
                                                                    <option value="09">سبتمبر</option>
                                                                    <option value="10">اكتوبر</option>
                                                                    <option value="11">نوفمبر</option>
                                                                    <option value="12">ديسمبر</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <select v-model="dateYear" name="select" class="form-control ">
                                                                    <option>Year</option>
                                                                    <option>2005</option>
                                                                    <option>2006</option>
                                                                    <option>2007</option>
                                                                    <option>2008</option>
                                                                    <option>2009</option>
                                                                    <option>2010</option>
                                                                    <option>2019</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group row">
                                                            <div class="col-sm-4 ">
                                                                <input v-model="day" type="text" class="form-control" placeholder="يوم">
                                                            </div>
                                                            <div class="col-sm-4 ">
                                                                <input v-model="month" type="text" class="form-control" placeholder="شهر">
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <input v-model="year" type="text" class="form-control" placeholder="سنة">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <select v-model="city" name="select" class="form-control form-control-primary">
                                                                <option value="1">محل الميلاد</option>
                                                                <option v-bind:value="city.code" v-for="city in cites" :key="city.id">{{ city.name_city }}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            </div>
                                                            <select v-model="gender" name="select" class="form-control form-control-primary">
                                                                <option value="opt1">نوع الطالب</option>
                                                                <option value="1">ذكر </option>
                                                                <option value="2">انثى </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="text-center m-t-20">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                                            </button>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light">Discard
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="profile7" role="tabpanel">
                                            <form class="md-float-material card-block">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icofont icofont-barcode"></i></span></div>
                                                            <input type="text" class="form-control" placeholder="كود الطالب">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icofont icofont-id-card"></i></span></div>
                                                            <input type="text" class="form-control" placeholder="رقم الجلوس">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icofont icofont-all-caps"></i></span></div>
                                                            <input type="text" class="form-control" placeholder="اﻻدارة التابع لها">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="icofont icofont-underline"></i></span></div>
                                                            <input type="text" class="form-control" placeholder="اسم المدرسة">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="input-group">

                                                            <select name="select" class="form-control form-control-primary">
                                                                <option value="opt1">حالة الطالب</option>
                                                                <option value="opt2">مستجد </option>
                                                                <option value="opt3">باقى </option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">

                                                        <select name="select" class="form-control form-control-primary">
                                                            <option value="opt1">المرحلة التعليمية</option>
                                                            <option value="opt2">2
                                                            </option>
                                                            <option value="opt3">3
                                                            </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <select name="select" class="form-control form-control-primary">
                                                            <option value="opt1">نوع المدرسة</option>
                                                            <option value="opt2">بنين </option>
                                                            <option value="opt3">بنات </option>
                                                            <option value="opt3">مشتركة </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="select" class="form-control form-control-primary">
                                                            <option value="opt1">انتساب الطالب</option>
                                                            <option value="opt2">نظامى </option>
                                                            <option value="opt3">منازل </option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="text-center m-t-20">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                            <button type="button" class="btn btn-warning waves-effect waves-light">Discard</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="messages7" role="tabpanel">
                                            <div class="md-float-material card-block">
                                                <div class="table-responsive m-t-20">
                                                    <table class="table m-b-0 f-14 b-solid requid-table">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th class="text-center">#</th>
                                                                <th class="text-center">Task</th>
                                                                <th class="text-center">Due Date</th>
                                                                <th class="text-center">Description</th>
                                                                <th class="text-center">Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center text-muted">



                                                            <tr>
                                                                <td>4</td>
                                                                <td>Allocated Resource</td>
                                                                <td> <i class="icofont icofont-ui-calendar"></i>&nbsp;
                                                                    28 December, 16</td>
                                                                <td>The standard Lorem Ipsum passage
                                                                </td>
                                                                <td>

                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="messages8" role="tabpanel">
                                            <div class="container">
                                                <div class="card-block">

                                                    <div class="m-t-10">
                                                        <div class="txt-primary f-18 f-w-600">
                                                           معلومات خاصة </div>

                                                    </div>

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icofont icofont-underline"></i></span></div>
                                                        <input type="text" class="form-control" placeholder="رقم اللجنة">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icofont icofont-man-in-glasses"></i></span></div>
                                                        <input type="text" class="form-control" placeholder="اسم اللجنة">
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="icofont icofont-email"></i></span></div>
                                                        <input type="text" class="form-control" placeholder="رقم السرى للطالب">
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
                                                        </button>
                                                        <button @click="checkArray"  class="btn btn-primary waves-effect waves-light">Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product edit card end -->

                <!-- <date-picker v-model="time1" editable="true" valueType="yyyy-mm-dd"></date-picker> -->

            </div>
        </div>
    </div>
</div>
</template>

<script>

var moment = require('moment');
export default {

    data() {
        return {
            time1: '',
            year: '',
            month: '',
            day: '',
            dateYear: '',
            dateMonth: '',
            dateday: '',
            gender: '',
            cites: [],
            city: 1,
            no_id: 20912232103079,

        }
    },
    mounted() {
        // this.$axios.$get('/api/cites').then(res => { this.cites = res.cites })
    },
    methods: {
        Calc(value) {

            const a = Number(value);
            const str_a = a.toString();

            var dateYears = Number('20' + str_a.slice(1, 3));

            var dateMonths = Number(str_a.slice(3, 5));
            var dateDays = str_a.slice(5, 7);

            var genders = Number(str_a.slice(12, 13)) % 2;
            var cites = Number(str_a.slice(7, 9));

            this.dateYear = dateYears
            this.dateMonth = dateMonths
            this.dateday = dateDays
            var date = dateYears + ',' + dateMonths + ',' + dateDays
            //  alert(date)
            var start = moment([date]);

            var end = moment([2020, 10, 1]);
            var years = end.diff(start, 'year');
            start.add(years, 'years');
            var months = end.diff(start, 'months');
            start.add(months, 'months');
            var days = end.diff(start, 'days');
            this.year = years;
            this.month = months;
            this.day = days;
            this.city = cites
            if (genders == 1) {
                this.gender = 1
            } else {
                this.gender = 2
            }

        },
            checkArray(num){
                // console.log(this.num);
                window.open('/printpage/', "_blank" );
                // , "width=400, height=400"
                var check = this.num.includes(4115);
                console.log(check); //returns true
        },
        NoId() {
            const a = 27912232103079;
            const str_a = a.toString();
            //  dateYears =  Number('19'+str_a.slice(1, 3));
            //  dateMonths =  Number(str_a.slice(3, 5));
            //  dateDays =  Number(str_a.slice(5, 7));

        }
    },

}
</script>

<style lang="scss" scoped>

</style>
