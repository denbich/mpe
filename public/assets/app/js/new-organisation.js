var requirements_count = 0;
var requirement_type_select;

var old_requirements_count;
var current_delete_requirement;
var next_requirement;
var temp;
var i = 0;

$('#add_requirement').click(function(){
    requirements_count = requirements_count + 1;
    $('#requirements_count').val(requirements_count);
    $('#header_requirements_count').text(requirements_count);
    requirement_type_select = $('#requirement_type_select').val();
    switch(requirement_type_select) //'+requirements_count+'
    {
        case("1"):
            $('#requirements').append('<div class="form-group" id="requirement'+requirements_count+'" data-id="'+requirements_count+'"> <input type="hidden" id="type_requirement'+requirements_count+'" name="type_requirement'+requirements_count+'" value="1"> <h6 class="text-center" id="header_requirement'+requirements_count+'">Zasada nr <span id="header_number_requirement'+requirements_count+'">'+requirements_count+'</span> - Tekst</h6> <div class="w-100 align-items"> <button type="button" class="btn btn-icon btn-danger text-right" id="delete_requirement'+requirements_count+'" data-id="'+requirements_count+'" onclick="delete_requirement(this)"><i class="fa-solid fa-trash-can"></i></button> </div> <label for="name_requirement'+requirements_count+'">Nazwa zasady</label> <input type="text" name="name_requirement'+requirements_count+'" id="name_requirement'+requirements_count+'"  class="form-control"> <label for="description_requirement'+requirements_count+'">Opis zasady</label> <input type="text" name="description_requirement'+requirements_count+'" id="description_requirement'+requirements_count+'"  class="form-control"> </div>');
        break;

        case("2"):
            $('#requirements').append('<div class="form-group" id="requirement'+requirements_count+'" data-id="'+requirements_count+'"> <input type="hidden" name="type_requirement'+requirements_count+'" value="2">  <h6 class="text-center" id="header_requirement'+requirements_count+'">Zasada nr <span id="header_number_requirement'+requirements_count+'">'+requirements_count+'</span> - Plik</h6> <div class="w-100 align-items"> <button type="button" class="btn btn-icon btn-danger text-right" id="delete_requirement'+requirements_count+'" data-id="'+requirements_count+'" onclick="delete_requirement(this)"><i class="fa-solid fa-trash-can"></i></button> </div> <label for="name_requirement'+requirements_count+'">Nazwa zasady</label> <input type="text" name="name_requirement'+requirements_count+'" id="name_requirement'+requirements_count+'" class="form-control"> <label for="description_requirement'+requirements_count+'">Opis zasady</label> <input type="text" name="description_requirement'+requirements_count+'" id="description_requirement'+requirements_count+'" class="form-control"> <label for="multiselect_requirement'+requirements_count+'">Akceptowalne rozszerzenia np. jpg, png, svg, pdf, docx, mp3, mp4 (max. 10)</label> <input type="text" name="multiselect_requirement'+requirements_count+'" id="multiselect_requirement'+requirements_count+'" class="form-control"> </div>');

            new Choices(document.getElementById("multiselect_requirement"+requirements_count), {
                allowHTML: true,
                delimiter: '|',
                editItems: true,
                maxItemCount: 10,
                removeItemButton: true,
                placeholder: true,
                placeholderValue: "Wpisz...",
            });
        break;

        case("3"):
            $('#requirements').append('<div class="form-group" id="requirement'+requirements_count+'" data-id="'+requirements_count+'"> <input type="hidden" name="type_requirement'+requirements_count+'" value="3"> <h6 class="text-center" id="header_requirement'+requirements_count+'">Zasada nr <span id="header_number_requirement'+requirements_count+'">'+requirements_count+'</span> - Pole jednokrotnego wyboru</h6> <div class="w-100 align-items"> <button type="button" class="btn btn-icon btn-danger text-right" id="delete_requirement'+requirements_count+'" data-id="'+requirements_count+'" onclick="delete_requirement(this)"><i class="fa-solid fa-trash-can"></i></button> </div> <label for="name_requirement'+requirements_count+'">Nazwa zasady</label> <input type="text" name="name_requirement'+requirements_count+'" id="name_requirement'+requirements_count+'" class="form-control"> <label for="description_requirement'+requirements_count+'">Opis zasady</label> <input type="text" name="description_requirement'+requirements_count+'" id="description_requirement'+requirements_count+'" class="form-control"> <label for="multiselect_requirement'+requirements_count+'">Wpisz pola (max. 8 pól)</label> <input type="text" name="multiselect_requirement'+requirements_count+'" id="multiselect_requirement'+requirements_count+'" class="form-control"> </div>');

            new Choices(document.getElementById("multiselect_requirement"+requirements_count), {
                allowHTML: true,
                delimiter: '|',
                editItems: true,
                maxItemCount: 8,
                removeItemButton: true,
                placeholder: true,
                placeholderValue: "Wpisz...",
            });
        break;

        case("4"):
            $('#requirements').append('<div class="form-group" id="requirement'+requirements_count+'" data-id="'+requirements_count+'"> <input type="hidden" name="type_requirement'+requirements_count+'" value="4"> <h6 class="text-center" id="header_requirement'+requirements_count+'">Zasada nr <span id="header_number_requirement'+requirements_count+'">'+requirements_count+'</span> - Pole wielokrotnego wyboru</h6> <div class="w-100 align-items"> <button type="button" class="btn btn-icon btn-danger text-right" id="delete_requirement'+requirements_count+'" data-id="'+requirements_count+'" onclick="delete_requirement(this)"><i class="fa-solid fa-trash-can"></i></button> </div> <label for="name_requirement'+requirements_count+'">Nazwa zasady</label> <input type="text" name="name_requirement'+requirements_count+'" id="name_requirement'+requirements_count+'" class="form-control"> <label for="description_requirement'+requirements_count+'">Opis zasady</label> <input type="text" name="description_requirement'+requirements_count+'" id="description_requirement'+requirements_count+'" class="form-control"> <label for="multiselect_requirement'+requirements_count+'">Wpisz pola (max. 8 pól)</label> <input type="text" name="multiselect_requirement'+requirements_count+'" id="multiselect_requirement'+requirements_count+'" class="form-control"> </div>');

            new Choices(document.getElementById("multiselect_requirement"+requirements_count), {
                allowHTML: true,
                delimiter: '|',
                editItems: true,
                maxItemCount: 8,
                removeItemButton: true,
                placeholder: true,
                placeholderValue: "Wpisz...",
            });
        break;
        case("5"):
            $('#requirements').append('<div class="form-group" id="requirement'+requirements_count+'" data-id="'+requirements_count+'"> <input type="hidden" name="type_requirement'+requirements_count+'" value="5"> <h6 class="text-center" id="header_requirement'+requirements_count+'">Zasada nr <span id="header_number_requirement'+requirements_count+'">'+requirements_count+'</span> - Lista rozwijana</h6> <div class="w-100 align-items"> <button type="button" class="btn btn-icon btn-danger text-right" id="delete_requirement'+requirements_count+'" data-id="'+requirements_count+'" onclick="delete_requirement(this)"><i class="fa-solid fa-trash-can"></i></button> </div> <label for="name_requirement5">Nazwa zasady</label> <input type="text" name="name_requirement'+requirements_count+'" id="name_requirement'+requirements_count+'" class="form-control"> <label for="description_requirement'+requirements_count+'">Opis zasady</label> <input type="text" name="description_requirement'+requirements_count+'" id="description_requirement'+requirements_count+'" class="form-control"> <label for="multiselect_requirement'+requirements_count+'">Wpisz pozycję (max. 8 pozycji)</label> <input type="text" name="multiselect_requirement'+requirements_count+'" id="multiselect_requirement'+requirements_count+'" class="form-control"> </div>');

            new Choices(document.getElementById("multiselect_requirement"+requirements_count), {
                allowHTML: true,
                delimiter: '|',
                editItems: true,
                maxItemCount: 8,
                removeItemButton: true,
                placeholder: true,
                placeholderValue: "Wpisz...",
            });
        break;
    }
});

