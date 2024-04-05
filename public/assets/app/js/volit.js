$(document).ready(function(){
    $("form").each(function () {
        $(this).submit(function(){
            let button = $(this).find("button:submit");
            button.prop('disabled', true);
            button.prepend('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ');
        });
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      let options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
});


