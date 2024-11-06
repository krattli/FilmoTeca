function loadTableauFilms() {
    document.getElementById("tabFilms").innerHTML = "hélas le code fonctionne pas encore";
    const xhr = new XMLHttpRequest();
    xhr.open("GET", "test.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            document.getElementById("tabFilms").innerHTML = xhr.responseText;
        } else {
            document.getElementById("tabFilms").innerHTML = "<p>Erreur lors du chargement des films.</p>";
        }
    };
    xhr.send();
}