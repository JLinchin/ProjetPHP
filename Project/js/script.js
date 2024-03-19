document.addEventListener("DOMContentLoaded", function () {
    const scrollImages = document.querySelector(".scroll-images");
    const scrollLength = scrollImages.scrollWidth - scrollImages.clientWidth;
    const leftButton = document.querySelector(".left");
    const rightButton = document.querySelector(".right");
  
    function checkScroll() {
      const currentScroll = scrollImages.scrollLeft;
      if (currentScroll === 0) {
        leftButton.setAttribute("disabled", "true");
        rightButton.removeAttribute("disabled");
      } else if (currentScroll === scrollLength) {
        rightButton.setAttribute("disabled", "true");
        leftButton.removeAttribute("disabled");
      } else {
        leftButton.removeAttribute("disabled");
        rightButton.removeAttribute("disabled");
      }
    }
  
    scrollImages.addEventListener("scroll", checkScroll);
    window.addEventListener("resize", checkScroll);
    checkScroll();
  
    function leftScroll() {
      scrollImages.scrollBy({
        left: -200,
        behavior: "smooth"
      });
    }
  
    function rightScroll() {
      scrollImages.scrollBy({
        left: 200,
        behavior: "smooth"
      });
    }
  
    leftButton.addEventListener("click", leftScroll);
    rightButton.addEventListener("click", rightScroll);
  });


async function search()
{
  //Récupération du contenu de la zone de recherche
	valSearch = document.getElementById("zoneRecherche").value;
	display = document.getElementById("display");

    //Supression du contenu dans le champ des résultats
	while (display.hasChildNodes())
		display.removeChild(display.firstChild);

	if (valSearch != "")
	{
        //On attend le contenu retourné par le lien passé en paramètre
		response = await fetch('http://localhost/ProjetPHP/Project/Models/bd.api.inc.php?action=search&nom=' + valSearch);
        //On attend le contenu retourné sous la forme d'un fichier JSON
        data = await response.json();

        //Pour chaque élément du contenu JSON
        for (i = 0; i < data.length; i++)
        {
            //Création d'un élément pour stocker le nom de la chanson
            divTitre = document.createElement("a");
            divTitre.href = "./?action=detail&idC=" + data[i].id;
            divTitre.innerText = data[i].nom;
            display.append(divTitre);
        }
	}
}

async function supprimer(idC)
{

    console.log(idC);
    var choix = false;

    if (confirm("Voulez-vous supprimer ?"))
    {
        choix = true;
    }

    if (choix)
    {
        response = await fetch('http://localhost/ProjetPHP/Project/Models/bd.api.inc.php?action=supp&id=' + idC);

        location.replace("http://localhost/ProjetPHP/Project");
    }
}
