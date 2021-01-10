$(document).ready(function () {

    // let token = '{{ csrf_token() }}';

        $('button').click(function () {
            // attach ajax here
            id = Number($(this).attr('name'));
            $.ajax({
                type: 'post',
                url: 'delete.php',
                data: {id: id},
                success: function (msg) {
                    console.log(msg);
                }
                // console.log($(this).attr('name'));
            })
            // $('tr').attr('id', 'deleted');
            // $('#deleted').hide();
        })
})
