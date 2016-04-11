$(document).ready(function(){
   $("#send").click(function(){
      var id_blog = $("#id_blog").val();
      var comment = $("#comment").val();
      $.ajax({
         type: "POST",
         url: "http://miniblog/bootstrap.php/comm/add",
         data: {"comment": comment, "id_blog": id_blog},
         cache: false,
         success: function(response){
            ;
          }
      });
      
      return false;
                                                               
  });
});