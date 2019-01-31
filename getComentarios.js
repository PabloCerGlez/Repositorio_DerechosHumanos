$(function(){
	_ajax("getComentarios.php", {"key": "i30kOMB2eE4C"})
	.done(function(comentarios){
	var html = '';
		for(x in comentarios.data){
			html = `
			<div class="row mt-3">
	          <div class="col-sm-12">
	            <p id="coment-tag-${comentarios.data[x].id}">De: </p>
	          </div>
	        </div>
	        <div id="coment-${comentarios.data[x].id}" class="row mr-sm-3">
	        </div>`;
	        $("#comentarios_end").before(html); 

	        html = $(`<span class="text-primary"></span>`).text(comentarios.data[x].usuario);
	        $("#coment-tag-"+comentarios.data[x].id).append(html);

	        html = `
	         Tema: `;
	        $("#coment-tag-"+comentarios.data[x].id).append(html);

	        html = $(`<span style="color: #FBD011"></span>`).text(comentarios.data[x].tema);
			$("#coment-tag-"+comentarios.data[x].id).append(html);

			$("#coment-tag-"+comentarios.data[x].id).append(" ");

			html = $(`<span></span>`).text(comentarios.data[x].fecha);
			$("#coment-tag-"+comentarios.data[x].id).append(html);

	        html = $(`<div class="col-sm-12 mx-3 p-3 bg-white text-dark rounded"></div>`).text(comentarios.data[x].comentario);
	        $("#coment-"+comentarios.data[x].id).append(html);


			for(y in comentarios.data[x].respuestas){
				html = `
				<div class="row ml-2 mt-3">
		          <div class="col-sm-12">
		            <p id="resp-tag-${comentarios.data[x].respuestas[y].id}">Respuesta de: </p>
		            </div>
		        </div>
		        <div id="resp-${comentarios.data[x].respuestas[y].id}" class="row ml-2 mr-sm-3">
		        </div>`;
		        $("#comentarios_end").before(html);

		        html = $(`<span class="text-primary"></span>`).text(comentarios.data[x].respuestas[y].usuario);
		        $(`#resp-tag-${comentarios.data[x].respuestas[y].id}`).append(html);

		        $("#resp-tag-"+comentarios.data[x].respuestas[y].id).append(" ");

		        html = $(`<span></span>`).text(comentarios.data[x].respuestas[y].fecha);
		        $(`#resp-tag-${comentarios.data[x].respuestas[y].id}`).append(html);

		        html = $(`<div class="col-sm-12 mx-3 p-3 bg-white text-dark rounded"></div>`).text(comentarios.data[x].respuestas[y].comentario);
		        $(`#resp-${comentarios.data[x].respuestas[y].id}`).append(html);

			}
			html = `
			<div class="row mt-4">
	          <div class="col-sm-12">
	            <p>Responder</p>
	          </div>
	        </div>
	        <form action="Foro.php" method="POST">
	        <div class="row">
	          <div class="col-sm-4 my-2">
	            <input name="usuario" class="form-control" placeholder="Nombre">
	          </div>
	          <div class="col-sm-5 my-2">
	            <textarea name="comentario" class="form-control" placeholder="comentario" rows="1"></textarea>
	          </div>
	          <div class="col-sm-3 my-2">
	            <button type="submit" name="option" class="btn" style="width: 100%; background: #FBD011; color: #FFF" value="${comentarios.data[x].id}">Responder</button>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-12">
	            <hr class="bg-white">
	          </div>
	        </div>
	        </form>
			`;
			$("#comentarios_end").before(html);
		}
	});
});

function _ajax(url, data){
	var ajax = $.ajax({
		"method": "GET",
		"url": url,
		"data": data
	})
	return ajax;
}