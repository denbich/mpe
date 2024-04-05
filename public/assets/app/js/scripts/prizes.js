let combination_count = +$('[name="combination_count"]').val();
let old_combination_count;
let current_delete_combination;
let next_combination;
let temp;
let i = 0;

$('#add_combination').click(function () {
    combination_count += 1;
    $('[name="combination_count"]').val(combination_count);
    let combination_div = "<div id='combination"+combination_count+"' data-id='"+combination_count+"'><div id='divcombination"+combination_count+"'><div class='w-100 text-right' id='buttoncombination"+combination_count+"'> <button class='btn btn-icon btn-danger btn-sm text-right delete_combination' id='delete_button"+combination_count+"' data-id='"+combination_count+"' type='button' onclick='delete_combination(this)'> <span class='btn-inner--icon'><i class='fas fa-trash-alt'></i></span> </button></div></div>  <div class='pb-0' id='div-combination"+combination_count+"'><label for='name_combination"+combination_count+"' class='mt-1'>Kombinacja nr "+combination_count+":</label><input type='text' class='form-control' maxlength='255' data-id='"+combination_count+"' id='name_combination"+combination_count+"' name='name_combination"+combination_count+"' required><label for='quantity_combination"+combination_count+"' class='mt-1'>Ilość:</label><input type='number' name='quantity_combination"+combination_count+"' class='form-control' data-id='"+combination_count+"' id='quantity_combination"+combination_count+"'></div> <hr class='w-100 text-center ml-0' style='color: #707070'></div>";

    $('#combination_count').html(combination_count);
    $('#combinations').append(combination_div);
});

function delete_combination(input)
{
    if(combination_count >= 1)
    {
        old_combination_count = combination_count;
        combination_count -= 1;
        current_delete_combination = $(input).attr('data-id');
        $('#combination'+current_delete_combination).remove();
        $('#combination_count').html(combination_count);
        $('[name="combination_count"]').val(combination_count);
        next_combination = +current_delete_combination + +1;
        for(i = next_combination; i <= old_combination_count; i++)
        {
            temp = +i - +1;

            $('#combination'+i).attr('data-id', temp);
            $('#combination'+i).attr('id', 'combination'+temp);

            $('#divcombination'+i).attr('data-id', temp);
            $('#divcombination'+i).attr('id', 'divcombination'+temp);
            $('#div-combination'+i).attr('id', 'div-combination'+temp);

            $('#delete_button'+i).attr('data-id', temp);
            $('#delete_button'+i).attr('id', 'delete_button'+temp);

            $('[for="name_combination'+i+'"]').html('Kombinacja nr '+temp+':');
            $('[for="name_combination'+i+'"]').attr('for', 'name_combination'+temp);
            $('#name_combination'+i).attr('data-id', temp);
            $('#name_combination'+i).attr('name', 'name_combination'+temp);
            $('#name_combination'+i).attr('id', 'name_combination'+temp);

            $('[for="quantity_combination'+i+'"]').html('Ilość');
            $('[for="quantity_combination'+i+'"]').attr('for', 'quantity_combination'+temp);
            $('#quantity_combination'+i).attr('data-id', temp);
            $('#quantity_combination'+i).attr('name', 'quantity_combination'+temp);
            $('#quantity_combination'+i).attr('id', 'quantity_combination'+temp);
        }
    }
}

$(document).ready(function () {

    $('input[type="radio"][name="type"]').on('change', function(){
        if(this.value == "virtual") {
            $('#quantity-div').addClass("d-none");
            $('#combination-check').prop('disabled', true);
            $('#type-multistep-content').removeClass("d-none");
            $('#type-multistep-alert').addClass("d-none");

            $('#codeauto').prop('checked', true);
            $('#codemanualinputdiv').addClass("d-none");
            $('#codeautodiv').removeClass("d-none");
        } else if(this.value == "physical") {
            $('#quantity-div').removeClass("d-none");
            $('#combination-check').prop('disabled', false);
            $('#type-multistep-content').addClass("d-none");
            $('#type-multistep-alert').removeClass("d-none");

            $('input[type="radio"][name="codetype"]').prop('checked', false);
        }
    });

    $('input[type="radio"][name="codetype"]').on('change', function(){
        if($('input[type="radio"][name="type"]:checked').val() == 'virtual')
        {
            $('input[type="radio"][name="codetype"]:checked').val() == "manual";
            if($('input[type="radio"][name="codetype"]:checked').val() == "manual") {
                $('#codemanualinputdiv').removeClass("d-none");
                $('#codeautodiv').addClass("d-none");
            } else if($('input[type="radio"][name="codetype"]:checked').val() == "auto") {
                $('#codemanualinputdiv').addClass("d-none");
                $('#codeautodiv').removeClass("d-none");
            }
        } else if($('input[type="radio"][name="type"]:checked').val() == 'physical')
        {
            $('input[type="radio"][name="codetype"]').prop('checked', false);
        }
    });

    $('#combination-check').on('click', function(){
        isChecked = $(this).is(':checked')
        if(isChecked) {
            $('#combination-nav-item').removeClass("d-none");
            $('#quantity-div').addClass("d-none");
            $('#combination-multistep-content').removeClass("d-none");
            $('#combination-multistep-alert').addClass("d-none");
        } else {
            $('#combination-nav-item').addClass("d-none");
            $('#quantity-div').removeClass("d-none");
            $('#combination-multistep-content').addClass("d-none");
            $('#combination-multistep-alert').removeClass("d-none");
        }
    });
});

