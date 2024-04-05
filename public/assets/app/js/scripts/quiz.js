
let old_question_count, current_delete_question, next_question, temp;
let i, question_count  = 0;

$("#add_question").click(function(){
    question_count = +$('[name="questions_count"]').val();
    let question_type = $('#question_type').val();
    question_count++;
    $('[name="questions_count"]').val(question_count);
    switch(+question_type)
    {
        case 1:
        question_html = '<div id="divquestion'+question_count+'"> <button class="btn btn-icon btn-danger btn-sm ms-auto delete_question" id="delete_button'+question_count+'" data-id="'+question_count+'" type="button" onclick="delete_question(this)"> <span class="btn-inner--icon"><i class="fa-solid fa-trash-alt"></i></span> </button> <h5 id="headerquestion'+question_count+'">Pytanie nr <span id="spanquestion'+question_count+'">'+question_count+'</span> - Pytanie Tak/Nie</h5> <input type="hidden" name="question['+question_count+'][type]" value="1"> <div class="form-group"> <input type="text" class="form-control" id="questionquestion'+question_count+'" name="question['+question_count+'][question]" placeholder="Wpisz treść pytania" required> </div> <p id="paragraphquestion'+question_count+'">Poprawna odpowiedź</p> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input1" value="yes" required> <label class="custom-control-label" for="question'+question_count+'input1">Tak</label> </div> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input2" value="no" required> <label class="custom-control-label" for="question'+question_count+'input2">Nie</label> </div> <hr> </div>';
        break;
        case 2:
        question_html = '<div id="divquestion'+question_count+'"> <button class="btn btn-icon btn-danger btn-sm ms-auto delete_question" id="delete_button'+question_count+'" data-id="'+question_count+'" type="button" onclick="delete_question(this)"> <span class="btn-inner--icon"><i class="fa-solid fa-trash-alt"></i></span> </button> <h5 id="headerquestion'+question_count+'"> Pytanie nr <span id="spanquestion'+question_count+'">'+question_count+'</span> - Jednokrotny wybór 3 odpowiedzi</h5> <input type="hidden" name="question['+question_count+'][type]" value="2"> <div class="form-group"> <input type="text" class="form-control" id="questionquestion'+question_count+'" name="question['+question_count+'][question]" placeholder="Wpisz pytanie" required> </div> <p id="paragraphquestion'+question_count+'">Poprawna odpowiedź</p> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input1" value="1" required> <label class="custom-control-label w-100" for="question'+question_count+'input1"><input type="text" class="form-control" id="question'+question_count+'input1" name="question['+question_count+'][option][1]" placeholder="Wpisz odpowiedź" required></label> </div> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input2" value="2" required> <label class="custom-control-label w-100" for="question'+question_count+'input2"><input type="text" class="form-control" id="question'+question_count+'input2" name="question['+question_count+'][option][2]" placeholder="Wpisz odpowiedź" required></label> </div> <div class="form-check"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input3" value="3" required> <label class="custom-control-label w-100" for="question'+question_count+'input3"><input type="text" class="form-control" id="question'+question_count+'input3" name="question['+question_count+'][option][3]" placeholder="Wpisz odpowiedź" required></label> </div> <hr> </div>';
        break;
        case 3:
            question_html = '<div id="divquestion'+question_count+'"> <button class="btn btn-icon btn-danger btn-sm ms-auto delete_question" id="delete_button'+question_count+'" data-id="'+question_count+'" type="button" onclick="delete_question(this)"> <span class="btn-inner--icon"><i class="fa-solid fa-trash-alt"></i></span> </button> <h5 id="headerquestion'+question_count+'"> Pytanie nr <span id="spanquestion'+question_count+'">'+question_count+'</span> - Jednokrotny wybór 4 odpowiedzi</h5> <input type="hidden" name="question['+question_count+'][type]" value="3"> <div class="form-group"> <input type="text" class="form-control" id="questionquestion'+question_count+'" name="question['+question_count+'][question]" placeholder="Wpisz pytanie" required> </div> <p id="paragraphquestion'+question_count+'">Poprawna odpowiedź</p> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input1" value="1" required> <label class="custom-control-label w-100" for="question'+question_count+'input1"><input type="text" class="form-control" id="question'+question_count+'input1" name="question['+question_count+'][option][1]" placeholder="Wpisz odpowiedź" required></label> </div> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input2" value="2" required> <label class="custom-control-label w-100" for="question'+question_count+'input2"><input type="text" class="form-control" id="question'+question_count+'input2" name="question['+question_count+'][option][2]" placeholder="Wpisz odpowiedź" required></label> </div> <div class="form-check mb-1"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input3" value="3" required> <label class="custom-control-label w-100" for="question'+question_count+'input3"><input type="text" class="form-control" id="question'+question_count+'input3" name="question['+question_count+'][option][3]" placeholder="Wpisz odpowiedź" required></label> </div> <div class="form-check"> <input class="form-check-input" type="radio" name="question['+question_count+'][correct_answer]" id="question'+question_count+'input4" value="4" required> <label class="custom-control-label w-100" for="question'+question_count+'input4"><input type="text" class="form-control" id="question'+question_count+'input4" name="question['+question_count+'][option][4]" placeholder="Wpisz odpowiedź" required></label> </div> <hr> </div>';
        break;
    }
    $('#questions_list').append(question_html);
});

