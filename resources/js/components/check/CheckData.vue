<template>

  <div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-block">
            <div class="row">
              <div class="col-lg-6 offset-lg-3">
                <p class="txt-highlight text-center m-t-20">lorem ipsum مراجعة بيانات المدارس
                </p>
              </div>
            </div>
            <form @submit.prevent="SearchDataIng">
              <div class="row seacrh-header">
                <div class="col-lg-4 offset-lg-4 offset-sm-3 col-sm-6 offset-sm-1  ">
                  <div class="input-group input-group-button input-group-primary">
                    <input type="text" v-model="form.start" class="form-control" placeholder="رقم المدرسة">
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
            <h2> {{school.school_name}} </h2>
            <!-- <span class="label label-default f-right"> 28 January, 2015 </span> -->
            <div class="dropdown-secondary dropdown f-left">
              <button class="btn btn-primary btn-mini dropdown-toggle waves-effect waves-light" type="button" id="dropdown2" data-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false">Overdue</button>
              <div class="dropdown-menu" aria-labelledby="dropdown2" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-danger"></span>Pending</a>
                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-warning"></span>Paid</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-light waves-effect active" href="#!"><span class="point-marker bg-success"></span>On
                                  Hold</a>
                <a class="dropdown-item waves-light waves-effect" href="#!"><span class="point-marker bg-info"></span>Canceled</a>
              </div>
              <!-- end of dropdown menu -->
              <span class="f-right m-r-5 text-inverse">Status :
                          </span>
            </div>
          </div>
          <div class="card-block">
            <div class="row">
              <div class="col-sm-6">

                <ul class="list list-unstyled">
                  <li>
                    <h3 class="red">من</h3>
                  </li>
                  <li>
                    <strong class="label label-success"> {{start}} </strong>

                  </li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="list list-unstyled text-right">
                  <li>
                    <h3 class="red">الى</h3>
                  </li>
                  <li>
                    <strong class="label label-danger">{{end}}</strong>

                  </li>
                </ul>
              </div>

              <div class="col-sm-12 m-t-20">
                <div class="divTable redTable">
                  <div class="divTableBody">
                    <div class="divTableRow">
                      <div class="divTableCell">العدد اﻻجمالى</div>
                      <div class="divTableCell">انثى</div>
                      <div class="divTableCell">ذكر</div>
                      <div class="divTableCell">مسلم</div>
                      <div class="divTableCell">مسيحى</div>
                      <div class="divTableCell">نظام</div>
                      <div class="divTableCell">منازل</div>

                    </div>
                    <div class="divTableRow">
                      <div class="divTableCell">{{school.school_Count}}</div>
                      <div class="divTableCell">{{school.gender_f}}</div>
                      <div class="divTableCell">{{school.gender_m}}</div>
                      <div class="divTableCell">{{school.religioni_slam}}</div>
                      <div class="divTableCell" :class="`${school.religion_m ? 'colortext' : ''}`">{{school.religion_m}}</div>
                      <div class="divTableCell">{{school.system_n}}</div>
                      <div class="divTableCell" :class="`${school.system_m ? 'colortext' : ''}` ">{{school.system_m}}</div>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="card-footer text-center">
            <div class="task-list-table inline">
              <p class="task-due" v-for="system in systems"><strong class="label label-danger">{{system}}</strong></p>

            </div>

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
        systems: [],
        school: '',
        start: '',
        end: '',
        form: {
          start: ''
        }
      }
    },
    methods: {
      SearchDataIng() {
        axios.post('/lable-school', this.form).then(res => {
          this.school = res.data.school_name.school
          this.start = res.data.lable_sitting_first.first
          this.end = res.data.lable_sitting_last.last
          this.systems = res.data.system
          // console.log(this.school.lable_sitting_first.first);
        })
      },
      SearchDataDeg() {
        axios.post('/check_data', this.form).then(res => {
          this.studentDe = res.data

          // console.log(res.data[0].sitting_number);
          this.form.start = parseInt(res.data[0].sitting_number) - 1
          this.degr = false
        })
      }
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
    background: #d7d7d7;
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

</style>
