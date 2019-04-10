<template>
  <div class="adminView">
    <a14ActionItem :shenfen="shenfen"></a14ActionItem>
  </div>
</template>

<script>
  import a14ActionItem from '@/components/ordinaryAction/a14ActionItem.vue'
  export default{
    data(){
      return{
        shenfen:'admin'
      }
    },
    components:{
      a14ActionItem
    }
  }
</script>
