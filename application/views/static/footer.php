<script>
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    if(!filename) {
    $('.sidebar-menu .mt a').addClass('active');
    } else {
    if (filename.substr(0, 8) != 'akun_kas' ) {
    if(filename.substr(0, 9) == 'reimburse' || filename.substr(0, 9) == 'pelanggan') {
    $('.sidebar-menu a[href*="'+ filename.substr(0, 9)  +'"]').addClass('active');
    } else {
    $('.sidebar-menu a[href*="'+ filename.substr(0, 11)  +'"]').addClass('active');
    }
    } else {
    $('.sidebar-menu a[href*="'+ filename.substr(0, 8)  +'"]').addClass('active');
    }
    }
</script>
