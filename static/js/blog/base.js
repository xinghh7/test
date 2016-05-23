// js
$(function(){
	var curIndex = $("#curIndex").val();
	$(".tb-link a").eq(curIndex-1).addClass("cur");

	$(".w_btn").click(function(e){
		$.post("/index.php/blog/setWords", {
			word: $(".w_val").val(), 
			contact: $(".w_contact").val()
		}, function(ret){
			// console.log('ret')
			if(ret.code === 0) {
				alert(ret.msg);
				location.reload();
			}
			if(ret.code === 1) {
				alert(ret.msg);
			}
		});
	});
});

var app = angular.module("myApp", []);
app.controller('myCtrl', function($scope) {
	
	
});