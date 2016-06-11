$(function() {
    
    // Display the Popover
    var templatePopover = ' <div class="popover" role="tooltip">\n\
                                <div class="arrow"></div>\n\
                                <h3 class="popover-title bg-orange"></h3>\n\
                                <div style="height: 450px; width:280px ; overflow: auto;" class="mCustomScrollbar popover-content" data-mcs-theme="dark" data-mcs-axis="y"></div>\n\
                            </div>';
    
    var content         = ' <p class="text-orange"><b>Buy&Saller</b></p>\n\
                            <div class="list-group">\
                                <a href="#" class="list-group-item">\
                                    <b>Toto:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Titi:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Tata:</b> Lorem ipsum dolor lorem...\
                                </a> \
                            </div>\n\
                            <p class="text-orange"><b>Boutiquiers de Maroua</b></p>\n\
                            <div class="list-group">\
                                <a href="#" class="list-group-item">\
                                    <b>Toto:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Titi:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Tata:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Toto:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Titi:</b> Lorem ipsum dolor lorem...\
                                </a> \
                                <a href="#" class="list-group-item">\
                                    <b>Tata:</b> Lorem ipsum dolor lorem...\
                                </a> \
                            </div>'; 
    
    $('[data-toggle = popover]').popover({
        trigger: 'focus',
        template: templatePopover,
        title: 'Discussions',
        content: content,
        placement: 'right',
        html: true
    });
    
    //Custom scrollerBar
//    $(".popover-content").mCustomScrollbar({
//        axis: "y"
//    });
});