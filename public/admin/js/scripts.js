/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function deleteRegistry(id){
    var notification='<div class="notification success png_bg"><a href="#" class="close"  title="Cerrar notificación"><img src="/assets/admin/images/icons/cross_grey_small.png"/></a><div>Se ha borrado correctamente el registro.</div></div>';
    var notificationerror='<div class="notification error png_bg"><a href="#" class="close"  title="Cerrar notificación"><img src="assets/admin/images/icons/cross_grey_small.png"/></a><div>No se ha borrado el registro.</div></div>';
    if(id!=""){
   
            $.ajax({
                    url: "http://localhost/portfolio/index.php/admin/trabajos/delete?id="+id,
                    context: document.body,
                    success: function(){
                   
                        $('#'+id).hide("slow");
                        $('#'+id).remove();
                        $('#notifications').html(notification);
                    
                },
                error: function(){
                    $('#notifications').html(notificationerror);
                }
            });
   }
}

function deleteHtml(){
    
}
