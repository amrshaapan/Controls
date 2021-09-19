<template>
<div>
  <table>
      <tr v-for="Cnam in Cname">
          <div class="border text-center">
               تشهد مديرية التربية والتعليم أن
  <p >{{Cnam.student_name |toArabic(Cnam.gender_id)}}
                {{Cnam.no_id |years}}<br />
                {{Cnam.total |toWord}} درجة
            </p>
          </div>
      </tr>
  </table>
        

            <!-- <div class="border text-center">

    تشهد مديرية التربية والتعليم أن
        </div>
        </div>

الطالب/ عدى بن محمد عوده عوده

المولود في محافظة /  -  برقم قومي/ 0 عام 0م 
قد نجح في امتحان شهادة إتمام الدراسة بمرحلة التعليم الأساسي عام 2020م

وكان مجموع درجاته في هذا الامتحان ( مائتان وخمسة وثلاثون درجة )
ومجموع النهايات الكبرى لدرجات مواد الامتحان (  مائتان وثمانون درجة  )

تحريراً في /  يوليو عام 2020 من الميلاد 

    ختم		مدير مديرية التربية والتعليم

كل كشط أو تغير في هذه الشهادة يلغيها 		      	                 -->
            <!-- سجلت برقم 		 --  		 -->
        

            <!-- <div class="col-12 col-sm-12 col-md-12 text-center">
           <p >تشهد مديرية التربية والتعليم</p> 
           <p >الطالب/ عدى بن محمد عوده عوده</p> 
       </div> -->

 

</div>
</template>

<script>
var writtenNumber = require('written-number');
export default {
    data() {
        return {
            Cname: []
        }
    },
    mounted() {

        axios.get('/getCert').then(res => {
            this.Cname = res.data
            // const [first, rest] = `${this.Cname.student_name}`.split(/\s+(.*)/);
            // console.log({ first, rest });
        })

        Vue.filter('toArabic', function (value, genter) {
            const [first, rest] = `${value}`.split(/\s+(.*)/);
            //    console.log(first + ' ' +'بنت'+ ' ' + rest );

            return first + ' ' + `${genter == 2 ? 'بنت' : 'بن' }` + ' ' + rest
        })
        Vue.filter('years', function (value) {

            return Number('20' + value.slice(1, 3));
        })
        Vue.filter('toWord', function (value) {

            return writtenNumber(value, { lang: 'ar' });
        })
    },

}
</script>

<style lang="scss" scoped>

// .roww {
//     border: 1px solid;
//     width: 5in !important;
//     height: 5in !important;
//     overflow: hidden !important;
//     margin-top: 2.072in;
//     margin-left: 0.803in;
//     margin-right: 0.547in;
//     margin-bottom: 1.078in;
// }



.border {
 border:1px solid;
    width: 990.7px;
    height: 990.7px;
}
</style>
