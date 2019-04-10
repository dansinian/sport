<!--发表个人说说-->
<template>
  <!--发表个人的说说-->
  <div class="essay">
    <!--显示上传信息-->
    <div class="essaybox">
      <!--发起飙文字-->
      <div class="textbox">
        <van-cell-group>
          <van-field
            v-model="message"
            type="textarea"
            autosize></van-field>
        </van-cell-group>
      </div>
      <!--发表图片-->
      <div id="imgbox">
        <div class="icon-po" v-for="(item,index) in img">
          <img  :src="item" >
          <div class="icon-close" @click="imgclose(index)">×</div>
        </div>
        <van-uploader :after-read="onRead" accept="image/jpg, image/jpeg" multiple class="icon-add">
        </van-uploader>
      </div>
    </div>
    <!--显示是否提交-->
    <div class="clickBox">
      <input type="button" value="发表" @click="fabFn">
      <input type="button" value="取消" @click="quxFn">
    </div>
  </div>
</template>

<script>
  import { Toast } from 'vant';
  export default{
    name:'a11Essay',
    data(){
      return{
        message:"",
        name:'XXXX',
        img:[],
        eassyId:'',
        firstenter:true,
        defaultArr:[]
      }
    },
    methods: {
      handleRemove(file, fileList) {
        console.log(file, fileList);
      },
      handlePictureCardPreview(file) {
      },
      onRead(e){
        //显示
        this.obivousfn(e);
        //注意，我们这里没有使用form表单提交文件，所以需要用new FormData来进行提交
        var strurl='http://localhost/zzxfile/imageFile/'+e.file.name;
        if(this.defaultArr.length >3){
          Toast('图片不得超过4张');
        }
        this.defaultArr.push(strurl);
        console.log(this.defaultArr);
        if(this.firstenter){
          this.eassyId=(new Date()).getTime()+this.name;
          this.firstenter=false;
          let fd=this.getObj(e);
          this.$http.post('http://localhost/zzxfile/eassy/addImg.php',fd).then(function(data){})
        }else{
          let fd=this.getObj(e);
          this.$http.post('http://localhost/zzxfile/eassy/addImg1.php',fd).then(function(data){
            console.log(data.data)
          })
        }
      },
    //  获取对象
      getObj(e){
        let fd= new FormData();
        fd.append("upfile", e.file);//第一个参数字符串可以填任意命名，第二个根据对象属性来找到fil
        fd.append("name", this.name);//第一个参数字符串可以填任意命名，第二个根据对象属性来找到fil
        fd.append('eassyId',this.eassyId);
        fd.append('defaultArr',JSON.stringify(this.defaultArr));
        return fd;
      },
    //  图片显示
      obivousfn(e){
        let vm=this;
        var file=e.file;
        var freader = new FileReader();
        freader.readAsDataURL(file);
        freader.onload=function(){
          vm.img.push(this.result)
        };
      },
    //  图片对象的删除
      imgclose(index){
        console.log(index)
        var ele=document.querySelectorAll('.icon-po')[index];
        ele.style.display='none';
        this.defaultArr.splice(index,1);
        console.log(this.defaultArr)
        let fd= new FormData();
        fd.append('eassyId',this.eassyId);
        fd.append('defaultArr',this.defaultArr);
        this.$http.post('http://localhost/zzxfile/eassy/addImg2.php',fd).then(function(data){
        })
      },
    //  传递文字
      fabFn(){
        let fd= new FormData();
        fd.append('eassyId',this.eassyId);
        fd.append('message',this.message);
        this.$http.post('http://localhost/zzxfile/eassy/addImg3.php',fd).then(function(data){
          Toast.success('发表成功');
        })
      },
    //  取消即删除
      quxFn(){
        let fd= new FormData();
        fd.append('eassyId',this.eassyId);
        this.$http.post('http://localhost/zzxfile/eassy/addImg4.php',fd).then(function(data){
          Toast.success('发表成功');
        })
      }
    }
  }
</script>
<style>
  .textbox{
    width:96%;
    height:200px;
    border:1px solid red;
    overflow: scroll;
    margin:0 auto;
  }
  #imgbox div{
    margin-top:5px;
    border:1px solid red;
    /*height:150px;*/
    /*overflow: scroll;*/
  }
  .icon-add{
    width: 200px;
    height: 200px;
    border: 1px dashed #9a9ba3;
    overflow: hidden;
    display: flex;
    margin-top: 20px;
  }

  .icon-add:before{
    content: '';
    position: absolute;
    width: 50px;
    height: 2px;
    left: 50%;
    top: 50%;
    margin-left: -25px;
    margin-top: -1px;
    background-color: #aaabb2;
  }
  .icon-add:after{
    content: '';
    position: absolute;
    width: 2px;
    height: 50px;
    left: 50%;
    top: 50%;
    margin-left: -1px;
    margin-top: -25px;
    background-color: #aaabb2;
  }
  .icon-po{
    position: relative;
    width: 200px;
    height: 200px;
    margin-right: 20px;
    margin-top: 20px;
  }
  .icon-close{
    position: absolute;
    right: 5%;
    top: 5%;
    width: 30px;
    height:30px;
    border-radius: 50%;
    background-color:red;
    color: #fff;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  img{
    display:block;
    width:200px;
    height:200px;
  }
  #imgbox{
    width:96%;
    margin:0 auto;
    border:2px solid red;
    overflow: scroll;
    height:300px
  }
</style>
