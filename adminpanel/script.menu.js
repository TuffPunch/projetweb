const menuList = document.getElementById('menu-list');

const menus = [];

fetch('../menu/menus.php')
    .then(response => response.json())
    .then(data => {
        data.forEach(menu => {
            const menuElement = document.createElement("tr");
            menuElement.style.height = 0;
            const menuElementName = document.createElement('td');
            menuElementName.style.textAlign = "center";
            menuElementName.innerHTML = menu.name;
            menuElement.appendChild(menuElementName);
            const menuElementActionsTd = document.createElement("td");
            const menuElementActions = document.createElement("div");
            menuElementActions.style.display = 'flex';
            menuElementActions.style.justifyContent = "space-evenly";
            menuElementActions.style.width = "100%"
            const menuElementDeleteAction = document.createElement("a");
            menuElementDeleteAction.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" id="IconChangeColor" height="22" width="22"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" id="mainIconPathAttribute" fill="#000000"></path></svg>
             Supprimer`
            menuElementDeleteAction.setAttribute("href", `delete_menu.php?id=${menu.menuId}`)
            menuElementDeleteAction.style.color = "black";
            menuElementDeleteAction.style.textDecoration = "none";
            menuElementActions.appendChild(menuElementDeleteAction);

            const menuElementShowAction = document.createElement("a");
            menuElementShowAction.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" id="mainIconPathAttribute"></path> <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" id="mainIconPathAttribute"></path> </svg>
            Voir`
            menuElementShowAction.setAttribute("href", `adminpanel.menu.show.php?id=${menu.menuId}`)
            menuElementShowAction.style.color = "black";
            menuElementShowAction.style.textDecoration = "none";
            menuElementActions.appendChild(menuElementShowAction);


            menuElementActionsTd.appendChild(menuElementActions);
            menuElement.appendChild(menuElementActionsTd);
            menuList.appendChild(menuElement);
            console.log(menuList.innerHTML)
        });

    })
    .catch(error => {
        console.error('Error fetching menu data:', error);
    });






