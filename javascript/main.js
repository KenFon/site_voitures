$(document).ready(function(){
            $(".owl-carousel").owlCarousel({
               items: 1,
               nav: true,
               autoplay: true,
               loop: true,
            });
         });
document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, {});
    });

(function(){
        var menu = document.querySelector('.menu_admin');
        var as = menu.querySelectorAll('li');
        as.forEach(li => {
            li.addEventListener('click', function(e){
                if(this.classList.contains('active')){
                    return false;
                }
                menu.querySelector('li .active').classList.remove('active');
                this.firstChild.classList.add('active');
                document.querySelector('.content.active').classList.remove('active');
                var attrHref = this.querySelector('a').getAttribute('href').split("#");
                document.getElementById(attrHref[1]).classList.add('active');
            })
        });
    })();

