 $(document).ready(function(){
            
            //searchbox hide/show
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen === false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen === true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });

            
            //pageload effects
            var $visibleDiv = $('#visible');
            var $hidden = $('#hidden');

                if($(window).width() < 500){
                    $hidden.hide();
                    $visibleDiv.hide();
                    $hidden.fadeIn('fast');
                }else{
                    $hidden.hide();
                    $visibleDiv.hide().fadeIn('fast');
                }

            //removing hidden search input in mobile view

            var $dTop = $('#d-top');
            var $mobile = $('#mobile');


            if($(window).width() < 1070){
                
                $dTop.hide();
                $mobile.show();
            }else{
                
                $mobile.hide();
                $dTop.show();
            }


            //navbar hide effect on scroll
            var scrollPosition = 0, delta = 200;

            $(window).scroll(function(){
                var scrollTop = $(this).scrollTop();
                
                if(Math.abs(scrollPosition - scrollTop) >= delta){
                    if(scrollTop > scrollPosition){
                        $('#navbar').css('opacity', 0.05);

                    }else{
                        $('#navbar').css('opacity', 1);
                    }
                    scrollPosition = scrollTop;
                 }   
            });


            //testimonials dynamic view
            
            var $execs = $('#executives');
            var $atts = $('#attorneys');
            var $des = $('#design');
            var $listItem = $('.list-group-item');

            $execs.hide();
            $atts.hide();
            $des.hide();

            $listItem.on('click', function(){
                $('article').hide();
                $($(this).data('target')).show();

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