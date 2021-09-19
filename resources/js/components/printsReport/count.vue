<template>
<div>
    <div class="row">
    <div class="col-sm-12 ">
            <h4 class="text-center">بيان عدد الطلبة بالمدارس</h4><br/>
            {{counts.length}}
    </div>

    </div>
 <table class="table table-bordered">
         <thead>
             <tr>
                 <td>#</td>
                 <td class="text-center">اسم المدرسة</td>
                 <td class="text-center"> عدد الطلبة</td>
                 <td class="text-center"> بنات</td>
                 <td class="text-center"> بنين</td>
                 <td class="text-center"> مسلم</td>
                 <td class="text-center"> مسيحى</td>
                 <td class="text-center"> نظامى</td>
                 <td class="text-center"> منازل</td>
             </tr>
         </thead>
         <tbody>
             <tr v-for="( count , index ) in counts">
                 <td>{{ index +1}}</td>
                 <td class="text-right">{{count.school_name}}</td>
                 <td class="text-center">{{count.school_Count}}</td>
                 <td class="text-center">{{count.gender_f >= 1 ? count.gender_f : '--'}}</td>
                 <td class="text-center">{{count.gender_m  >= 1 ? count.gender_m : '--'}}</td>
                 <td class="text-center">{{count.religioni_slam  >= 1 ? count.religioni_slam : '--'}}</td>
                 <td class="text-center">{{count.religion_m  >= 1 ? count.religion_m : '--'}}</td>
                 <td class="text-center">{{count.system_n  >= 1 ? count.system_n : '--'}}</td>
                 <td class="text-center">{{count.system_m  >= 1 ? count.system_m : '--'}}</td>
             </tr>
         </tbody>
     </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            counts: [],
        }
    },
    mounted() {
        this.Count();
    },
    methods: {
        Count() {
            axios.get('/count').then(res => {
                this.counts = res.data;
            })

        }
    },
}
</script>

<style lang="scss" scoped>
* {
    font-family: 'sans-serif';
    color: black !important;
    font-weight: bolder;
    font-size: 18px;
}

table, th, td {
  border: 1px solid rgba(0, 0, 0, 0.671) !important;
  font-family: 'sultan'!important;
  font-size: 20px;

}
</style>
