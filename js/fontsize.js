

$('#smaller').click(function(){

	change_size($('#size',smaller));
})
$('#bigger').click(function(){

	change_size($('#size',bigger));
});
function changesize(element,size){
	var current=parseInt(element.css('font-size'));

	if(size==smaller){
		
			var new_size=-2;

	}else
	if(size==bigger){
	
		var new_size=+2;
	}

	
element.css('font-size',new_size+'px');
}