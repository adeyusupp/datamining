function showNotification(text) {
    var text = text;
    var placementFrom = 'top';
    var placementAlign = 'right';
    var animateEnter = 'animated lightSpeedIn';
    var animateExit = 'animated lightSpeedOut';
    var colorName = 'bg-black';
    
    if (colorName === null || colorName === '') { colorName = 'bg-black'; }
    if (text === null || text === '') { text = 'Turning standard Bootstrap alerts'; }
    if (animateEnter === null || animateEnter === '') { animateEnter = 'animated fadeInDown'; }
    if (animateExit === null || animateExit === '') { animateExit = 'animated fadeOutUp'; }
    var allowDismiss = true;

    $.notify({
        message: text
    },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: placementFrom,
                align: placementAlign
            },
            animate: {
                enter: animateEnter,
                exit: animateExit
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
}

function DeleteJurSmk(id) {
swal({
        title: "Apakah anda yakin?",
        text: "Data yang sudah dihapus tidak dapat dikembalikan!!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
       confirmButtonText: "Ya, Hapus Data!",
        cancelButtonText: "Batal",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                type:'POST',
                url:'../include/deletesmk.php',
                data:'del_id='+id,
                success: function(result){
                    if(result==1){
                        swal("Penghapusan Berhasil!", "Data anda berhasil dihapus.", "success");
                        $("#smk"+id).fadeOut().remove();
                        }else{
                        swal("EROR", "Data Gagal Dihapus", "error");
                        }
                    }
                })
        } else {
            swal("Dibatalkan", "Perintah penghapusan dibatalkan", "error");
        }
    });
}

function DeleteJurUniv(id) {
swal({
        title: "Apakah anda yakin?",
        text: "Data yang sudah dihapus tidak dapat dikembalikan!!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Hapus Data!",
        cancelButtonText: "Batal",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            $.ajax({
                type:'POST',
                url:'../include/deleteuniv.php',
                data:'del_id='+id,
                success: function(result){
                    if(result==1){
                        swal("Penghapusan Berhasil!", "Data anda berhasil dihapus.", "success");
                        $("#univ"+id).fadeOut().remove();
                        }else{
                        swal("EROR", "Data Gagal Dihapus", "error");
                        }
                    }
                })
        }else{
            swal("Dibatalkan", "Perintah penghapusan dibatalkan", "error");
        }
    });
}

function EditJurSmk(id) {
    var jurusan = $("#jur"+id).val();
    $("#editsmk").find("input[name='jursmk']").val(jurusan);
    $("#editsmk").find("input[name='id_jursmk']").val(id);
}

function UpdateJurSmk(){
    var id = $("#editsmk").find("input[name='id_jursmk']").val();
    var isi = $("#editsmk").find("input[name='jursmk']").val();

    $.ajax({
        type:'POST',
        url:'../include/updatesmk.php',
        data:'id_jurusan='+id+'&jurusan='+isi,
        success: function(result){
            if(result==1){
                document.getElementById("jursmk"+id).innerHTML = isi;
                $('#editsmk').hide();
                $('.modal-backdrop').remove();
                $('html, body').css('overflow', 'visible');   
                showNotification('Data Berhasil Diupdate'); 
            }else{
                showNotification('Data Gagal Diupdate'); 
            }
        }
    })          
}

function EditJurUniv(id) {
    var jurusan = $("#jurunv"+id).val();
    $("#edituniv").find("input[name='juruniv']").val(jurusan);
    $("#edituniv").find("input[name='id_juruniv']").val(id);
}

function UpdateJurUniv(){
    var id = $("#edituniv").find("input[name='id_juruniv']").val();
    var isi = $("#edituniv").find("input[name='juruniv']").val();

    $.ajax({
        type:'POST',
        url:'../include/updateuniv.php',
        data:'id_jurusan='+id+'&jurusan='+isi,
        success: function(result){
            if(result==1){
                document.getElementById("juruniv"+id).innerHTML = isi;
                $('#edituniv').hide();
                $('.modal-backdrop').remove();
                $('html, body').css('overflow', 'visible');  
                showNotification('Data Berhasil Diupdate'); 
            }else{
                showNotification('Data Gagal Diupdate'); 
            }
        }
    })          
}
