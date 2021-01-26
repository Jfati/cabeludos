<script>
    var mdimg = 0;
    var mdimgo = 0;

    function selecionar(id) {
        $.ajax({
                url: "includes/requisi.php",
                type: 'POST',
                data: {
                    si: "curt",
                    id: id
                },
                success: function(data) {

                }
            })
            .done(function(data) {
                console.log(data);
                recarregar();
            });
    }
    function recarregar() {
        $.ajax({
                url: "includes/requisi.php",
                type: 'POST',
                data: {
                    si: "recar"
                },
                success: function(data) {

                }
            })
            .done(function(data) {
                document.getElementById('row').innerHTML = data;
            });
    }

    function mudar1(dir) {
        var children = $('#1').children();

        if (dir == 0) {
            mdimg--;
            $(children).each(function(index, item) {
                item.style.visibility = "hidden";
            });
        }

        if (dir == 1) {
            mdimg++;
            $(children).each(function(index, item) {
                item.style.visibility = "hidden";
            });
        }

        if (mdimg > children.length - 1) {
            mdimg = 0;
        } else if (mdimg < 0) {
            mdimg = children.length - 1;
        }
        console.log(mdimg);

        $(children[mdimg]).each(function(index, item) {
            item.style.visibility = "visible";
        });
    }

    function mudar2(dir) {
        var children = $('#2').children();

        if (dir == 0) {
            mdimgo--;
            $(children).each(function(index, item) {
                item.style.visibility = "hidden";
            });
        }

        if (dir == 1) {
            mdimgo++;
            $(children).each(function(index, item) {
                item.style.visibility = "hidden";
            });
        }

        if (mdimgo > children.length - 1) {
            mdimgo = 0;
        } else if (mdimgo < 0) {
            mdimgo = children.length - 1;
        }
        console.log(mdimgo);

        $(children[mdimgo]).each(function(index, item) {
            item.style.visibility = "visible";
        });
    }
</script>