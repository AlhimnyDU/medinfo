$(document).ready( function (){
        var i;
        var get = document.getElementById("form_logo").innerHTML;
        get = get.match(/id="logo\d+"/g).toString();
        var max = Math.max.apply(null, get.match(/\d+/g));
        for (i = 0; i < max; i++) {
          var no = i+1;
          var screenImage = $("#logoke-"+no);
          var img = new Image();
          // alert(screenImage.attr("data-default-file"));
          img.src = screenImage.attr("data-default-file");
          $("#wlogo"+no).val(img.width);
          $("#hlogo"+no).val(img.height);
        }
});