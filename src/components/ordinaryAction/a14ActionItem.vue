<template>
  <div class="a14ActionItem">
    <van-cell-group v-for="item in actionList" key="item">
      <van-field v-model="item.descript" :label="item.actionName" :key="item.actionName" type="textarea"  rows="1" autosize></van-field>
      <van-button  size="large" v-on:click="goPage(item.actionName)">查看</van-button>
    </van-cell-group>
  </div>
</template>
<script>
 export default {
   name:"a14ActionItem",
   props: {
     shenfen:String
   },
   data() {
     return {
       actionList:[],
       loading: false,
       finished: false
     }
   },
   methods:{
    //进行活动列表的加载
     onLoadfn() {
       var vm=this;
       $.ajax({
         async:false,
         type:'get',
         url:'http://localhost/zzxfile/actionfile/findAllAction.php',
         success:function(data){
           var arr=JSON.parse(data)
           console.log(arr)
           for(var i=0;i<arr.length;i++){
             vm.actionList.push(arr[i])
           }
         }
       })
     },
   // 旅游跳转并且传值
     goPage(str){
       this.$router.push({name:'a13Action',params:{name:str,shenfen:this.shenfen}});
     }
   },
   created(){
     this.onLoadfn()
   }
 }
</script>
