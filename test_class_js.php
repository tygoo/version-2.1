<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
canvas {
    border: 1px solid black;
}
/* Add a dark gray background color to the modal header and center text */
.modal-header, h4, .close {
    background-color: #262626;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
}

.modal-header, .modal-body {
    padding: 40px 50px;
}
</style>
</head>
<body>
<button onclick="myFunction()">Нэмэх</button>
<p>Click the button to create a CANVAS element, with drawings (a red rectangle).</p>
<p id="demo"></p>
</body>
<script>
	function myFunction(){
		alert("xpxp");
		var n = prompt("Хэдэн гүн оруулах вэ?");
        var x = prompt("X тэнхлэгийн хэмжээг оруулна уу?");
        var y = prompt("Y тэнхлэгийн хэмжээг оруулна уу?");
        for (var i = 0; i < n; i++) {
        	var canvas= document.createElement("canvas");
            var ctx= canvas.getContext("2d");
           	ctx.fillStyle = "#FF0000";
			ctx.fillRect(20, 20, 150, 100);
			document.body.appendChild(canvas);
        }
           

}
/*function init() {
        // Get the specific canvas element from the HTML document
        // document.getElementById("x-axis").value = canvas.width;
        // If the browser supports the canvas tag, get the 2d drawing context for this canvas
        var n = document.getElementById('new_n');
        for (var i = 0; i < n; i++) {
            
        
            if (canvas[i].getContext)
                ctx[i] = canvas[i].getContext('2d');
            // Check that we have a valid context to draw on/with before adding event handlers
            if (ctx[i]) {
                // React to mouse events on the canvas, and mouseup on the entire document
                canvas[i].addEventListener('mousedown', sketchpad_mouseDown(event, i), false);
                canvas[i].addEventListener('mousemove', sketchpad_mouseMove, false);
                window.addEventListener('mouseup', sketchpad_mouseUp, false);

                // React to touch events on the canvas
                canvas[i].addEventListener('touchstart', sketchpad_touchStart, false);
                canvas[i].addEventListener('touchmove', sketchpad_touchMove, false);
            }
        }
    }*/
</script>
</html>