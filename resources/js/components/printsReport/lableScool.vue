<template>
    <div>
<div class="divTable redTable">
<div class="divTableHeading">
<div class="divTableRow">
<div class="divTableHead">head1</div>
<div class="divTableHead">head2</div>
<div class="divTableHead">head3</div>
</div>
</div>
<div class="divTableBody">
<div class="divTableRow">
<div class="divTableCell">cell1_1</div>
<div class="divTableCell">cell2_1</div>
<div class="divTableCell">cell3_1</div>
</div>
<div class="divTableRow">
<div class="divTableCell">cell1_2</div>
<div class="divTableCell">cell2_2</div>
<div class="divTableCell">cell3_2</div>
</div>
<div class="divTableRow">
<div class="divTableCell">cell1_3</div>
<div class="divTableCell">cell2_3</div>
<div class="divTableCell">cell3_3</div>
</div>
<div class="divTableRow">
<div class="divTableCell">cell1_4</div>
<div class="divTableCell">cell2_4</div>
<div class="divTableCell">cell3_4</div>
</div>
<div class="divTableRow">
<div class="divTableCell">cell1_5</div>
<div class="divTableCell">cell2_5</div>
<div class="divTableCell">cell3_5</div>
</div>
</div>
<div class="divTableFoot tableFootStyle">
<div class="divTableRow">
<div class="divTableCell">foot1</div>
<div class="divTableCell">foot2</div>
<div class="divTableCell">foot3</div>
</div>
</div>
</div>
<a to="printpage/#/lable-school" target="_blank" rel="noopener noreferrer">lkjlkjlj</a>
<a href="printpage/#/lable-school">print</a>
    </div>
</template>

<script>
    export default {

    }
</script>

<style lang="scss" scoped>
div.redTable {
  border: 2px solid #000000;
  width: 100%;
  text-align: center;
}
.divTable.redTable .divTableCell, .divTable.redTable .divTableHead {
  border: 1px solid #9B9B9B;
  padding: 2px 1px;
}
.divTable.redTable .divTableBody .divTableCell {
  font-size: 13px;
  font-weight: bold;
}
.divTable.redTable .divTableRow:nth-child(even) {
  background: #D7D7D7;
}
.divTable.redTable .divTableHeading {
  background: #898989;
  border-bottom: 3px solid #444444;
}
.divTable.redTable .divTableHeading .divTableHead {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: center;
  border-left: 2px solid #626262;
}
.divTable.redTable .divTableHeading .divTableHead:first-child {
  border-left: none;
}

.redTable .tableFootStyle {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
}
.redTable .tableFootStyle {
  font-size: 13px;
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
<!--

طباعة استيكر على الظرف المسيلم للمدارس ويحتوى على ارقام الجلوس
و كشف مناداة الطالب للتاكد منه
ثم تسليمة رقم الجلوس
مع كشوف النشاط الخاصة بالطلاب داخل المدرسة

يكتب على الملصق الاتى :
1- اسم المدرسة
2- رقم المدرسة لسهولة الحصول على بيانات المدرسة من خلال الظرف فى عملية المراجعة
3- يكتب بداية ونهاية ارقام الجلوس النظامى
4- يكتب بداية ونهاية ارقام الجلوس المنازل
5- سكتب ايضا رقم اللجنة التابع لها المدرسة
-

*- ملاحظة : ﻻ يتم طباعة الملصق الا بعد المراجعة مع العضو على الترابيزة ثم طباعة الملصق  وتسليمة للغرفة
-->
