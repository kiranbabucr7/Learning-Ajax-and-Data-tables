/**Javascript for main file index.php*/
/**
 * It deletes the userdata from table on click of the delete button corresponding to the purticualr row 
 * sends a GET request to an API to delete user_Data via Ajax
 */
function deleteUserOnClick(id) {
  if(confirm("Do you want to delete this user?")){
    $.ajax({
      type: 'GET',
      data: {
        id: id
      },
      url: 'delete_user.php',
      success: function (data) {
        $('#main-table').DataTable().row("#"+id).remove().draw('full-hold');
      }
    })
  }
}
function editUserOnClick(id) {
  $('#form-edit-user').trigger('reset');
  $("#form-edit-user").off().on("submit", function (e) {
    e.preventDefault();
    var new_username = $(".edit-unme").val();
    var new_number = $(".edit-nmbr").val();
    if($('#form-add-user').valid()){
      if(confirm("Are yousure do you want to Edit details this user")){
        e.preventDefault();
        $.ajax({
          type: 'POST',
          data: {
            id,
            new_username,
            new_number
          },
          url: 'edit_user.php',
          success: function () {
            $('.modal-edit').modal('hide');
            $('#' + id + ' td').eq(0).html(new_username);
            $('#' + id + ' td').eq(1).html(new_number);
          }
        })
      }
    } 
  })
}
/**
 * main script
 */
$(document).ready(function () {
  //Ajax Get request an API to fetch all users in database
  $.ajax({
    type: 'GET',
    url: 'getallusers.php',
    success: function (data) {
      if(data[0] !== null){
        $('#main-table').DataTable({
          data: data,
          rowId: 'id',
          columns : [
            {data: 'username'},
            {data: 'number'},
            {
              data:'id',
              render: function (data) {
                var row = `<button type="button" class="${data} btn btn-dark delete-button" onclick="deleteUserOnClick(${data})">Delete</button>
                           <button type="submit" class="${data} btn btn-info edit-button-main" data-toggle="modal" data-target="#modalEditForm" onclick="editUserOnClick(${data})">Edit</button>
                `
                return  row
              }
            },   
          ],
          
        });
        editUserOnClick();
      }
      else{
        $('#main-table').DataTable();
      }
    },
  });
  //Ajax POST request to add a user and to update the table
  $('#form-add-user').on('submit', function(e) {
    e.preventDefault();
    if ($('#form-add-user').valid()) {
      $.ajax({
        type: 'POST',
        data: {
          username: $("#defaultForm-username").val(),
          number: $("#defaultForm-number").val()
        },
        url: 'add_user.php',
        success: function (response) {
          $('#modalLoginForm').modal('hide');
          $('#form-add-user').trigger('reset');
          $('#main-table').dataTable().fnAddData(response);
          editUserOnClick();
        }
      });
    }
  }); 
})


