<template>
<div class="container" >
    <div class="row boxborderrow " style=" margin-bottom: 28px; " v-for="student in students" >
        <div class="col-2 boxborder text-center ">
            <p class="font">رقم الجلوس</p>
            <p class="font">{{student.sitting_number}}</p>
        </div>
        <div class="col-8 text-center">
            <p>محافظة شمال سيناء</p>
            <p>مديرية التربية والتعليم</p>
            <p>لجنة النظام والمراقبة لأمتحان الشهادة الإعدادية للعام الدراسى 2020 - 2021م</p>
            <div class="box">بطاقة إخطار برقم جلوس طالب - الدور الثانى</div>

        </div>
        <div class="col-2 boxborder text-center">
            <p>رئيس لجنة </p>
            <p>النظام و المراقبة</p>
            <p>أ/عادل يحيي</p>
        </div>
        <div class="col-12 b">
            <table class="table table-borderless fonts">
                <tbody>
                    <tr>
                        <td class="text-right" style="width:15%">اسم الطالب</td>
                        <td class="text-right" style="width:30%">
                            <div class="br text-center">{{student.student_name}}</div>
                        </td>
                        <td class="text-center" style="width:15%">اللجنة</td>
                        <td class="text-center">
                            <div class="br text-center">{{student.committee.committee_name}}</div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-right" style="width:20%">اﻻدارة التعليمية</td>
                        <td class="text-center">
                            <div class="br">{{student.mange.mange_name}}</div>
                        </td>
                        <td class="text-center" style="width:15%">المدرسة</td>
                        <td class="text-center">
                            <div class="br">{{student.school_name}}</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 b">
            <table class="table table-bordered fonts text-center">
                <thead>
                    <tr>
                        <th>السبت</th>
                        <th>الاحد</th>
                        <th>الاثنين</th>
                        <th>الثلاثاء</th>
                        <th>الاربعاء</th>
                        <th>الخميس</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td :class="student.ar <= 39 ? 'back':'' || student.ar === 'غـ' ? 'back' : ''">عربى</td>
                        <td :class="student.en <= 29 ? 'back':''">انجليزى</td>
                        <td :class="student.total_math <= 29 ? 'back':''">جبر</td>
                        <td :class="student.total_math <= 29 ? 'back':''">هندسة</td>
                        <td :class="student.sci <= 19 ? 'back':''">علوم</td>
                        <td :class="student.stu <= 19 ? 'back':''">دراسات</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 text-center fonts" id="borderDemo">
            الطالب له حق دخول الدور الثانى فى المواد المظلل عليها فقط
        </div>
       
        
    </div>

</div>
</template>

<script>
export default {
    data() {
        return {
            students: [],
        }
    },
    mounted() {
        this.GetDataStudent();
    },
    methods: {
        GetDataStudent() {
            axios.get('/student_by_settings').then(res => {
                this.students = res.data.students;

            }).catch(e => {
                console.log('error');
            })
        }
    },

}
</script>

<style lang="scss" scoped>
@page {
    // margin: .5cm;
    margin-left: 1cm !important;
    margin-right: 1cm !important;
    // margin-bottom: 2cm;
}

p {
    margin-top: 0 !important;
    margin-bottom: 0rem !important;
    font-weight: 900 !important;
    font-size: 16px !important;
    font-family: 'Tajawal', sans-serif !important;
}

.box {
    -webkit-box-shadow: 3px 3px 0px 4px rgba(0, 0, 0, 0.89) !important;
    box-shadow: 3px 3px 0px 4px rgba(0, 0, 0, 0.89) !important;
    font-family: 'Tajawal', sans-serif !important;
    font-weight: 900 !important;
}

.boxborder {
    border: 1px solid #000000;
    padding: 17px;
}

.boxborderrow {
    border: 1px solid #000000;
    padding: 5px;
}

.font {
    font-size: 22px !important;
}

.b {
    padding-right: 0px !important;
    padding-left: 0px !important;
    margin-top: 10px;
}

.br {

    border: 1px solid;
}

.table td,
.table th {
    padding: 1px !important;
    vertical-align: top !important;
    border-top: unset !important;
}

.fonts {
    font-family: 'sultan', 'Tajawal', sans-serif !important;
    font-size: 18px !important;
    color: #000000 !important;
}

#borderDemo {
    border: 3px dotted #000000;
    background-color: #bdbdbd;
}
.back{
    background-color: #888888 !important;
}
</style>
