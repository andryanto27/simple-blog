$(function(){

    $('.sidebar-menu').tree();

    if($(".i-radio").length){
        $(".i-radio").iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        });
    }

    if($(".select2").length){
        $(".select2").css("width", "100%");
        $(".select2").select2({
            allowClear: true
        });
    }

    if($(".date-picker").length){
        $('.date-picker').datepicker({
            autoclose: true,
            clearBtn: true,
            format: 'yyyy-mm-dd',
            todayBtn: true,
		    todayHighlight: true,
        });
    }

    if($("#form-submit").length){
        $("#form-submit").submit(function(e) {
            e.preventDefault();
            let form = this;
            swal({
                title: "Confirmation",
                text: "Are you sure want to submit this form ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f8b32d",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: false
            }, function() {
                $(form).unbind('submit').submit();
            });
            return false;
        });
    }


});