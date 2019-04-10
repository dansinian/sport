<!--用户的登录-->
<template>
  <div class="userLogin">
    <el-form ref="form" :model="form" :rules="rules" label-width="80px">
      <el-form-item label="用户账号" prop="name">
        <el-input v-model="form.name" ></el-input>
      </el-form-item>
      <el-form-item label="用户密码" prop="pass">
        <el-input v-model="form.pass"></el-input>
      </el-form-item>
      <el-form-item label="用户身份" prop="identity">
        <!--<el-select v-model="form.identity" placeholder="请选择用户身份">-->
          <el-radio-group v-model="form.identity">
            <el-radio label="普通用户" value="普通用户"></el-radio>
            <el-radio label="体育专家" value="体育专家"></el-radio>
            <el-radio label="企业公司" value="企业公司"></el-radio>
            <el-radio label="管理人员" value="管理人员"></el-radio>
            企业公司
          </el-radio-group>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="submitForm('form')">登录</el-button>
        <el-button @click="goUserEnroll">注册</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>
<script>
  export default{
    name:'userEnroll',
    data(){
      return{
        form: {
          name: '',
          pass:'',
          identity:''
        },
        rules: {
          name: [
            { required: true, message: '请输入活动名称', trigger: 'blur' },
            { min: 6, max: 18, message: '长度在 3 到 5 个字符', trigger: 'blur' }
          ],
          pass: [
            {  required: true, message: '请输入密码', trigger: 'change' }
          ],
          identity: [
            {  required: true, message: '请输入用户身份', trigger: 'change' }
          ]
        }
      }
    },
    computed:{
    },
    methods:{
      //注册绑定的函数
      goUserEnroll(){
        this.$router.push({path:'/userEnroll'})
      },
      //登录按钮绑定的函数
      submitForm(formName) {
        this.$refs[formName].validate((valid) => {
          if (valid) {
            $.ajax({
              url:'http://localhost/zzxfile/userfile/afindUser.php',
              type:'post',
              data:{
                form:this.form
              },
              success:function(data, status, xhr){
                this.$router.push({path:'/'})
              }
            })
          } else {
            console.log('error submit!!');
            return false;
          }
        });
      },
    }
  }
</script>
<style scoped>

</style>

