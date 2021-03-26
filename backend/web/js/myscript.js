$(document).ready(function(){	
			/*left panel*/
			$("div.left_panel p.open").toggle(function(){
				$("div.left_panel").animate({left:'205px'},500);}, function() {
				$("div.left_panel").animate({left:0},500);
			});
			
			/*right panel*/
			$("div.right_panel p.open").toggle(function(){
				$("div.right_panel").animate({right:'205px'},500);}, function() {
				$("div.right_panel").animate({right:0},500);
			});			
		});	