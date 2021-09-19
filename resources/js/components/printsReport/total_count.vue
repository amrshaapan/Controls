<template>
    <div style="
    padding-right: 165px;
    padding-top: 853px;
">


        <table>
            <tbody>
                <tr>
                    <td>80</td>
                   <td style="padding-right: 39px;"> 60</td>
                   <td style="padding-right: 35px;"> 40</td>
                   <td style="padding-right: 35px;"> 30</td>
                   <td style="padding-right: 35px;"> 30</td>
                   <td style="padding-right: 35px;"> 60</td>
                   <td style="padding-right: 32px;"> 40</td>
                   <td style="padding-right: 29px;"> 280</td>
                   <td style="padding-right: 30px;"> 20</td>
                   <td style="padding-right: 30px;"> 20</td>
                   <td style="padding-right: 30px;"> 40</td>
                   <td style="padding-right: 30px;"> 20</td>
                   <td style="padding-right: 35px;"> 20</td>
                   <td style="padding-right: 37px;"> 40</td>
                     <!-- <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td> -->
                </tr>
            </tbody>
        </table>
<!-- <table>
    <thead>
        <tr>
            <th>المجموع</th>
        </tr>
    </thead>
    <tbody>
        <div  v-for="count in countTotal">
            <div v-for="co in count">

        <tr v-for="c in co[1]">
            <td>{{c}}</td>
        </tr>
            </div>
        </div>
    </tbody>
</table> -->


 <!-- <ul>
    <li v-for="(count,index) in countTotal">
      <span>{{index}} </span> 
        <span v-for="(co, index1 ) in count">
            <span > --- {{index1}}</span> 
            (<span v-for="(c,i) in co">{{i[2]}}</span>)
        </span>
    </li>

</ul>  -->


<!--
     - total 
        - mange
            - 1
            - 2
            - 3
            - 4
            - 5
            - 6
            -gender
                - 1
                - 2 
            -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                countTotal: []
            }
        },
        mounted () {
            axios.get('/TotalRepat').then(res => {
                this.countTotal = res.data
            });
        },
    }
</script>

<style lang="scss" scoped>
@media print 
{
//    @page
//    {
//     size: 7.87in 11.81in ;
//     // size: landscape;
//   }
}

</style>