<template>
  <div id="playEassy">
   <div v-for="item in list" class="cellbox" @click="gozixi" :itemobj="item.eassyId">
     <div>昵称：{{item.eassyName}}</div>
     <div>内容：{{item.eassycontent}}</div>
     <div  class="imgbox">
       <img v-for="imgsrc in JSON.parse(item.eassyArr)" :src="imgsrc" alt="">
     </div>
   </div>
  </div>
</template>

<script>
  export default{
    data() {
      return {
        list: [],
        obj:{}//完整的一个对象
      };
    },
    methods: {
      onLoad() {
        let vm=this;
        this.$http.post('http://localhost/zzxfile/eassy/playEassy1.php').then(function(data){
            var arr=data.data;
            for(var i=0;i<arr.length;i++){
              vm.list.push(arr[i])
            }
        })
      },
      gozixi(e){
        var ele=e.target.parentElement;
        if(ele.getAttribute('class')==="cellbox"){
          var val=ele.getAttribute('itemobj');
          this.$router.push({name:'a11Eassy1',params:{eassyid:val}})
        }else{
         var ele1=e.target.parentElement.parentElement;
          var val=ele1.getAttribute('itemobj')
          this.$router.push({name:'a11Eassy1',params:{eassyid:val}})
        }
      }
    },
    created(){
      this.onLoad();
    }
  }
</script>
<style>
  img{
    width:100px;
    height:100px;
  }
  .imgbox{
    width: 100%;
    border:1px solid red;
    display: flex;
    justify-content: space-between;
  }
  .cellbox{
    border:2px solid blue;
    margin:5px 0;
  }
</style>
