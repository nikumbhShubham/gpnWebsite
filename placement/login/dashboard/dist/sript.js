$(document).ready(function() {
    // Initialize the DataTable
    var table = $('#mytable').DataTable({
        ajax: 'get_data.php',
        columns: [
            { data: 'srn' },
            { data: 'title' },
            { data: 'description' }
        ]
    });

    // Handle the form submit event
    $('#myform').submit(function(event) {
        event.preventDefault();

        // Get the form data
        var formData = $(this).serialize();

        // Submit the form data using AJAX
        // $.ajax({
        //     url: 'add_data.php',
        //     type: 'POST',
        //     data: formData,
        //     dataType: 'json',
        //     success: function(data) {
        //         // Add the new row to the DataTable
        //         table.row.add(data).draw();

        //         // Clear the form fields
        //         $('#name').val('');
        //         $('#email').val('');
        //         $('#phone').val('');
        //     }
        // });
    });
});