function delete_question(input)
{
    if(question_count >= 1)
    {
        old_question_count = question_count;
        question_count--;
        current_delete_question = $(input).attr('data-id');
        $('#divquestion'+current_delete_question).remove();
        $('[name="questions_count"]').val(question_count);
        next_question = +current_delete_question + +1;
        for(i = next_question; i <= old_question_count; i++)
        {
            temp = +i - +1;
            let question_type = $('[name="question['+i+'][type]"]').val();
            $('#divquestion'+i).attr('id', 'divquestion'+temp);

            $('#delete_button'+i).attr('data-id', temp);
            $('#delete_button'+i).attr('id', 'delete_button'+temp);

            $('#headerquestion'+i).attr('id', 'headerquestion'+temp);
            $('#spanquestion'+i).html(temp);
            $('#spanquestion'+i).attr('id', 'spanquestion'+temp);


            $('[name="question['+i+'][type]"]').attr('name', 'question['+temp+'][type]');

            $('#questionquestion'+i).attr('id', 'questionquestion'+temp);
            $('[name="question['+i+'][question]"]').attr('name', 'question['+temp+'][question]');

            $('#paragraphquestion'+i).attr('id', 'paragraphquestion'+temp);

            $('[name="question['+i+'][correct_answer]"]').attr('name', 'question['+temp+'][correct_answer]');

            $('#question'+i+'input1').attr('id', '#question'+i+'input1');
            $('[for="question'+i+'input1"]').attr('for', 'question'+temp+'input1');

            $('#question'+i+'input2').attr('id', '#question'+i+'input2');
            $('[for="question'+i+'input2"]').attr('for', 'question'+temp+'input2');
            if(question_type == 2)
            {
                $('[name="question['+i+'][option][1]"]').attr('name', 'question['+temp+'][option][1]');
                $('[name="question['+i+'][option][2]"]').attr('name', 'question['+temp+'][option][2]');
                $('[name="question['+i+'][option][3]"]').attr('name', 'question['+temp+'][option][3]');
                $('#question'+i+'input3').attr('id', '#question'+i+'input3');
                $('[for="question'+i+'input3"]').attr('for', 'question'+temp+'input3');
            }

            if(question_type == 3)
            {
                $('[name="question['+i+'][option][1]"]').attr('name', 'question['+temp+'][option][1]');
                $('[name="question['+i+'][option][2]"]').attr('name', 'question['+temp+'][option][2]');
                $('[name="question['+i+'][option][3]"]').attr('name', 'question['+temp+'][option][3]');
                $('[name="question['+i+'][option][4]"]').attr('name', 'question['+temp+'][option][4]');
                $('#question'+i+'input4').attr('id', '#question'+i+'input4');
                $('[for="question'+i+'input4"]').attr('for', 'question'+temp+'input4');
            }
        }
    }
}
