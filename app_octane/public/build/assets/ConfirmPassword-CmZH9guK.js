import{T as n,c as l,w as t,o as d,a as e,u as a,Z as p,e as r,f as u,n as f,g as c}from"./app-BiSmww-7.js";import{_ as w}from"./GuestLayout-C8YVzaA7.js";import{_,a as b,b as g}from"./TextInput-B4JhgOl5.js";import{P as x}from"./PrimaryButton-Bhf7nlpE.js";import"./ApplicationLogo-BW_ir-tD.js";import"./_plugin-vue_export-helper-DlAUqK2U.js";const y={class:"mt-4 flex justify-end"},T={__name:"ConfirmPassword",setup(P){const s=n({password:""}),i=()=>{s.post(route("password.confirm"),{onFinish:()=>s.reset()})};return(V,o)=>(d(),l(w,null,{default:t(()=>[e(a(p),{title:"Confirm Password"}),o[2]||(o[2]=r("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1)),r("form",{onSubmit:c(i,["prevent"])},[r("div",null,[e(_,{for:"password",value:"Password"}),e(b,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:a(s).password,"onUpdate:modelValue":o[0]||(o[0]=m=>a(s).password=m),required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"]),e(g,{class:"mt-2",message:a(s).errors.password},null,8,["message"])]),r("div",y,[e(x,{class:f(["ms-4",{"opacity-25":a(s).processing}]),disabled:a(s).processing},{default:t(()=>o[1]||(o[1]=[u(" Confirm ")])),_:1},8,["class","disabled"])])],32)]),_:1}))}};export{T as default};