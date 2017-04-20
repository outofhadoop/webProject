var ali = new Array($("#fillblank_2_2_1"),$("#fillblank_2_2_2"),$("#fillblank_2_2_8"),$("#fillblank_2_2_4"),$("#fillblank_2_2_5"),$("#fillblank_2_2_6"),$("#fillblank_2_2_7"));
		for(var i=0;i<ali.length;i++){
			startchan(ali[i],ali);
		}
	ali[0].click(function(){window.open(href="chisi.html");});
function startchan(obj,ali){
	obj.mouseenter(function(){
			obj.css({"height":"200px","width":"200px","border-top":"transparent 0px solid","font-size":"18px"});
			for(var j=0;j<ali.length;j++){
		if(ali[j]!=obj){
			ali[j].css({"height":"100px","width":"100px","border-top":"transparent 30px solid","font-size":"12px"});
		}
	}
		});

	
}
