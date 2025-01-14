let position_count = +$('[name="position_count"]').val();
let old_position_count, current_delete_position, next_position, temp;
let i = 0;

$('#add_position').click(function (){
    position_count++;
    $('[name="position_count"]').val(position_count);
    let position_div = "<div class='position' data-id='"+position_count+"' id='div-position"+position_count+"'> <div class='w-100 text-right'> <button class='btn btn-icon btn-danger btn-sm text-right delete_position' id='delete_button"+position_count+"' data-id='"+position_count+"' type='button' onclick='delete_position(this)'> <span class='btn-inner--icon'><i class='fas fa-trash-alt'></i></span> </button> </div> <div class='form-group'> <label for='name_position"+position_count+"' class='mt-1'>Nazwa stanowiska "+position_count+":</label> <input type='text' class='form-control' maxlength='255' id='name_position"+position_count+"' name='name_position[]' data-id='"+position_count+"' required> </div> <div class='form-group'> <label for='content_position"+position_count+"' class='mt-1'>Opis stanowiska:</label> <textarea class='form-control mt-1' rows='2' maxlength='255' id='content_position"+position_count+"' style='resize: none;' name='content_position[]' data-id='"+position_count+"' required></textarea></div>  <div class='form-group'> <label for='day_position"+position_count+"' class='mt-1'>Dzień pracy stanowiska:</label> <input type='date' class='form-control' maxlength='255' id='day_position"+position_count+"' name='day_position[]' data-id='"+position_count+"' required> </div>  <div class='row'> <div class='col-lg-6 form-group'> <label for='start_position"+position_count+"'>Godzina rozpoczęcia pracy</label> <input type='time' name='start_position[]' id='start_position"+position_count+"' class='form-control' required> </div> <div class='col-lg-6 form-group'> <label for='end_position"+position_count+"'>Godzina zakończenia pracy</label> <input type='time' name='end_position[]' id='end_position"+position_count+"' class='form-control' required> </div> </div> <div class='form-group'> <div class='row'> <div class='col-lg-6'> <label for='points_position"+position_count+"'>Wartość punktowa:</label> <input type='number' class='form-control' id='points_position"+position_count+"' name='points_position[]' required> </div> <div class='col-lg-6'> <label for='max_position"+position_count+"'>Max. ilość wolontariuszy:</label> <input type='number' class='form-control' id='max_position"+position_count+"' name='max_position[]' required> </div> </div> </div> <hr class='w-100 text-center ml-0' style='color: #707070'> </div>";
    $('#position_count').html(position_count);
    $('#positions').append(position_div);
});

function delete_position(input)
{
    if(position_count >= 1)
    {
        old_position_count = position_count;
        position_count--;
        current_delete_position = $(input).attr('data-id');
        $('#div-position'+current_delete_position).remove();
        $('#position_count').html(position_count);
        $('[name="position_count"]').val(position_count);
        next_position = +current_delete_position + +1;
        for(i = next_position; i <= old_position_count; i++)
        {
            temp = +i - +1;
            $('#div-position'+i).attr('data-id', temp);
            $('#div-position'+i).attr('id', 'div-position'+temp);

            $('#delete_button'+i).attr('data-id', temp);
            $('#delete_button'+i).attr('id', 'delete_button'+temp);

            $('[for="name_position'+i+'"]').html('Nazwa stanowiska '+temp+':');
            $('[for="name_position'+i+'"]').attr('for', 'name_position'+temp);
            $('#name_position'+i).attr('data-id', temp);
            $('#name_position'+i).attr('id', 'name_position'+temp);

            $('[for="content_position'+i+'"]').attr('for', 'content_position'+temp);
            $('#content_position'+i).attr('data-id', temp);
            $('#content_position'+i).attr('id', 'content_position'+temp);

            $('[for="day_position'+i+'"]').attr('for', 'day_position'+temp);
            $('#day_position'+i).attr('data-id', temp);
            $('#day_position'+i).attr('id', 'day_position'+temp);

            $('[for="start_position'+i+'"]').attr('for', 'start_position'+temp);
            $('#start_position'+i).attr('id', 'start_position'+temp);

            $('[for="end_position'+i+'"]').attr('for', 'end_position'+temp);
            $('#end_position'+i).attr('id', 'end_position'+temp);

            $('[for="points_position'+i+'"]').attr('for', 'points_position'+temp);
            $('#points_position'+i).attr('data-id', temp);
            $('#points_position'+i).attr('id', 'points_position'+temp);

            $('[for="max_position'+i+'"]').attr('for', 'max_position'+temp);
            $('#max_position'+i).attr('data-id', temp);
            $('#max_position'+i).attr('id', 'max_position'+temp);
        }
    }
}
