;(function($){
	$.fn.orso=function(opints){
		var preset={
			boxl:null,
			boxr:null,
			boxlrX:null,
			boxon:null,
			multiselect:false,
			idclass:true,
			boxlan:null,
			boxran:null,
			boxtan:null,
			boxban:null,
			boxalllan:null,
			boxallran:null,
			boxalltan:null,
			boxallban:null
		};
		var outside=$.extend(true,preset,opints);
		if(outside.idclass){
			idclass="."
		}else{
			idclass="#"
		};
		$(this).find(outside.boxlrX).on("click",function(){
			$(this).addClass(outside.boxon).siblings().removeClass(outside.boxon)
		});
		$(outside.boxl).mouseover(function(){
			$(outside.boxl).find(outside.boxlrX).on("dblclick",function(){
				$(this).appendTo(outside.boxr).siblings().removeClass(outside.boxon);
			});
		});
		$(outside.boxr).mouseover(function(){
			$(outside.boxr).find(outside.boxlrX).on("dblclick",function(){
				$(this).appendTo(outside.boxl).siblings().removeClass(outside.boxon);
			});
		});
		function left(){
			var isno=$(outside.boxr).find(outside.boxlrX).hasClass(outside.boxon);
			var find=$(outside.boxr).children(idclass+outside.boxon);
			if(isno){
				find.appendTo(outside.boxl).siblings().removeClass(outside.boxon);
			}else{
				alert("请选择一个！");
			};
		};
		function right(){
			var isno=$(outside.boxl).find(outside.boxlrX).hasClass(outside.boxon);
			var find=$(outside.boxl).children(idclass+outside.boxon);
			if(isno){
				find.appendTo(outside.boxr).siblings().removeClass(outside.boxon);
			}else{
				alert("请选择一个！");
			};
		};
		function top(){
			var isno=$(outside.boxr).find(outside.boxlrX).hasClass(outside.boxon);
			var index=$(outside.boxr).children(idclass+outside.boxon).index();
			var top=$(outside.boxr).children(outside.boxlrx).eq(index);
			if(isno){
				  if(index>0){
				  	$(outside.boxr).children(outside.boxlrx).eq(index-1).before(top);
				  }else{
				  	alert("已经是第一个了！！")
				  };
			}else{
				alert("请选择一个！");
			};
		};
		function bottom(){
			var isno=$(outside.boxr).find(outside.boxlrX).hasClass(outside.boxon);
			var len=$(outside.boxr).children(outside.boxlrX).length;
			var index=$(outside.boxr).children(idclass+outside.boxon).index();
			var top=$(outside.boxr).children(outside.boxlrx).eq(index);
			if(isno){
				 if(index+1<len){	
				  	$(outside.boxr).children(outside.boxlrx).eq(index+1).after(top);
				  }else{
				  	alert("已经是最后一个了！！")
				  };
			}else{
				alert("请选择一个！");
			};
		};
		$(outside.boxlan).on("click",function(){
			left();
		});
		$(outside.boxran).on("click",function(){
			right();
		});
		$(outside.boxtan).on("click",function(){
			top();
		});
		$(outside.boxban).on("click",function(){
			bottom();
		});
		function allleft(){
			$(outside.boxr).find(outside.boxlrX).appendTo(outside.boxl);
		};
		function allright(){
			$(outside.boxl).find(outside.boxlrX).appendTo(outside.boxr);
		};
		function alltop(){
			var isno=$(outside.boxr).find(outside.boxlrX).hasClass(outside.boxon);
			var index=$(outside.boxr).children(idclass+outside.boxon).index();
			var top=$(outside.boxr).children(outside.boxlrx).eq(index);
			if(isno){
				  if(index>0){
				  	$(outside.boxr).prepend(top);
				  }else{
				  	alert("当前已经是首个了！！")
				  };
			}else{
				alert("请选择一个！");
			}
		};
		function allbottom(){
			var isno=$(outside.boxr).find(outside.boxlrX).hasClass(outside.boxon);
			var len=$(outside.boxr).children(outside.boxlrX).length;
			var index=$(outside.boxr).children(idclass+outside.boxon).index();
			var top=$(outside.boxr).children(outside.boxlrx).eq(index);
			if(isno){
				 if(index+1<len){	
				  	$(outside.boxr).append(top);
				  }else{
				  	alert("当前已经是最后了！！")
				  };
			}else{
				alert("请选择一个！");
			};
		};
		$(outside.boxalllan).on("click",function(){
			allleft();
		});
		$(outside.boxallran).on("click",function(){
			allright();
		});
		$(outside.boxalltan).on("click",function(){
			alltop();
		});
		$(outside.boxallban).on("click",function(){
			allbottom();
		});
	};
})(jQuery);



/**调用参数**/
/**
boxl:null,//左边大盒子
boxr:null,//右边大盒子
boxlrX:null,//移动小盒子
boxon:null,//点击添加属性
multiselect:false,//是否启用多选默认是false,启用时true;
idclass:true,//添加的属性是否为class//true=class; false=id;
boxlan:null,//单个向左移动按钮
boxran:null,//单个向右移动按钮
boxtan:null,//单个向上移动按钮
boxban:null,//单个向下移动按钮
boxalllan:null,//批量向左移动按钮
boxallran:null,//批量向右移动按钮
boxalltan:null,//移动第一个按钮
boxallban:null//移动最后一个按钮
**/