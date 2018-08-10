var table = document.getElementById('tableID');
var tbody = table.getElementsByTagName('tbody')[0];
var cells = tbody.getElementsByTagName('td');

for (var i=1, j=3, len=cells.length; i<len; i += 5, j += 5) {
	var x_i = parseInt(cells[i].innerHTML,10);
	var x_j = parseInt(cells[j].innerHTML,10);
	var y_i = cells[i-1].getElementsByTagName('span')[0].innerHTML;
	var y_j = cells[j-3].getElementsByTagName('span')[0].innerHTML;
	if ( x_i / y_i > 1 && x_i / y_i < 3) {
		cells[i].classList.add("orange");
	} else if ( x_i / y_i >= 3) {
		cells[i].classList.add("red");
	}
	if ( x_j / y_j > 1 && x_j / y_j < 3) {
		cells[j].classList.add("orange");
	} else if ( x_j / y_j >= 3) {
		cells[j].classList.add("red");
	}
}
