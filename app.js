fetch('./data.json')
  .then(function (response) {
    return response.json();
  })
  .then(function (ksiazki) {
    let placeholder = document.querySelector('#data-output');
    let out = '';
    for (let ksiazka of ksiazki) {
      out += `
	         <tr>
	            <td>${ksiazka.ident}</td>
                <td>${ksiazka.tytul}</td>
	            <td>${ksiazka.liczbastron}</td>
	            <td>${ksiazka.datawydania}</td>
	         </tr>
	      `;
    }

    placeholder.innerHTML = out;
  });
