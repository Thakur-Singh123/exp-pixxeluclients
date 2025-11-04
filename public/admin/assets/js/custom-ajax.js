//Delete record section
$(document).ready(function() {
    //Delete service record
    $('body').on('click', '.delete_service_record', function(event) {
        event.preventDefault();
        //Get data attribute
        var service_id = $(this).data('service_id');    
        //Delete through sweet alert
        Swal.fire({
            title: "Are you sure?",
            text: "Once deleted, this service record cannot be recovered!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                //Call ajax
                $.ajax({
                    type: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: base_url+'/admin/delete-service-detail',  
                    data: { 
                        service_id: service_id 
                    },
                    //Show success message
                    success: function(response) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Service deleted successfully.",
                            icon: "success"
                        }).then(() => {
                            location.reload();
                        });
                    },
                });
            }
        });
    });
});

