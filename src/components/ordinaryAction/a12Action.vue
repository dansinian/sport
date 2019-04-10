<template>
  <!--活动的招募-->
  <div class="a12Action">
    <div class="huodong">
      <el-form ref="form" :model="form" label-width="80px">
        <el-form-item label="活动名称">
          <el-input v-model="form.name"></el-input>
        </el-form-item>
        <el-form-item label="活动区域">
          <el-select v-model="form.region" placeholder="请选择活动区域" value="">
            <el-option label="区域一" value="shanghai"></el-option>
            <el-option label="区域二" value="beijing"></el-option>
          </el-select>
        </el-form-item>
        <el-form-item label="活动人数">
          <el-input v-model="form.perNum"></el-input>
        </el-form-item>
        <el-form-item label="活动开始">
          <el-col :span="11">
            <el-date-picker type="date" placeholder="选择日期" v-model="form.date1" style="width: 100%;"></el-date-picker>
          </el-col>
          <el-col class="line" :span="2">-</el-col>
          <el-col :span="11">
            <el-time-picker placeholder="选择时间" v-model="form.date2" style="width: 100%;"></el-time-picker>
          </el-col>
        </el-form-item>
        <el-form-item label="活动结束">
          <el-col :span="11">
            <el-date-picker type="date" placeholder="选择日期" v-model="form.date3" style="width: 100%;"></el-date-picker>
          </el-col>
          <el-col class="line" :span="2">-</el-col>
          <el-col :span="11">
            <el-time-picker placeholder="选择时间" v-model="form.date4" style="width: 100%;"></el-time-picker>
          </el-col>
        </el-form-item>
        <el-form-item label="活动性质">
          <el-checkbox-group v-model="form.type">
            <el-checkbox label="双人互动" name="type"></el-checkbox>
            <el-checkbox label="群体娱乐" name="type"></el-checkbox>
            <el-checkbox label="竞技体育" name="type"></el-checkbox>
            <el-checkbox label="专业比赛" name="type"></el-checkbox>
          </el-checkbox-group>
        </el-form-item>
        <el-form-item label="特殊资源">
          <el-radio-group v-model="form.resource">
            <el-radio label="线上品牌商赞助"></el-radio>
            <el-radio label="线下场地免费"></el-radio>
          </el-radio-group>
        </el-form-item>
        <el-form-item label="活动形式">
          <el-input type="textarea" v-model="form.desc"></el-input>
        </el-form-item>
        <el-form-item>
          <el-button type="primary" @click="onSubmit">立即创建</el-button>
          <el-button>取消</el-button>
        </el-form-item>
      </el-form>
    </div>
  </div>
</template>

<script>
  export default{
    name:'a12Action',
    data() {
      return {
        form: {
          name: '',
          perNum:'',
          region: '',
          date1: '',
          date2: '',
          date3: '',
          date4: '',
          type: [],
          resource: '',
          desc: ''
        },
        msg:'dsdsdsd'
      }
    },
    methods: {
      onSubmit() {
        console.log(this.form)
        $.ajax({
          type:'get',
          url:'http://localhost/zzxfile/actionfile/addAction.php',
          data:{
            actionObj:this.form
          },
          success:function(data, status, xhr){
            alert(data)
          }
        })
      }
    }
  }
</script>
<style>
  .huodong{
    width:80%;
    margin:0 auto;
    border:2px solid indianred;
    padding: 24px;
  }
</style>
