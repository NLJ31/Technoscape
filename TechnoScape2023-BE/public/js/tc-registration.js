$(".next-form").click(function(){
    current_form = parseInt($(this).attr('data-form'));
    if (current_form < 3){
        next = current_form + 1
    }
    console.log(current_form,next)
    // $('.form-card[data-form="' + current_form + '"]').addClass('hidden')
    // $('.form-card[data-form="' + next + '"]').removeClass('hidden')
    if($("form").valid()){
        $('.form-card[data-form="' + current_form + '"]').addClass('hidden')
        $('.form-card[data-form="' + next + '"]').removeClass('hidden')
        $(this).parents('.wrapper-section').animate({opacity: 0},
            function(){
                $(this).next().animate({opacity: 1});
            });
    }
    
})
$(".back-form").click(function(){
    current_form = parseInt($(this).attr('data-form'));
    if (current_form > 1){
        back = current_form - 1
    }
    console.log(current_form,back)
    if ($("form")){
        $('.form-card[data-form="' + current_form + '"]').addClass('hidden')
        $('.form-card[data-form="' + back + '"]').removeClass('hidden')
    }
})


// $('#drag-drop').on(
//     'dragover',
//     function(e) {
//         e.preventDefault();
//         e.stopPropagation();
//     }
// )
// $('#drag-drop').on(
    //     'dragenter',
    //     function(e) {
        //         e.preventDefault();
//         e.stopPropagation();
//     }
// )
$('#drag-drop').on(
    'drop',
    function(e){
        if(e.originalEvent.dataTransfer){
            if(e.originalEvent.dataTransfer.files.length) {
                e.preventDefault();
                e.stopPropagation();
                /*UPLOAD FILES HERE*/
                upload(e.originalEvent.dataTransfer.files);
                
            }   
        }
    }
    
    );
    $("#drag-drop").on('drop', function(ev) {
        // Dropping files
          ev.preventDefault();
          ev.stopPropagation();
          // Clear previous messages
          $(".file-name").empty();
          $('#input-wrap').addClass('hidden');
          $('.inputed-wrapper').removeClass('hidden');
          if(ev.originalEvent.dataTransfer){
              if(ev.originalEvent.dataTransfer.files.length) {
                  var droppedFiles = ev.originalEvent.dataTransfer.files;
                  for(var i = 0; i < droppedFiles.length; i++)
                  {
                      console.log(droppedFiles[i]);
                      $(".file-name").text(droppedFiles[i].name);
                      // Upload droppedFiles[i] to server
                    }
            }
        }
        }
        );

function upload(files){
    
    var input = document.getElementById('payment')
    input.files = files
}


$('#input-wrap').change(function(){
    if($('input[type=file]').val()){
        $('#input-wrap').addClass('hidden');
        var filename = $('input[type=file]').val().replace(/C:\\fakepath\\/i, '');
        console.log(filename);
        $('.file-name').html(filename);
        $('.inputed-wrapper').removeClass('hidden');
    }
})

$('.remove-file').click(function() {
    $('#input-wrap').removeClass('hidden');
    $('.inputed-wrapper').addClass('hidden');
    $('input[type=file]').val('');
});

var messages = {
    payment: {
        required: "Please input this field",
    },
};

$(document).ready(function validatee() {
    $("#form").each(function() {
        $(this).validate({
        onkeyup: false,
        onclick: false,
        onfocusout:false,
        messages:messages,
        
        rules: {
            payment : {
                required : true,
            },
        },
       
        errorPlacement: function(error, element) {
            var name = element.attr('name');
            console.log("Failed", name)
            var errorSelector = '.error-msg[for="' + name + '"]';

            // var hiddenn = '.Requirement[for="' + name + '"]';
            // console.log(hiddenn)
            // $(hiddenn).addClass('hidden')
            
            console.log(errorSelector)
            var $element = $(errorSelector);
    
            if ($element.length) { 
                $(errorSelector).html(error.html());
            } else {
                error.insertAfter(element);
            }
        },
        // success: function(label){ 
        //     var name = $(label).attr("for");
        //     console.log('Success ',name)
        // }
    
        });
    });
});
