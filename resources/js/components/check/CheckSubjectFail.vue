<template>

  <div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-block">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <p class="txt-highlight text-center m-t-20">مراجعة درجة المواد للطالب
                </p>
              </div>
            </div>
            <form @submit.prevent="SearchDataIng">
              <div class="row seacrh-header">
                <div class="col-lg-4 offset-lg-4 offset-sm-3 col-sm-6 offset-sm-1  ">
                  <div class="input-group input-group-button input-group-primary">
                    <input type="text" v-model="form.start" class="form-control" placeholder="رقم الجلوس">
                    <button type="submit" class="btn btn-primary input-group-addon">بحث</button>
                  </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <!-- Invoice list card start -->
        <div class="card card-border-primary">
          <div class="card-header text-right">
            <h2> {{subject.student_name}} </h2><br/>
            <h5>{{subject.school_name}}</h5><br/>
            <h5>{{subject.school_number}}</h5>
            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
            
          </div>
          <div class="card-block">
            <div class="row">
             
             

              <div class="col-sm-12 m-t-20">
                <div class="divTable redTable">
                  <div class="divTableBody">
                    <div class="divTableRow">
                      <div class="divTableCell">العربى</div>
                      <div class="divTableCell">انجليزى</div>
                      <div class="divTableCell">جبر</div>
                      <div class="divTableCell">هندسة</div>
                      <div class="divTableCell">مجموع الرياضيات</div>
                      <div class="divTableCell">دراسات</div>
                      <div class="divTableCell">علوم</div>
                      <div class="divTableCell">الكلى</div>

                    </div>
                    <div class="divTableRow">
                      <div class="divTableCell" :class="subject.ar <= 39 ? 'back':'' || subject.ar === 'غـ' ? 'back' : ''">{{subject.ar}}</div>
                      <div class="divTableCell" :class="subject.en <= 29 ? 'back':''">{{subject.en}}</div>
                      <div class="divTableCell">{{subject.math_g}}</div>
                      <div class="divTableCell">{{subject.math_h}}</div>
                      <div class="divTableCell" :class="subject.total_math <= 29 ? 'back':''">{{subject.total_math}}</div>
                      <div class="divTableCell" :class="subject.stu <= 19 ? 'back':''">{{subject.stu}}</div>
                      <div class="divTableCell" :class="subject.sci <= 19 ? 'back':''">{{subject.sci}}</div>
                      <div class="divTableCell" :class="subject.total <= 139 ? 'back':''">{{subject.total}}</div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card-footer text-center">
           

            <!-- end of pull-right class -->
          </div>
          <!-- end of card-footer -->
        </div>
        <!-- Invoice list card end -->
      </div>

    </div>

  </div>

</template>

<script>

  export default {
    data() {
      return {
     
        subject: '',
        start: '',
        end: '',
        form: {
          start: ''
        }
      }
    },
    methods: {
      SearchDataIng() {
        axios.post('/check_subject_fail', this.form).then(res => {
          this.subject = res.data
          this.form.start = ''
          // console.log(this.school.lable_sitting_first.first);
        })
      },
  
    }
  }

</script>

<style lang="scss" scoped>

  @media (min-width: 992px) {
    .offset-lg-4 {
      margin-right: 33.333333% !important;
    }
  }

  div.redTable {
    border: 0px solid #000000;
    width: 100%;
    text-align: center;
    border-collapse: collapse;
  }

  .divTable.redTable .divTableCell,
  .divTable.redTable .divTableHead {
    border: 1px solid #9b9b9b;
    padding: 2px 1px;
  }

  .divTable.redTable .divTableBody .divTableCell {
    font-size: 23px;
    font-weight: bold;
  }

  .divTable.redTable .divTableRow:nth-child(even) {
    background: #fffdfd;
  }

  .redTable .tableFootStyle {
    font-size: 13px;
  }

  .colortext {
    background-color: #fe8896;
  }

  /* DivTable.com */
  .divTable {
    display: table;
  }

  .divTableRow {
    display: table-row;
  }

  .divTableHeading {
    display: table-header-group;
  }

  .divTableCell,
  .divTableHead {
    display: table-cell;
  }

  .divTableHeading {
    display: table-header-group;
  }

  .divTableFoot {
    display: table-footer-group;
  }

  .divTableBody {
    display: table-row-group;
  }

  .inline {
    display: inline-flex !important;
  }
  .label {
    border-radius: 4px;
    font-size: 25px !important;
    padding: 4px 7px;
    margin-right: 5px;
    font-weight: 400;
    color: #fff !important;
  }
.back{
    background-color: #ff8888 !important;
}
</style>
