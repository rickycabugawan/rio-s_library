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


/*book CRUD functions*/
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
});

$(document).on('click','.borrow-book',function(){
    var book_id = $(this).data('book_id');
    var button = $(this);
    $.post('/borrow',{
        book_id : book_id,
    },
    function(data){  
         $('.popup-text').html(data);
         $('#popup-alert').hide().slideDown();
         setTimeout(function(){  $('#popup-alert').fadeOut(); }, 2000);
         button.closest('.book').fadeOut();
         button.addClass('disabled');
    })
});

$(document).on('click','.return-book',function(){
    var book_id = $(this).data('book_id');
    var button = $(this);
    $.post('/return',{
        book_id : book_id,
    },
    function(data){ 
        $('.popup-text').html(data);
        $('#popup-alert').hide().slideDown();
        setTimeout(function(){  $('#popup-alert').fadeOut(); }, 2000);
        button.closest('.book').fadeOut();
        
    })
});

$(document).on('click','.favorite-book',function(){
    var book_id = $(this).data('book_id');
    var button = $(this);
    $.post('/favorite',{
        book_id : book_id,
    },
    function(data){ 
        $('.popup-text').html(data);
        $('#popup-alert').hide().slideDown();
        setTimeout(function(){  $('#popup-alert').fadeOut(); }, 2000); 
        button.addClass('disabled');
    })
});

$(document).on('click','.unfavorite-book',function(){
    var book_id = $(this).data('book_id');
    var button = $(this);
    $.post('/unfavorite',{
        book_id : book_id,
    },
    function(data){  
        $('.popup-text').html(data);
        $('#popup-alert').hide().slideDown();
        setTimeout(function(){  $('#popup-alert').fadeOut(); }, 2000); 
        button.closest('.book').fadeOut(); 
    })
});

$(document).on('click','.delete-book',function(){
    var book_id = $(this).data('book_id');
    $.post('/delete',{
        book_id : book_id,
    },
    function(data){  
        $('.popup-text').html(data);
        $('#popup-alert').hide().slideDown();
        setTimeout(function(){  $('#popup-alert').fadeOut(); }, 2000); 
        window.location.href = "/";
    })
});


/*search functions*/
$(".search-options").on('change', function(){
    var val = $(".search-options").val();
    $(".search-box").attr('name',val);
})

$('.select-all-genre').click(function(e){
    
    e.preventDefault();
    $('.genre-check').prop('checked', true);    
})

$('.select-all-section').click(function(e){
    
    e.preventDefault();
    $('.section-check').prop('checked', true);    
})





		