let category_dropdown = new Choices(document.getElementById("category-dropdown"), {
    searchEnabled:false,
    shouldSort: false,
    placeholder: true,
});
let sponsor_dropdown = new Choices(document.getElementById("sponsor-dropdown"), {
    searchEnabled:false,
    shouldSort: false,
    placeholder: true,
});
// let codevalues = new Choices(document.getElementById("codevalues"), {
//     allowHTML: true,
//     delimiter: ',',
//     editItems: true,
//     removeItemButton: true,
// });

$('#create-button-category').on('click', function(){
    $('#modalcategory').modal('hide');
    let title = $("input[name=category-name]");
    let content = $("input[name=category-description]");
    $.ajax({
    url: createcategory,
    type:"POST",
    data:{
        title:title.val(),
      content:content.val(),
    },
    success:function(response){
        console.log(response);
      let response_value = response.volid;
      let response_title = response.title;
      if(response) {
        Swal.fire({
            icon: 'success',
            title: categorysuc,
            showConfirmButton: false,
            timer: 3000
        })
        title.val("");
        content.val("");
        category_dropdown.setChoices( [ { value: response_value, label: response_title, selected: true }, ], 'value', 'label', false, );
      }
    },
    error: function(error) {
        if(error.status == 422)
        {
            Swal.fire({
                icon: 'error',
                title: err,
                text: gapserr,
                showConfirmButton: false,
                timer: 4000
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: err,
                text: categoryerr,
                showConfirmButton: false,
                timer: 3000
            })
            title.val("");
            content.val("");
        }
    }
   });
});

$('#create-button-sponsor').on('click', function(){
    $('#modalsponsor').modal('hide');
    let name = $("input[name=sponsor_name]").val();
    let code = $("input[name=sponsor_code]").val();
    let description = $("input[name=sponsor_description]").val();
    let address = $("input[name=sponsor_address]").val();
    let telephone = $("input[name=sponsor_telephone]").val();
    let website = $("input[name=sponsor_website]").val();
    let email = $("input[name=sponsor_email]").val();
    let facebook = $("input[name=sponsor_facebook]").val();
    let instagram = $("input[name=sponsor_instagram]").val();
    let logo = $("input[name=logo_photo]").val();
    let _token = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
    url: createsponsor,
    type:"POST",
    data:{
      name:name,
      code:code,
      description:description,
      address:address,
      telephone:telephone,
      website:website,
      email:email,
      facebook:facebook,
      instagram:instagram,
      logo: logo,
      _token: _token
    },
    success:function(response){
      console.log(response);
      if(response) {
        let response_value = response.volid;
        let response_name = response.name;
        Swal.fire({
            icon: 'success',
            title: sponsorsuc,
            showConfirmButton: false,
            timer: 3000
        })
        $("input[name=sponsor_name]").val('');
        $("input[name=sponsor_description]").val('');
        $("input[name=sponsor_address]").val('');
        $("input[name=sponsor_telephone]").val('');
        $("input[name=sponsor_website]").val('');
        $("input[name=sponsor_email]").val('');
        $("input[name=sponsor_facebook]").val('');
        $("input[name=sponsor_instagram]").val('');
        sponsor_dropdown.setChoices( [ { value: response_value, label: response_name, selected: true }, ], 'value', 'label', false, );
      }
    },
    error: function(error) {
        console.log(error);
        if(error.status == 422)
        {
            Swal.fire({
                icon: 'error',
                title: err,
                text: gapserr,
                showConfirmButton: false,
                timer: 4000
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: err,
                text: sponsorerr,
                showConfirmButton: false,
                timer: 3000
            });
        }
    }
   });
});

$('#create_prize_form').submit(function(){
    $('#create_prize_button').prop('disabled', true);
    $('#create_prize_button').prepend('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ');
});
