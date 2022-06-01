$(document).ready(function () { /*jquery baslatma */

    $("#resim_buton").click(function () {

        $('.resim')
            .transition('scale')
        ;

    }); /* jquery buton bitiş */

    /* diger jquery kodları devamı ... */
    var options = {
        $DragOrientation: 3,
        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$,
            $ChanceToShow: 2,
            $Steps: 1
        }
    };

    var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    /*jsor resim geçişleri */

}); /* jquery bitis */

/* gerekirse javascript kodları yazılabilir */

