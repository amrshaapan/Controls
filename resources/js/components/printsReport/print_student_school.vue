<template>
<div>
    <div class="row">

        <div class="col-sm-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="5">
                            <div class="row">

                                <div class="col-sm-3 text-right">
                                    <p class="m fonts"> محافظة شمال سيناء</p>
                                    <p class="m fonts">مديرية التربية والتعليم </p>
                                    <p class="m fonts"> لجنة النظام والمراقبة</p>
                                </div>
                                <div class="col-sm-7 text-center">
                                    <h3>كشف أرقام الجلوس والمجموع الكلى</h3>
                                    <h4>إمتحان شهادة إتمام الدراسة بمرحلة التعليم الأساسى</h4>

                                </div>
                                <div class="col-sm-2">
                                    <p class="text-center m fonts">الفصل الدراسى الثانى</p>
                                    <h5 class="text-center m line fonts">2021</h5>
                                </div>

                                <div class="col-sm-8 text-right">

                                    <p> اسم المدرسة : {{Schools}}</p>
                                </div>

                            </div>
                        </th>
                    </tr>

                    <tr>
                        <th class="text-center"> رقم الجلوس </th>
                        <th class="text-center">اسم الطالب </th>
                        <th class="text-center"> المجموع </th>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="student in students">
                        <td class="text-center">
                            {{student.sitting_number}}
                        </td>
                        <td class="text-right" style="font-size:27px ">
                            {{student.student_name}}
                        </td>
                        <td class="text-center" style="font-size:27px ">
                            {{student.total | toArabic}}
                        </td>

                    </tr>

                </tbody>

            </table>
        </div>

    </div>
</div>
</template>

<script>
import { toArabic } from 'arabic-digits';
export default {
    data() {
        return {
            Schools: '',
            system: [],
            students: []
        }
    },
    mounted() {
        axios.get('/showSchool_students').then(res => {
            this.students = res.data
            this.Schools = res.data[0].school_name
            // this.Schools = res.data[1][1]
            // this.system = res.data[1][2]
        });
        Vue.filter('toArabic', function (value) {
            return toArabic(value).replace(".", ",");
        })

        //     Vue.filter('chunk', function (value) {
        //    return _.chunk(value, 5)
        // })
    },
    computed: {
        chunkedSchools() {
            return _.chunk(this.Schools, 5)
        },
        chunkedsystem() {
            return _.chunk(this.system, 5)
        },
        //     articleGroups () {
        //   return Array.from(Array(Math.ceil(this.articles.length / this.itemsPerRow)).keys())
        // }

    },
    methods: {
        chunk(value) {
            return _.chunk(value, 5)
        }
    },
}
</script>

<style lang="scss" scoped>
// @font-face {
//     font-family: 'sultan';
//     src: url('/front-end/ArbFonts/ArbFONTS-Hacen-Jordan.ttf') format('ttf'),

//         // src: url('/front-end/ArbFonts/ArbFONTS-BoutrosNewsH1-Bold.ttf') format('woff2'),
//         /* Internet Explorer */
//         //  url('/front-end/sultan/sultan boold.ttf') format('ttf'), /* Super Modern Browsers */
//         //  url('./fonts/SFAtarianSystem.ttf') format('woff'), /* Pretty Modern Browsers */
//         //  url('./fonts/SFAtarianSystem.ttf')  format('truetype'), /* Safari, Android, iOS */
//         //  url('./fonts/SFAtarianSystem.ttf') format('svg'); /* Legacy iOS */
// }

.table td,
.table th {
    padding: 2.5px !important;
    vertical-align: top;

}

.vl {
    border-left: 2px solid rgb(102, 102, 102);

    left: 50%;
    margin-left: -3px;
    top: 0;
}

p {
    margin-top: 0 !important;
    margin-bottom: 0rem !important;
    font-weight: 900 !important;
}

.table {
    color: black !important;
    font-weight: 900 !important;
}

.fonts {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 20px !important;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #000000 !important;
}
</style>
