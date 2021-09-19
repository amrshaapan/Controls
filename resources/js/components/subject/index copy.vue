<template>
<div>
    <div class="row">
        <div class="col-sm-9">
            <div class="card" style="min-height: 304px;">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="txt-highlight text-center ">برجاء كتابة الرقم السرى للطالب والبحث ثم رصد درجة الطالب فى المادة
                            </h5>
                        </div>
                    </div>

                    <div class="row seacrh-header">
                        <div class="col-sm-6">
                            <h4 class="sub-title">اختيار المادة</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select v-model="formSearch.subject"  name="select" class="form-control form-control-primary">
                                            <option :value="subject.code" v-for="subject in subjects">{{subject.name}}</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="sub-title ">اختيار المجموعة</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select v-model="formSearch.group" @change="filterData" name="select" class="form-control form-control-primary">
                                            <option value="opt1">اختر المجموغة</option>
                                            <option value="a1">A1 </option>
                                            <option value="a2">A2 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row ">
                        <div class="col-sm-6">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input type="text" v-model="form.sitting_number" class="form-control" placeholder="الرقم السرى" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input @keypress.enter="degree()" v-model="form.degree" type="text" class="form-control" placeholder="درجة الطالب" />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card user-card2">
                <div class="card-block text-center">
                    <h6>رقم المجموعة</h6>
                    <div class="risk-rate">
                        <span><b>22</b></span>
                    </div>
                    <h5 class="m-b-10 m-t-10">{{form.sitting_number ? form.sitting_number : 'XXXXXX'}}</h5>

                    <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">

                        <div class="col m-t-15">
                            <h6 class="text-muted">من</h6>
                            <h6>{{firstNumber}}</h6>
                        </div>
                        <div class="col m-t-15 b-r-default">
                            <h6 class="text-muted">الى</h6>
                            <h6>{{lastNumber}}</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="card">
            <div class="card-block">
                <div class="row">

                    <div class="col-xl-6 col-md-12">

                        <div class="row per-task-block text-center">
                            <div class="col-4">
                                <div :data-label="`${total}`" class="radial-bar radial-bar-60 radial-bar-lg radial-bar-danger">
                                </div>
                                <h6 class="text-muted">اللغة العربية</h6>
                                <p class="text-muted">642</p>
                                <!-- <button class="btn btn-primary btn-round btn-sm">Manage</button> -->
                            </div>
                            <div class="col-4">
                                <div data-label="30%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-success">
                                </div>
                                <h6 class="text-muted">اللغة اﻻنجليزية</h6>
                                <p class="text-muted">495</p>
                                <!-- <button class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button> -->
                            </div>
                            <div class="col-4">
                                <div data-label="30%" class="radial-bar radial-bar-40 radial-bar-lg radial-bar-success">
                                </div>
                                <h6 class="text-muted">اللغة اﻻنجليزية</h6>
                                <p class="text-muted">495</p>
                                <!-- <button class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button> -->
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6 col-md-12">

                        <div class="row per-task-block text-center">
                            <div class="col-4">
                                <div :data-label="`${total}`" class="radial-bar radial-bar-60 radial-bar-lg radial-bar-danger">
                                </div>
                                <h6 class="text-muted">اللغة العربية</h6>
                                <p class="text-muted">642</p>
                                <!-- <button class="btn btn-primary btn-round btn-sm">Manage</button> -->
                            </div>
                            <div class="col-4">
                                <div data-label="95.5%" class="radial-bar radial-bar-100 radial-bar-lg radial-bar-success">
                                </div>
                                <h6 class="text-muted">اللغة اﻻنجليزية</h6>
                                <p class="text-muted">495</p>
                                <!-- <button class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button> -->
                            </div>
                            <div class="col-4">
                                <div data-label="98%" class="radial-bar radial-bar-98 radial-bar-lg radial-bar-success">
                                </div>
                                <h6 class="text-muted">اللغة اﻻنجليزية</h6>
                                <p class="text-muted">495</p>
                                <!-- <button class="btn btn-primary btn-outline-primary btn-round btn-sm">Manage</button> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
export default {

    data() {
        return {
            total: '95%',
            subjects:[],
            students: [],
            firstNumber: '',
            lastNumber: '',
            num: [],
            form: {
                sitting_number: '',
                degree: 1,
            },
            formSearch: {
                group: '',
                subject: 'ar',


            }

        }
    },
    mounted() {
        axios.get('/get-subject').then(res => {
            this.subjects = res.data.subject
        })
    },
    created() {
        ;
    },
    methods: {
          degree() {

            this.form.degree = parseInt(this.form.sitting_number)+1
            this.form.sitting_number = this.form.degree
        },
        filterData() {
            axios.post('/student', this.formSearch).then(res => {
                this.students = res.data
                this.firstNumber = res.data.first.sitting_number
                this.lastNumber = res.data.last.sitting_number
                //    console.log(res.data.first.sitting_number);
                this.getAllNumbersBetween()
            })
        },
        getAllNumbersBetween() {
            var numbers = [];
            for (var i = this.firstNumber; i < this.lastNumber; i++) {
                numbers.push(i);

            }

            return this.num = numbers;
        },

        // checkArray(num){
        //         // console.log(this.num);
        //         window.open('/printpage/', "_blank");
        //         // , "width=400, height=400"
        //         var check = this.num.includes(4115);
        //         console.log(check); //returns true
        // }


    },
}
</script>

<style lang="scss" scoped>

</style>
