function Highlight(btnClass, imageSrc) {

	if (btnClass === undefined || btnClass === '' || typeof btnClass !== 'string'){
		alert('Missing valid button class.');
		return false;
	} else if (imageSrc === undefined || imageSrc === '' || typeof imageSrc !== 'string') {
		alert('Missing valid image source.');
		return false;
	}
	
	var btnClass = btnClass;
	var imageClass = imageSrc;
	var btns = document.getElementsByClassName(btnClass);
	
	if(btns.length < 1){
		alert('No buttons found with that class.');
		return false;
	}
	
	var image = new Image();
	
	image.onload = function () {
		
		document.addEventListener('mousemove', function(event) {
		
			var mouse = [event.clientX + document.body.scrollLeft,event.clientY + document.body.scrollTop];
			
			if(btns.length > 0){
			
				for (var i = 0; i < btns.length; i++) {
				
					var btn = btns[i];
					
					if(
						mouse[0] + image.width/2 > btn.offsetLeft &&
						mouse[0] < btn.offsetLeft + btn.offsetWidth + image.width/2 &&
						mouse[1] + image.height/2 > btn.offsetTop &&
						mouse[1] < btn.offsetTop + btn.offsetHeight + image.height/2
					){
					
						btn.style.backgroundImage = 'url('+image.src+')';
						btn.style.backgroundRepeat = 'no-repeat';
						btn.style.backgroundPosition = (mouse[0] - image.width/2 - btn.offsetLeft)+'px '+(mouse[1] - image.height/2 - btn.offsetTop)+'px';
					
					} else {
						btn.style.backgroundImage = null;
					}
					
				}
			
			}
		
		});
	
	};
	
	image.src = imageSrc;
	
	this.update = function () {
		btns = document.getElementsByClassName(btnClass);
	};

}