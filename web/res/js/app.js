$(function() {
    
    // Display the Popover
    var templatePopover = ' <div class="popover" role="tooltip">\n\
                                <div class="arrow"></div>\n\
                                <h3 class="popover-title"></h3>\n\
                                <div class="popover-content"></div>\n\
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
        placement: 'bottom',
        html: true
    });
});