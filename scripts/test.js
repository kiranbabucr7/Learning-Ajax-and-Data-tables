var myarray=[
    {'name':'kiran', 'number':'944950722'},
    {'name':'jobin', 'number':'8943418875'},
    {'name':'alex', 'number':'7907061385'}
]

buildtabledata(myarray);

function buildtabledata(data){
    var table = document.getElementById('mytable');
    for (var i = 0; i < data.length; i++){
        var row = `
            <tr>
                <td>${data[i].name}</td>
                <td>${data[i].number}</td>
            </tr>
        `
        table.innerHTML += row;
    }
}

$(document).ready(function(){
    
    $("#button-main").click(function () {
        $.ajax({
            type: 'POST',
            data: {
                username : ""+$("#defaultForm-username").val(),
                number : ""+$("#defaultForm-number").val()
            },
            url: 'dom.php',
            success: function (data) {
            console.log(data);
            },   
            
        });
    })
  
  })