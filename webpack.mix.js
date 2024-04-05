let mix = require('laravel-mix');

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/', 'public/vendor/fontawesome');
mix.copyDirectory('node_modules/intl-tel-input/build/', 'public/vendor/intltelinput');
mix.copyDirectory('node_modules/jquery/dist/', 'public/vendor/jquery');
mix.copyDirectory('node_modules/sweetalert2/dist/', 'public/vendor/sweetalert2');
// mix.copyDirectory('vendor/tinymce/tinymce', 'public/vendor/tinymce');

