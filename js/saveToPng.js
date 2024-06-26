jQuery(document).ready(function(){
       jQuery(".boton-carta").click(function(){
        var id = $(this).attr('value');
        //var id = "$(this).attr('id').toString()";
        //var id = "108";
        //var id = ('carta'+$(this).attr('id').toString());
        var cartaid = "carta"+id;
        //var id = "carta108";
        screenshot(cartaid);
     });
   });


   function screenshot(cartaid){
      html2canvas(
         document.getElementById(cartaid),
         {
         backgroundColor: '#fff',
         //allowTaint: true,
         //useCORS: true,
         //windowWidth: 732,
         //windowHeight: 1098,
         //width: 732,
         //height: 1098,
         //windowWidth: '293',
         //windowHeight: '439',
         scale: 1,
         }
      )
      .then(
         function(canvas){
            downloadImage(canvas.toDataURL(),cartaid+".png");
         }
      );
   }

   function downloadImage(uri, filename){
   var link = document.createElement('a');
   if(typeof link.download !== 'string'){
        window.open(uri);
   }
   else{
     link.href = uri;
     link.download = filename;
     accountForFirefox(clickLink, link);
   }
   }

   function clickLink(link){
     link.click();
   }

   function accountForFirefox(click){
     var link = arguments[1];
     document.body.appendChild(link);
     click(link);
     document.body.removeChild(link);
   }