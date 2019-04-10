<template>
  <!--用户的注册-->
  <div class="userEnroll">
    <el-form ref="form" :model="form" :rules="rules" label-width="80px">
      <el-form-item label="用户账号" prop="name">
        <el-input v-model="form.name" ></el-input>
      </el-form-item>
      <el-form-item label="用户年龄" prop="age">
        <el-input v-model="form.age" ></el-input>
      </el-form-item>
      <el-form-item label="用户性别" prop="sex">
        <el-radio-group v-model="form.sex">
          <el-radio label="男" value="男"></el-radio>
          <el-radio label="女" value="女"></el-radio>
        </el-radio-group>
      </el-form-item>
      <el-form-item label="用户身份" prop="identity">
        <el-select v-model="form.identity" placeholder="请选择用户身份">
          <el-option label="普通用户" value="普通用户"></el-option>
          <el-option label="体育专家" value="体育专家"></el-option>
          <el-option label="企业公司" value="企业公司"></el-option>
          <el-option label="管理员" value="管理员"></el-option>
        </el-select>
      </el-form-item>
      <el-form-item label="用户密码" prop="pass">
        <el-input v-model="form.pass"></el-input>
      </el-form-item>
      <el-form-item label="验证密码" prop="pass1">
        <el-input v-model="form.pass1"></el-input>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="submitForm('form')">确认</el-button>
        <el-button>取消</el-button>
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
              age:'',
              sex: '',
              identity:'',
              pass:'',
              pass1:''
            },
            rules: {
              name: [
                { required: true, message: '请输入活动名称', trigger: 'blur' },
                { min: 6, max: 18, message: '长度在 3 到 5 个字符', trigger: 'blur' }
              ],
              sex: [
                { required: true, message: '请选择性别', trigger: 'change' }
              ],
              identity: [
                {  required: true, message: '请选择身份', trigger: 'change' }
              ],
              pass: [
                {  required: true, message: '请输入密码', trigger: 'change' }
              ],
              pass1: [
                {  required: true, message: '再次输入密码', trigger: 'change' }
              ],
            }
          }
     },
     computed:{

     },
     methods:{
       submitForm(formName) {
         this.$refs[formName].validate((valid) => {
           if (valid) {
             console.log('submit!!');
             $.ajax({
               url:'http://localhost/zzxfile/userfile/addUser.php',
               type:'post',
               data:{
                 form:this.form
               },
               success:function(data, status, xhr){
                  alert(data)
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
<style>
</style>
