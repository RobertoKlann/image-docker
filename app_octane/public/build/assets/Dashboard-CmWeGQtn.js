import{c as n,w as d,o as s,e as t,b as a,p as c,q as i,B as _,t as r,F as l}from"./app-BiSmww-7.js";import u from"./UserLayouts-Du4xe2XD.js";import"./index-BqQGmKjL.js";import"./Header-BYu9FxrJ.js";import"./Footer-BOvNqZ3T.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const m={class:"relative max-w-screen-xl py-24 mx-auto overflow-x-auto"},x={class:"text-xs text-gray-700 uppercase"},h={scope:"col",class:"px-6 py-3"},y={scope:"row",class:"px-6 py-4 font-medium text-gray-900 whitespace-nowrap"},w={class:"px-6 py-4"},f={class:"px-6 py-4"},b={class:"px-6 py-4"},q={__name:"Dashboard",props:{orders:Array},setup(p){return(g,k)=>(s(),n(u,null,{default:d(()=>[t("div",m,[(s(!0),a(l,null,c(p.orders,o=>i((s(),a("table",{key:o.id,class:"w-full text-sm text-left text-gray-500 mb-5"},[t("thead",x,[t("tr",null,[t("th",h," Order ID # "+r(o.id),1)])]),t("tbody",null,[(s(!0),a(l,null,c(o.order_items,e=>(s(),a("tr",{key:e.id,class:"bg-white border-b"},[t("th",y,r(e.product.title),1),t("td",w,r(e.product.brand.name),1),t("td",f,r(e.product.category.name),1),t("td",b," $"+r(e.product.price),1)]))),128))])])),[[_,o.order_items.length>0]])),128))])]),_:1}))}};export{q as default};
