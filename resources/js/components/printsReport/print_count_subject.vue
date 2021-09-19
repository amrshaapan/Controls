<template>
<div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="text-center">اسم المدرسة</th>
                <th scope="col"> اجمالى العدد</th>
                <th scope="col"> عربى </th>
                <th scope="col"> انجليزى </th>
                <th scope="col"> الرياضيات </th>
              
                <th scope="col"> الدراسات</th>
                <th scope="col"> العلوم</th>
                <!-- <th scope="col">عدد الطلبة الراسبون</th> -->
            </tr>
        </thead>
        <tbody>
            <tr v-for="(count , index ) in CountSubjects">
                <th scope="row">{{index +1}}</th>
                <td class="text-right">{{count.school_name}}</td>
                <td class="text-center">{{count.note}}</td>
                <td class="text-center">{{count.ar + count.arabs}}</td>
                <td class="text-center">{{count.en + count.enabs}}</td>
                <td class="text-center">{{count.total_math }}</td>
           
                <td class="text-center">{{count.stu + count.stuabs}}</td>
                <td class="text-center">{{count.sci + count.sciabs}}</td>
                <!-- <td>Otto</td>
                <td>@mdo</td> -->
            </tr>
            
        </tbody>
    </table>
</div>
</template>

<script>
export default {
    data() {
        return {
            CountSubjects: []
        }
    },
    mounted() {
        axios.get('/count_subject').then(res => {
            this.CountSubjects = res.data;
        });
    },
}
</script>

<style lang="scss" scoped>

</style>
