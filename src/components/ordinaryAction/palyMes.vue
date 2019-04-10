<template>
  <!--展示活动消息，并且确认自己参加-->
  <div>
    <van-button type="primary" @click="gofn1">发表活动</van-button>
    <van-button type="primary" @click="gofn2">发表说说</van-button>
    <van-button type="primary" @click="gofn3">普通人员查看活动列表</van-button>
    <van-button type="primary" @click="gofn4">管理员查看活动列表</van-button>
    <van-button type="primary" @click="gofn5">所有发表</van-button>
  </div>
</template>
<script>
  export default{
    data(){

    },
    methods:{
      gofn1(){
        this.$router.push({path:'/a12Action'})
      },
      gofn2(){
        this.$router.push({path:'/a11Eassy'})
      },
      gofn3(){
        this.$router.push({path:'/personView'})
      },
      gofn4(){
        this.$router.push({path:'/adminView'})
      },
      gofn5(){
        this.$router.push({path:'/playEassy'})
      }
    },
    created:{

    }
  }
</script>

