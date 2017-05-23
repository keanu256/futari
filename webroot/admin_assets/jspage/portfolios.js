$(document).ready(function() {
    oTable = $('#tabledata').DataTable({
        'sDom': '<bottom><"pagingCustom"ip>',
        drawCallback: function(settings) {
            var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
            pagination.toggle(this.api().page.info().pages > 1);
        },
        "createdRow": function ( row, data, index ) {
            $(row).attr('id','tr'+data[0]);
        }
    });

    $('#searchPortfolios').keyup(function(){
        oTable.search($(this).val()).draw();
    });


    $('#statusFilter').change(function() {
        oTable.column(3).search($(this).val()).draw();
    });

    $('#pageLength').change(function() {
        oTable.page.len($(this).val()).draw();
    });

    $('#btnConfirm').click(function(){
        var spin = '<i class="fa fa-spinner fa-spin"></i>';
        var loadingSpin = 'btnConfirmSpin disabled';
        $('#btnConfirm').addClass(loadingSpin);
        $('#btnConfirm').html(spin);
        var csrfToken = $('#csrfToken').val();

        $.ajax({
            url: "portfolios",
            data : {
                name: $('#nameEntity').val(),
                description: $('#destxtArea').val(),
                status: $('#statusCb').val(),
                f:'create'
            },
            // method: 'post',
            // beforeSend: function(xhr){
            //     xhr.setRequestHeader('X-CSRF-Token', csrfToken);
            // },
            success: function(result){
                var data = JSON.parse(result);
                if(data.message == 'success'){
                    object = JSON.parse(data.obj);
                    var deleteHTML = '<button style="margin-left:10px" type="button" class="btn btn-danger pull-right" onclick="deleteTuple('+"'"+object.id+"'"+','+"'"+object.name+"'"+',this)"><span class="entypo-trash"></span>&nbsp;&nbsp;Delete</button>';
                    var editHTML = '<button type="button" class="btn btn-info pull-right" onclick="selectedID('+object.id+')"><span class="fa fa-pencil"></span>&nbsp;&nbsp;Edit</button>';
                    if(object.status == 0){
                        htmlStatus = '<span class="status-metro status-active" title="Active">Active</span>';
                    }else{
                        htmlStatus = '<span class="status-metro status-disabled" title="Disabled">Disabled</span>';
                    }
                    oTable.row.add([object.id,object.name,object.description,htmlStatus,object.updated,deleteHTML + editHTML]).draw(false);
                    clearModal();
                    swal('Success!','Data has been updated','success');
                }else{
                    swal('Error!',data.message,'error');
                }
                $('#btnConfirm').removeClass(loadingSpin);
                $('#btnConfirm').html('Confirm');
            }
        });                
    });
    
    $('#btnUpdate').click(function(){
        var spin = '<i class="fa fa-spinner fa-spin"></i>';
        var loadingSpin = 'btnConfirmSpin disabled';
        $('#btnUpdate').addClass(loadingSpin);
        $('#btnUpdate').html(spin);
        var csrfToken = $('#csrfToken').val();
        var name = $('#ednameEntity').val();
        var description = $('#eddestxtArea').val();
        var status = $('#edstatusCb').val();
        var id = $('#editID').val();
        $.ajax({
            url: "portfolios",
            data : {
                id: id,
                name: name,
                description: description,
                status: status,
                f:'update'
            },
            // method: 'post',
            // beforeSend: function(xhr){
            //     xhr.setRequestHeader('X-CSRF-Token', csrfToken);
            // },
            success: function(result){
                var data = JSON.parse(result);
                if(data.message == 'success'){
                    object = JSON.parse(data.obj);
                    if(object.status == 0){
                        htmlStatus = '<span class="status-metro status-active" title="Active">Active</span>';
                    }else{
                        htmlStatus = '<span class="status-metro status-disabled" title="Disabled">Disabled</span>';
                    }                           
                    $('#tr'+id).find('td:eq(1)').html(object.name);
                    $('#tr'+id).find('td:eq(2)').html(object.description);
                    $('#tr'+id).find('td:eq(3)').html(htmlStatus);
                    $('#tr'+id).find('td:eq(4)').html(object.updated);
                    swal('Success!','Data has been updated','success');
                }else{
                    swal('Error!',data.message,'error');
                }
                $('#btnUpdate').removeClass(loadingSpin);
                $('#btnUpdate').html('Update');
            },
            error: function(result){
                swal('Error!',data.message,'error');
            }
        });                
    });
    
    // $('#tabledata tbody').on( 'click', 'tr', function () {
    //     if ($(this).hasClass('selected') ) {
    //         $(this).removeClass('selected');
    //     }
    //     else {
    //         oTable.$('tr.selected').removeClass('selected');
    //         $(this).addClass('selected');
    //     }
    // } );
});

function clearModal(){
    $('#nameEntity').val("");
    $('#destxtArea').val("");
    $('#statusCb').val(0);
}

function selectedID(id){
    $.ajax({
        url: "portfolios",
        data : {
            id: id,
            f:'info'
        },
        // method: 'post',
        // beforeSend: function(xhr){
        //     xhr.setRequestHeader('X-CSRF-Token', csrfToken);
        // },
        success: function(result){
            var data = JSON.parse(result);
            if(data.message == 'success'){
                object = JSON.parse(data.obj);
                $('#ednameEntity').val(object.name);
                $('#eddestxtArea').val(object.description);
                $('#edstatusCb').val(object.status);
                $('#editID').val(object.id);
                $('#editHeader').html('EDIT '+object.name.toUpperCase());
                $('#editModal').modal('show');
            }else{
                swal('Error!',data.message,'error');
            }
        },
        error: function(){
            swal('Error!','ID not found','error');
        }
    });           
}

function deleteTuple(id,name,e){
    swal({
        title: "Are you sure you want to delete "+ name +"?",
        text: "The data that has the same relationship will be deleted!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then(function () {     
        $.ajax({
            url: "portfolios",
            data : {
                id: id,
                f:'delete'
            },
            // method: 'post',
            // beforeSend: function(xhr){
            //     xhr.setRequestHeader('X-CSRF-Token', csrfToken);
            // },
            success: function(result){
                var data = JSON.parse(result);
                if(data.message == 'success'){
                    oTable.row(e.closest('tr')).remove().draw( false );
                    swal('Deleted!','Your file has been deleted.','success');
                }else{
                    swal('Error!',data.message,'error');
                }
            },
            error: function(){
                swal('Error!','ID not found','error');
            }
        });                        
    })
}