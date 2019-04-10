<template>
  <!--&lt;!&ndash;展示一个具体的评论->-->
  <div id="a11eassy1" >
    <div>
      <span>{{obj.eassyName}}</span>
      <span><van-button size="small" id="smallbtn" @click="guanzhu">关注</van-button></span>
    </div>
    <div>内容{{obj.eassycontent}}</div>
    <div v-for="imgsrc in JSON.parse(obj.eassyArr)">
      <img :src="imgsrc" alt="">
    </div>
    <!--评论的区域-->
    <div>
      <label>
         发表说说<input type="text" v-model="reviewContent"><button  @click="pinglun">发表</button>
      </label>
    </div>
    <!--展示评论的区域-->
    <div>
      <p v-for="item1 in reviewarr"><span>{{item1}}</span></p>
    </div>

    <!--添加一个悬浮列框-->
    <div class="buttomBox">
      <div class="backImg" @click="dianzan">
        <van-icon name="like-o"></van-icon>
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data(){
      return{
        eassyId:'',
        obj:[],
        zjName:'222222',
        like_v:false,
        reviewContent:'',
        reviewarr:[]
      }
    },
    created(){
      this.eassyId=this.$route.params.eassyid
      let fd=new FormData();
      fd.append('eassyId',this.eassyId);
      let vm=this;
      this.$http.post('http://localhost/zzxfile/eassy/addImg5.php',fd).then(function(res){
        vm.obj=res.data;
        console.log(vm.obj)
      })
    },
    methods:{
    //  关注的函数
      guanzhu(){
        var fd=new FormData();
        fd.append('onlineName',this.zjName);
        fd.append('eassyName',this.obj.eassyId);
        console.log(fd);
        this.$http.post('http://localhost/zzxfile/guanzhu/guanzhu1.php',fd).then(function(data){
          console.log(data.data)
        })
      },
    //  进行一个点赞
      dianzan(){
        this.like_v=!this.like_v;
        console.log(this.like_v,this.obj.eassyId);
        var fd=new FormData();
        fd.append('clickbool',this.like_v);
        fd.append('eassyId',this.obj.eassyId);
        this.$http.post('http://localhost/zzxfile/guanzhu/guanzhu2.php',fd).then(function(data){
          console.log(data.data)
        })
      },
    // 评论的函数
      pinglun(){
        let time=new Date();
        var time1=time.getTime();
        var fd=new FormData();
        fd.append('review_eassy_id',this.eassyId);
        fd.append('review_name',this.zjName)
        fd.append('review_content',this.reviewContent);
        fd.append('review_time',time1);
        console.log(fd);
        var vm=this;
        this.$http.post('http://localhost/zzxfile/guanzhu/guanzhu3.php',fd).then(function(data){
          vm.reviewContent='';
          if(data.data){
              alert('1111111');
              vm.allreview();
          }else{
              alert('2222222')
          }
        })
      },
      //加载所有评论的函数
      allreview(){
        var fd=new FormData();
        fd.append('review_eassy_id',this.eassyId);
        var vm=this;
        this.$http.post('http://localhost/zzxfile/guanzhu/guanzhu4.php',fd).then(function(data){
          if(data.data){
            console.log(data.data)
            // vm.reviewarr=JSON.parse(data.data)
          }else{
            alert(data.data)
          }
        })
      }
    }

  }
</script>
<style>
  img{
    width:100px;
    height:100px;
  }
  #smallbtn{
    color:white;
    background-color: lightseagreen;
    border-radius:20px;
  }
  #like_v{
    background-color:red;
  }
  .backImg{
    width:40px;
    height:40px;
    background-color: lightseagreen;
  }
</style>
