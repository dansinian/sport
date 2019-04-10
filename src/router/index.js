import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import userEnroll from '@/components/userSignUporIn/userEnroll'
import userLogin from '@/components/userSignUporIn/userLogin'
import a12Action from '@/components/ordinaryAction/a12Action.vue'
import a13Action from '@/components/ordinaryAction/a13Action.vue'
import a14ActionItem from '@/components/ordinaryAction/a14ActionItem.vue'
import a11Eassy from'@/components/ordinaryAction/a11Eassy.vue'
import palyMes from '@/components/ordinaryAction/palyMes.vue'
import personView from '@/components/userSignUporIn/personView.vue'
import adminView from '@/components/userSignUporIn/adminView.vue'
import playEassy from'@/components/ordinaryAction/playEassy.vue'
import a11Eassy1 from'@/components/ordinaryAction/a11Eassy1.vue'
Vue.use(Router)


export default new Router({
  routes: [
    {path:'/a11Eassy',name:'a11Eassy',component:a11Eassy},
    {path:'/a12Action',name:'a12Action',component:a12Action},
    {path:'/a13Action',name:'a13Action',component:a13Action},
    {path:'/a14ActionItem',name:'a14ActionItem',component:a14ActionItem},
    {path:"/userEnroll", name:'userEnroll', component:userEnroll},
    {path:"/", name:'palyMes', component:palyMes},
    {path:'/userLogin',name:'userLogin',component:userLogin},
    {path:'/personView',name:'personView',component:personView},
    {path:'/playEassy',name:'playEassy',component:playEassy},
    {path:'/a11Eassy1',name:'a11Eassy1',component:a11Eassy1},
    {path:'/adminView',name:'adminView',component:adminView}
  ]
})
