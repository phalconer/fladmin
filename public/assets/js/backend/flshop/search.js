"use strict";define(["jquery","bootstrap","backend","table","form"],function(e,t,a,r,i){var o={index:function(){r.api.init({extend:{index_url:"flshop/search/index"+location.search,add_url:"flshop/search/add",edit_url:"flshop/search/edit",del_url:"flshop/search/del",multi_url:"flshop/search/multi",table:"flshop_search"}});var t=e("#table");t.bootstrapTable({url:e.fn.bootstrapTable.defaults.extend.index_url,pk:"id",sortName:"weigh",columns:[[{checkbox:!0},{field:"id",title:__("Id")},{field:"keywords",title:__("Keywords")},{field:"flag",title:__("Flag"),searchList:{hot:__("Flag hot"),index:__("Flag index"),recommend:__("Flag recommend")},operate:"FIND_IN_SET",formatter:r.api.formatter.label},{field:"views",title:__("Views")},{field:"created",title:__("created"),operate:"RANGE",addclass:"datetimerange",formatter:r.api.formatter.datetime},{field:"updatetime",title:__("Updatetime"),operate:"RANGE",addclass:"datetimerange",formatter:r.api.formatter.datetime},{field:"weigh",title:__("Weigh")},{field:"switch",title:__("Switch"),searchList:{1:__("Yes"),0:__("No")},formatter:r.api.formatter.toggle},{field:"status",title:__("Status"),searchList:{normal:__("Normal"),hidden:__("Hidden")},formatter:r.api.formatter.status},{field:"operate",title:__("Operate"),table:t,events:r.api.events.operate,formatter:r.api.formatter.operate}]]}),r.api.bindevent(t)},recyclebin:function(){r.api.init({extend:{dragsort_url:""}});var t=e("#table");t.bootstrapTable({url:"flshop/search/recyclebin"+location.search,pk:"id",sortName:"id",columns:[[{checkbox:!0},{field:"id",title:__("Id")},{field:"deletetime",title:__("Deletetime"),operate:"RANGE",addclass:"datetimerange",formatter:r.api.formatter.datetime},{field:"operate",width:"130px",title:__("Operate"),table:t,events:r.api.events.operate,buttons:[{name:"Restore",text:__("Restore"),classname:"btn btn-xs btn-info btn-ajax btn-restoreit",icon:"fa fa-rotate-left",url:"flshop/search/restore",refresh:!0},{name:"Destroy",text:__("Destroy"),classname:"btn btn-xs btn-danger btn-ajax btn-destroyit",icon:"fa fa-times",url:"flshop/search/destroy",refresh:!0}],formatter:r.api.formatter.operate}]]}),r.api.bindevent(t)},add:function(){o.api.bindevent()},edit:function(){o.api.bindevent()},api:{bindevent:function(){i.api.bindevent(e("form[role=form]"))}}};return o});