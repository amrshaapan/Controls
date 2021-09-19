<template>
<div class="container" dir="ltr">
    <div class="row">
        <div class="col-sm-12 d-print-none">
            <div class="card" style="min-height: 200px; margin-top:20px">
                <div class="card-block">

                    <div class="d-print-none" >
                        <div class="col-sm-6">

                            <input v-model="form.id" @keypress.13=" GethataStudentBySchools" type="text" class="form-control" />
                        </div>

                        <!-- <div class="col-sm-6 col-md-6 col-xl-4 m-b-30">
                            <h4 class="sub-title">اختيار</h4>
                            <div class="form-radio">
                             
                                    <div class="radio radiofill radio-inline">
                                        <label>
                                            <input v-model="form.school" type="radio" name="radio" checked="checked">
                                            <i class="helper"></i>مدرسة
                                        </label>
                                    </div>
                                    <div class="radio radiofill radio-inline">
                                        <label>
                                            <input v-model="form.seatting" type="radio" name="radio">
                                            <i class="helper"></i>رقم جلوس
                                        </label>
                                    </div>
                            
                            </div>
                        </div> -->

                    </div>    
                               
                </div>
            </div>
        </div>
    </div>

    <table width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr v-for=" student in students">

            <td align="center">

                <table class="jrPage" data-jr-height="842" cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse; background-color: white; margin-bottom: 40px;">
                    <tr valign="top" style="height:0">
                        <td style="width:2px"></td>
                        <td style="width:29px"></td>
                        <td style="width:28px"></td>
                        <td style="width:23px"></td>
                        <td style="width:5px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:13px"></td>
                        <td style="width:18px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:42px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:31px"></td>
                        <td style="width:93px"></td>
                        <td style="width:1px"></td>
                    </tr>
                    <tr valign="top" style="height:2px">
                        <td colspan="21">
                        </td>
                    </tr>
                    <tr valign="top" style="height:45px">
                        <td>
                        </td>
                        <td colspan="3" style="border-top: 2.5px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s" v-if="student.system_id == 1">نظامى</span>
                            <span class=" s" v-else>منازل</span>

                        </td>
                        <td colspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s_b_s">{{student.sitting_number | toArabic}}</span></td>
                        <td colspan="3" dir="rtl" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s">رقم الجلوس</span></td>
                        <td colspan="8" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: right;">
                            <span class="s_b_s pr-4">{{student.student_name}}</span></td>
                        <td dir="rtl" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">اسم الطالب</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:45px">
                        <td>
                        </td>
                        <td colspan="10" dir="rtl" style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s_h">ثانياً: مواد لا تضاف الى المجموع الكلى</span></td>
                        <td rowspan="3" style="border: 1px solid #000000; text-indent: -60px; ">
                            <div style="position: relative;  width:42px;height:124px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:124px;height:42px;text-align: center;-webkit-transform: translate(-27px,41px) rotate(-90deg); -moz-transform: translate(-27px,41px) rotate(-90deg); -ms-transform: translate(-27px,41px) rotate(-90deg); -o-transform: translate(-27px,41px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class=" s">المجموع الكلى</span></span></span></div>
                        </td>
                        <td colspan="7" dir="rtl" style="text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s_h">اولا: مواد تضاف الى المجموع الكلى</span></td>
                        <td rowspan="3" dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; text-align: center;">
                            <!-- <span style="font-family: 'Jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 10px; line-height: 1.1640625;">المادة
                                
                                </span> -->
                            <div>
                                <img :src="'../front-end/north.jpeg'" class="img" />

                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:21px">
                        <td>
                        </td>
                        <td rowspan="2" style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: -45px; ">
                            <div style="position: relative;  width:29px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:29px;text-align: center;-webkit-transform: translate(-30px,30px) rotate(-90deg); -moz-transform: translate(-30px,30px) rotate(-90deg); -ms-transform: translate(-30px,30px) rotate(-90deg); -o-transform: translate(-30px,30px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">مستوى فرنسى</span></span></span></div>
                        </td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -46px; ">
                            <div style="position: relative;  width:28px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:28px;text-align: center;-webkit-transform: translate(-30px,30px) rotate(-90deg); -moz-transform: translate(-30px,30px) rotate(-90deg); -ms-transform: translate(-30px,30px) rotate(-90deg); -o-transform: translate(-30px,30px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">مستوى انجليزى</span></span></span></div>
                        </td>
                        <td colspan="2" rowspan="2" style="border: 1px solid #000000; text-indent: -45px; ">
                            <div style="position: relative;  width:28px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:28px;text-align: center;-webkit-transform: translate(-30px,30px) rotate(-90deg); -moz-transform: translate(-30px,30px) rotate(-90deg); -ms-transform: translate(-30px,30px) rotate(-90deg); -o-transform: translate(-30px,30px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">التربية الرياضية</span></span></span></div>
                        </td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -45px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">الحاسب الآلى</span></span></span></div>
                        </td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -45px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">التربية الفنية</span></span></span></div>
                        </td>
                        <td colspan="2" rowspan="2" style="border: 1px solid #000000; text-indent: -45px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">التربية الدينية</span></span></span></div>
                        </td>
                        <td colspan="2" dir="rtl" style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s_bb">
                                <p class="mt-1">الانشطة التربوية </p>
                                <p class="m-0">اللاصيفية</p>
                            </span></td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -66px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">العلوم</span></span></span></div>
                        </td>
                        <td colspan="3" dir="rtl" style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">الرياضيات</span></td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -45px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">الدراسات الاجتماعية</span></span></span></div>
                        </td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -47px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">اللغــــة الانجليزيــــــة</span></span></span></div>
                        </td>
                        <td rowspan="2" style="border: 1px solid #000000; text-indent: -47px; ">
                            <div style="position: relative;  width:31px;height:89px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:89px;height:31px;text-align: center;-webkit-transform: translate(-19px,29px) rotate(-90deg); -moz-transform: translate(-19px,29px) rotate(-90deg); -ms-transform: translate(-19px,29px) rotate(-90deg); -o-transform: translate(-19px,29px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">اللغـــــــــــة العربيــــة</span></span></span></div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:85px">
                        <td>
                        </td>
                        <td style="border: 1px solid #000000; text-indent: 0px; ">
                            <div style="position: relative;  width:31px;height:68px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:68px;height:31px;text-align: center;-webkit-transform: translate(-9px,18px) rotate(-90deg); -moz-transform: translate(-9px,18px) rotate(-90deg); -ms-transform: translate(-9px,18px) rotate(-90deg); -o-transform: translate(-9px,18px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">( 2 )</span></span></span></div>
                        </td>
                        <td style="border: 1px solid #000000; text-indent: 0px; ">
                            <div style="position: relative;  width:31px;height:68px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:68px;height:31px;text-align: center;-webkit-transform: translate(-9px,18px) rotate(-90deg); -moz-transform: translate(-9px,18px) rotate(-90deg); -ms-transform: translate(-9px,18px) rotate(-90deg); -o-transform: translate(-9px,18px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">( 1 )</span></span></span></div>
                        </td>
                        <td style="border: 1px solid #000000; text-indent: 0px; ">
                            <div style="position: relative;  width:31px;height:68px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:68px;height:31px;text-align: center;-webkit-transform: translate(-9px,18px) rotate(-90deg); -moz-transform: translate(-9px,18px) rotate(-90deg); -ms-transform: translate(-9px,18px) rotate(-90deg); -o-transform: translate(-9px,18px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">المجموع</span></span></span></div>
                        </td>
                        <td style="border: 1px solid #000000; text-indent: 0px; ">
                            <div style="position: relative;  width:31px;height:68px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:68px;height:31px;text-align: center;-webkit-transform: translate(-9px,18px) rotate(-90deg); -moz-transform: translate(-9px,18px) rotate(-90deg); -ms-transform: translate(-9px,18px) rotate(-90deg); -o-transform: translate(-9px,18px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">الهندسة</span></span></span></div>
                        </td>
                        <td style="border: 1px solid #000000; text-indent: 0px; ">
                            <div style="position: relative;  width:31px;height:68px;">
                                <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:68px;height:31px;text-align: center;-webkit-transform: translate(-9px,18px) rotate(-90deg); -moz-transform: translate(-9px,18px) rotate(-90deg); -ms-transform: translate(-9px,18px) rotate(-90deg); -o-transform: translate(-9px,18px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); "><span style="display: table-cell; vertical-align:middle;"><span class="span">الجبر</span></span></span></div>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:35px">
                        <td>
                        </td>
                        <td style="background-color: #A8A8A8; border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{40 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{50 | toArabic}}</span></td>
                        <td colspan="2" style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{40 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td colspan="2" style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{40 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{280 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{40 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{60 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{30 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{30 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{40 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{60 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{80 | toArabic}}</span></td>
                        <td dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">النهاية العظمى</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:35px">
                        <td>
                        </td>
                        <td style="background-color: #A8A8A8; border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{16 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{25 | toArabic}}</span></td>
                        <td colspan="2" style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{10 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{10 | toArabic}}</span></td>
                        <td colspan="2" style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{10 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{10 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{140 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{30 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">-</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">-</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{20 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{30 | toArabic}}</span></td>
                        <td style="background-color: #A8A8A8; border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{40 | toArabic}}</span></td>
                        <td dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">النهاية الصغرى</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:40px">
                        <td>
                        </td>
                        <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.level_fr ? student.level_fr: '-' | toArabic }}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.level_en ? student.level_en: '-' | toArabic }}</span></td>
                        <td colspan="2" style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.tr_r |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.com |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.tr_f |toArabic}}</span></td>
                        <td colspan="2" style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.tr_d |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.n2 |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.n1 |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.total |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.sci |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.total_math |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.math_h |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.math_g |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.stu |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.en |toArabic}}</span></td>
                        <td style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.ar |toArabic}}</span></td>
                        <td dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">درجات الطالب</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:45px">
                        <td>
                        </td>
                        <td colspan="11" style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">{{student.total|toWord}} درجة</span></td>
                        <td colspan="3" dir="rtl" style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">الدرجة بالحروف</span></td>
                        <td colspan="4" style="border: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b">{{student.total | toArabic}}</span></td>
                        <td dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">المجموع الكلى للطالب</span></td>
                        <td>
                        </td>
                    </tr>
                    <tr valign="top" style="height:45px">
                        <td>
                        </td>
                        <td colspan="11" style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 2.5px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">

                            <!-- <span class=" s">Static Text</span> -->
                            <span class=" s" v-if="student.total >= 239"> ممتاز</span>
                            <span class=" s" v-if="student.total <= 238 && student.total >= 210"> جيد جدا</span>
                            <span class=" s" v-if="student.total <= 209 && student.total >= 182"> جيد </span>
                            <span class=" s" v-if="student.total <= 181 && student.total >= 140"> مقبول </span>
                        </td>
                        <td colspan="3" dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 2.5px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">التقدير</span></td>
                        <td colspan="4" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 2.5px solid #000000; border-right: 1px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class="s_b"> % {{(student.total*100/280).toFixed(2) | toArabic}} </span></td>
                        <td dir="rtl" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 2.5px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px;  vertical-align: middle;text-align: center;">
                            <span class=" s">النسبة المئوية</span></td>
                        <td>
                        </td>
                    </tr>

                </table>

            </td>

        </tr>

    </table>
</div>
</template>

<script>
import { toArabic } from 'arabic-digits';
var writtenNumber = require('written-number');
export default {
    data() {
        return {
            students: [],
            form: {}
        }
    },
    mounted() {
        // this.GethataStudentBySchools();

        Vue.filter('toArabic', function (value) {
            return toArabic(value).replace(".", ",");
        })
        Vue.filter('toWord', function (value) {

            return writtenNumber(value, { lang: 'ar' });
        })
    },
    methods: {
        GethataStudentBySchools() {
            axios.post('/getCert_stecker', this.form).then(res => {
                this.students = res.data
            })
        }
    },
}
</script>

<style lang="scss" scoped>
.span {
    font-family: 'sultan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 17px;
    line-height: 1.1640625;
}

.s {
    font-family: 'jordan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 18px !important;
    line-height: 1.1640625;
}

.s_h {
    font-family: 'jordan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 20px !important;
    font-weight: 900;
    line-height: 1.1640625;
}

.s_b {
    font-family: 'sultan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 20px !important;
    line-height: 1.1640625;
}

.s_b_s {
    font-family: 'sultan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 25px !important;
    line-height: 1.1640625;
}

.s_bb {
    font-family: 'sultan', Arial, Helvetica, sans-serif;
    color: #000000;
    font-size: 13px !important;
    line-height: 1.1640625;
}

.img {
    width: 100px;
    height: 120px;
    padding-bottom: 3px;
    padding-top: 3px;
}
</style>
