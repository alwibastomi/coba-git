var t=0;function telo(l){console.log($(l).attr("id"));var t=$(l).attr("data-url");$($(l).attr("data-target")+"1").hasClass("show")?$($(l).attr("data-target")+"1").removeClass("show"):$($(l).attr("data-target")+"1").addClass("show"),$.ajax({type:"POST",data:"url1="+t,url:xyz,dataType:"JSON",success:function(e){console.log(t);var a=parseInt(e.p.join().replaceAll(","," ").replaceAll("."," ").replaceAll(/(\r\n|\n|\r|↵)/gm," ").split(" ").length)+parseInt(e.h1.join().split(" ").length)+parseInt(e.h2.join().split(" ").length)+parseInt(e.h3.join().split(" ").length)+parseInt(e.h4.join().split(" ").length)+parseInt(e.h5.join().split(" ").length),s=e.title.toLowerCase().split($("#url").val().toLowerCase()).length-1,r=e.h1.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,i=e.h2.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,n=e.h3.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,o=e.h4.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,d=e.h5.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,p=e.p.join().replaceAll(","," ").replaceAll("."," ").replaceAll(/(\r\n|\n|\r|↵)/gm," ").toLowerCase().split($("#url").val().toLowerCase()).length-1,h=parseInt(r)+parseInt(i)+parseInt(n)+parseInt(o)+parseInt(d)+parseInt(p);if(s>0)var c="Ya";else c="Tidak";for(var g='<div class="card-body" style="padding: 0;"> <table id="example" class="table display responsive" style="width:100%;"> <tr><th> Judul </th><td style="white-space: normal;">'+e.title+" </td></tr> <tr><th> Jumlah kata </th><td> "+a+" kata </td></tr> <tr><th> Jumlah exact match di artikel </th><td> "+h+" ("+(h/a*100).toFixed(2)+" %) </td></tr> <tr><th> exact match keyword di judul </th><td> "+c+", "+s+" </td></tr> <tr><th> exact match keyword di heading </th><td> H1 : "+r+", H2 : "+i+", H3 : "+n+", H4 : "+o+", H5 : "+d+" </td></tr>",u=0;u<$("#url").val().split(" ").length;u++){var b=e.p.join().replaceAll(","," ").replaceAll("."," ").replaceAll(/(\r\n|\n|\r|↵)/gm," ").toLowerCase().split($("#url").val().split(" ")[u].toLowerCase()).length-1;g+=" <tr><th> Jumlah kata ("+$("#url").val().split(" ")[u]+") di artikel </th><td> "+b+" ("+(b/a*100).toFixed(2)+" %) </td></tr>"}if(g+="</table> </div> ",""!=t){for(var y=0,f=0,w='<p class="text-dark"><b>Title : '+e.title+"</b></p>",v=0,m=(u=0,e.heading.length);u<m;++u)if(e.h1.indexOf(e.heading[u])>-1)if(v=1,1!=y&&y<1)w+='<ul class="results lala"><li><b style="color:black;">H1.</b> '+e.heading[u]+"</li>",y=1,f+=1;else if(1!=y&&y>1){for(var C=0,L=f=f-y+1;C<L;++C)w+="</ul>";w+='<li><b style="color:black;">H1.</b> '+e.heading[u]+"</li>",y=1}else w+='<li><b style="color:black;">H1.</b> '+e.heading[u]+"</li>";else if(e.h2.indexOf(e.heading[u])>-1){if(1==v)if(2!=y&&y<2)w+='<ul class="results lala"><li><b style="color:black;">H2.</b> '+e.heading[u]+"</li>",y=2,f+=1;else if(2!=y&&y>2){for(C=0,L=f=f-y+1;C<L;++C)w+="</ul>";w+='<li><b style="color:black;">H2.</b> '+e.heading[u]+"</li>",y=2}else w+='<li><b style="color:black;">H2.</b> '+e.heading[u]+"</li>"}else if(e.h3.indexOf(e.heading[u])>-1){if(1==v)if(3!=y&&y<3)w+='<ul class="results lala"><li><b style="color:black;">H3.</b> '+e.heading[u]+"</li>",y=3,f+=1;else if(3!=y&&y>3){for(C=0,L=f=f-y+1;C<L;++C)w+="</ul>";w+='<li><b style="color:black;">H3.</b> '+e.heading[u]+"</li>",y=3}else w+='<li><b style="color:black;">H3.</b> '+e.heading[u]+"</li>"}else if(e.h4.indexOf(e.heading[u])>-1){if(1==v)if(4!=y&&y<4)w+='<ul class="results lala"><li><b style="color:black;">H4.</b> '+e.heading[u]+"</li>",y=4,f+=1;else if(4!=y&&y>4){for(C=0,L=f=f-y+1;C<L;++C)w+="</ul>";w+='<li><b style="color:black;">H4.</b> '+e.heading[u]+"</li>",y=4}else w+='<li><b style="color:black;">H4.</b> '+e.heading[u]+"</li>"}else if(1==v)if(5!=y&&y<5)w+='<ul class="results lala"><li><b style="color:black;">H5.</b> '+e.heading[u]+"</li>",y=5,f+=1;else if(5!=y&&y>5){for(C=0,L=f=f-y+1;C<L;++C)w+="</ul>";w+='<li><b style="color:black;">H5.</b> '+e.heading[u]+"</li>",y=5}else w+='<li><b style="color:black;">H5.</b> '+e.heading[u]+"</li>";$($(l).attr("data-target")).html(g),$($(l).attr("data-target")+"1").html(w)}}})}function heh(l,t){$("#yura"+t).css("display","none"),$("#sempel"+t).css("display","none"),$.ajax({type:"POST",data:"url1="+l,url:xyz,dataType:"JSON",success:function(l){var e=parseInt(l.p.join().replaceAll(","," ").replaceAll("."," ").replaceAll(/(\r\n|\n|\r|↵)/gm," ").split(" ").length)+parseInt(l.h1.join().split(" ").length)+parseInt(l.h2.join().split(" ").length)+parseInt(l.h3.join().split(" ").length)+parseInt(l.h4.join().split(" ").length)+parseInt(l.h5.join().split(" ").length),a=l.title.toLowerCase().split($("#url").val().toLowerCase()).length-1,s=l.h1.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,r=l.h2.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,i=l.h3.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,n=l.h4.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,o=l.h5.join().toLowerCase().split($("#url").val().toLowerCase()).length-1,d=l.p.join().replaceAll(","," ").replaceAll("."," ").replaceAll(/(\r\n|\n|\r|↵)/gm," ").toLowerCase().split($("#url").val().toLowerCase()).length-1,p=parseInt(s)+parseInt(r)+parseInt(i)+parseInt(n)+parseInt(o)+parseInt(d);if(a>0);else;$("#sempel"+t+"b").html("<td><center>"+e+"</center></td>").css("display","contents"),$("#sempel"+t+"c").html("<td><center>"+p+"</center></td>").css("display","contents"),document.getElementById("#sempel"+t).colSpan="1"}})}$(".datatable-mantab").DataTable({responsive:!0,searching:!1,info:!1,ordering:!1,pageLength:5,lengthChange:!1,language:{lengthMenu:"_MENU_ items/page"}}),$("#start").click(function(l){t=0,$("#list").html(""),l.preventDefault();for(var e=$("#url").val(),a=parseInt($("#halaman").val()),s="",r=0;r<a;r++)$.ajax({type:"POST",data:"url1="+e+"&halaman="+r,url:au,dataType:"JSON",success:function(l){for(var e=0;e<l.h3.length;e++)$("#list1").append("<li>"+l.h3[e]+"</li>");for(e=0;e<l.url.length;e++){if("www.google.comhttps"!=new URL(l.url[e]).hostname){var a=l.url[e].replaceAll("%26","&");t+=1,$("#list").append("<li>"+a+"</li>"),s+='<tr><td style="white-space: normal;">'+a+"</td><td><center>"+t+'</center></td><td colspan="2" id="sempel'+t+'">'+('<button id="yura'+t+'" value="'+a+'" style="width:100%" class="btn btn-warning pd-6 text-center" onClick="heh(this.value,'+t+')">ringkasan</button>')+'</td><td style="display: none;" id="sempel'+t+'b"></td><td style="display: none;" id="sempel'+t+'c"></td><td><button style="width: 80%;" class="btn btn-info pd-6" data-toggle="collapse" data-url="'+a+'" data-target="#collapse'+t+'" aria-expanded="true" aria-controls="collapse'+t+'" onClick="telo(this)">Detail</button></td></tr><tr></tr>',s+='<tr><td colspan="2" style="padding: 0;"><div id="collapse'+t+'" class="collapse p-2" aria-labelledby="heading'+t+'" data-parent="#accordion'+t+'">',s+="</div></td>",s+='<td colspan="3" style="padding: 0;"><div id="collapse'+t+'1" class="collapse bd-l p-2 scrollable-menu" aria-labelledby="heading'+t+'" data-parent="#accordion'+t+'">',s+="</div></td></tr>"}$("#iDo").html(s)}}})});
