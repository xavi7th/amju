webpackJsonp([0],{"+Dn+":function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("main",[a("page-header",{attrs:{pageTitle:"Manage Testimonials"}}),t._v(" "),a("div",{staticClass:"content"},[a("div",{staticClass:"card"},[t._m(0),t._v(" "),a("div",{staticClass:"card-body"},[a("table",{staticClass:"table table-bordered table-hover",attrs:{id:"testimonialTable"}},[t._m(1),t._v(" "),a("tbody",t._l(t.testimonials,function(e){return a("tr",{key:e.id},[a("td",{staticClass:"pointer"},[t._v(t._s(e.id))]),t._v(" "),a("td",[a("button",{staticClass:"badge badge-danger",on:{click:function(a){return t.deleteTestimonial(e)}}},[t._v("Delete")])]),t._v(" "),a("td",[t._v(t._s(e.name))]),t._v(" "),a("td",[t._v(t._s(e.city)+", "+t._s(e.country))]),t._v(" "),a("td",[a("a",{attrs:{href:e.img,target:"_blank"}},[a("img",{attrs:{src:e.img,alt:e.name+"'s image'",height:"100"}})])]),t._v(" "),a("td",{staticClass:"ellipsis"},[t._v(t._s(e.testimonial))])])}),0)]),t._v(" "),a("div",{staticClass:"modal modal-right fade",attrs:{id:"modal-testimonial",tabindex:"-1"}},[a("div",{staticClass:"modal-dialog"},[a("div",{staticClass:"modal-content"},[t._m(2),t._v(" "),a("div",{staticClass:"modal-body"},[t.sectionLoading?a("pre-loader",{staticClass:"section-loader"}):t._e(),t._v(" "),a("form",{staticClass:"m-25"},[a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("name")}},[a("div",{staticClass:"form-group"},[a("input",{directives:[{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],ref:"img",attrs:{type:"file",id:"form-img",name:"img",accept:"image/*"},on:{change:t.attachFile}}),t._v(" "),a("label",{attrs:{for:"form-img"}},[a("strong",[t._v(t._s(t.fileUploadName))])]),t._v(" "),a("span",[t._v(t._s(t.errors.first("name")))])])]),t._v(" "),a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("name")}},[t._m(3),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.name,expression:"details.name"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-full-name",name:"name"},domProps:{value:t.details.name},on:{input:function(e){e.target.composing||t.$set(t.details,"name",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("name")))])]),t._v(" "),a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("city")}},[t._m(4),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.city,expression:"details.city"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-mail",name:"city"},domProps:{value:t.details.city},on:{input:function(e){e.target.composing||t.$set(t.details,"city",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("city")))])]),t._v(" "),a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("country")}},[t._m(5),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.country,expression:"details.country"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-mail",name:"country"},domProps:{value:t.details.country},on:{input:function(e){e.target.composing||t.$set(t.details,"country",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("country")))])]),t._v(" "),a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("testimonial")}},[t._m(6),t._v(" "),a("textarea",{directives:[{name:"model",rawName:"v-model",value:t.details.testimonial,expression:"details.testimonial"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{name:"testimonial",id:"form-testimonial"},domProps:{value:t.details.testimonial},on:{input:function(e){e.target.composing||t.$set(t.details,"testimonial",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("testimonial")))])]),t._v(" "),a("div",{staticClass:"form-group mt-20"},[a("button",{staticClass:"btn btn-success btn-round btn-block",attrs:{type:"button","data-dismiss":"modal"},on:{click:t.createTestimonial}},[t._v("Create")])])])],1),t._v(" "),t._m(7)])])])])])])],1)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"card-title"},[e("button",{staticClass:"btn btn-bold btn-pure btn-twitter btn-shadow",attrs:{type:"button","data-toggle":"modal","data-target":"#modal-testimonial"}},[this._v("Create Testimonial")])])},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("thead",[a("tr",[a("th",[t._v("ID")]),t._v(" "),a("th",[t._v("Actions")]),t._v(" "),a("th",[t._v("Full Name")]),t._v(" "),a("th",[t._v("Location")]),t._v(" "),a("th",[t._v("Image")]),t._v(" "),a("th",[t._v("Testimonial")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-header"},[e("h4",{staticClass:"modal-title"},[this._v("Enter Testimonial Details")]),this._v(" "),e("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[e("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-full-name"}},[e("strong",[this._v("Full Name")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-mail"}},[e("strong",[this._v("City")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-mail"}},[e("strong",[this._v("Country")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-testimonial"}},[e("strong",[this._v("Testimonial")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-footer"},[e("button",{staticClass:"btn btn-bold btn-pure btn-secondary",attrs:{type:"button","data-dismiss":"modal"}},[this._v("Close")])])}]}},"0HRO":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={name:"AdminDashboard",mounted:function(){this.$emit("page-loaded")}}},"0rut":function(t,e,a){var s=a("YtIP");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("591413b0",s,!0,{})},"1hhz":function(t,e){t.exports={render:function(){var t=this.$createElement,e=this._self._c||t;return e("main",[e("page-header",{attrs:{pageTitle:"Dashboard"}}),this._v(" "),this._m(0)],1)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"content"},[e("div",{staticClass:"card"},[e("div",{staticClass:"card-body"},[this._v("Manage Messages")])])])}]}},"406J":function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("main",[a("page-header",{attrs:{pageTitle:"Manage Admins"}}),t._v(" "),a("div",{staticClass:"content"},[a("div",{staticClass:"document"},[a("div",{staticClass:"card"},[a("div",{staticClass:"card-body"},[a("table",{staticClass:"table table-bordered table-hover",attrs:{id:"datatable1"}},[t._m(0),t._v(" "),a("tbody",t._l(t.users,function(e){return a("tr",{key:e.id},[a("td",[t._v(t._s(e.id))]),t._v(" "),a("td",[t._v(t._s(e.full_name))]),t._v(" "),a("td",[t._v(t._s(e.phone))]),t._v(" "),a("td",[t._v(t._s(e.is_verified?"Account Verified":"Unverified Account"))]),t._v(" "),a("td",[a("div",{staticClass:"badge badge-success badge-shadow pointer",attrs:{"data-toggle":"modal","data-target":"#modal-right"},on:{click:function(a){return t.testIt(e)}}},[t._v("View Full Details")])])])}),0)]),t._v(" "),a("div",{staticClass:"modal modal-right fade",attrs:{id:"modal-right",tabindex:"-1"}},[a("div",{staticClass:"modal-dialog"},[a("div",{staticClass:"modal-content"},[a("div",{staticClass:"modal-header"},[a("h4",{staticClass:"modal-title"},[t._v(t._s(t.userDetails.full_name)+"' details")]),t._v(" "),t._m(1)]),t._v(" "),a("div",{staticClass:"modal-body"},[a("div",{staticClass:"col-md-12"},[a("div",{staticClass:"card overflow-hidden"},[a("div",{staticClass:"card-body py-0"},[a("div",{staticClass:"card-row"},[a("div",{staticClass:"table-responsive"},[a("table",{staticClass:"table table-striped"},[t._m(2),t._v(" "),a("tbody",t._l(t.userDetails,function(e,s,i){return a("tr",{key:i},[a("td",[t._v(t._s(t.slugToString(s)))]),t._v(" "),a("td",["user_passport"!=s?a("span",[t._v(t._s(e))]):a("a",{attrs:{href:e,target:"_blank"}},[a("img",{staticClass:"img-fluid",attrs:{src:e,alt:""}})])])])}),0)])])])])])])]),t._v(" "),t._m(3)])])])])])])])],1)},staticRenderFns:[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("thead",[a("tr",[a("th",[t._v("ID")]),t._v(" "),a("th",[t._v("Full Name")]),t._v(" "),a("th",[t._v("Phone")]),t._v(" "),a("th",[t._v("Status")]),t._v(" "),a("th",[t._v("Actions")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[e("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("thead",[e("tr",[e("th",[this._v("Field")]),this._v(" "),e("th",[this._v("Value")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-footer"},[e("button",{staticClass:"btn btn-bold btn-pure btn-secondary",attrs:{type:"button","data-dismiss":"modal"}},[this._v("Close")])])}]}},"6Cnw":function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"auth-split"},[a("div",{staticClass:"auth-left"},[a("div",{staticClass:"auth-box-wrapper"},[t._m(0),t._v(" "),a("div",{staticClass:"fs-18 fw-600 text-center mb-30 text-title"},[t._v("Log In")]),t._v(" "),a("form",{on:{submit:function(e){return e.preventDefault(),t.loginAdmin(e)}}},[a("div",{staticClass:"form-group mb-20",class:{"has-error":t.errors.has("email")}},[t._m(1),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.email,expression:"details.email"},{name:"validate",rawName:"v-validate",value:"required|email",expression:"'required|email'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-mail",name:"email"},domProps:{value:t.details.email},on:{input:function(e){e.target.composing||t.$set(t.details,"email",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("email")))])]),t._v(" "),a("div",{staticClass:"form-group mb-20",class:{"has-error":t.errors.has("password")}},[t._m(2),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.password,expression:"details.password"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{type:"password",id:"form-pass",name:"password"},domProps:{value:t.details.password},on:{input:function(e){e.target.composing||t.$set(t.details,"password",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("password")))])]),t._v(" "),t._m(3)])])]),t._v(" "),t._m(4)])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"auth-logo"},[e("div",{staticClass:"logo"},[e("div",{staticClass:"logo-type logo-type-colored"},[e("img",{staticClass:"loader-img",attrs:{src:"/img/logo-round-small.png",alt:"Amju Unique MFB Logo"}}),this._v(" "),e("a",{attrs:{href:"/"}},[e("span",[this._v("\n                amju\n                "),e("span",[this._v("unique")])])])])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-mail"}},[e("strong",[this._v("E-Mail")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-pass"}},[e("strong",[this._v("Password")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-group flex j-c-center mt-30"},[e("button",{staticClass:"btn btn-primary btn-shadow btn-round"},[this._v("Log In")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"auth-right",staticStyle:{"background-image":"url('/img/amju-building.jpg')"}},[e("div",{staticClass:"auth-content"},[e("div",{staticClass:"auth-right__caption"},[e("h1",[this._v("Admin Panel")]),this._v(" "),e("p",[this._v("\n          Unauthorized attempts to access information or change information on these pages are strictly prohibited and\n          are punishable under the Computer Fraud and Abuse Act of 2010 and the Private Information Infrastructure Protection Act.\n        ")])])])])}]}},BlDv:function(t,e,a){var s=a("VU/8")(a("QQh1"),a("1hhz"),!1,function(t){a("HnEk")},"data-v-573949ab",null);t.exports=s.exports},E42G:function(t,e,a){var s=a("qnTm");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("3da285b0",s,!0,{})},HnEk:function(t,e,a){var s=a("xypk");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("9c244818",s,!0,{})},JBTV:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("KvdN"),i=a("9SFg"),r=a.n(i),o=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var a=arguments[e];for(var s in a)Object.prototype.hasOwnProperty.call(a,s)&&(t[s]=a[s])}return t};e.default={name:"ManageAdmins",data:function(){return{users:[],userDetails:{},sectionLoading:!1,all_routes:[],permitted_routes:[],details:{}}},components:{PreLoader:r.a},created:function(){var t=this;axios.get(s.e).then(function(e){var a=e.data.users;t.users=a,t.$nextTick(function(){$(function(){$("#datatable1").DataTable({responsive:!0,language:{searchPlaceholder:"Search...",sSearch:""}})})})})},mounted:function(){this.$emit("page-loaded")},methods:{showModal:function(t){this.userDetails=t},showPermModal:function(t){var e=this;this.userDetails=t,axios.get(Object(s.a)(t.id)).then(function(t){var a=t.data,s=a.all_routes,i=a.permitted_routes;e.all_routes=s,e.permitted_routes=i,e.$nextTick(function(){$(function(){e.sectionLoading=!1})})})},slugToString:function(t){for(var e=t.split("_"),a=0;a<e.length;a++){var s=e[a];e[a]=s.charAt(0).toUpperCase()+s.slice(1)}return e.join(" ")},updateAdminPermissions:function(){var t=this;this.sectionLoading=!0,BlockToast.fire({text:"updating admin permissions ..."}),axios.put(Object(s.a)(this.userDetails.id),{permitted_routes:this.permitted_routes}).then(function(e){204===e.status?Toast.fire({title:"Success",text:"User permissions updated",position:"center"}):Toast.fire({title:"Failed",text:"Something wrong happend",position:"center"}),t.$nextTick(function(){$(function(){t.sectionLoading=!1})})})},createAdmin:function(){var t=this;this.$validator.validateAll().then(function(e){e?(BlockToast.fire({text:"Accessing your dashboard..."}),axios.post(s.b,o({},t.details)).then(function(e){var a=e.status,s=e.data.rsp;console.log(s),void 0!==a&&201==a&&(t.details={},t.users.push(s),Toast.fire({title:"Created",text:"They will be required to set a password om their first login",type:"success",position:"center"}))}).catch(function(t){500==t.response.status&&swal.fire({title:"Error",text:"Something went wrong on server. Creation not successful.",type:"error"})})):Toast.fire({title:"Invalid data! Try again",position:"center",type:"error"})})}}}},JLVG:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,".modal-right .modal-dialog[data-v-e643c6f0]{min-width:35%}.modal-right .modal-dialog .modal-body[data-v-e643c6f0]{overflow-y:auto}",""])},KCER:function(t,e,a){var s=a("VU/8")(null,a("y1U5"),!1,null,null,null);t.exports=s.exports},KvdN:function(t,e,a){"use strict";a.d(e,"e",function(){return i}),a.d(e,"b",function(){return r}),a.d(e,"a",function(){return o}),a.d(e,"g",function(){return n}),a.d(e,"f",function(){return l}),a.d(e,"c",function(){return d}),a.d(e,"d",function(){return c});var s="/tope-amju/api/",i=s+"admins",r=s+"admin/create",o=function(t){return s+"admin/"+t+"/permissions"},n=s+"users",l=s+"testimonials",d=s+"testimonial/create",c=function(t){return s+"testimonial/"+t+"/delete"}},LH8G:function(t,e,a){var s=a("tx4g");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("489cc57f",s,!0,{})},QI2F:function(t,e){t.exports={render:function(){var t=this.$createElement,e=this._self._c||t;return e("main",[e("page-header",{attrs:{pageTitle:"Dashboard"}}),this._v(" "),this._m(0)],1)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"content"},[e("div",{staticClass:"card"},[e("div",{staticClass:"card-body"},[this._v("Manage yfjhg")])])])}]}},QQh1:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("WFde");a.n(s);e.default={name:"ManageMessages",mounted:function(){this.$emit("page-loaded")}}},UfQ3:function(t,e,a){var s=a("VU/8")(a("mKhN"),a("6Cnw"),!1,function(t){a("yb2J")},"data-v-3ac3ee04",null);t.exports=s.exports},WFde:function(t,e,a){var s=a("VU/8")(a("aU/M"),a("eBU+"),!1,function(t){a("epSx")},"data-v-541c4c9d",null);t.exports=s.exports},X0Sn:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,'.auth-right[data-v-3ac3ee04]{background-size:cover;background-repeat:no-repeat;background-position:50%}.auth-right .auth-right__caption[data-v-3ac3ee04]{font-size:larger}.logo .logo-type-colored a span[data-v-3ac3ee04]{text-transform:capitalize;color:#1b97eb}.logo .logo-type-colored a span>span[data-v-3ac3ee04]{color:#f90a48}.auth-split .auth-left button[data-v-3ac3ee04]{font-weight:700}.btn-primary.btn-shadow[data-v-3ac3ee04]{box-shadow:0 3px 10px rgba(27,151,235,.5)}.btn-primary[data-v-3ac3ee04]{background-color:#1b97eb;border-color:#1b97eb}.form-group[data-v-3ac3ee04]{position:relative}.form-group span[data-v-3ac3ee04]{position:absolute;bottom:7px;right:20px;color:#d33;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;transition:opacity .3s ease-in;pointer-events:none}.form-group.has-error .form-control[data-v-3ac3ee04]{border-color:#f90a48;box-shadow:0 0 10px rgba(249,10,72,.2)}.form-group.has-error>span[data-v-3ac3ee04]{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";opacity:1}',""])},YtIP:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,"",""])},aDHo:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("main",[a("page-header",{attrs:{pageTitle:"Manage Admins"}}),t._v(" "),a("div",{staticClass:"content"},[a("div",{staticClass:"card"},[t._m(0),t._v(" "),a("div",{staticClass:"card-body"},[a("table",{staticClass:"table table-bordered table-hover",attrs:{id:"datatable1"}},[t._m(1),t._v(" "),a("tbody",t._l(t.users,function(e){return a("tr",{key:e.id},[a("td",[t._v(t._s(e.id))]),t._v(" "),a("td",[t._v(t._s(e.full_name))]),t._v(" "),a("td",[t._v(t._s(e.phone))]),t._v(" "),a("td",[t._v(t._s(e.is_verified?"Account Verified":"Unverified Account"))]),t._v(" "),a("td",[a("div",{staticClass:"badge badge-success badge-shadow pointer",attrs:{"data-toggle":"modal","data-target":"#modal-right"},on:{click:function(a){return t.showModal(e)}}},[t._v("View Full Details")]),t._v(" "),a("div",{staticClass:"badge badge-purple pointer",attrs:{"data-toggle":"modal","data-target":"#modal-perm"},on:{click:function(a){return t.showPermModal(e)}}},[t._v("Permissions")])])])}),0)]),t._v(" "),a("div",{staticClass:"modal modal-left fade",attrs:{id:"modal-right",tabindex:"-1"}},[a("div",{staticClass:"modal-dialog"},[a("div",{staticClass:"modal-content"},[a("div",{staticClass:"modal-header"},[a("h4",{staticClass:"modal-title"},[t._v(t._s(t.userDetails.full_name)+"' details")]),t._v(" "),t._m(2)]),t._v(" "),a("div",{staticClass:"modal-body"},[a("div",{staticClass:"col-md-12"},[a("div",{staticClass:"card overflow-hidden"},[a("div",{staticClass:"card-body py-0"},[a("div",{staticClass:"card-row"},[a("div",{staticClass:"table-responsive"},[a("table",{staticClass:"table table-striped"},[t._m(3),t._v(" "),a("tbody",t._l(t.userDetails,function(e,s,i){return a("tr",{key:i},[a("td",[t._v(t._s(t.slugToString(s)))]),t._v(" "),a("td",["user_passport"!=s?a("span",[t._v(t._s(e))]):a("a",{attrs:{href:e,target:"_blank"}},[a("img",{staticClass:"img-fluid",attrs:{src:e,alt:""}})])])])}),0)])])])])])])]),t._v(" "),t._m(4)])])]),t._v(" "),a("div",{staticClass:"modal modal-right fade",attrs:{id:"modal-perm",tabindex:"-1"}},[a("div",{staticClass:"modal-dialog"},[a("div",{staticClass:"modal-content"},[a("div",{staticClass:"modal-header"},[a("h4",{staticClass:"modal-title"},[t._v(t._s(t.userDetails.full_name)+"' details")]),t._v(" "),t._m(5)]),t._v(" "),a("div",{staticClass:"modal-body"},[t.sectionLoading?a("pre-loader",{staticClass:"section-loader"}):t._e(),t._v(" "),a("div",{staticClass:"col-md-12"},[a("div",{staticClass:"card"},[t._m(6),t._v(" "),a("div",{staticClass:"card-body py-0"},[a("div",{staticClass:"card-row"},[t._l(t.all_routes,function(e){return a("div",{key:e.id,staticClass:"widget-item pt-20 pb-25"},[a("label",{staticClass:"control control-checkbox mb-0"},[a("span",{staticClass:"text-transparent"},[t._v(".")]),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.permitted_routes,expression:"permitted_routes"}],attrs:{type:"checkbox"},domProps:{checked:t.permitted_routes.includes(e.id),value:e.id,checked:Array.isArray(t.permitted_routes)?t._i(t.permitted_routes,e.id)>-1:t.permitted_routes},on:{change:function(a){var s=t.permitted_routes,i=a.target,r=!!i.checked;if(Array.isArray(s)){var o=e.id,n=t._i(s,o);i.checked?n<0&&(t.permitted_routes=s.concat([o])):n>-1&&(t.permitted_routes=s.slice(0,n).concat(s.slice(n+1)))}else t.permitted_routes=r}}}),t._v(" "),a("span",{staticClass:"control-icon"})]),t._v(" "),a("div",{staticClass:"flex j-c-between w-100p"},[a("span",{staticClass:"widget-title mt-2"},[t._v(t._s(e.description))]),t._v(" "),a("span",{staticClass:"widget-text-small"},[t._v(t._s(t.permitted_routes.includes(e.id)?"permitted":"not permitted"))])])])}),t._v(" "),a("button",{staticClass:"btn btn-bold btn-pure btn-info ml-120 my-30",attrs:{type:"button"},on:{click:t.updateAdminPermissions}},[t._v("Save changes")])],2)])])])],1),t._v(" "),t._m(7)])])]),t._v(" "),a("div",{staticClass:"modal modal-right fade",attrs:{id:"modal-admin",tabindex:"-1"}},[a("div",{staticClass:"modal-dialog"},[a("div",{staticClass:"modal-content"},[t._m(8),t._v(" "),a("div",{staticClass:"modal-body"},[t.sectionLoading?a("pre-loader",{staticClass:"section-loader"}):t._e(),t._v(" "),a("form",{staticClass:"m-25"},[a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("full_name")}},[t._m(9),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.full_name,expression:"details.full_name"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-full-name",name:"full_name"},domProps:{value:t.details.full_name},on:{input:function(e){e.target.composing||t.$set(t.details,"full_name",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("full_name")))])]),t._v(" "),a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("email")}},[t._m(10),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.email,expression:"details.email"},{name:"validate",rawName:"v-validate",value:"required|email",expression:"'required|email'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-mail",name:"email"},domProps:{value:t.details.email},on:{input:function(e){e.target.composing||t.$set(t.details,"email",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("email")))])]),t._v(" "),a("div",{staticClass:"form-group mb-5",class:{"has-error":t.errors.has("phone")}},[t._m(11),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.details.phone,expression:"details.phone"},{name:"validate",rawName:"v-validate",value:"required",expression:"'required'"}],staticClass:"form-control form-control-pill",attrs:{type:"text",id:"form-phone",name:"phone"},domProps:{value:t.details.phone},on:{input:function(e){e.target.composing||t.$set(t.details,"phone",e.target.value)}}}),t._v(" "),a("span",[t._v(t._s(t.errors.first("phone")))])]),t._v(" "),a("div",{staticClass:"form-group mt-20"},[a("button",{staticClass:"btn btn-rss btn-round btn-block",attrs:{type:"button","data-dismiss":"modal"},on:{click:t.createAdmin}},[t._v("Create")])])])],1),t._v(" "),t._m(12)])])])])])])],1)},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"card-title"},[e("button",{staticClass:"btn btn-bold btn-pure btn-twitter btn-shadow",attrs:{type:"button","data-toggle":"modal","data-target":"#modal-admin"}},[this._v("Create Admin")])])},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("thead",[a("tr",[a("th",[t._v("ID")]),t._v(" "),a("th",[t._v("Full Name")]),t._v(" "),a("th",[t._v("Phone")]),t._v(" "),a("th",[t._v("Status")]),t._v(" "),a("th",[t._v("Actions")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[e("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("thead",[e("tr",[e("th",[this._v("Field")]),this._v(" "),e("th",[this._v("Value")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-footer"},[e("button",{staticClass:"btn btn-bold btn-pure btn-secondary",attrs:{type:"button","data-dismiss":"modal"}},[this._v("Close")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[e("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])},function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"card-title flex j-c-between"},[a("h4",[t._v("TASKS")]),t._v(" "),a("div",{staticClass:"dropdown"},[a("a",{staticClass:"btn-dot-link",attrs:{href:"","data-toggle":"dropdown"}},[a("span"),t._v(" "),a("span"),t._v(" "),a("span")]),t._v(" "),a("div",{staticClass:"dropdown-menu dropdown-menu-right fs-12"},[a("a",{staticClass:"dropdown-item fs-12",attrs:{href:""}},[a("i",{staticClass:"fa fa-plus w-20"}),t._v(" Add New\n                          ")]),t._v(" "),a("a",{staticClass:"dropdown-item fs-12",attrs:{href:""}},[a("i",{staticClass:"fas fa-redo-alt w-20"}),t._v(" Refresh\n                          ")])])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-footer"},[e("button",{staticClass:"btn btn-bold btn-pure btn-secondary",attrs:{type:"button","data-dismiss":"modal"}},[this._v("Close")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-header"},[e("h4",{staticClass:"modal-title"},[this._v("Enter Admin Details")]),this._v(" "),e("button",{staticClass:"close",attrs:{type:"button","data-dismiss":"modal"}},[e("span",{attrs:{"aria-hidden":"true"}},[this._v("×")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-full-name"}},[e("strong",[this._v("Full Name")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-mail"}},[e("strong",[this._v("E-Mail")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{attrs:{for:"form-phone"}},[e("strong",[this._v("Phone")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"modal-footer"},[e("button",{staticClass:"btn btn-bold btn-pure btn-secondary",attrs:{type:"button","data-dismiss":"modal"}},[this._v("Close")])])}]}},"aU/M":function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={name:"PageHeader",props:{pageTitle:{required:!0,type:String}}}},"eBU+":function(t,e){t.exports={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"main-header"},[e("div",{staticClass:"header-info"},[e("h1",{staticClass:"title"},[this._v(this._s(this.pageTitle))])])])},staticRenderFns:[]}},epSx:function(t,e,a){var s=a("stQ9");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("1cabf755",s,!0,{})},ipFK:function(t,e,a){var s=a("VU/8")(a("uEv6"),a("406J"),!1,function(t){a("rRWP")},"data-v-e643c6f0",null);t.exports=s.exports},"j/An":function(t,e,a){var s=a("VU/8")(a("JBTV"),a("aDHo"),!1,function(t){a("E42G")},"data-v-bd7331f2",null);t.exports=s.exports},kkjE:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("KvdN"),i=a("9SFg"),r=a.n(i);e.default={name:"ManageTestimonials",data:function(){return{testimonials:[],testimonialDetails:{},sectionLoading:!1,details:{},fileUploadName:"Upload user's passport"}},components:{PreLoader:r.a},created:function(){var t=this;axios.get(s.f).then(function(e){var a=e.data.testimonials;t.testimonials=a,t.$nextTick(function(){$(function(){$("#testimonialTable").DataTable({responsive:!0,language:{searchPlaceholder:"Search...",sSearch:""}})})})})},mounted:function(){this.$emit("page-loaded")},methods:{attachFile:function(){this.fileUploadName=this.$refs.img.files[0].name,this.details.user_img=this.$refs.img.files[0]},createTestimonial:function(){var t=this;this.$validator.validateAll().then(function(e){if(e){BlockToast.fire({text:"Creating testimonial..."});var a=new FormData;_.forEach(t.details,function(t,e){a.append(e,t)}),axios.post(s.c,a,{headers:{"Content-Type":"multipart/form-data"}}).then(function(e){var a=e.status,s=e.data.rsp;console.log(s),void 0!==a&&201==a&&(t.details={},t.testimonials.unshift(s),Toast.fire({title:"Created",text:"Testimonial created",type:"success",position:"center"}))}).catch(function(t){500==t.response.status&&swal.fire({title:"Error",text:"Something went wrong on server. Creation not successful.",type:"error"})})}else Toast.fire({title:"Invalid data! Try again",position:"center",type:"error"})})},deleteTestimonial:function(t){var e=this;axios.delete(Object(s.d)(t.id)).then(function(a){if(204==a.status){var s=e.testimonials.indexOf(t);-1!=s&&e.testimonials.splice(s,1),Toast.fire({title:"Deleted!",text:"testimonial was successfully deleted",position:"center"})}else Toast.fire({title:"Failed!",text:"We were unable to delete the testimonial",position:"center",type:"error"})})}}}},mKhN:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var a=arguments[e];for(var s in a)Object.prototype.hasOwnProperty.call(a,s)&&(t[s]=a[s])}return t};e.default={name:"AdminAuth",mounted:function(){this.$emit("page-loaded")},data:function(){return{details:{}}},methods:{loginAdmin:function(){var t=this;this.$validator.validateAll().then(function(e){e?(BlockToast.fire({text:"Accessing your dashboard..."}),axios.post("/tope-amju/login",s({},t.details)).then(function(t){void 0!==t&&202==t.status?(swal.close(),sessionStorage.clear(),location.reload()):void 0!==t&&205==t.status&&swal.fire({title:"Suspended Account",text:t.data.msg,type:"warning"}).then(function(){location.reload()})}).catch(function(e){416==e.response.status&&swal.fire({title:"Unverified",text:"This seems to be your first login. You need to supply a password",type:"info"}).then(function(){swal.fire({title:"Enter a password",input:"text",inputAttributes:{autocapitalize:"off"},showCancelButton:!0,confirmButtonText:"Set Password",showLoaderOnConfirm:!0,preConfirm:function(e){return axios.post("first-time",{pw:e,email:t.details.email}).then(function(t){if(204!==t.status)throw new Error(t.statusText);return{rsp:!0}}).catch(function(t){swal.showValidationMessage("Request failed: "+t)})},allowOutsideClick:function(){return!swal.isLoading()}}).then(function(t){t.value&&swal.fire({title:"Success",text:"Password set successfully!",type:"success"}).then(function(){location.reload()})})})})):Toast.fire({title:"Invalid data! Try again",position:"center",type:"error"})})}}}},mSZS:function(t,e,a){var s={"./EmptyComponent":"KCER","./EmptyComponent.vue":"KCER","./accounts/ManageAccounts":"ipFK","./accounts/ManageAccounts.vue":"ipFK","./admins/ManageAdmins":"j/An","./admins/ManageAdmins.vue":"j/An","./auth/Login":"UfQ3","./auth/Login.vue":"UfQ3","./auth/Register":"wtB4","./auth/Register.vue":"wtB4","./dashboard/AdminDashboard":"wEYt","./dashboard/AdminDashboard.vue":"wEYt","./dashboard/ManageMessages":"BlDv","./dashboard/ManageMessages.vue":"BlDv","./misc/PageLoader":"9SFg","./misc/PageLoader.vue":"9SFg","./partials/FooterComponent":"GhsU","./partials/FooterComponent.vue":"GhsU","./partials/HeaderComponent":"7wrt","./partials/HeaderComponent.vue":"7wrt","./partials/NavComponent":"/fP6","./partials/NavComponent.vue":"/fP6","./partials/PageHeaderComponent":"WFde","./partials/PageHeaderComponent.vue":"WFde","./ui/ManageTestimonials":"ou6N","./ui/ManageTestimonials.vue":"ou6N"};function i(t){return a(r(t))}function r(t){var e=s[t];if(!(e+1))throw new Error("Cannot find module '"+t+"'.");return e}i.keys=function(){return Object.keys(s)},i.resolve=r,t.exports=i,i.id="mSZS"},ou6N:function(t,e,a){var s=a("VU/8")(a("kkjE"),a("+Dn+"),!1,function(t){a("LH8G")},"data-v-7dd3482a",null);t.exports=s.exports},qnTm:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,'.modal-right .modal-dialog[data-v-bd7331f2]{min-width:35%}.modal-right .modal-dialog .modal-body[data-v-bd7331f2]{overflow-y:auto}.section-loader[data-v-bd7331f2]{min-height:90vh;margin-left:0;position:fixed}.form-group[data-v-bd7331f2]{position:relative}.form-group span[data-v-bd7331f2]{position:absolute;bottom:7px;right:20px;color:#d33;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;transition:opacity .3s ease-in;pointer-events:none}.form-group.has-error .form-control[data-v-bd7331f2]{border-color:#f90a48;box-shadow:0 0 10px rgba(249,10,72,.2)}.form-group.has-error>span[data-v-bd7331f2]{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";opacity:1}',""])},rRWP:function(t,e,a){var s=a("JLVG");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("483fc422",s,!0,{})},stQ9:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,"",""])},tx4g:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,'.modal-right .modal-dialog[data-v-7dd3482a]{min-width:35%}.modal-right .modal-dialog .modal-body[data-v-7dd3482a]{overflow-y:auto}.section-loader[data-v-7dd3482a]{min-height:90vh;margin-left:0;position:fixed}.form-group[data-v-7dd3482a]{position:relative}.form-group span[data-v-7dd3482a]{position:absolute;bottom:7px;right:20px;color:#d33;-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;transition:opacity .3s ease-in;pointer-events:none}.form-group.has-error .form-control[data-v-7dd3482a]{border-color:#f90a48;box-shadow:0 0 10px rgba(249,10,72,.2)}.form-group.has-error>span[data-v-7dd3482a]{-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";opacity:1}.ellipsis[data-v-7dd3482a]{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}[type=file][data-v-7dd3482a]{height:0;overflow:hidden;width:0}[type=file]#file[data-v-7dd3482a]{border:none;border-radius:0;padding:0}[type=file]+label[data-v-7dd3482a]{background:#00aced;border:1px solid silver;border-radius:40px;color:#fff;cursor:pointer;display:inline-block;font-family:Poppins,sans-serif;font-size:inherit;font-weight:600;margin-bottom:16px;margin-bottom:1rem;outline:none;padding:12.8px 20px;padding:.8rem 20px;position:relative;transition:all .3s;vertical-align:middle}[type=file]+label[data-v-7dd3482a]:hover{background-color:#d3460d}[type=file]+label.btn-1[data-v-7dd3482a]{background-color:#f79159;box-shadow:0 6px #f57128;transition:none}[type=file]+label.btn-1[data-v-7dd3482a]:hover{box-shadow:0 4px #f57128;top:2px}[type=file]+label.btn-2[data-v-7dd3482a]{white-space:nowrap;text-overflow:ellipsis;background-color:#fff;background-image:url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E"),linear-gradient(180deg,#fff,#e5e5e5);color:#888;border-radius:50px;overflow:hidden;width:100%;text-align:left;padding-left:20px;font-weight:400;text-transform:capitalize}[type=file]+label.btn-2[data-v-7dd3482a]:before{color:#fff;font-size:100%;height:100%;right:130%;line-height:3.3;position:absolute;top:0;transition:all .3s}[type=file]+label.btn-2[data-v-7dd3482a]:hover{background-color:#f2f2f2;background-image:url("data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E"),linear-gradient(180deg,#e5e5e5,#fff)}[type=file]+label.btn-2[data-v-7dd3482a]:hover:before{right:75%}',""])},uEv6:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("KvdN");e.default={name:"ManageAdmins",data:function(){return{users:{},userDetails:{}}},created:function(){var t=this;axios.get(s.g).then(function(e){var a=e.data.users;t.users=a,t.$nextTick(function(){$(function(){$("#datatable1").DataTable({responsive:!0,language:{searchPlaceholder:"Search...",sSearch:""}})})})})},mounted:function(){this.$emit("page-loaded")},methods:{testIt:function(t){this.userDetails=t},slugToString:function(t){for(var e=t.split("_"),a=0;a<e.length;a++){var s=e[a];e[a]=s.charAt(0).toUpperCase()+s.slice(1)}return e.join(" ")}}}},wEYt:function(t,e,a){var s=a("VU/8")(a("0HRO"),a("QI2F"),!1,function(t){a("0rut")},"data-v-63a4837f",null);t.exports=s.exports},wtB4:function(t,e,a){var s=a("VU/8")(null,null,!1,null,null,null);t.exports=s.exports},xypk:function(t,e,a){(t.exports=a("FZ+f")(!1)).push([t.i,"",""])},y1U5:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement;return(t._self._c||e)("router-view",{on:{"page-loaded":function(e){return t.$emit("page-loaded")}}})},staticRenderFns:[]}},yb2J:function(t,e,a){var s=a("X0Sn");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("220aaae2",s,!0,{})}});