function delete_requirement(input)
{
    if(requirements_count >= 1)
    {
        old_requirements_count = requirements_count;
        requirements_count -= 1;
        current_delete_requirement = $(input).attr('data-id');

        $('#requirement'+current_delete_requirement).remove();
        $('#requirements_count').val(requirements_count);
        $('#header_requirements_count').text(requirements_count);

        next_requirement = +current_delete_requirement + +1;

        for(i = next_requirement; i <= old_requirements_count; i++)
        {
            temp = +i - +1;
            $('#requirement'+i).attr('data-id', temp);
            $('#requirement'+i).attr('id', "requirement"+temp);

            $('#type_requirement'+i).attr('name', 'type_requirement'+temp);
            $('#type_requirement'+i).attr('id', "type_requirement"+temp);

            $('#header_requirement'+i).attr('id', "header_requirement"+temp);
            $('#header_number_requirement'+i).text(temp);
            $('#header_number_requirement'+i).attr('id', "header_number_requirement"+temp);

            $('#delete_requirement'+i).attr('data-id', temp);
            $('#delete_requirement'+i).attr('id', "delete_requirement"+temp);

            $('#type_requirement'+i).attr('name', 'type_requirement'+temp);

            $('#name_requirement'+i).attr('name', 'name_requirement'+temp);
            $('[for="name_requirement'+i+'"]').attr('for', 'name_requirement'+temp);
            $('#name_requirement'+i).attr('id', "name_requirement"+temp);
            $('#name_requirement'+i).attr('id', "name_requirement"+temp);

            $('#description_requirement'+i).attr('name', 'description_requirement'+temp);
            $('[for="description_requirement'+i+'"]').attr('for', 'description_requirement'+temp);
            $('#description_requirement'+i).attr('id', "description_requirement"+temp);
            $('#description_requirement'+i).attr('id', "description_requirement"+temp);

            if($('#type_requirement'+i).val() >= 2)
            {
                $('#multiselect_requirement'+i).attr('name', 'multiselect_requirement'+temp);
                $('[for="multiselect_requirement'+i+'"]').attr('for', 'multiselect_requirement'+temp);
                $('#multiselect_requirement'+i).attr('id', "multiselect_requirement"+temp);
                $('#multiselect_requirement'+i).attr('id', "multiselect_requirement"+temp);

            }
        }
    }
}
