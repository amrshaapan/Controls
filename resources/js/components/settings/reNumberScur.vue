<template>

  <div>
    <div class="row">





      <div class="col-sm-6 mobile-inputs">
        <h4 class="sub-title text-right">ارقام الجلوس</h4>
        <form>
          <div class="form-group">
            <div class="row">

              <div class="col-sm-6">
                <input type="text" v-model="form.group" class="form-control " required placeholder="رقم المجموعة" />

              </div>
              <div class="col-sm-6">
                <input type="text" v-model="form.sub_group" class="form-control" required placeholder="رقم المجموعة" />

              </div>
            </div>
          </div>
    <h4 class="sub-title text-center">ارقام الجلوس</h4>
          <div class="form-group row" v-for="(number, index) in numbers" :key="index">
            <div class="col-sm-6">
              <input type="text" v-model.number="number.start" required class="form-control" placeholder="Start" />
            </div>
            <div class="col-sm-6">
              <input type="text" v-model.number="number.end = number.start + 9" disabled class="form-control form-control-danger" placeholder="End"
              />
            </div>
          </div>

        </form>
      </div>

      <div class="col-sm-6 mobile-inputs">
        <h4 class="sub-title text-right">الرقم السرى للمجموعة</h4>
        <form>
          <div class="form-group">
            <input type="text" v-model="form.secur_number" class="form-control form-control-primary" required placeholder="بداية الرقم السرى للكل"
            />
          </div>
          <button @click.pravent="deleteUser(index)" class="btn btn-danger">حذف مستوى</button>
          <button @click.pravent="addUser" class="btn btn-success">اضافة مستوى جديد</button>

          <button @click.pravent="StoreNumber" class="btn btn-inverse">ابدأ الترقيم</button>

        </form>
      </div>

      <!-- {{calc}} -->
      <!-- <pre>{{ $data }}</pre> -->
    </div>
  </div>

</template>

<script>

  export default {
    data() {
      return {
        numbers: [],
        form: {
          group: '',
          secur_number: '',
          sub_group:''
        }
      }
    },

    methods: {
      addUser: function(vlaue) {
        this.numbers.push({ start: null, end: null })
      },
      deleteUser: function(index) {
        this.numbers.splice(index, 1)
        if (index === 0) this.addUser()
      },

      StoreNumber() {
        axios.post('/StoreNumber', { number: this.numbers, group: this.form }).then(res => {})
      }
    }
  }

</script>

<style lang="scss" scoped>
</style>
