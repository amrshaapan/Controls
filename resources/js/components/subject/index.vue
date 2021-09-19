<template>
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="min-height: 304px;">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5 class="txt-highlight text-center ">لرصد درجة الطالب برجاء اختيار المادة والمجموعة المخصصة لك
                            </h5>
                        </div>
                    </div>

                    <div class="row seacrh-header">
                        <div class="col-sm-6">
                            <h4 class="sub-title text-right">اختيار المادة</h4>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <select v-model="form.subject" name="select" class="form-control form-control-primary">
                                            <option :value="subject.code" v-for="subject in subjects">{{subject.name}}</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
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
                    </div>
                    <div class="row">

                        <div class="col-sm-6">

                            <p class="task-due text-left"><strong class="label label-primary">{{firstNumber}}</strong></p>
                        </div>
                        <div class="col-sm-6">

                            <p class="task-due text-right"><strong class="label label-primary">{{lastNumber}}</strong></p>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="sub-title text-right">غياب المجموعة</h4>
                             </div>
                            <div class="row">

                                <div class="col-sm-12 " style="display: inline-flex;">
                                    
                                   <div class="input-group">
                                        <strong v-for="ab in abs" class="label label-danger">{{ab.scur_number}}</strong>
                                        <!-- </p> -->
                                   </div>
                                </div>
                            </div>
                       

                    </div>

                    <h4 class="sub-title "> </h4>

                </div>
            </div>
        </div>

    </div>

    <div class="page-body">
        <div class="card">
            <div class="card-block">
                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <div class="divTable blueTable">
                            <div class="divTableHeading">
                                <div class="divTableRow">
                                    <div class="divTableHead">سرى</div>
                                    <div class="divTableHead"> عربى</div>
                                    <div class="divTableHead">انجليزى </div>
                                    <div class="divTableHead">الجبر</div>
                                    <div class="divTableHead">الهندسة</div>
                                    <div class="divTableHead">مجموع الرياضيات</div>
                                    <div class="divTableHead">دراسات</div>
                                    <div class="divTableHead">علوم</div>
                                    <div class="divTableHead">مجموع</div>
                                   
                                </div>
                            </div>
                            <div class="divTableBody">
                                <div class="divTableRow" v-for="scur in collection_out_abs.data">
                                    <div class="divTableCell"> <input type="text" v-model="scur.scur_number" disabled class="form-control fontInput"  /></div>
                                    <div class="divTableCell"> <input v-model.number="scur.ar" :disabled="form.subject != 'ar' ||  scur.ar == '-1'||scur.ar >= 40" :class="scur.ar == '-1' ? 'abs':''" type="text" class="form-control input"  /></div>

                                    <div class="divTableCell"> <input v-model.number="scur.en" :disabled="form.subject != 'en' ||  scur.en == '-1'||  scur.en >=30" :class="scur.en == '-1' ? 'abs':''" type="text" class="form-control input" /></div>

                                    <div class="divTableCell"> <input v-model.number="scur.math_g" :disabled="form.subject != 'math_g'||  scur.math_g == '-1' " :class="scur.math_g == '-1' ? 'abs':''" type="text" class="form-control input" /></div>
                                    <div class="divTableCell"> <input v-model.number="scur.math_h" :disabled="form.subject != 'math_h'||  scur.math_h == '-1'" :class="scur.math_h == '-1' ? 'abs':''" type="text" class="form-control input" /></div>
                                  
                                   <div class="divTableCell"> <input v-model.number="scur.total_math = parseInt(scur.math_g*1 + scur.math_h*1).toFixed()" disabled type="text" class="form-control input" /></div>

                                    <div class="divTableCell"> <input v-model.number="scur.stu" :disabled="form.subject != 'stu'||  scur.stu == '-1'||  scur.stu >= 20" :class="scur.stu == '-1' ? 'abs':''" type="text" class="form-control input" /></div>
                                    <div class="divTableCell"> <input v-model.number="scur.sci" :disabled="form.subject != 'sci'||  scur.sci == '-1' ||  scur.sci >= 20" :class="scur.sci == '-1' ? 'abs':''" type="text" class="form-control input" /></div>
   

                                    <div class="divTableCell"> <input  v-model.number="scur.total = parseInt(scur.ar*1 + scur.en*1 + scur.math_g*1 + scur.math_h*1 + scur.stu*1 + scur.sci*1).toFixed()" disabled type="text" class="form-control input" /></div>
                                    <!-- <div class="divTableCell"> <input v-model.number="scur.total = parseInt(scur.ar).toFixed() + parseInt(scur.en).toFixed()"  disabled type="text" class="form-control input" /></div> -->

                                   
                                </div>

                            </div>
                        </div>

                    </div>
         

                    <pagination :data="collection_out_abs" @pagination-change-page="getResults"></pagination>
                   
                   <br />
                   <br />
                   <br />
                    <div class="col-sm-12">

                    <button class="btn btn-primary btn-block" @click="SaveData">حفظ الدرجات</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</template>

