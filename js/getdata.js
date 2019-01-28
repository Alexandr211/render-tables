function getdata() {
    $.ajax(
  {
  url: "../controllers/getdata.php", 
  data: {value: 'true'},
  type: "POST",   
  success: function(response){
    //parse data from the tables and put it to html
  result = $.parseJSON(response); 
         //  console.log(result.items);
         //   console.log(Object.keys(result.items).length);    
  for(i=0; i<Object.keys(result.items).length; i++) {
       $('#result_form').append('<tr><th scope="row">'+result.items[i].id+'</th>      <td>'+result.items[i].name+'</td>      <td>'+result.items[i].profession+'</td></tr>');
      }
    }
  });
}