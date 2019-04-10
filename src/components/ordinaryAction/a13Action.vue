<template>
  <!--活动的招募-->
  <div class="a13Action">
    <div class="huodong">
      <van-cell-group>
        <van-field v-model="form.actionName" label="活动名称"></van-field>
        <van-field v-model="form.actionRegin" label="手机号"></van-field>
        <van-field v-model="form.date1" label="活动名称"></van-field>
        <van-field v-model="form.date2" label="手机号"></van-field>
        <van-field v-model="form.date3" label="活动名称"></van-field>
        <van-field v-model="form.date4" label="手机号"></van-field>
        <van-field v-model="form.perNum" label="活动名称"></van-field>
        <van-field v-model="form.resource" label="手机号"></van-field>
        <van-field v-model="form.type" label="活动名称"></van-field>
        <van-field v-model="form.descript" label="手机号"></van-field>
      </van-cell-group>
    </div>
    <!--管理员进行活动是否按时举行-->
    <div v-if="shenfen='admin'">
      <van-button round type="danger" v-on:click="adminAction">活动通过</van-button>
    </div>
    <!--普通人员是否可以参加活动-->
    <div v-if="shenfen='person'" >
      <van-button round type="danger" v-on:click="personAction">报名参加</van-button>
    </div>
  </div>
</template>

<script>
  export default{
    name:'a12Action',
    data() {
      return {
        shenfen:'',
        form: {
        }
      }
    },
    methods: {
    //  对象加载
      seekobj(){
        this.form.name=this.$route.params.name;
        this.shenfen=this.$route.params.shenfen;
        console.log( this.form.name,this.shenfen);
        var vm=this;
        $.ajax({
            type:"get",
            url:'http://localhost/zzxfile/actionfile/findaAction.php',
            async:false,
            data:{
              name:this.form.name
            },
            success:function(data){
              console.log(JSON.parse(data));
              vm.form=JSON.parse(data)
            }
          })
      },
    // 管理员进行活动是否按时举行
      adminAction(){
        Dialog.confirm({
          title: '提示',
          message: '是否确认此活动通过'
        }).then(() => {
          // on confirm
          $.jajx({
            type:"get",
            url:"http://localhost/zzxfile/actionfile/agreeAction.php",
            data:{
              name:this.form.name
            },
            success:function(data){
              Toast.success(data)
            }
          })
        }).catch(() => {
          // on cancel
          Toast.success("暂时放弃")
        });
      },
    //  普通人员是否可以参加活动
      personAction(){
        Dialog.confirm({
          title: '提示',
          message: '是否确定参加该活动'
        }).then(() => {
          // on confirm
          $.jajx({
            type:"get",
            url:"http://localhost/zzxfile/actionfile/agreeAction.php",
            data:{
              actionName:this.form.name,
              definePerson:"zzx"
            },
            success:function(data){
              Toast.success(data)
            }
          })
        }).catch(() => {
          Toast.success("暂时放弃报名")
        });
      }
    },
    created(){
        this.seekobj()
    }
  }
</script>
<style>
</style>
