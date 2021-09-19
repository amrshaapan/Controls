<template>
<div dir="ltr">
    <table v-for="count in counts" width="100%" cellpadding="0" cellspacing="0" border="1" style="margin-bottom: 40px;">
        <tr>

            <td align="center">

                <table cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse; background-color: white;">
                    <tr valign="top" style="height:0">
                        <td style="width:20px"></td>
                        <td style="width:100px"></td>
                        <td style="width:40px"></td>
                        <td style="width:51px"></td>
                        <td style="width:5px"></td>
                        <td style="width:84px"></td>
                        <td style="width:92px"></td>
                        <td style="width:4px"></td>
                        <td style="width:3px"></td>
                        <td style="width:11px"></td>
                        <td style="width:70px"></td>
                        <td style="width:90px"></td>
                        <td style="width:4px"></td>
                        <td style="width:21px"></td>
                    </tr>
                    <tr valign="top" style="height:10px">
                        <td colspan="14">
                        </td>
                    </tr>

                    <tr>
                        <td id="tg" colspan="14">
                            <div class="row">
                                 <div class="col-2 ">
                                    <p class="text-center m fonts">الدور الثانى</p>
                                 


                                </div>
                                
                                <div class="col-7">
                                    <!-- <h4 class="text-center fonts">كشــــف مناداة</h4> -->
                                    <h6 class="text-center fontsad">إمتحان شهادة إتمام الدراسة بمرحلة التعليم اﻻساسى للعام الدراسى 2020_2021م</h6>
                                    <div class="a">

                                    </div>
                                </div>
                               <div class="col-3 text-left">
                                    <p class="m fonts"> محافظة شمال سيناء</p>
                                    <p class="m fonts">مديرية التربية والتعليم </p>
                                    <p class="m fonts"> لجنة النظام والمراقبة</p>

                                </div>

                            </div>
                        </td>
                    </tr>
                   
                    <tr valign="top" style="height:10px">
                        <td colspan="14">
                        </td>
                    </tr>
                    <tr valign="top" style="height:30px">
                        <td>
                        </td>
                        <td colspan="6" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 28px; line-height: 1.1640625;">{{count.school_name}}</span></td>
                        <td>
                        </td>
                        <td colspan="3" style="text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.1640625;">اسم المدرسة</span></td>
                        <td colspan="2">
                        </td>
                    </tr>
                    <tr valign="top" style="height:10px">
                        <td colspan="14">
                        </td>
                    </tr>
                    <tr valign="top" style="height:30px">
                        <td>
                        </td>
                        <td colspan="3" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">عدد الطلبة الراسبين</span></td>
                        <td>
                        </td>
                        <td colspan="2" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">  عدد الاستمارات الناجحون  </span></td>
                        <td colspan="2">
                        </td>
                        <td colspan="4" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">عدد الطلبة الناجحون</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:30px">
                        <td>
                        </td>
                        <td style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="font">منازل</span></td>
                        <td colspan="2" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="font">نظامى</span></td>
                        <td>
                        </td>
                        <td style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="font">منازل</span></td>
                        <td style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="font">نظامى</span></td>
                        <td colspan="2">
                        </td>
                        <td colspan="2" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="font">منازل</span></td>
                        <td colspan="2" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="font">نظامى</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr style="height:3px"></tr>
                    <tr valign="top" style="height:30px">
                        <td>
                        </td>
                        <td style="border: 2px dashed #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">{{count.abs_second_faill_m}}</span></td>
                        <td colspan="2" style="border: 2px dashed #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">{{count.abs_second_faill_n}}</span></td>
                        <td>
                        </td>
                        <td style="border: 2px dashed #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">{{count.abs_second_success_m}}</span></td>
                        <td style="border: 2px dashed #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">{{count.abs_second_success_n}}</span></td>
                        <td colspan="2">
                        </td>
                        <td colspan="2" style="border: 2px dashed #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">{{count.abs_second_success_m}}</span></td>
                        <td colspan="2" style="border: 2px dashed #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'DejaVu Sans', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">{{count.abs_second_success_n}}</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr style="height:3px"></tr>
                    <tr valign="top" style="height:30px">
                        <td>
                        </td>
                        <td colspan="3" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">تسليم عدد ( 1 ) كشف الراسبون</span></td>
                        <td>
                        </td>
                        <td colspan="2" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;">تسليم عدد ( {{count.abs_second_success_m + count.abs_second_success_n}} ) استمارة نجاح </span></td>
                        <td colspan="2">
                        </td>
                        <td colspan="4" style="border: 1.75px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 25px; line-height: 1.1640625;"> تسليم عدد ( 1 ) كشف الناجحون</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:50px">
                        <td colspan="14">
                        </td>
                    </tr>
                </table>

            </td>

        </tr>
    </table>
</div>
</template>

<script>
export default {
data() {
    return {
        counts: []
    }
},

mounted () {
       axios.get('/count').then(res => {
                this.counts = res.data;
            });
},
}
</script>

<style lang="scss" scoped>
.font {
    font-family: 'jordan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 25px;
    line-height: 1.1640625;
}
p {
    margin-top: 0 !important;
    margin-bottom: 0rem !important;
    font-weight: 900 !important;
}
.fonts {
    font-family: 'jordan', sans-serif !important;
    font-size: 18px;
}
.fontsad {
    font-family: 'jordan', sans-serif !important;
    font-size: 30px;
}
.line {
    text-decoration: underline;
    font-weight: bolder !important;
    font-size: 23px !important;
    font-family: 'sultan' !important;
    margin-top: 8px;
}

</style>
