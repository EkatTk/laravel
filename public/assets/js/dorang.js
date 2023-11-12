/*!
=========================================================
* Dorang Landing page
=========================================================

* Copyright: 2019 DevCRUD (https://devcrud.com)
* Licensed: (https://devcrud.com/licenses)
* Coded by www.devcrud.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*/

 // toggle 
$(document).ready(function(){
    
    $('.search-toggle').click(function(){
        $('.search-wrapper').toggleClass('show');
    });

    $('.modal-toggle').click(function(){
        $('.modalBox').toggleClass('show');
    })

    $('.modalBox').click(function(){
        $(this).removeClass('show');
    });

    $('.spinner').click(function(){
        $(".theme-selector").toggleClass('show');
    });
    $('.light').click(function(){
        $('body').addClass('light-theme');
        $('body').removeClass('dark-theme');
    });
    $('.dark').click(function(){
        $('body').toggleClass('dark-theme');
        $('body').removeClass('light-theme');
    });
});



// smooth scroll
$(document).ready(function(){
    $(".navbar .nav-link").on('click', function(event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function(){
                window.location.hash = hash;
            });
        } 
    });
}); 

function cardShift(currentCard, cards) {
                        var cardCount = 0;
                        index = currentCard - 2;
                        if (index < 0) {
                            index = cards.length + index;
                        }
                        while (cardCount < cards.length) {
                            $(".card").eq(index).removeClass("p1 p2 p3 p4 p5 hidden")
                            if (cardCount < 5) {
                                $(".card").eq(index).addClass("p" + (cardCount + 1));
                            } else {
                                $(".card").eq(index).addClass("hidden")
                            }
                            cardCount = cardCount + 1;
                            index = index + 1;
                            if (index > cards.length - 1) {
                                index = 0;
                            }
                        }
                    }

                    $(document).ready(function() {
                        var card = 0;
                        var cards = $(".card");
                        var ignoreClick = false;
                        cardShift(card, cards);

                        function triggerClick(card) {
                            cardShift(card, cards);
                            ignoreClick = true;
                            setTimeout(function() {
                                ignoreClick = false
                            }, 400);
                        }

                        $("#aleft").click(function() {
                            if (ignoreClick) return;
                            card = card - 1;
                            if (card < 0) {
                                card = cards.length - 1;
                            }
                            triggerClick(card);
                        });

                        $("#aright").click(function() {
                            if (ignoreClick) return;
                            card = card + 1;
                            if (card > cards.length - 1) {
                                card = 0;
                            }
                            triggerClick(card);
                        })
                    })