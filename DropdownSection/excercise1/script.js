$(document).ready(function(){

    $("#stop").click(function(){
        $(".result1").css("display","block");
    });

    $("#next").click(function(){
        $(".read").css("display","none");
        $(".test").css("display","block");
    });

    $("#finish").click(function(){
        $(".result2").css("display","block");
        $(".read").css("display","none");
        $(".mcq-form").css("display","none");
    });
    var count_correct=0;
    // $("input[type='radio']").click(function(){
        $("#finish").click(function(){
        var str="";
        var q_array = ['q1','q2','q3','q4'];
        var a_array = ['true','false','false','true'];
        for(var i = 0; i< 4; i++){
            var str = "input[name='"+q_array[i]+"']:checked";
            // alert(str);
            // var radioValue = $("input[name='q1']:checked").val();
            var radioValue = $(str).val();
                if(radioValue == a_array[i]){
                    count_correct++;
                }
            }
    // alert("Your are correct"+count_correct+"time");        
        // $("#read-speed").text(String());
        $("#compr").text(count_correct*25+"%");
    });

});