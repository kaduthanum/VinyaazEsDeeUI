$(function() {
    
    var cssSmall = {
        width: 100,
        height: 68,
        marginTop: 75
    };
    var cssMedium = {
        width: 150,
        height: 102,
        marginTop: 35
    };
    var cssLarge = {
        width: 250,
        height: 170,
        marginTop: 0
    };
    var aniConf = {
        queue: false,
        duration: 800
    };

    $('#carousel')
        .children().css(cssSmall)
        .eq(1).css(cssMedium)
        .next().css(cssLarge)
        .next().css(cssMedium);
        
    $('#carousel').carouFredSel({
        width: '100%',
        height: 200,
        items: 5,
        scroll: {
            items: 1,
            duration: aniConf.duration,
            onBefore: function( data ) {								
                
                //	0 [ 1 ] 2  3  4
                data.items.old.eq(1).animate(cssSmall, aniConf);
                
                //	0  1 [ 2 ] 3  4
                data.items.old.eq(2).animate(cssMedium, aniConf);
                
                // 0  1  2  [ 3 ] 4
                data.items.old.eq(3).animate(cssLarge, aniConf);
                
                //	0  1  2  3 [ 4 ]
                data.items.old.eq(4).animate(cssMedium, aniConf);
            }
        }
    });
});
