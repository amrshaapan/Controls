<template>
<div>

    <table style="width: 100%;">
        <thead>
            <th>

                <div class="row">

                    <div class="col-3 text-right">
                        <p class="m fonts"> محافظة شمال سيناء</p>
                        <p class="m fonts">مديرية التربية والتعليم </p>
                        <p class="m fonts"> لجنة النظام والمراقبة</p>
                    </div>
                    <div class="col-7 text-center f_h">
                        <h2 class="f_h2">كشف أرقام الجلوس والمجموع الكلى</h2>
                        <h5 class="underline">إمتحان شهادة إتمام الدراسة بمرحلة التعليم الأساسى</h5>

                    </div>
                    <div class="col-2">
                        <div class="text-center m fonts f_h underline back-color">الدور الثانى</div>
                        <div class="text-center m line fonts_y f_h underline back-color_y">2021</div>
                    </div>
                </div>
            </th>

        </thead>
        <!-- <div v-for="mange in all"> -->
        <div v-for="(ss , i) in all" style="page-break-after: always;">
            <!-- <tr> -->

            <!-- <div> -->
            <table class="table table-borderless" style="margin-top: 10px;">
                <thead>
                    <!-- <tr> -->
                    <th colspan="5">
                        <div class="row">

                            <div class="col-7 text-right pt-4 pr25">

                                <p><strong class="f_hsc"> اسم المدرسة</strong> : <strong class="f_hscn_ad underline" v-if="all[i][1]"> {{all[i][1][0].school_name}} </strong></p>
                            </div>
                            <div class="col-3 f_h">
                                <div class="bdr_m text-center underline"> <span>إدارة : </span> <strong class=" underline" v-if="all[i][1]"> {{all[i][1][0].mange.mange_name}} </strong> التعليمية </div>

                            </div>
                            <div class="col-2 f_h">
                                <div class="bdr text-center"> نظامى </div>

                            </div>

                        </div>
                    </th>
                    <!-- </tr> -->
                    <tr>
                        <td class="text-center abs" v-for="h in 5">
                            <table style="width:100%">
                                <tr style="border: 1px solid;">
                                    <td class="c s span" style="border-left: 1px solid;">جلوس</td>
                                    <td class="ss span">مجموع</td>
                                </tr>
                            </table>

                        </td>

                    </tr>
                </thead>
                <tbody>

                    <tr v-for="s in  chunk(ss[1])">
                        <td v-for="(a, index) in s">

                            <table style="width:100%">
                                <tr style="border: 1px solid;">
                                    <td class="text-center f_hscn bl s" style="border-left: 1px solid;">{{a.sitting_number}}</td>
                                    <td class="text-center f_hscn br ss">{{a.total | toArabic}}</td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                </tbody>

            </table>

            <!-- </div> -->

            <!-- </tr> -->
            <div v-for="s in chunk(ss[2])">
                <div v-if="ss[2]">
                    <table class="table table-borderless">
                        <thead>
                            <!-- <tr> -->
                            <th colspan="5">

                                <div class="row">

                                    <div class="col-7 text-right pt-4 pr25">

                                        <p><strong class="f_hsc"> اسم المدرسة</strong> : <strong class="f_hscn_ad underline" v-if="all[i][2]"> {{all[i][1][0].school_name}} </strong></p>
                                    </div>
                                    <div class="col-3 f_h">
                                        <div class="bdr_m text-center underline"> <span>إدارة : </span> <strong class=" underline" v-if="all[i][2]"> {{all[i][1][0].mange.mange_name}} </strong> التعليمية</div>

                                    </div>
                                    <div class="col-2 f_h">
                                        <div class="bdr text-center"> منازل </div>

                                    </div>

                                </div>

                            </th>
                            <!-- </tr> -->
                            <tr>
                                <td class="text-center abs" v-for="h in 5">
                                    <table style="width:100%">
                                        <tr style="border: 1px solid;">
                                            <td class="c s span" style="border-left: 1px solid;">جلوس</td>
                                            <td class="ss span">مجموع</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="s in chunk(ss[2])">
                                <td v-for="(a, index) in s">
                                    <table style="width:100%">
                                        <tr style="border: 1px solid;">
                                            <td class="text-center f_hscn bl s" style="border-left: 1px solid;">{{a.sitting_number}}</td>
                                            <td class="text-center f_hscn br ss">{{a.total | toArabic}}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="text-left" style="margin-left: 86px;">
                <p class="f_hsc" style="margin-left: -17px;">رئيس لجنة النظام والمراقبة</p>
                <p class="f_hsc">أ/ عادل يحيي محمد</p>
            </div>
        </div>
        <!-- <tfoot>
                    <tr>
                        <td>

                       <div class="text-center" style="margin-left: 86px;">
                        <p class="f_hsc" style="margin-left: -17px;">رئيس لجنة النظام والمراقبة</p>
                        <p class="f_hsc">أ/ عادل يحيي محمد</p>  
                    </div> 
                        </td>

                    </tr>
                </tfoot> -->
        <!-- </div> -->
    </table>

</div>
</template>

<script>
import { toArabic } from 'arabic-digits';
export default {
    data() {
        return {

            all: []
        }
    },
    mounted() {
        axios.get('/showSchoolFinal').then(res => {
            this.all = res.data.all

        });
        Vue.filter('toArabic', function (value) {
            return toArabic(value).replace(".", ",");
        })

    },

    methods: {
        chunk(value) {
            return _.chunk(value, 5)
        },

    },
}
</script>

<style lang="scss" scoped>
* {
    color: #000000 !important;
}

.table td,
.table th {
    padding: 1px !important;
    // vertical-align: top;

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

// .table {
//     color: black !important;
//     font-weight: 900 !important;
// }

.fonts {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 20px !important;
}

.f_h {
    font-family: 'jordan', 'Tajawal', sans-serif !important;
}

.f_hsc {
    font-family: 'jordan', 'Tajawal', sans-serif !important;
    font-size: 20px !important;
}

.span {
    font-family: 'jordan', 'Tajawal', sans-serif !important;
    font-size: 23px !important;
    font-weight: 900;
}

.f_hscn {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 25px !important;
    font-weight: 900 !important;

}

.f_hscn_ad {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 20px !important;
    font-weight: 900 !important;

}

.pr25 {

    padding-right: 45px !important;

}

.s {
    min-width: 36px;
    max-width: 36px;
}

.ss {
    min-width: 36px;
    max-width: 36px;
}

.c {
    // min-width: 61px;
    background-color: #9e9e9e !important;
}

.bl {
    border-left: 1px solid #9e9e9e !important;
}

.br {
    border-left: 1px solid #000000 !important;
}

.bdr {
    width: 113px;
    height: 32px;
    border: 2px dotted;
    margin-top: 20px;
    margin-right: 27px;
    font-size: 20px;
}

.bdr_m {

    height: 32px;
    // background-color: #a2a2a2;
    // padding: 5px -5px 19px 59px;
    // border: 2px dotted;
    margin-top: 20px;
    font-size: 20px;
}

.underline {
    text-decoration: underline;
    text-underline-position: under;
    font-weight: bold !important;
}

.f_h2 {
    font-weight: 900;
}

.back-color {
    max-width: 109px;
    margin-right: 30px;
    background-color: #a2a2a2;
    padding: 6px;
}

.fonts_y {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 25px !important;
}

.back-color_y {
    max-width: 109px;
    margin-right: 30px;

    padding: 5px;
}
</style>
