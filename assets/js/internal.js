$(document).ready(function($) {
	$('body').on('click','.internal .section2 .update', function() {
        $(this).parent('.details-project').addClass('show-project');
    });

    $('body').on('click','.internal .section2 .close', function() {
        $(this).parents('.details-project').removeClass('show-project');
    })

    $('body').on('click','.internal .section2 .tab-title li',function() {
        $('.internal .section2 .tab-title li').removeClass('active');
        $(this).addClass('active');
        $('.internal .section2 .tab-content').removeClass('show-content');
        $('#content-' + $(this).data('show-id')).addClass('show-content');
        if($('#content-2').hasClass('show-content')){
            $('.internal .section2 .add-lesson a').css('display','none');
        } else {
            $('.internal .section2 .add-lesson a').css('display','block')
        }
    });

    setTimeout(function(){
        if($('#content-2').hasClass('show-content')){
            $('.internal .section2 .add-lesson a').css('display','none');   
        }
    },1000)

    $('body').on('click','.internal .section2 .prev-btn',function() {
        var s = parseInt($(this).parent().find('.quality').text());
        var a = s - 1;
        $(this).parent('td').find('.quality').html(a)
    });

    $('body').on('click','.internal .section2 .next-btn',function() {
        var s = parseInt($(this).parent().find('.quality').text());
        var a = s + 1;
        $(this).parent('td').find('.quality').html(a)
    });
    $('body').on('click','.internal .section2 .add',function(){
        $('#addmodal').modal('show');
        // $('body').css('overflow','hidden');
        // $('body').css('height','100vh');
        $('html').css('overflow','hidden');
    })

    $('body').on('click','.internal .section2 .delete.user', function(){
        $('#deletemodal').modal('show');
        $('#deletemodal .postid').val($(this).data('delete-id'));
        // $('body').css('overflow','hidden');
        // $('body').css('height','100vh');
        $('html').css('overflow','hidden');
    })

    $('body').on('click','.internal .section2 .delete.admin', function(){
        $('#deletemodal').modal('show');
        $('#deletemodal .postid').val($(this).data('delete-id'));
        // $('body').css('overflow','hidden');
        // $('body').css('height','100vh');
        $('html').css('overflow','hidden');
    })

    $('body').on('click','#addmodal .modal-content .btn-login', function() {
        $('#addmodal').modal('hide');
        // $('body').css('overflow','unset');
        // $('body').css('height','unset');
        $('html').css('overflow','unset');
    });

    $('body').on('click','#editmodal .modal-content .btn-login', function() {
        $('#editmodal').modal('hide');
        // $('body').css('overflow','unset');
        // $('body').css('height','unset');
        $('html').css('overflow','unset');
    });


    $('body').on('click','#deletemodal .modal-content .btn-login', function() {
        $('#deletemodal').modal('hide');
        // $('body').css('overflow','unset');
        // $('body').css('height','unset');
        $('html').css('overflow','unset');
    });


    $('body').on('click','.delete-red',function(){
        $('#deletelesson').modal('show');
        $('#deletelesson .postid').val($(this).attr('id'));
        $('html').css('overflow','hidden');
    })

    $('body').on('click','#deletelesson .modal-content .btn-login', function() {
        $('#deletelesson').modal('hide');
        // $('body').css('overflow','unset');
        // $('body').css('height','unset');
        $('html').css('overflow','unset');
    });

    jQuery('.date').datetimepicker({
            timepicker:false,
            format:'d/m/Y',
    });
    var save_daily = true;
    $('body').on('click', '#addmodal.user .modal-content .forgot-pw', function() {
        $('html').css('overflow','unset');
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'add_daily',
                    title: $('#addmodal .task').val(),
                    date: $('#addmodal .date').val(),
                    notes: $('#addmodal .notes').val(),
                    check: $('#addmodal .percent').val(),
                    _wpnonce: $('#addmodal ._wpnonce').val()
                },
                dataType:'json',
                beforeSend: function() {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){
                    if(data && data.result==1){
                        $('#addmodal').modal('hide');
                        $('#addmodal .task').val('');
                        $('#addmodal .date').val('');
                        $('#addmodal .notes').val('');
                        $('#addmodal .percent').val('');
                        $.notify('Thêm mới task thành công!',{
                            globalPosition: 'bottom right',
                            className: 'success'
                        });
                    } else {
                        $.notify('Không được bỏ trống các field bắt buộc !',{
                            globalPosition: 'bottom right',
                            className: 'error'
                        });
                    }
                    $('.loading').hide();
                    get_daily_list(1);
                    setTimeout(function() {
                        save_daily = true;
                    }, 10000);
                }
            }); 
        }

    });

    $('body').on('click', '#todolist.user .page-nav .wp-pagenavi a', function(event) {
        event.preventDefault();
        get_daily_list($(this).text());
    });

    //Ajax Edit Daily
    $('body').on('click', '.internal .section2 .daily-to-do-list tbody td .edit.user', function(){
        $('#editmodal').modal('show');
        $('html').css('overflow','hidden');
        var taskid = $(this).data('id');
        $('#editmodal .postid').val(taskid);
        $.ajax({
            type:'get',
            url: hiteko.site_url + '/wp-admin/admin-ajax.php',
            data:{
                action:'get_edit_daily',
                post_id: taskid
            },
            dataType:'json',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(data) {
                $('.loading').hide();
                $('#editmodal .task').val(data.data.title);
                $('#editmodal .date').val(data.data.date);
                $('#editmodal .notes').val(data.data.notes);
                $('#editmodal .percent').val(data.data.check);
            }
        });
    });

    $('body').on('click' ,'#editmodal.user .modal-content .forgot-pw', function() {
        $('html').css('overflow','unset');
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'save_edit_daily',
                    post_id: $('#editmodal .postid').val(),
                    title: $('#editmodal .task').val(),
                    date: $('#editmodal .date').val(),
                    notes: $('#editmodal .notes').val(),
                    check: $('#editmodal .percent').val(),
                    _wpnonce: $('#editmodal ._wpnonce').val()
                },
                dataType:'json',
                beforeSend: function() {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){
                    //console.log(data);
                    if(data && data.result==1){
                        $('#editmodal').modal('hide');
                    } else {
                        $.notify('Không được bỏ trống các field bắt buộc !',{
                            globalPosition: 'bottom right',
                            className: 'error'
                        });
                    }
                    $('.loading').hide();
                    get_daily_list(1);
                    setTimeout(function() {
                        save_daily = true;
                    }, 10000);

                    $('#editmodal .task').val('');
                    date: $('#editmodal .date').val('');
                    notes: $('#editmodal .notes').val('');
                    check: $('#editmodal .percent').val('');

                }
            }); 
        }
    });

    $('body').on('click','#deletemodal.user .modal-content .forgot-pw', function() {
        $('html').css('overflow','unset');
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'delete_daily',
                    post_id: $('#deletemodal.user .postid').val(),
                },
                dataType:'json',
                beforeSend: function() {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){
                    console.log(data);
                    if(data && data.result==1){
                        $('#deletemodal').modal('hide');
                    } else {
                        $.notify('Lỗi không xác định. Liên hệ Admin !',{
                            globalPosition: 'bottom right',
                            className: 'error'
                        });
                    }
                    $('.loading').hide();
                    get_daily_list(1);
                    setTimeout(function() {
                        save_daily = true;
                    }, 10000);
                    $('#deletemodal .postid').val('');
                }
            }); 
        }
    });

    $('body').on('click','#hide-comment', function() {
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'delete_comment',
                    post_id: $(this).data('hide-id'),
                },
                dataType:'json',
                beforeSend: function() {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){{
                    $.notify('Xóa thành công !',{
                            globalPosition: 'bottom right',
                            className: 'success'
                        });
                    }
                    $('.loading').hide();
                    setTimeout(function() {
                        save_daily = true;
                    }, 10000);
                    window.location.reload();
                }
            }); 
        }
    });

    $('body').on('click','#submit-comment',function(){
        $.ajax({
            type:'post',
            url: hiteko.site_url + '/wp-admin/admin-ajax.php',
            data:{
                action:'send_comment',
                currentid: $('#current-user').val(),
                userid:$('#comment-user').val(),
                comment: $('#text-comment').val()
            },
            dataType:'json',
            beforeSend: function() {
                $('.loading').show();
            },
            success:function(data){
                console.log(data);
                if(data.result==1){
                    window.location.reload();    
                }
                $('.loading').hide();
            }
        }); 
    })

    //Ajax Edit Daily Admin

    $('body').on('click','#deletemodal.admin .modal-content .forgot-pw', function() {
        $('html').css('overflow','unset');
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'delete_daily_admin',
                    post_id: $('#deletemodal.admin .postid').val(),
                },
                dataType:'json',
                beforeSend: function() {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){
                    console.log(data);
                    if(data && data.result==1){
                        $('#deletemodal.admin').modal('hide');
                        $.notify('Xóa thành công !',{
                            globalPosition: 'bottom right',
                            className: 'success'
                        });
                    } else {
                        $.notify('Lỗi không xác định. Liên hệ Admin !',{
                            globalPosition: 'bottom right',
                            className: 'error'
                        });
                    }
                    $('.loading').hide();
                    get_daily_admin(1);
                    setTimeout(function() {
                        save_daily = true;
                    }, 10000);
                    $('#deletemodal.admin .postid').val('');
                }
            }); 
        }
    });

    $('body').on('click', '.internal .section2 .daily-to-do-list tbody td .edit.admin', function(){
        $('#editmodal.admin').modal('show');
        $('html').css('overflow','hidden');
        var taskid = $(this).data('id');
        $('#editmodal .postid').val(taskid);
        $.ajax({
            type:'get',
            url: hiteko.site_url + '/wp-admin/admin-ajax.php',
            data:{
                action:'get_edit_daily_admin',
                post_id: taskid
            },
            dataType:'json',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(data) {
                $('.loading').hide();
                $('#editmodal.admin .task').val(data.data.title);
                $('#editmodal.admin .date').val(data.data.date);
                $('#editmodal.admin .notes').val(data.data.notes);
                $('#editmodal.admin .percent').val(data.data.check);
            }
        });
    });

    $('body').on('click' ,'#editmodal.admin .modal-content .forgot-pw', function() {
        $('html').css('overflow','unset');
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'save_edit_daily_admin',
                    post_id: $('#editmodal.admin .postid').val(),
                    title: $('#editmodal.admin .task').val(),
                    date: $('#editmodal.admin .date').val(),
                    notes: $('#editmodal.admin .notes').val(),
                    check: $('#editmodal.admin .percent').val(),
                    _wpnonce: $('#editmodal.admin ._wpnonce').val()
                },
                dataType:'json',
                beforeSend: function() {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){
                    //console.log(data);
                    if(data && data.result==1){
                        $('#editmodal.admin').modal('hide');
                    } else {
                        $.notify('Không được bỏ trống các field bắt buộc !',{
                            globalPosition: 'bottom right',
                            className: 'error'
                        });
                    }
                    $('.loading').hide();
                    get_daily_admin(1);
                    setTimeout(function() {
                        save_daily = true;
                    }, 10000);

                    $('#editmodal.admin .task').val('');
                    date: $('#editmodal.admin .date').val('');
                    notes: $('#editmodal.admin .notes').val('');
                    check: $('#editmodal.admin .percent').val('');

                }
            }); 
        }
    });

    $('body').on('click', '#todolistadmin .page-nav .wp-pagenavi a', function(event) {
        event.preventDefault();
        get_daily_admin($(this).text());
    });

    $('body').on('click','.internal .section2 .delete.admin', function(){
        $('#deletemodal.admin').modal('show');
        $('#deletemodal.admin .postid').val($(this).data('delete-id'));
        // $('body').css('overflow','hidden');
        // $('body').css('height','100vh');
        $('html').css('overflow','hidden');
    })
    $('body').on('click', '.filter-admin .filter-submit', function(event) {
        event.preventDefault();
        get_daily_admin(1);
    });
    $('body').on('click', '.filter .filter-submit', function(event) {
        event.preventDefault();
        get_daily_list(1);
    });

    //Ajax Delete Lesson Learn
    $('body').on('click','#deletelesson .modal-content .forgot-pw', function() {
        $('html').css('overflow','unset');
        if(save_daily == true ) {
            $.ajax({
                type:'post',
                url: hiteko.site_url + '/wp-admin/admin-ajax.php',
                data:{
                    action:'delete_lesson',
                    post_id: $('#deletelesson .postid').val(),
                },
                dataType:'json',
                beforeSend: function(data) {
                    save_daily = false;
                    $('.loading').show();
                },
                success:function(data){
                    console.log(data);
                    if(data && data.result==1){
                        $('#deletelesson').modal('hide');
                        $.notify('Xóa thành công !',{
                            globalPosition: 'bottom right',
                            className: 'success'
                        });
                    } else {
                        $.notify('Lỗi không xác định. Liên hệ Admin !',{
                            globalPosition: 'bottom right',
                            className: 'error'
                        });
                    }
                    $('.loading').hide();
                    location.reload();
                }
            }); 
        }
    });
});

function get_daily_list(page) {
    $.ajax({
        type:'get',
        url: hiteko.site_url + '/wp-admin/admin-ajax.php',
        data:{
            action:'get_daily_list',
            page: page,
            percent: $('#complete-or-not').val()
        },
        dataType:'html',
        beforeSend: function() {
            $('.loading').show();        },
        success:function(data){
            $('#todolist.user').html(data);
            $('.loading').hide();
        }
    }); 
}

function get_daily_admin(page) {
    $.ajax({
        type:'get',
        url: hiteko.site_url + '/wp-admin/admin-ajax.php',
        data:{
            action:'get_daily_admin',
            page: page,
            percent: $('#complete-or-not').val(),
            user_id: $('#filter-em').val()
        },
        dataType:'html',
        beforeSend: function() {
            $('.loading').show();
        },
        success:function(data){
            $('#todolistadmin').html(data);
            $('.loading').hide();
        }
    }); 
}