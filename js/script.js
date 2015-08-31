$(document).ready(function(){

	var $submit = $('.searchbox-icon');
	var $input = $('.searchbox-input');
	var $searchBox = $('.searchbox');

	//initial value of search input
	var isOpen = false;

	//listen for click on $submit
	$submit.click(function(){
		if(isOpen === false){
			$searchBox.addClass('searchbox-open');
			$input.focus();
			isOpen = true;
		}else{
			$searchBox.removeClass('searchbox-open');
			$input.focusout();
			isOpen = false;
		}
	});

	$submit.mouseup(function(){
		return false;
	});

	$searchBox.mouseup(function(){
		return false;
	});

	$(document).mouseup(function(){
		if(isOpen === true){
			$submit.css('display','block');
			$submit.click();
		}
	});

});

function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }