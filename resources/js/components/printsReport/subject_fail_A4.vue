<template>
<div dir="ltr">
    <div class="row">
        <div class="col-12 d-print-none">
            <div class="card" style="min-height: 100px;">
                <div class="card-block">

                    <div class="d-print-none">
                        <div class="col-6">

                            <input v-model="form.id" @keypress.13=" GethataStudentBySchools" type="text" class="form-control" />
                        </div>

                        <!-- <button @click=" GetDataStudentBySchools"> ok !</button> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <table  border="0" style=" width: 100%; ">
        <thead>
            <tr>
                <td style="width:20px"></td>
                <td style="width:96px"></td>
                <td style="width:1px"></td>
                <td style="width:49px"></td>
                <td style="width:49px"></td>
                <td style="width:51px"></td>
                <td style="width:51px"></td>
                <td style="width:51px"></td>
                <td style="width:51px"></td>
                <td style="width:51px"></td>
                <td style="width:230px"></td>
                <td style="width:70px"></td>
                <td style="width:22px"></td>
            </tr>

            <tr>
                <td colspan="13">
                    <p>dsfsdf</p>
                    <p>dsfsdf</p>
                
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td rowspan="2" style="border-top: 2.5px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">total</span></td>
                <td colspan="8" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">subject</span></td>
                <td rowspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">name</span></td>
                <td rowspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">no_sett</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                </td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">5</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 15px; line-height: 1.1640625;">total math</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">5</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">5</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">4</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">3</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">1</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">280</span></td>
                <td>
                </td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">60</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">60</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">80</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td style="background-color: #9E9E9E; border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">140</span></td>
                <td>
                </td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span></td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span></td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">15</span></td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">15</span></td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span></td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span></td>
                <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span></td>
                <td>
                </td>
            </tr>
            <tr>
                <td colspan="13">
                </td>
            </tr>
        </thead>
        <tbody>
            <tr >
                <td>
                </td>
                <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">77</span></td>
                <td>
                </td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">55</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">44</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">88</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">77</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">66</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">55</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">44</span></td>
                <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">22</span></td>
                <td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                    <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">11</span></td>
                <td>
                </td>
            </tr>
        </tbody>

    </table>

</div>
</template>

<script>
import { toArabic } from 'arabic-digits';
export default {
    data() {
        return {
            students: [],
            school: '',
            form: {}
        }
    },
    mounted() {
        // this.GethataStudentBySchools();

        Vue.filter('toArabic', function (value) {
            return toArabic(value).replace(".", ",");
        })
    },
    methods: {
        GethataStudentBySchools() {

            axios.post('/getCert', this.form).then(res => {

                this.students = res.data
                this.school = res.data[0].school_name
                // this.school = res.data[0].school_name

                // console.log(this.studentsF);
            }).catch(e => {
                console.log('error');
            })
        },
    },

}
</script>

<style lang="scss" scoped>
// @font-face {
//     font-family: 'sultan';
//     // src: url('/front-end/sultan/sultan-medium.TTF') format('ttf'),
//     src: url('/front-end/ArbFonts/ArbFONTS-BoutrosNewsH1-Bold.ttf') format('woff2');
//     // src: url('/front-end/ArbFonts/ArbFONTS-MCS-Taybah-S_U-normal.ttf') format('woff2');

// }

.fonts {
    font-family: 'Tajawal', sans-serif !important;
    font-size: 18px;
}

p {
    margin-top: 0 !important;
    margin-bottom: 0rem !important;
    font-weight: 900 !important;
}

.background-color {
    background-color: rgba(58, 58, 58, 0.555);
}

.fail {
    min-width: 45px;
    min-height: 29px;
    border: 1px solid;
    border-radius: 50%;
    background-color: #888585;
}

@media print {
@media print
{
table {page-break-after:always}
}

}
</style>
