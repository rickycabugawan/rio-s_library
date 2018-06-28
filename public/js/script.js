/*slick carousel*/
$(document).ready(function(){
  $('.book-carousel .card-body .row').slick({
    infinite: false,
	slidesToShow: 6,
	slidesToScroll: 6
  });
});


/*multi-level dropdown menu*/
$('.dropdown-submenu > a').on("click", function(e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
});

$('.dropdown').on("hidden.bs.dropdown", function() {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
});


/*image upload preview*/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.preview-img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$(".input-img").change(function () {
    readURL(this);
});
		