<script>
import swal from 'sweetalert';

export default {
    data() {
        return {

            subjects: [],
            groups:[],
            collection_out_abs: {},
            collection:[],
            firstNumber: "",
            lastNumber: "",
            abs: [],

            form: {

                degree: "",
                group: "",
                subject: "ar",
            },
        };
    },
    computed: {

        
        // scur: function () {
        // collection_out_abs.forEach(element => {
        //     return element.data.ar
        // });
            
        // }
       
       
        
    },
    created() {
        this.getResults();

    },
    mounted() {
        axios.get("/get-subject").then((res) => {
            this.subjects = res.data.subject;
        });

        axios.get('/get_data_group').then(res => {
                this.groups = res.data;
        })
    },

    methods: {

        getResults(page) {
            if (typeof page === 'undefined') {
                page = 1;
            }
            axios.get('/student', { params: { page: page ,id:this.form.group}}).then((res) => {
                this.SaveData();
                // this.students = res.data;
                this.firstNumber = res.data.first.scur_number;
                // this.form.scur = res.data.first.scur_number;
                this.lastNumber = res.data.last.scur_number;
                this.abs = res.data.collection;
                this.collection_out_abs = res.data.collection_abs;
                this.collection = res.data.collection_abs.data;

            });
        },

        SaveData() {

        
            axios.post("/save-data-degree", { subject: this.collection_out_abs.data, group:this.form }).then((res) => {
                // this.form.scur = parseInt(this.form.scur) + 1;
          swal("Success", "تم حفظ الدرجات بنجاح");
                // this.form.degree = "";
                console.log("success");
            }).catch((e) => {
                console.log("error");
            });

        },

    },
    filters: {
    preview: (value) => {
      if (!value) {
        return ''
      }
      return value.replace(/\"/g, "");
    }
}
};
</script>

<style lang="scss" scoped>
div.blueTable {
    border: 1px solid #1c6ea4;
    background-color: #ffffff;
    width: 100%;
    text-align: center;
    border-collapse: collapse;
}

.divTable.blueTable .divTableCell,
.divTable.blueTable .divTableHead {
    border: 1px solid #aaaaaa;
    padding: 3px 2px;
}

.divTable.blueTable .divTableBody .divTableCell {
    font-size: 13px;
}

.divTable.blueTable .divTableRow:nth-child(even) {
    background: #d0e4f5;
}

.divTable.blueTable .divTableHeading {
    background: #1c6ea4;
    border-bottom: 2px solid #444444;
}

.divTable.blueTable .divTableHeading .divTableHead {
    font-size: 15px;
    font-weight: bold;
    color: #ffffff;
    text-align: center;
    border-left: 2px solid #d0e4f5;
}

.divTable.blueTable .divTableHeading .divTableHead:first-child {
    border-left: none;
}

.blueTable .tableFootStyle {
    font-size: 14px;
}

/* DivTable.com */
.divTable {
    display: table;
}

.divTableRow {
    display: table-row;
}

.divTableHeading {
    display: table-header-group;
}

.divTableCell,
.divTableHead {
    display: table-cell;
}

.divTableHeading {
    display: table-header-group;
}

.divTableFoot {
    display: table-footer-group;
}

.divTableBody {
    display: table-row-group;
}

.label {
    border-radius: 4px;
    font-size: 25px !important;
    padding: 4px 7px;
    margin-right: 5px;
    font-weight: 400;
    color: #fff !important;
}

.input {
    border: unset !important;
    font-size: 16px !important;
    text-align: center !important;
    font-weight: bold !important;
}

.active {
    background-color: #477cf5 !important;
}

.abs{
    color: red;
    background: black;
}

.form-control:disabled, .form-control[readonly] {
    background-color: #ffffff !important;
 
}

.fontInput{
        width: 72px;
    color: red;
    opacity: inherit;
    font-weight: 900;
}
</style>
