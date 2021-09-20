    function setBg() {
        var randomColor = Math.floor(Math.random() * 16777215).toString(16);
        $("body").css("background-color", "#" + randomColor);

    }

    $(function() {

        $('.main-carousel').flickity({
            // options
            cellAlign: 'left',
            contain: true
          });

        $("#colorChanger").on("click", setBg);

    });