

let category = new Choices(document.getElementById("category-dropdown"), {
    searchEnabled:false,
    shouldSort: false,
    placeholder: true,
});

let color_category = new Choices(document.getElementById("category-color"), {
    searchEnabled:false,
    shouldSort: false,
    placeholder: true,
});

$('#new_form').submit(function(){
    $("[name='place_longitude']").val(marker.getPosition().lat());
    $("[name='place_latitude']").val(marker.getPosition().lng());
    $('#new_form_button').prop('disabled', true);
    $('#new_form_button').prepend('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ');
});

let current_color = "primary";
    let category_icon;
    $('#category-color').change(function() {
        let color = $(this).val();
        $(".icon-button").removeClass("btn-outline-"+current_color);
        $(".icon-button").addClass("btn-outline-"+color);
        $("#button-choice-"+category_icon).removeClass("btn-"+current_color);
        $("#button-choice-"+category_icon).addClass("btn-"+color);
        current_color = color;
    });

    $(".icon-button").click(function(){
    if(category_icon != null)
    {
        $("#button-choice-"+category_icon).removeClass('btn-'+current_color);
    }
    category_icon = $(this).attr('data-icon-name');
    $(this).addClass('btn-'+current_color);

    });

    $('#create-button-category').on('click', function(){
        $('#modalcategory').modal('hide');
        let title = $("input[name=category-title]");
        let content = $("input[name=category-content]");
        $.ajax({
        url: category_url,
        type:"POST",
        data:{
            title:title.val(),
            content:content.val(),
            icon:category_icon,
            color:current_color
        },
        success:function(response){
          if(response) {
            let response_value = response.volid;
            let response_title = response.title;
            Swal.fire({
                icon: 'success',
                title: 'Kategoria została utworzona pomyślnie!',
                showConfirmButton: false,
                timer: 3000
            })
            title.val("");
            content.val("");
            category.setChoices( [ { value: response_value, label: response_title, selected: true }, ], 'value', 'label', false, );
          }
        },
        error: function(error) {
            if(error.status == 422)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Błąd!',
                    text: 'Upewnij się, że wszystkie luki zostały uzupełnione!',
                    showConfirmButton: false,
                    timer: 4000
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Błąd!',
                    text: 'Wystąpił błąd podczas dodawania kategorii! Spróbuj ponownie później.',
                    showConfirmButton: false,
                    timer: 3000
                })
                name.val("");
                content.val("");
            }
        }
       });
});
