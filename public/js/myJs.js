$(document).ready(function () {
    $(".hide").click(function () {
        $(".row").hide();
    });
    $(".show").click(function () {
        $(".row").show();
    });
    // $("button").click(function () {
    //       let div = $("div");
    //       div.animate({left:'100px'}, "slow");
    //       div.animate({fontSize: '100px'}, "slow");
    //   })
    $("#search-customers").on(
        "keyup", function () {
            let value = $(this).val();
            $.ajax({
                url: "http://127.0.0.1:8000/employees/search",
                type: "GET",
                dataType: "json",
                data: {keyword: value},
                success: function (result) {
                    console.log(result);
                    let html = '';
                    $.each(result, function (index, item) {
                        html +=`
                                <tr>
                                <td>  ${item.code} </td>
                                <td> ${item.group_id} </td>
                                <td> ${item.fullName} </td>
                                <td>  ${item.sex}</td>
                                <td> ${item.phone} </td>
                                <td>
                                <a <button class="btn btn-danger delete-employee" data-id="'+item.id+'" >Delete</a>
                                </td>
                                </tr>`
                    });
                    $('#list-employees').html(html)
                }
            });
        }
    );
    $("body").on('click','.delete-employee', function () {
        if (confirm("Bạn chắc chắn muốn xóa không?"));
        let employeeId= $(this).data('id');
        $.ajax({
            url:"http://127.0.0.1:8000/employees"+employeeId + "/delete",
            type:"GET",
            dataType:"JSON",
            success: function (result) {
                $('.employee-' + employeeId.remove());
            }
        })
    })
});
