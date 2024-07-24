<script>
    $(document).ready(function() {
        $('.delbtn').click(function() {
            var img_id = $(this).val();
            alert($(this).val());
        });
    });
    $(document).ready(function() {
        $(document).on('click', '.editbtn', function() {
            var img_id = $(this).val();
            //alert(img_id);
            console.log('alma');
        });
    });
    $(document).ready(function() {
        $(document).on('click', '.mobil_navbar', function() {
            var nav_a = $s(".nav_links");
            if (nav_a.style.display === "block") {
                nav_a.style.display = "none";
            } else {
                nav_a.style.display = "block"
            }
        });
    });
    $(document).ready(function() {
        $(document).on('click', '.showTypeInput', function() {
            
            var typeInput = document.querySelector(".typeInput");
            var nailType = document.querySelector(".nailType");
            if (typeInput.style.display === "table-cell") {
                typeInput.style.display = "none";
                nailType.style.display = "table-cell"
            } else {
                typeInput.style.display = "table-cell"
                nailType.style.display = "none"
            }
            
        });
    });
    $(document).ready(function() {
        $(document).on('click', '.showPriceInput', function() {
            
            var priceInput = document.querySelector(".priceInput");
            var sizePrice = document.querySelector(".sizePrice");
            if (priceInput.style.display === "block") {
                priceInput.style.display = "none";
                sizePrice.style.display = "block"
            } else {
                priceInput.style.display = "block"
                sizePrice.style.display = "none"
            }
            
        });
    });
    $(document).ready(function() {
        $(document).on('click', '.newBoxBtn', function() {
            $('#addBox').modal('show');

            $.ajax({
                type: "GET",
                url: "/addnewBox",
                success: function(response) {
                    $('#newNailType').text(response.nailType.type);
                    $('#newNailSize').val(response.nailType.size_title);
                    $('#newNailPrice').text(response.nailType.price_title);
                }
            });
        });
        $(document).on('click', '.newElementBtn', function() {
            $('#addElement').modal('show');

            $.ajax({
                type: "GET",
                url: "/addNewElement",
                success: function(response) {
                    $('#newType').val(response.nailType.id);
                    
                    $('#newNailSize').val(response.nailSize.id);
                    $('#newAmount').text(response.Price.id);
                }
            });
        });
    });
</script>
