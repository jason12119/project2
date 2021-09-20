    function setBg() {
        var randomColor = Math.floor(Math.random() * 16777215).toString(16);
        $("body").css("background-color", "#" + randomColor);

    }

    $(function() {

        $('.carousel').carousel({
            interval: 2000
        })
        $("#colorChanger").on("click", setBg);

    });