<template>
<div>
    <h5 class="text-center">كشوف مراجعة الغياب برقم الجلوس لجميع المواد</h5>
    <table class="blueTable" v-for="(ab,index) in abs" style="page-break-after: always;">
        <thead>
            <tr>
                <td colspan="9">
                    <h1> المجموعة_{{index}}  عدد الطلبة  ({{ab.length}})</h1>
                </td>

            </tr>
            <tr>
                <td>#</td>
                <td>رقم السرى</td>
                <td>رقم الجلوس</td>
                <td style="width: 11%;">اللغة العربية</td>
                <td style="width: 11%;">الجبر</td>
                <td style="width: 11%;">اللغة اﻻنجليزية</td>
                <td style="width: 11%;">الهندسة</td>
                <td style="width: 11%;">العلوم</td>
                <td style="width: 11%;">الدراسات</td>

            </tr>
        </thead>
        <tbody>

            <tr v-for="(a, index ) in ab ">
                <td>{{index +1}}</td>
                <td>{{a.scur_number}}</td>
                <td>{{a.sitting_number}}</td>
                <td>{{a.ar == -1 ? 'غـ' : 'حضر'}}</td>
                <td>{{a.math_g == -1 ? 'غـ' : 'حضر'}}</td>
                <td>{{a.en == -1 ? 'غـ' : 'حضر'}}</td>
                <td>{{a.math_h == -1 ? 'غـ' : 'حضر'}}</td>
                <td>{{a.sci == -1 ? 'غـ' : 'حضر'}}</td>
                <td>{{a.stu == -1 ? 'غـ' : 'حضر'}}</td>
            

            </tr>

        </tbody>
     
    </table>

    <!-- <h1 v-for="(ab,index) in abs">
{{index}}
                  <h5 v-for="a in ab ">{{a.sitting_number}} || {{a.student_name}}</h5>
              </h1>  -->
</div>
</template>

<script>
export default {
    data() {
        return {
            abs: []
        }
    },
    mounted() {
        axios.get('/queryData-abs').then(res => {
            this.abs = res.data
        });
    },
}
</script>

<style lang="scss" scoped>
table.blueTable {
    border: 1px solid #000000;
    background-color: #ffffff;
    width: 100%;
    text-align: center;
    border-collapse: collapse;
}

table.blueTable td,
table.blueTable th {
    border: 1px solid #AAAAAA;
    padding: 3px 2px;
}

table.blueTable tbody td {
    font-size: 20px;
    font-weight: bold;
}

table.blueTable tr:nth-child(even) {
    background: #C6C6C6;
}

table.blueTable thead {
    background: #6D7581;
    border-bottom: 2px solid #000000;
}

table.blueTable thead th {
    font-size: 15px;
    font-weight: bold;
    color: #FFFFFF;
    text-align: center;
    border-left: 2px solid #D0E4F5;
}

table.blueTable thead th:first-child {
    border-left: none;
}

table.blueTable tfoot td {
    font-size: 14px;
}

table.blueTable tfoot .links {
    text-align: right;
}

table.blueTable tfoot .links a {
    display: inline-block;
    background: #1C6EA4;
    color: #FFFFFF;
    padding: 2px 8px;
    border-radius: 5px;
}
</style>
