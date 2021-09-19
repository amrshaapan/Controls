<template>
<div>
    <div class="row" v-for="(ss,i) in all">

        <div class="col-sm-12">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th colspan="5">
                            <div class="row">

                                <div class="col-3 text-right">
                                    <p class="m fonts"> محافظة شمال سيناء</p>
                                    <p class="m fonts">مديرية التربية والتعليم </p>
                                    <p class="m fonts"> لجنة النظام والمراقبة</p>
                                </div>
                                <div class="col-7 text-center f_h">
                                    <h2>كشف أرقام الجلوس والمجموع الكلى</h2>
                                    <h5>إمتحان شهادة إتمام الدراسة بمرحلة التعليم الأساسى</h5>

                                </div>
                                <div class="col-2">
                                    <p class="text-center m fonts f_h">الدور الأول</p>
                                    <h5 class="text-center m line fonts f_h">2021</h5>
                                </div>

                                <div class="col-8 text-right pt-4 pr25">

                                    <p><strong class="f_hsc"> اسم المدرسة</strong> : <strong class="f_hscn">{{ss[1][0].school_name}}</strong></p>
                                </div>

                            </div>
                        </th>
                    </tr>

                    <tr>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 0px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 0px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 0px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 0px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 0px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="s in  chunk(ss[1])">
                        <td v-for="(a, index) in s">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 0px; ">
                                <div style="border-left: 1px solid; min-width: 50%; text-align: center;">{{a.sitting_number}}</div>
                                <div style=" min-width: 50%;text-align: center;">{{a.total | toArabic}}</div>
                            </div>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="col-sm-12" v-if="ss[2]">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th colspan="5">
                            <!-- <div class="col-12 text-center f_h">
                                <h2>كشف أرقام الجلوس والمجموع الكلى</h2>
                                <h5>إمتحان شهادة إتمام الدراسة بمرحلة التعليم الأساسى</h5>
                            </div> -->

                            <div class="row">

                                <div class="col-8 text-right pt-4 pr25">

                                    <p><strong class="f_hsc"> اسم المدرسة</strong> : <strong class="f_hscn">{{ss[1][0].school_name}}</strong></p>
                                </div>

                                <!-- <div class="col-8 text-right pt-4 pr25">

                                    <p>{{ss[1][0].school_name}}</p>
                                </div> -->
                                <div class="col-3 f_h">
                                    منازل
                                </div>
                            </div>

                        </th>
                    </tr>
                    <tr>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 6px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 6px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 6px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 6px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>
                        <td class="text-center abs">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 6px;">
                                <div>جلوس</div>
                                <div class="vl"></div>
                                <div>مجموع</div>
                            </div>
                        </td>

                    </tr>
                </thead>
                <tbody>
                    <tr v-for="s in chunk(ss[2])">
                        <td v-for="(a, index) in s">
                            <div class="d-flex justify-content-around" style="border: 1px solid;margin-left: 6px; ">
                                <div style="border-left: 1px solid; min-width: 50%; text-align: center;">{{a.sitting_number}}</div>
                                <div class="fonts" style=" min-width: 50%;text-align: center;">{{a.total | toArabic}}</div>
                            </div>
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
            Schools: [],
            system: [],
            all: []
        }
    },
    mounted() {
        axios.get('/showSchool').then(res => {
            this.all = res.data
            this.Schools = res.data[1][1]
            this.system = res.data[1][2]
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

.f_h {
    font-family: 'jordan', 'Tajawal', sans-serif !important;
}

.f_hsc {
    font-family: 'jordan', 'Tajawal', sans-serif !important;
    font-size: 18px !important;
}

.f_hscn {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 22px !important;

}

.pr25 {

    padding-right: 45px !important;

}
</style>
