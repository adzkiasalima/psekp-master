<script src="js/jquery-1.7.1.min.js" type="text/javascript">
  $(document).ready(function(){
                 
      function search(){

         var judul=$("#search").val();

          if(judul!=""){
              $("#result").html("<img src='img/ajax-loader.gif'/>");
                $.ajax({
                    type:"post",
                    url:"search.php",
                    data:"judul="+judul,
                    success:function(data){
                      $("#result").html(data);
                      $("#search").val("");
                    }
                });
          }                                    
      }

      $("#button").click(function(){
          search();
      });

      $('#search').keyup(function(e) {
          if(e.keyCode == 13) {
             search();
          }
      });
  });
</script>