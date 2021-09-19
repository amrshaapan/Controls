<template>
<div dir="ltr">
<div class="row">
        <div class="col-12 d-print-none">
            <div class="card" style="min-height: 304px;">
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
    <table class="jrPage" data-jr-height="842" cellpadding="0" cellspacing="0" border="0" style="empty-cells: show; width: 100%; border-collapse: collapse; background-color: white;">
       
        <tr valign="top" style="height:0">
            <td style="width:22px" />
            <td style="width:40px" />
            <td style="width:17px" />
            <td style="width:23px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:5px" />
            <td style="width:35px" />
            <td style="width:11px" />
            <td style="width:29px" />
            <td style="width:40px" />
            <td style="width:81px" />
            <td style="width:57px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:40px" />
            <td style="width:60px" />
            <td style="width:80px" />
            <td style="width:100px" />
            <td style="width:100px" />
            <td style="width:70px" />
            <td style="width:21px" />
        </tr>
         <thead>
        <tr valign="top" style="height:22px">
            <td colspan="27"></td>
        </tr>
        <tr valign="top" style="height:27px">
            <td></td>
            <td colspan="9" style="text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">الدور الثانى</span>
            </td>
            <td></td>
            <td colspan="12" rowspan="4" style="text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.1640625;">
                    <p>كشــــف رصد درجات طلاب راسبون</p>
                    <p>إمتحان شهادة إتمام الدراسة بمرحلة التعليم اﻻساسى لسنة 2020 _ 2021</p>
                </span>
            </td>
            <td colspan="3" rowspan="4" style="text-indent: 0px; text-align: right;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">    <p class="m fonts"> محافظة شمال سيناء</p>
                                        <p class="m fonts">مديرية التربية والتعليم </p>
                                        <p class="m fonts"> لجنة النظام والمراقبة</p></span>
            </td>
            <td></td>
        </tr>
        <tr valign="top" style="height:6px">
            <td colspan="11"></td>
            <td></td>
        </tr>
        <tr valign="top" style="height:23px">
            <td></td>
            <td colspan="9" style="text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">2021</span>
            </td>
            <td></td>
            <td></td>
        </tr>
        <tr valign="top" style="height:2px">
            <td colspan="11"></td>
            <td></td>
        </tr>
        <tr valign="top" style="height:3px">
            <td colspan="27"></td>
        </tr>
        <tr valign="top" style="height:2px">
            <td colspan="3"></td>
            <td colspan="5" rowspan="2" style="background-color: #B3B3B3; border: 1.75px dashed #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 19px; line-height: 1.1640625; font-weight: bold;">نظامى</span>
            </td>
            <td colspan="19"></td>
        </tr>
        <tr valign="top" style="height:28px">
            <td colspan="3"></td>
            <td >

            </td>
            <td colspan="4">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625; font-weight: bold;"> إدارة : رفح التعليمية  </span>
            </td>
            <td colspan="11" rowspan="2" style="text-indent: 0px; vertical-align: middle;text-align: right;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 20px; line-height: 1.1640625;">{{school}} </span>
            </td>
            <td colspan="2" rowspan="2" style="text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;"> : اسم المدرسة  </span>
            </td>
        </tr>
        <tr valign="top" style="height:2px">
            <td colspan="11"></td>
            <td></td>
        </tr>
        <tr valign="top" style="height:2px">
            <td colspan="27"></td>
        </tr>
        <tr valign="top" style="height:28px">
            <td></td>
            <td colspan="3" style="border-top: 2.5px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">مستوى رفيع {{students.length}}</span>
            </td>
            <td rowspan="2" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:40px;text-align: center;-webkit-transform: translate(-25px,25px) rotate(-90deg); -moz-transform: translate(-25px,25px) rotate(-90deg); -ms-transform: translate(-25px,25px) rotate(-90deg); -o-transform: translate(-25px,25px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">تربية فنية</span>
                        </span>
                    </span>
                </div>
            </td>
            <td rowspan="2" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:40px;text-align: center;-webkit-transform: translate(-25px,25px) rotate(-90deg); -moz-transform: translate(-25px,25px) rotate(-90deg); -ms-transform: translate(-25px,25px) rotate(-90deg); -o-transform: translate(-25px,25px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">حاسب آلى</span>
                        </span>
                    </span>
                </div>
            </td>
            <td rowspan="2" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:40px;text-align: center;-webkit-transform: translate(-25px,25px) rotate(-90deg); -moz-transform: translate(-25px,25px) rotate(-90deg); -ms-transform: translate(-25px,25px) rotate(-90deg); -o-transform: translate(-25px,25px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">تربية دينية</span>
                        </span>
                    </span>
                </div>
            </td>
            <td colspan="2" rowspan="2" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:40px;text-align: center;-webkit-transform: translate(-25px,25px) rotate(-90deg); -moz-transform: translate(-25px,25px) rotate(-90deg); -ms-transform: translate(-25px,25px) rotate(-90deg); -o-transform: translate(-25px,25px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">تربية رياضية</span>
                        </span>
                    </span>
                </div>
            </td>
            <td colspan="2" rowspan="2" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:40px;text-align: center;-webkit-transform: translate(-25px,25px) rotate(-90deg); -moz-transform: translate(-25px,25px) rotate(-90deg); -ms-transform: translate(-25px,25px) rotate(-90deg); -o-transform: translate(-25px,25px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">نشاط ( 2 )</span>
                        </span>
                    </span>
                </div>
            </td>
            <td rowspan="2" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:40px;text-align: center;-webkit-transform: translate(-25px,25px) rotate(-90deg); -moz-transform: translate(-25px,25px) rotate(-90deg); -ms-transform: translate(-25px,25px) rotate(-90deg); -o-transform: translate(-25px,25px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">نشاط ( 1 )</span>
                        </span>
                    </span>
                </div>
            </td>
            <td rowspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:81px;height:133px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:133px;height:81px;text-align: center;-webkit-transform: translate(-26px,26px) rotate(-90deg); -moz-transform: translate(-26px,26px) rotate(-90deg); -ms-transform: translate(-26px,26px) rotate(-90deg); -o-transform: translate(-26px,26px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">التقدير العام</span>
                        </span>
                    </span>
                </div>
            </td>
            <td rowspan="2" style="border-top: 2.5px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:57px;height:91px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:91px;height:57px;text-align: center;-webkit-transform: translate(-17px,17px) rotate(-90deg); -moz-transform: translate(-17px,17px) rotate(-90deg); -ms-transform: translate(-17px,17px) rotate(-90deg); -o-transform: translate(-17px,17px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">المجموع الكلى</span>
                        </span>
                    </span>
                </div>
            </td>
            <td colspan="7" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">مـــواد تضاف الى المجموع الكلــــى</span>
            </td>
            <td rowspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:60px;height:133px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:133px;height:60px;text-align: center;-webkit-transform: translate(-36px,36px) rotate(-90deg); -moz-transform: translate(-36px,36px) rotate(-90deg); -ms-transform: translate(-36px,36px) rotate(-90deg); -o-transform: translate(-36px,36px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">حالة القيد</span>
                        </span>
                    </span>
                </div>
            </td>
          
            <td colspan="3" rowspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">اســــــــــــــــم الطــــالـــــب</span>
            </td>
            <td rowspan="4" style="border-top: 2.5px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:70px;height:133px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:133px;height:70px;text-align: center;-webkit-transform: translate(-31px,31px) rotate(-90deg); -moz-transform: translate(-31px,31px) rotate(-90deg); -ms-transform: translate(-31px,31px) rotate(-90deg); -o-transform: translate(-31px,31px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;"> رقم الجلوس</span>
                        </span>
                    </span>
                </div>
            </td>
            <td></td>
        </tr>
        <tr valign="top" style="height:63px">
            <td></td>
            <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">فرنسى</span>
                        </span>
                    </span>
                </div>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">انجليزى</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">علوم</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 15px; line-height: 1.1640625;">مجموع الرياضيات</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">هندسة</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">جبر</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">دراسات</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">انجليزى</span>
                        </span>
                    </span>
                </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; ">
                <div style="position: relative; overflow: hidden; width:40px;height:63px;">
                    <span class="rotated" data-rotation="left" style="position: absolute; display: table; width:63px;height:40px;text-align: center;-webkit-transform: translate(-11px,11px) rotate(-90deg); -moz-transform: translate(-11px,11px) rotate(-90deg); -ms-transform: translate(-11px,11px) rotate(-90deg); -o-transform: translate(-11px,11px) rotate(-90deg); filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3); ">
                        <span style="display: table-cell; vertical-align:middle;">
                            <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 18px; line-height: 1.1640625;">عربى</span>
                        </span>
                    </span>
                </div>
            </td>
            <td></td>
        </tr>
        <tr valign="top" style="height:21px">
            <td></td>
            <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">50</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">280</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">60</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">60</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">80</span>
            </td>
            <td></td>
        </tr>
        <tr valign="top" style="height:21px">
            <td></td>
            <td style="background-color: #9E9E9E; border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">16</span>
            </td>
            <td colspan="2" style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">25</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">10</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td colspan="2" style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td colspan="2" style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">10</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">10</span>
            </td>
            <td style="background-color: #9E9E9E; border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">140</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">15</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">15</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">20</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">30</span>
            </td>
            <td style="background-color: #9E9E9E; border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">40</span>
            </td>
            <td></td>
        </tr>
         <tr valign="top" style="height:3px">
            <td colspan="27"></td>
        </tr>
        </thead>
        <tbody>
        
        <tr v-for="student in students" valign="top" style="height:30px">
            <td></td>
            <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.level_fr ? student.level_fr: '-' | toArabic}}</span>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.level_en ? student.level_en: '-' | toArabic }}</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.tr_f | toArabic}}</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.system_id == 1 ? student.com : '-' | toArabic}}</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.tr_d | toArabic}}</span>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.system_id == 1 ? student.tr_r : '-' | toArabic}}</span>
            </td>
            <td colspan="2" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.system_id == 1 ? student.n2 : '-'| toArabic}}</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.system_id == 1 ? student.n1 : '-'| toArabic}}</span>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <!-- <span v-if="student.total >= 239" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;"> ممتاز</span>
                <span v-if="student.total <= 238 && student.total >= 210" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;"> جيد جدا</span>
                <span v-if="student.total <= 209 && student.total >= 182" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;"> جيد </span>
                <span v-if="student.total <= 181 && student.total >= 140" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;"> مقبول </span> -->
                <span  style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;"> دون المستوى </span>
            </td>
            <td style="border-top: 1px solid #000000; border-left: 2.5px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <!-- <div :class="student.total <= 139 || student.total != student.total_math*1 + student.ar*1 + student.en*1 + student.stu*1 + student.sci*1? 'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.total  | toArabic}}</span></div> -->
              <div > <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">--</span></div> 
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;" >
               <div :class="student.sci <= 19 ? 'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;" >{{student.sci == -1 ? 'غـ' : student.sci | toArabic}}</span> </div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;" >
                <div :class="student.total_math <= 29 || student.total_math != student.math_g*1 + student.math_h*1 ? 'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.total_math >= 0 ? student.total_math : 'غـ'| toArabic}}</span></div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
               <div :class="student.math_h == -1 ? 'fail' : ''"><span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.math_h == -1 ? 'غـ' : student.math_h| toArabic}}</span></div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
               <div :class="student.math_g == -1 ? 'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.math_g == -1 ? 'غـ' : student.math_g| toArabic}}</span></div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;"  >
               <div :class="student.stu <= 19 ?'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;" >{{student.stu == -1 ? 'غـ' : student.stu | toArabic}}</span></div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;" >
                <div :class="student.en <= 29 ? 'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.en == -1 ? 'غـ' : student.en| toArabic}}</span></div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;" >
               <div :class="student.ar <= 39 ? 'fail' : ''"> <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;" >{{student.ar == -1 ? 'غـ' : student.ar | toArabic}}</span></div>
            </td>
            <td style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <!-- <span v-if="student.entrie_id == 1 && student.system_id == 1" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">ناجح ومنقول</span>
                <span v-if="student.entrie_id == 2 && student.system_id == 1" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">ناجح ويحسن اعدادية</span>
                <span v-if="student.entrie_id == 3 && student.system_id == 1" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">راسب وباق للاعادة</span>
                <span v-if="student.system_id == 2" style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">منازل</span> -->
                <span  style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 14px; line-height: 1.1640625;">راسب وباق</span> 
            </td>
            <td colspan="3" style="border: 1px solid #000000; text-indent: 0px; vertical-align: middle;text-align: right; padding-right:5px;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.student_name}}</span>
            </td>
            <td :class="student.system_id == 2 ? 'background-color' : ''" style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 2.5px solid #000000; text-indent: 0px; vertical-align: middle;text-align: center;">
                <span style="font-family: 'sultan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px; line-height: 1.1640625;">{{student.sitting_number}}</span>
            </td>
            <td></td>
        </tr>
        </tbody>
      <tfoot>
                    <tr valign="top" style="height:2px">
                            <td colspan="23">
                               <div class="row ">
                                   <div class="col-6 text-center">
                                       <p style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px;">رئيس لجنة النظام والمراقبة</p>
                                       <p style="font-family: 'jordan', Arial, Helvetica, sans-serif; color: #000000; font-size: 16px;">أ / عادل يحيي محمد</p>
                                       </div>
                                   <div class="col-6  text-right">
                                        <!-- <p>وكيل لجنة النظام والمراقبة</p>
                                       <p>أحمد سعيد / </p> -->
                                       </div>
                               </div>
                            </td>
                        </tr>

                </tfoot>
    </table>

</div>
</template>

<script>
import { toArabic } from 'arabic-digits';
export default {
    data() {
        return {
            students: [],
            school:'',
            form:{}
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

            axios.post('/getCert' , this.form).then(res => {

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

.background-color{
    background-color: rgba(58, 58, 58, 0.555);
}

.fail{
min-width: 45px;
    min-height: 29px;
    border: 1px solid;
    border-radius: 50%;
    background-color: #888585;
}
</style>
