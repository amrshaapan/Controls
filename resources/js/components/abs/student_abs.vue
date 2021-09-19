<template>
<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <h5 class="txt-highlight text-center ">رصد الغياب</h5>

                        </div>
                    </div>

                    <div class="row seacrh-header">
                        <div class="col-sm-4   ">
                            <div class="input-group input-group-button input-group-primary">
                                <input v-model="form.sitting_number" @keypress.enter="SaveAbsStudent" type="text" class="form-control" placeholder="رقم الجلوس">
                                <button type="submit" class="btn btn-primary input-group-addon">بحث</button>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <select v-model="form.subject" name="select" class="form-control form-control-primary">
                                    <option :value="subject.code" v-for="subject in subjects">{{subject.name}}</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="divTable blueTable">
                                <div class="divTableHeading">
                                    <div class="divTableRow">
                                        <div class="divTableHead">رقم سرى</div>
                                        <div class="divTableHead">اللغة العربية</div>
                                        <div class="divTableHead">جبر</div>
                                        <div class="divTableHead">انجليزى</div>
                                        <div class="divTableHead">هندسة</div>
                                        <div class="divTableHead">علوم</div>
                                        <div class="divTableHead">دراسات</div>
                                    </div>
                                </div>
                                <div class="divTableBody">
                                    <div class="divTableRow">
                                        <div class="divTableCell"><h5>{{id.scur_number}}</h5></div>
                                        <div class="divTableCell ">{{id.ar}}</div>
                                        <div class="divTableCell">{{id.math_g}}</div>
                                        <div class="divTableCell">{{id.en}}</div>
                                        <div class="divTableCell">{{id.math_h}}</div>
                                        <div class="divTableCell">{{id.sci}}</div>
                                        <div class="divTableCell text-center">{{id.stu}}</div>
                              
                                    </div>
                                
                                </div>
                            </div>

                            <h5>{{id.school_name}}</h5>
                            <h5>{{id.student_name}}</h5>
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

            id: '',
            subjects: [],
            form: {

            }
        }
    },
    mounted() {
        axios.get("/get-subject").then((res) => {
            this.subjects = res.data.subject;
        });
    },
    methods: {
        SaveAbsStudent() {
            axios.post('save-data-abs-studen', this.form).then(res => {
                this.id = res.data;
                this.form.sitting_number = '';
            }).catch(e => {
                console.log('error Save');
            })
        }
    },
}
</script>

<style lang="scss" scoped>
div.blueTable {
  border: 1px solid #1C6EA4;
  background-color: #EEEEEE;
  width: 100%;
  text-align: left;
  border-collapse: collapse;
}
.divTable.blueTable .divTableCell, .divTable.blueTable .divTableHead {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
.divTable.blueTable .divTableBody .divTableCell {
  font-size: 13px;
}
.divTable.blueTable .divTableRow:nth-child(even) {
  background: #D0E4F5;
}
.divTable.blueTable .divTableHeading {
  background: #1C6EA4;
  border-bottom: 2px solid #444444;
}
.divTable.blueTable .divTableHeading .divTableHead {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
.divTable.blueTable .divTableHeading .divTableHead:first-child {
  border-left: none;
}

.blueTable .tableFootStyle {
  font-size: 14px;
}
.blueTable .tableFootStyle .links {
	 text-align: right;
}
.blueTable .tableFootStyle .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.blueTable.outerTableFooter {
  border-top: none;
}
.blueTable.outerTableFooter .tableFootStyle {
  padding: 3px 5px; 
}
/* DivTable.com */
.divTable{ display: table; }
.divTableRow { display: table-row; }
.divTableHeading { display: table-header-group;}
.divTableCell, .divTableHead { display: table-cell;}
.divTableHeading { display: table-header-group;}
.divTableFoot { display: table-footer-group;}
.divTableBody { display: table-row-group;}
</style>
