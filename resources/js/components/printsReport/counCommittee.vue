<template>
<div>
    <div class="row">
        <div class="col-sm-12 ">
            <h4 class="text-center">بيان عدد الطلبة بالمدارس</h4>
        </div>

    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>#</td>
                <td class="text-center">اسم اللجنة</td>
                <td class="text-center"> عدد الطلبة</td>
                <td class="text-center"> بنات</td>
                <td class="text-center"> بنين</td>
                <td class="text-center"> مسلم</td>
                <td class="text-center"> مسيحى</td>
                <td class="text-center"> نظامى</td>
                <td class="text-center"> منازل</td>
            </tr>
        </thead>
        <tbody>
            <tr v-for="( count , index ) in counts">
                <td>{{ count.id}}</td>
                <td class="text-right"> لجنة : {{count.committee_name}}
                    <div class="divTable blueTable" v-if="count.school.length >= 0">
                        <div class="divTableHeading">
                            <div class="divTableRow">
                                <div class="divTableHead"># </div>
                                <div class="divTableHead">اسم المدرسة </div>
                                <div class="divTableHead">عدد الطلبة</div>
                                <!-- <div class="divTableHead">مسيحى</div> -->
                                <div class="divTableHead">منازل</div>
                                <div class="divTableHead">جلوس من</div>
                                <div class="divTableHead">جلوس الى</div>

                            </div>
                        </div>
                        <div class="divTableBody">
                            <div class="divTableRow" v-for="(schools , index ) in count.school">
                                <div class="divTableCell" id="center">{{index +1}}</div>
                                <div class="divTableCell">{{schools.school_name}}</div>
                                <div class="divTableCell" id="center">{{schools.school_Count}}</div>
                                <!-- <div class="divTableCell" id="center">{{schools.religion_m  >= 1 ? schools.religion_m : '--'}}</div> -->
                                <div class="divTableCell" id="center">{{schools.system_m  >= 1 ? schools.system_m : '--'}}</div>
                                <div class="divTableCell" id="center">{{schools.frist_sittings  ? schools.frist_sittings.sitting_number : '0'}}</div>
                                <div class="divTableCell" id="center">{{schools.last_sittings ? schools.last_sittings.sitting_number : '0'}}</div>

                            </div>

                        </div>
                    </div>


                </td>
                <td class="text-center">{{count.school_Count}}</td>
                <td class="text-center">{{count.gender_f >= 1 ? count.gender_f : '--'}}</td>
                <td class="text-center">{{count.gender_m >= 1 ? count.gender_m : '--'}}</td>
                <td class="text-center">{{count.religioni_slam >= 1 ? count.religioni_slam : '--'}}</td>
                <td class="text-center">{{count.religion_m >= 1 ? count.religion_m : '--'}}</td>
                <td class="text-center">{{count.system_n >= 1 ? count.system_n : '--'}}</td>
                <td class="text-center">{{count.system_m >= 1 ? count.system_m : '--'}}</td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            counts: [],
        }
    },
    mounted() {
        this.Count();
    },
    methods: {
        Count() {
            axios.get('/count_committee').then(res => {
                this.counts = res.data;
            })

        }
    },
}
</script>

<style lang="scss" scoped>
* {
    font-family: 'sans-serif';
    color: black !important;
    font-weight: bolder;
    font-size: 18px;
}

table,
th,
td {
    border: 1px solid rgba(0, 0, 0, 0.671) !important;
    font-family: 'sultan' !important;
    font-size: 20px;

}

table tr td {
        vertical-align: middle;

}

div.blueTable {
  border: 1px solid #2D2D2D;
  width: 100%;
  text-align: right;
  border-collapse: collapse;
}
.divTable.blueTable .divTableCell, .divTable.blueTable .divTableHead {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
.divTable.blueTable .divTableBody .divTableCell {
  font-size: 16px;
   font-family: 'sultan' !important;
}
.divTable.blueTable .divTableRow:nth-child(even) {
  background: #CBCBCB;
}
.divTable.blueTable .divTableHeading {
  background: #848484;
  border-bottom: 2px solid #444444;
}
.divTable.blueTable .divTableHeading .divTableHead {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
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

#center{
    text-align: center;
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
